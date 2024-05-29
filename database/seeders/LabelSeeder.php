<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('labels')->insert([
            [
                'title' => 'Kampus',
                'del' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Rumah',
                'del' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Kerja',
                'del' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
