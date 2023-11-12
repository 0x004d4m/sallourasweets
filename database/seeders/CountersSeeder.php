<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('counters')->insert([
            ['id' => 1, 'name' => '{"ar":"الزبائن","en":"Clients"}', 'counter' => '1000'],
            ['id' => 2, 'name' => '{"ar":"الافرع","en":"Branches"}', 'counter' => '2000'],
            ['id' => 3, 'name' => '{"ar":"السنين","en":"Years"}', 'counter' => '1500'],
            ['id' => 4, 'name' => '{"ar":"الاصناف","en":"Categories"}', 'counter' => '100'],
        ]);
    }
}
