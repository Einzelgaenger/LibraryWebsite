<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::create([
            'title' => 'Harry Potter dan Batu Bertuah',
            'author' => 'J.K. Rowling',
            'category' => 'Fantasy',
            'pages' => 223,
            'published_year' => 1997,
            'is_available' => true,
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'author' => 'Andrea Hirata',
            'category' => 'Fiksi',
            'pages' => 520,
            'published_year' => 2005,
            'is_available' => true,
        ]);

        Book::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'category' => 'Klasik',
            'pages' => 180,
            'published_year' => 1925,
            'is_available' => false,
        ]);
    }
}

