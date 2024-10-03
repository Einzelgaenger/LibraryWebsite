<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'phone' => '08123456789',
                'address' => 'Jl. Contoh No. 1, Jakarta',
            ],
            [
                'name' => 'User1',
                'email' => 'user1@example.com',
                'password' => bcrypt('password'),
                'phone' => '08123456780',
                'address' => 'Jl. Contoh No. 2, Jakarta',
            ],
            [
                'name' => 'User2',
                'email' => 'user2@example.com',
                'password' => bcrypt('password'),
                'phone' => '08123456781',
                'address' => 'Jl. Contoh No. 3, Jakarta',
            ],
        ]);
    }
}
