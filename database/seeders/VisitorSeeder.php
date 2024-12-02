<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("visitors")->insert([
        [
            'nama' => 'Fariz Ali Muhaimin',
            'email' => 'paryz@gmail.com'
        ], [
            'nama' => 'Rifqi Hidayat',
            'email' => 'hdytz@gmail.com'
        ]
    ]);
    }
}
