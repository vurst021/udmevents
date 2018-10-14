<?php

use App\College;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CollegeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        College::insert([
        	['col_name' => 'College of Accountancy and Economics',  'col_slugs' => 'CAE', 'created_at' => $now, 'updated_at' => $now],
        	['col_name' => 'College of Arts and Sciences', 'col_slugs' => 'CAS', 'created_at' => $now, 'updated_at' => $now],
        	['col_name' => 'College of Business and Entrepreneurship','col_slugs' => 'CBE', 'created_at' => $now, 'updated_at' => $now],
        	['col_name' => 'College of Criminology', 'col_slugs' => 'CCR', 'created_at' => $now, 'updated_at' => $now],
            ['col_name' => 'College of Education', 'col_slugs' => 'CED', 'created_at' => $now, 'updated_at' => $now],
            ['col_name' => 'College of Engineering and Technology', 'col_slugs' => 'CET', 'created_at' => $now, 'updated_at' => $now],
            ['col_name' => 'College of Health Sciences', 'col_slugs' => 'CHS', 'created_at' => $now, 'updated_at' => $now],
            ['col_name' => 'College of Human Kinetics', 'col_slugs' => 'CHK', 'created_at' => $now, 'updated_at' => $now],
            ['col_name' => 'College of Mass Communication', 'col_slugs' => 'CMC', 'created_at' => $now, 'updated_at' => $now],
            ['col_name' => 'College of Public Administration', 'col_slugs' => 'CPA', 'created_at' => $now, 'updated_at' => $now],
            ['col_name' => 'Senior High School', 'col_slugs' => 'SHS', 'created_at' => $now, 'updated_at' => $now],
            ['col_name' => 'Non-Academic Clubs', 'col_slugs' => 'Clubs', 'created_at' => $now, 'updated_at' => $now],

 
        ]);
    }
}
