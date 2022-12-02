<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
use Illuminate\Support\Str;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //
        User::create([
            'name'    => 'aishwarya',
            'email'    => 'aishwarya@gmail.com',
            'password'   =>  Hash::make('password'),
            'remember_token' =>  Str::random(10),
        ]);
    }
}