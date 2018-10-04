<?php

use App\Event;
use App\Venue;
use App\EventStatus;
use App\OrgHead;
use App\User;
use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $event = new Event();
      $event->event_name = "UDM event Sample 1";
      $event->event_description = "This is an Event";
      $event->event_date_start = date("Y-m-d");
      $event->event_date_end = date("Y-m-d");
      $event->event_time_start = date("H:i:s");
      $event->event_time_end = date("H:i:s");
      $event->event_fee = 14;
      $event->save();
      $eventStatus = new EventStatus();
      $eventStatus->admin_id = 1;
      $eventStatus->event_status_status = "p";
      $event->eventEventStatus()->save($eventStatus);

    }
}
