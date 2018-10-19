<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Transaction as Transac;
use App\PaymentMethod;

/** All Paypal Details class **/
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class PaymentController extends Controller
{
    function __construct()
    {
        
        /** setup PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    /**
     * Show the application paywith paypalpage.
     *
     * @return \Illuminate\Http\Response
     */
    public function payWithPaypal()
    {
        return view('paywithpaypal');
    }

    /**
     * Store a details of payment with paypal.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postPaymentWithpaypal(Request $request)
    {

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $eventID = $request->input('eventID');
    	$items = [];
    	$total=1;
    		$name = Auth::user()->niceName();
	    	$item_new = new Item();

	        $item_new->setName($name) /** item name **/
	            ->setCurrency('PHP')
	            ->setQuantity(1)
	            ->setPrice(1); /** unit price **/

	            array_push($items, $item_new);


	            $eventID = $request->input('eventID');
		


        $item_list = new ItemList();
        $item_list->setItems($items);

        $amount = new Amount();
        $amount->setCurrency('PHP')
            ->setTotal($total);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('UDM Events transaction success!');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('payment.paypal.status')) /** Specify return URL **/
            ->setCancelUrl(URL::route('payment.paypal.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
            /** dd($payment->create($this->_api_context));exit; **/
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error','Connection timeout');
                return redirect()->route('event.view')."/".$eventID->with('error_message', 'Some error occur, sorry for the inconvenience');
                /** echo "Exception: " . $ex->getMessage() . PHP_EOL; **/
                /** $err_data = json_decode($ex->getData(), true); **/
                /** exit; **/
            } else {
                \Session::put('error','Some error occur, sorry for inconvenient');
                return redirect()->route('event.view')."/".$eventID->with('error_message', 'Some error occur, sorry for the inconvenience');
                /** die('Some error occur, sorry for inconvenient'); **/
            }
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());
        Session::put('eventID', $eventID);

        if(isset($redirect_url)) {
            /** redirect to paypal **/
            return Redirect::away($redirect_url);
        }

        \Session::put('error','Unknown error occurred');
    	return redirect()->route('event.view')."/".$eventID->with('error_message', 'Item was added to your cart!');
    }

    public function getPaymentStatus()
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');
        $eventID = Session::get('eventID');
        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        Session::forget('eventID');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            \Session::put('error','Payment failed');
            return Redirect::route('event.view')."/".$eventID;
        }
        $payment = Payment::get(request()->paymentId, $this->_api_context);
        /** PaymentExecution object includes information necessary **/
        /** to execute a PayPal account payment. **/
        /** The payer_id is added to the request query parameters **/
        /** when the user is redirected from paypal back to your site **/
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));
        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);
        /** dd($result);exit; /** DEBUG RESULT, remove it later **/
        if ($result->getState() == 'approved') { 
            
            /** it's all right **/
            /** Here Write your database logic like that insert record or value in database if you want **/
            $transaction = new Transac();
            $transaction->trans_userID = Auth::user()->user_id;
            $transaction->trans_eventID = $eventID;
            $transaction->trans_paymentID = 2;
            $transaction->save();
            \Session::put('success','Payment success');
            return redirect(route('event.view')."/".$eventID)->with('success_message', 'You are already paid in this event!');
        }
        \Session::put('error','Payment failed');

		return redirect(route('event.view')."/".$eventID)->with('error_message', 'Sorry there was an error');

    }

    public function postPaymentWithCOD()
    {
        Cart::destroy();
        return redirect()->route('frontEnd.cart.index')->with('success_message', 'Item(s) will be delivered please pay when delivered, thank you for purchasing with us!');
    }
}
