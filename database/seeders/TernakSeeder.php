<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TernakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ternaks')->insert([
            'tanggal' => '2022-08-05',
            'umur' => '3',
            'pakan' => '20',
            'mati' => '10',
        ]);
    }
}