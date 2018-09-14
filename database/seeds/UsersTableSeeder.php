<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Dan',
        	'password' => Hash::make('admin'),
        	'fullname' => 'Dan Rice Koozai',
        	'email' => 'dan@gmail.com',
        	'photo' => 'uploads/images/20180913024933_Dan-Rice-Koozai.jpg',
        ]);

        User::create([
        	'name' => 'Jessica',
        	'password' => Hash::make('admin'),
        	'fullname' => 'Jessica Stillman',
        	'email' => 'jessica@gmail.com',
        	'photo' => 'uploads/images/20180913024933_JessicaStillman.png',
        ]);

        User::create([
        	'name' => 'John',
        	'password' => Hash::make('admin'),
        	'fullname' => 'John',
        	'email' => 'john@gmail.com',
        	'photo' => 'uploads/images/20180913024933_John.jpg',
        ]);

        User::create([
        	'name' => 'Nicola',
        	'password' => Hash::make('admin'),
        	'fullname' => 'Nicola quinn',
        	'email' => 'nicola@test.com',
        	'photo' => 'uploads/images/20180913024933_nicola-quinn.png',
        ]);

        User::create([
        	'name' => 'Tim',
        	'password' => Hash::make('admin'),
        	'fullname' => 'Tim',
        	'email' => 'tim@gmail.com',
        	'photo' => 'uploads/images/20180913024933_tim.png',
        ]);
    }
}
