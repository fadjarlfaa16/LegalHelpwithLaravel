<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Rayn Sihotang',
                'email' => 'rayn.work@legalhelp.com',
                'password' => bcrypt('123456'),
                'role' => 'consultant'
            ],
            [
                'name' => 'Fikri Ihza Mahendra',
                'email' => 'fikri.work@legalhelp.com',
                'password' => bcrypt('123456'),
                'role' => 'consultant'
            ],
            [
                'name' => 'Zaqie Paris Hutapea',
                'email' => 'zaqi.work@legalhelp.com',
                'password' => bcrypt('123456'),
                'role' => 'consultant'
            ],
            [
                'name' => 'Fadhil Hasibuan',
                'email' => 'fadhil.work@legalhelp.com',
                'password' => bcrypt('123456'),
                'role' => 'consultant'
            ],
            [
                'name' => 'Rian Abbas',
                'email' => 'rian.work@legalhelp.com',
                'password' => bcrypt('123456'),
                'role' => 'consultant'
            ],
            [
                'name' => 'Fikri si bujang Lapuk',
                'email' => 'user@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'user'
            ],
            [
                'name' => 'Rian si Penakluk Wanita',
                'email' => 'user2@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'user'
            ],
            [
                'name' => 'Raka si Oppa Banten',
                'email' => 'user3@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'user'
            ],
            [
                'name' => 'Rayn si Fast Learner',
                'email' => 'user4@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'user'
            ],
        ]);
    }
}
