<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'LG TV',
                "price" => "20000",
                "description" => "A television gives us entertainment",
                "category" => "Television",
                "gallery" => "https://web-api.teljoy.co.za/storage/product_images/NSCTVLG65UQ7500_1.webp",

            ],
            [
                'name' => 'Nokia',
                "price" => "10000",
                "description" => "A mobile called smartphone",
                "category" => "Mobile",
                "gallery" => "https://i0.wp.com/img.talkandroid.com/uploads/2020/09/Nokia-8.3-5G_HS_DS-e1601026563550-767x635.png?resize=767%2C635&ssl=1",

            ],
        ]);
    }
}
