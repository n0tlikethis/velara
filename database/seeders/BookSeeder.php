<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("books")->insert([
            [
                "nama" => "10 Dosa Besar Alkadafi",
                "pengarang" => "Ismatullah Shadqi",
                "penerbit" => "Gramedia Mungkin",
            ],
            [
                "nama" => "Animal Farm",
                "pengarang" => "George Orwell",
                "penerbit" => "Bentang Pustaka",
            ],
            [
                "nama" => "The Phantom of the Opera",
                "pengarang" => "Gaston Leroux",
                "penerbit" => "Gramedia Pustaka Utama",
            ],
            [
                "nama" => "Strange Case of Dr Jekyll and Mr Hyde",
                "pengarang" => "Robert Louis Stevenson",
                "penerbit" => "Gramedia Pustaka Utama",
            ],
            [
                "nama" => "The Hound of The Baskervilles",
                "pengarang" => "Sir Arthur Conan Doyle",
                "penerbit" => "Gramedia Pustaka Utama",
            ],
        ]);
    }
}
