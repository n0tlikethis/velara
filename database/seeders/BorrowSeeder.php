<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BorrowSeeder extends Seeder
{
    protected $data = [
        [
            'book_id' => 1,
            'visitor_id' => 1,
            'tgl_peminjaman' => '2024-10-12'
        ], [
            'book_id' => 3,
            'visitor_id' => 1,
            'tgl_peminjaman' => '2024-10-12'
        ], [
            'book_id' => 4,
            'visitor_id' => 2,
            'tgl_peminjaman' => '2024-10-20'
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data as $borrow) {
            DB::table('borrows')->insert($borrow);
        }
    }
}
