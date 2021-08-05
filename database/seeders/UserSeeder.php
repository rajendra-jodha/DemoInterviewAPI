<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    	$userarray = array(
                array('parent' => '0','email' =>'test@gmail.com','name' => 'test','password' => '123456789'),
                array('parent' => '1', 'email' => 'test1@gmail.com', 'name' => 'test1', 'password' => '123456789'),
                array('parent' => '1', 'email' => 'test2@gmail.com', 'name' => 'test2', 'password' => '123456789'),
                array('parent' => '1', 'email' => 'test3@gmail.com', 'name' => 'test3', 'password' => '123456789'),
                array('parent' => '1', 'email' => 'test4@gmail.com', 'name' => 'test4', 'password' => '123456789'),
                array('parent' => '1', 'email' => 'test5@gmail.com', 'name' => 'test5', 'password' => '123456789')
            );
            foreach ($userarray as $user) {
                User::create($user);
            }
    }
}
