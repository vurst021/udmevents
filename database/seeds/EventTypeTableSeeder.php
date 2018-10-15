<?php

use App\EventType;
use App\AttendeesStatus;
use Illuminate\Database\Seeder;

class EventTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	AttendeesStatus::create([
    		'att_status_description'=> 'Accepted'
    	]);
    	AttendeesStatus::create([
    		'att_status_description'=> 'Rejected'
    	]);
        EventType::create([
        	'event_type_name' => 'Seminar',
        	'event_type_description' => 'Talk with Speakers '
        	

	    ]);

	    EventType::create([
	        	'event_type_name' => 'Workshop',
	        	'event_type_description' => 'With Activities '
	        	

	    ]);

	    EventType::create([
	        	'event_type_name' => 'Sports',
	        	'event_type_description' => 'Atlhete Purposes'
	        	

	    ]);

	    EventType::create([
	        	'event_type_name' => 'Entertainment',
	        	'event_type_description' => 'Students Enjoyment'
	        	

	    ]);
    }
}
