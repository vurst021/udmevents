<?php

use Illuminate\Database\Seeder;
use App\User;
use App\AdminPosition;
use App\Admin;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	       $adminPosition = new AdminPosition();
        $adminPosition->position_name = "DEAN";
        $adminPosition->save();

        $adminPosition = new AdminPosition();
        $adminPosition->position_name = "OSA";
        $adminPosition->save();

        $adminPosition = new AdminPosition();
        $adminPosition->position_name = "VPAA";
        $adminPosition->save();

        $adminPosition = new AdminPosition();
        $adminPosition->position_name = "VPAF";
        $adminPosition->save();
        $adminPosition = new AdminPosition();
        $adminPosition->position_name = "School President";
        $adminPosition->save();

        $user = new User();
        $user->user_fname = "Prince Charles";
        $user->user_mname = "Baluis";
        $user->user_lname = "Vergara";
        $user->user_gender = "m";
        $user->user_contact = "123123123";
        $user->email = "pcbv0@gmail.com";
        $user->user_type = "g";
        $user->user_slug = "pcbv0";
        $user->password = Hash::make("@Prince910");
        $user->email_token = base64_encode("pcbv0@gmail.com");
        $user->email_verified_at = date("Y-m-d H:i:s");
        $user->save();

        $user = new User();
        $user->user_fname = "Dean";
        $user->user_mname = "Baluis";
        $user->user_lname = "Vergara";
        $user->user_gender = "m";
        $user->user_contact = "123123123";
        $user->email = "pcbv1@gmail.com";
        $user->user_type = "a";
        $user->user_slug = "pcbv1";
        $user->password = Hash::make("@Prince910");
        $user->email_token = base64_encode("pcbv1@gmail.com");
        $user->email_verified_at = date("Y-m-d H:i:s");
        $user->save();
        $admin = new Admin();
        $admin->admin_positionID = 1;
        $user->isAdmin()->save($admin);


        $user = new User();
        $user->user_fname = "OSA Charles";
        $user->user_mname = "Baluis";
        $user->user_lname = "Vergara";
        $user->user_gender = "m";
        $user->user_contact = "123123123";
        $user->email = "pcbv2@gmail.com";
        $user->user_type = "a";
        $user->user_slug = "pcbv2";
        $user->password = Hash::make("@Prince910");
        $user->email_token = base64_encode("pcbv2@gmail.com");
        $user->email_verified_at = date("Y-m-d H:i:s");
        $user->save();
        $admin = new Admin();
        $admin->admin_positionID = 2;
        $user->isAdmin()->save($admin);

        $user = new User();
        $user->user_fname = "VPAA Charles";
        $user->user_mname = "Baluis";
        $user->user_lname = "Vergara";
        $user->user_gender = "m";
        $user->user_contact = "123123123";
        $user->email = "pcbv3@gmail.com";
        $user->user_type = "a";
        $user->user_slug = "pcbv3";
        $user->password = Hash::make("@Prince910");
        $user->email_token = base64_encode("pcbv3@gmail.com");
        $user->email_verified_at = date("Y-m-d H:i:s");
        $user->save();
        $admin = new Admin();
        $admin->admin_positionID = 3;
        $user->isAdmin()->save($admin);

        $user = new User();
        $user->user_fname = "VPAF";
        $user->user_mname = "Baluis";
        $user->user_lname = "Vergara";
        $user->user_gender = "m";
        $user->user_contact = "123123123";
        $user->email = "pcbv4@gmail.com";
        $user->user_type = "a";
        $user->user_slug = "pcbv4";
        $user->password = Hash::make("@Prince910");
        $user->email_token = base64_encode("pcbv4@gmail.com");
        $user->email_verified_at = date("Y-m-d H:i:s");
        $user->save();
        $admin = new Admin();
        $admin->admin_positionID = 4;
        $user->isAdmin()->save($admin);

        $user = new User();
        $user->user_fname = "President";
        $user->user_mname = "Baluis";
        $user->user_lname = "Vergara";
        $user->user_gender = "m";
        $user->user_contact = "123123123";
        $user->email = "pcbv5@gmail.com";
        $user->user_type = "a";
        $user->user_slug = "pcbv5";
        $user->password = Hash::make("@Prince910");
        $user->email_token = base64_encode("pcbv5@gmail.com");
        $user->email_verified_at = date("Y-m-d H:i:s");
        $user->save();
        $admin = new Admin();
        $admin->admin_positionID = 5;
        $user->isAdmin()->save($admin);
        
    }
}
