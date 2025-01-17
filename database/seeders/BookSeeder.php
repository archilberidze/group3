<?php

namespace Database\Seeders;

use App\Models\book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            ['title' => 'title one', 'author' => 'Author 1', 'publication_date' => '2024-02-01'],
            ['title' => 'title two', 'author' => 'Author 2', 'publication_date' => '2023-01-15'],
            ['title' => 'title three', 'author' => 'Author 3', 'publication_date' => '2025-01-01'],
        ];

        foreach ($data as $book){
            book::create($book);
        }

    }
}
