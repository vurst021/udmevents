<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(CollegeTableSeeder::class);
        $this->call(VenueTableSeeder::class);
        $this->call(EventTypeTableSeeder::class);
        $this->call(OrganizationTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    	$this->call(EventTableSeeder::class);
    }
}
