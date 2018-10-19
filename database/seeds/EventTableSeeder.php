<?php

use Illuminate\Database\Seeder;
use App\Event;
use App\EventStatus;
use App\PaymentMethod;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $paymentMethod = new PaymentMethod();
      $paymentMethod->payment_method_name = "Walk in - Payed";
      $paymentMethod->save();

      $paymentMethod = new PaymentMethod();
      $paymentMethod->payment_method_name = "Paypal - Payed";
      $paymentMethod->save();

      $event = new Event();
      $event->event_name = "UDM event Sample 1";
      $event->event_description = "This is an Event";
      $event->event_date_start = date("Y-m-d");
      // $event->event_date_end = date("Y-m-d");
      $event->event_time_start = date("H:i:s");
      // $event->event_time_end = date("H:i:s");
      $event->event_img = "event1.jpg";
      $event->event_fee = 14;
      $event->save();
      
      $eventStatus = new EventStatus();
      $eventStatus->admin_id = 1;
      $eventStatus->event_status_status = "p";
      $event->eventStatus()->save($eventStatus);


      $event = new Event();
      $event->event_name = "UDM event Sample 2";
      $event->event_description = "This is an Event";
      $event->event_date_start = date("Y-m-d");
      // $event->event_date_end = date("Y-m-d");
      $event->event_time_start = date("H:i:s");
      // $event->event_time_end = date("H:i:s");
      $event->event_fee = 14;
      $event->event_img = "event1.jpg";
      $event->save();

      $eventStatus = new EventStatus();
      $eventStatus->admin_id = 1;
      $eventStatus->event_status_status = "a";
      $event->eventStatus()->save($eventStatus);

      $eventStatus = new EventStatus();
      $eventStatus->admin_id = 2;
      $eventStatus->event_status_status = "a";
      $event->eventStatus()->save($eventStatus);

      $eventStatus = new EventStatus();
      $eventStatus->admin_id = 3;
      $eventStatus->event_status_status = "a";
      $event->eventStatus()->save($eventStatus);

      $eventStatus = new EventStatus();
      $eventStatus->admin_id = 4;
      $eventStatus->event_status_status = "a";
      $event->eventStatus()->save($eventStatus);

      $eventStatus = new EventStatus();
      $eventStatus->admin_id = 5;
      $eventStatus->event_status_status = "a";
      $event->eventStatus()->save($eventStatus);
    }
}
