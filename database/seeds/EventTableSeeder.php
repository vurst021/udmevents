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
           'event_date_start' => date("Y-m-d" ),
           'event_date_end' => date("Y-m-d"),
           'event_time_start' => date("H:i:s"),
           'event_time_end' => date("H:i:s" ),
           'event_fee' => 15,

        ]);
    }
}
