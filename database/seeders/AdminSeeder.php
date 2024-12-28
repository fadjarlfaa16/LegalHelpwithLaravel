<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@legalhelp.com',
                'password' => bcrypt('laravel'),
                'role' => 'admin'
            ]
        );
    }
}
