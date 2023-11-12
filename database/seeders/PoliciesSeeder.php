<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoliciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('policies')->insert([
            ['id' => 1, 'name' => '{"ar":"سياسة الخصوصية","en":"Privacy Policy"}', 'text' => '{"ar":".","en":""}'],
            ['id' => 2, 'name' => '{"ar":"الشروط والاحكام","en":"Terms"}', 'text' => '{"ar":".","en":""}'],
        ]);
    }
}
