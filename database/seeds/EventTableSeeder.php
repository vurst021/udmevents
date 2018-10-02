<?php

use App\Event;
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
        Event::create([
           'event_name' => "Udm Event1",
           'event_description' => "UDM event description Lorem Ipsum",
           'event_date_time_start' => date("Y-m-d H:i:s" ),
           'event_date_time_end' => date("Y-m-d H:i:s"),
           'event_fee' => 15,
           'event_typeID' => 2,
           'event_place' => "Palma Hall",
           'event_orgID' => 38,
           'event_status' => "p",

        ]);
    }
}
