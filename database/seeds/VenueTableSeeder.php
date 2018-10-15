<?php

use App\Venue;
use Illuminate\Database\Seeder;

class VenueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Venue::create([
        	'venue_name' => 'Cecilio Munoz Palma Hall',
        	'venue_description' => 'Universidad De Manila Auditorium'
        	

        ]);

        Venue::create([
        	'venue_name' => 'Basketball Court',
        	'venue_description' => 'Universidad De Manila Basketball Court '
        	

        ]);


        Venue::create([
        	'venue_name' => 'Main Lobby',
        	'venue_description' => 'Main Entrance '
        	

        ]);

        Venue::create([
        	'venue_name' => 'Lobby Left-Wing',
        	'venue_description' => 'Near the Basketball Court '
        	

        ]);

        Venue::create([
        	'venue_name' => 'CET MultiPurpose Hall',
        	'venue_description' => 'New Building Room 305-306'
        	

        ]);
    }
}
