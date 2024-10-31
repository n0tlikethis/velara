<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitorSeeder extends Seeder
{
    protected $data = [
        [
            'nama' => 'Fariz Ali Muhaimin',
            'email' => 'paryz@gmail.com'
        ], [
            'nama' => 'Rifqi Hidayat',
            'email' => 'hdytz@gmail.com'
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data as $visitor) {
            DB::table('visitors')->insert($visitor);
        }
    }
}
