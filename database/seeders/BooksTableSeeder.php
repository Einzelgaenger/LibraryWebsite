<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'Belajar Laravel',
                'author' => 'John Doe',
                'category' => 'Teknologi',
                'pages' => 250,
                'published_year' => 2021,
                'is_available' => true,
            ],
            [
                'title' => 'Pemrograman PHP',
                'author' => 'Jane Doe',
                'category' => 'Teknologi',
                'pages' => 300,
                'published_year' => 2020,
                'is_available' => true,
            ],
            [
                'title' => 'Mempelajari JavaScript',
                'author' => 'Mark Smith',
                'category' => 'Teknologi',
                'pages' => 350,
                'published_year' => 2019,
                'is_available' => true,
            ],
            [
                'title' => 'Desain Web Responsif',
                'author' => 'Lisa White',
                'category' => 'Desain',
                'pages' => 200,
                'published_year' => 2022,
                'is_available' => true,
            ],
            [
                'title' => 'Machine Learning',
                'author' => 'Michael Brown',
                'category' => 'Teknologi',
                'pages' => 400,
                'published_year' => 2023,
                'is_available' => true,
            ],
        ]);
    }
}

