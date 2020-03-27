<?php

use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBook $book)
    {
        $book->create([
            'title' => 'Senhor do aneis',
            'pages' => '100',
            'price' => '10.22',
            'id_user' => '1',
        ]);

        $book->create([
            'title' => 'A onda',
            'pages' => '40',
            'price' => '101.00',
            'id_user' => '2',
        ]);

        $book->create([
            'title' => 'Titanic',
            'pages' => '200',
            'price' => '201.00',
            'id_user' => '2',
        ]);
    }
}
