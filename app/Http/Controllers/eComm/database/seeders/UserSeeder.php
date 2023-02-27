<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        User::truncate();    //==>> to undublicate

        User::create([
            'name' => 'ahmed',
            'email' => 'ahmed@gmail.com',
            'password' => Hash::make('11111111')   // Hash ==>> to encrypt the password
        ]);

        User::create([
            'name' => 'mohamed',
            'email' => 'mohamed@gmail.com',
            'password' => Hash::make('22222222')
        ]);

        User::create([
            'name' => 'ali',
            'email' => 'ali@gmail.com',
            'password' => Hash::make('33333333')
        ]);
    }
}
