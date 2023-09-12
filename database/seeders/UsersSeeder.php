<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() 
    {
        User::create([
            'name'      => 'Khaula',
            'email'     => 'khaulabrian2233@gmail.com',
            'password'  =>Hash::make('inipassword'),
        ]);
    }
}
