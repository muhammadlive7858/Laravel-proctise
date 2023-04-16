<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        return User::create([
            
                'name'=>"Muhammad",
                'email'=>"muhammadlive7858@gmail.com",
                'password'=>Hash::make("muhammad"),
                'role_id'=>1

            ]);
    }
}
