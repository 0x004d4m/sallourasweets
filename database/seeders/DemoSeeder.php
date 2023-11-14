<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testmonials')->insert([
            ['id' => 1, 'name' => '{"ar":"ناثان ميهرفولد","en":"Nathan Myhrvold"}', 'description' => '{"ar":"الطهي فن، ولكن كل فن يتطلب معرفة ببعض التقنيات والمواد.","en":"Cooking is an art, but all art requires knowing something about the techniques and materials"}'],
            ['id' => 2, 'name' => '{"ar":"ليف إل. سبيرو","en":"Lev L. Spiro"}', 'description' => '{"ar":"أعطِ الإنسان طعامًا، ويمكنه أن يأكل ليوم واحد. أما إذا أعطيت الإنسان وظيفة، فإنه يمكنه فقط الأكل لمدة 30 دقيقة خلال الاستراحة.","en":"Give a man food, and he can eat for a day. Give a man a job, and he can only eat for 30 minutes on break."}'],
            ['id' => 3, 'name' => '{"ar":"جوليا تشايلد","en":"Julia Child"}', 'description' => '{"ar":"ابحث عن شيء تشغل قلبك به وابقَ مهتمًا به بشكل كبير.","en":"Find something you\'re passionate about and keep tremendously interested in it."}'],
            ['id' => 4, 'name' => '{"ar":"جوش بيلينجز","en":"Josh Billings"}', 'description' => '{"ar":"لا تعمل قبل الإفطار؛ إذا كنت مضطرًا للعمل قبل الإفطار، اتناول وجبة الإفطار أولًا.","en":"Never work before breakfast; if you have to work before breakfast, eat your breakfast first."}'],
        ]);
        DB::table('categories')->insert([
            ['id' => 1, 'name' => '{"ar":"المشروبات","en":"Drinks"}', 'description' => '{"ar":"المشروبات","en":"Drinks"}', 'image' => 'template/images/res_img_5.jpg'],
            ['id' => 2, 'name' => '{"ar":"الستيك","en":"Steak"}', 'description' => '{"ar":"الستيك","en":"Steak"}', 'image' => 'template/images/res_img_4.jpg'],
        ]);
        DB::table('items')->insert([
            ['id' => 1, 'name' => '{"ar":"عصير الأناناس","en":"Pineapple Juice"}', 'description' => '{"ar":"عصير الأناناس","en":"Pineapple Juice"}', 'price' => '17.50', 'image' => 'template/images/res_img_5.jpg', 'category_id' => 1, 'is_featured' => 1],
            ['id' => 2, 'name' => '{"ar":"عصير أخضر","en":"Green Juice"}', 'description' => '{"ar":"عصير أخضر","en":"Green Juice"}', 'price' => '7.99', 'image' => 'template/images/res_img_6.jpg', 'category_id' => 1, 'is_featured' => 1],
            ['id' => 3, 'name' => '{"ar":"المشروبات الغازية","en":"Soft Drinks"}', 'description' => '{"ar":"المشروبات الغازية","en":"Soft Drinks"}', 'price' => '12.99', 'image' => 'template/images/res_img_7.jpg', 'category_id' => 1, 'is_featured' => 1],
            ['id' => 4, 'name' => '{"ar":"مشروبات كارلو روزي","en":"Carlo Rosee Drinks"}', 'description' => '{"ar":"مشروبات كارلو روزي","en":"Carlo Rosee Drinks"}', 'price' => '12.99', 'image' => 'template/images/res_img_5.jpg', 'category_id' => 1, 'is_featured' => 1],
            ['id' => 5, 'name' => '{"ar":"شريحة لحم بقر","en":"Beef Steak"}', 'description' => '{"ar":"شريحة لحم بقر","en":"Beef Steak"}', 'price' => '17.50', 'image' => 'template/images/res_img_3.jpg', 'category_id' => 2, 'is_featured' => 1],
            ['id' => 6, 'name' => '{"ar":"طماطم مع الدجاج","en":"Tomato with Chicken"}', 'description' => '{"ar":"طماطم مع الدجاج","en":"Tomato with Chicken"}', 'price' => '7.99', 'image' => 'template/images/res_img_4.jpg', 'category_id' => 2, 'is_featured' => 1],
            ['id' => 7, 'name' => '{"ar":"نقانق إيطالية","en":"Sausages from Italy"}', 'description' => '{"ar":"نقانق إيطالية","en":"Sausages from Italy"}', 'price' => '12.99', 'image' => 'template/images/res_img_2.jpg', 'category_id' => 2, 'is_featured' => 0],
            ['id' => 8, 'name' => '{"ar":"لحم بقر مشوي","en":"Beef Grilled"}', 'description' => '{"ar":"لحم بقر مشوي","en":"Beef Grilled"}', 'price' => '12.99', 'image' => 'template/images/res_img_8.jpg', 'category_id' => 2, 'is_featured' => 0],
        ]);
        DB::table('branches')->insert([
            ['id' => 1, 'address' => '{"ar":"الفرع 1","en":"Branch 1"}', 'phone' => '+9620770392801', 'location' => 'https://maps.app.goo.gl/Ap54XcpmmYdfxT6X8', 'image' => 'template/images/res_img_3.jpg', ],
            ['id' => 2, 'address' => '{"ar":"الفرع 2","en":"Branch 2"}', 'phone' => '+9620770392802', 'location' => 'https://maps.app.goo.gl/Ap54XcpmmYdfxT6X8', 'image' => 'template/images/res_img_3.jpg', ],
            ['id' => 3, 'address' => '{"ar":"الفرع 3","en":"Branch 3"}', 'phone' => '+9620770392803', 'location' => 'https://maps.app.goo.gl/Ap54XcpmmYdfxT6X8', 'image' => 'template/images/res_img_3.jpg', ],
        ]);
        DB::table('socials')->insert([
            ['id' => 1, 'icon' => 'fa fa-facebook', 'url' => 'https://facebook.com',],
            ['id' => 2, 'icon' => 'fa fa-instagram', 'url' => 'https://instagram.com',],
            ['id' => 3, 'icon' => 'fa fa-youtube', 'url' => 'https://youtube.com',],
            ['id' => 4, 'icon' => 'fa fa-twitter', 'url' => 'https://twitter.com',],
        ]);
    }
}
