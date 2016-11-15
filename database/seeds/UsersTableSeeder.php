<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate table
        DB::table('users')->truncate();
        //insert 3 users
        DB::table('users')->insert([
        	[
        		'name' => "John Doe",
        		'email'=> "John@gmail.com",
        		'password'	=> bcrypt('secret')
        	],
        	[
        		'name' => "Anime",
        		'email'=> "Anme@gmail.com",
        		'password'	=> bcrypt('secret')
        	],
        	[
        		'name' => "Hiroku",
        		'email'=> "Hiroku@gmail.com",
        		'password'	=> bcrypt('secret')
        	],
        	]);
    }
}
