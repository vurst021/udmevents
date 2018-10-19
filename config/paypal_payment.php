<?php

return array(
	# Account credentials from developer portal
	'Account' => array(

		'ClientId' => env('PAYPAL_CLIENT_ID', 'AdSb5S-BUr2OFYpl0hyar2lB-5JQ03-qe9InNwR-TZUzHWNAnr7znw_1ecwChlPxxWLZFo90G8jdKNn7'),
		'ClientSecret' => env('PAYPAL_CLIENT_SECRET', 'EOfEDF9o2m-QLUQamk8rcBqIL8_k_ICF88yGZIHDcJ8rGNOjb13DIUfGg8dq6ggXKFQgp3JI1Ov2vKcY'),

	),

	# Connection Information
	'Http' => array(
		// 'ConnectionTimeOut' => 30,
		'Retry' => 1,
		//'Proxy' => 'http://[username:password]@hostname[:port][/path]',
	),

	# Service Configuration
	'Service' => array(
		# For integrating with the live endpoint,
		# change the URL to https://api.paypal.com!

		//'EndPoint' => 'https://api.sandbox.paypal.com',

		'EndPoint' => 'https://api.paypal.com',

	),


	# Logging Information
	'Log' => array(
		'LogEnabled' => true,

		# When using a relative path, the log file is created
		# relative to the .php file that is the entry point
		# for this request. You can also provide an absolute
		# path here
		'FileName' => '../PayPal.log',

		# Logging level can be one of FINE, INFO, WARN or ERROR
		# Logging is most verbose in the 'FINE' level and
		# decreases as you proceed towards ERROR
		'LogLevel' => 'FINE',
	),
);
