<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => "admin",
                'email' => "admin@gmail.com",
                "role" => "admin",
                "password" => Hash::make('abcd1234')
            ],
            [
                'name' => "usman",
                'email' => "usman@gmail.com",
                "role" => "pilot",
                "password" => Hash::make('abcd1234')
            ],
            [
                'name' => "ans",
                'email' => "ans@gmail.com",
                "role" => "pilot",
                "password" => Hash::make('abcd1234')
            ],
            [
                'name' => "ahmed",
                'email' => "ahmed@gmail.com",
                "role" => "pilot",
                "password" => Hash::make('abcd1234')
            ],
            [
                'name' => "tayab",
                'email' => "tayab@gmail.com",
                "role" => "pilot",
                "password" => Hash::make('abcd1234')
            ],
        ];

        foreach ($users as $user)
        {
            User::create($user);
        }
    }
}
