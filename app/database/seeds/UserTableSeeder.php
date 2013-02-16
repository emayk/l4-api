<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
        	'email' => 'your@email.com',
        	'password' => Hash::make('your_password'),
        	'created_at' => new DateTime,
        	'updated_at' => new DateTime
        ));
    }

}