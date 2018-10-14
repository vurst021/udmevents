<?php

use App\Organization;
use Illuminate\Database\Seeder;

class OrganizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organization::create([
        	'org_name' => 'Junior Philippine Computer Society',
        	'org_description' => 'Organization for Information Technology students and preparing them in the fields of IT industry',
        	'org_slug' => 'jpcs'

        ]);

        Organization::create([
        	'org_name' => 'Rotaract Universidad De Manila CET',
        	'org_description' => 'Organization of humanitarian for a better public service to humanity',
        	'org_slug' => 'ract-cet'
        ]);

        Organization::create([
        	'org_name' => 'Institute of Electronic Engineers of the Philippines',
        	'org_description' => 'Organization for Electronic Communication Engineering students and preparing them in the fields of ECE industry',
			'org_slug' => 'iecep'
        ]);

        Organization::create([
        	'org_name' => 'Institute of Computer Engineers of the Philippines',
        	'org_description' => 'Organization for Computer Engineering students and preparing them in the fields of Computer Engineering industry',
        	'org_slug' => 'icpep'
        ]);

        Organization::create([
        	'org_name' => 'Junior Philippine Institute of Accountants',
        	'org_description' => 'Organization for Accountants students and preparing them in the fields of Accounting industry',
        	'org_slug' => 'jpia'
        ]);
    }
}
