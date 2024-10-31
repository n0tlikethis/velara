<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    protected $data = [
        [
            'nama' => '10 Dosa Besar Alkadafi',
            'pengarang' => 'Ismatullah Shadqi'
        ], [
            'nama' => 'Animal Farm',
            'pengarang' => 'George Orwell'
        ], [
            'nama' => 'The Phantom of the Opera',
            'pengarang' => 'Gaston Leroux'
        ], [
            'nama' => 'Strange Case of Dr Jekyll and Mr Hyde',
            'pengarang' => 'Robert Louis Stevenson'
        ], [
            'nama' => 'The Hound of The Baskervilles',
            'pengarang' => 'Sir Arthur Conan Doyle'
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data as $book) {
            DB::table('books')->insert($book);
        }
    }
}
