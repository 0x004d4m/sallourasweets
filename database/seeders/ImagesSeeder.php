<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            ['id' => 1, 'name' => '{"ar":"الافرع","en":"Branches"}', 'image' => "template/images/slide_2.jpg"],
            ['id' => 2, 'name' => '{"ar":"الفئات المميزة","en":"Featured Categories"}', 'image' => "template/images/slide_3.jpg"],
            ['id' => 3, 'name' => '{"ar":"من نحن","en":"About"}', 'image' => "template/images/res_img_1.jpg"],
            ['id' => 4, 'name' => '{"ar":"الرئيسية 10","en":"Main 10"}', 'image' => "template/images/slide_1.jpg"],
            ['id' => 5, 'name' => '{"ar":"الرئيسية 9","en":"Main 9"}', 'image' => "template/images/slide_3.jpg"],
            ['id' => 6, 'name' => '{"ar":"الرئيسية 8","en":"Main 8"}', 'image' => "template/images/slide_2.jpg"],
            ['id' => 7, 'name' => '{"ar":"الرئيسية 7","en":"Main 7"}', 'image' => "template/images/slide_1.jpg"],
            ['id' => 8, 'name' => '{"ar":"الرئيسية 6","en":"Main 6"}', 'image' => "template/images/slide_3.jpg"],
            ['id' => 9, 'name' => '{"ar":"الرئيسية 5","en":"Main 5"}', 'image' => "template/images/slide_2.jpg"],
            ['id' => 10, 'name' => '{"ar":"الرئيسية 4","en":"Main 4"}', 'image' => "template/images/slide_1.jpg"],
            ['id' => 11, 'name' => '{"ar":"الرئيسية 3","en":"Main 3"}', 'image' => "template/images/slide_3.jpg"],
            ['id' => 12, 'name' => '{"ar":"الرئيسية 2","en":"Main 2"}', 'image' => "template/images/slide_2.jpg"],
            ['id' => 13, 'name' => '{"ar":"الرئيسية 1","en":"Main 1"}', 'image' => "template/images/slide_1.jpg"],
        ]);
    }
}
