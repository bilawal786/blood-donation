<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '00000000',
            'about' => '',
            'weight' => '2',
            'address' => 'Lahore',
            'city' => 'Lahore',
            'role' => '0',
            'dob' => '12-09-2009',
            'e_time' => '08:00:00',
            'blood_group' => 'B+',
            'lat' => '31.4879093',
            'long' => '74.380081',
            'gender' => '1',
            's_time' => '08:00:00',
            'img' => 'front/assets/images/donor/6108d83ae02901627969594.jpg',

        ]);
        DB::table('users')->insert([
            'name' => 'Donee',
            'email' => 'donee@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '00000000',
            'about' => '',
            'weight' => '2',
            'address' => 'Lahore',
            'city' => 'Lahore',
            'role' => '1',
            'dob' => '12-09-2009',
            'e_time' => '08:00:00',
            'blood_group' => 'B+',
            'lat' => '31.4879093',
            'long' => '74.380081',
            'gender' => '1',
            's_time' => '08:00:00',
            'img' => 'front/assets/images/donor/6108d83ae02901627969594.jpg',

        ]);
        DB::table('users')->insert([
            'name' => 'Donner',
            'email' => 'donner@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '00000000',
            'about' => '',
            'weight' => '2',
            'address' => 'Lahore',
            'city' => 'Lahore',
            'role' => '2',
            'dob' => '12-09-2009',
            'e_time' => '08:00:00',
            'blood_group' => 'B+',
            'lat' => '31.4879093',
            'long' => '74.380081',
            'gender' => '1',
            's_time' => '08:00:00',
            'img' => 'front/assets/images/donor/6108d83ae02901627969594.jpg',

        ]);
    }
}
