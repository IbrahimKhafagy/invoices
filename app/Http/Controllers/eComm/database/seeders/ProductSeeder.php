<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'LG',
            'price' => '$200',
            'description' => 'a smart phone with 4gb ram and much more features',
            'category' => 'MOBILE',
            'gallery' => 'https://review-plus.com/wp-content/uploads/2020/09/lg-k71-1-300x300.jpg'

        ]);

        DB::table('products')->insert([
            'name' => 'Toshiba',
            'price' => '$350',
            'description' => 'a big tv screen and much more features',
            'category' => 'TV',
            'gallery' => 'https://m.media-amazon.com/images/I/61oi5QdCgPL.jpg'

        ]);
        DB::table('products')->insert([
            'name' => 'Playstation-5',
            'price' => '$500',
            'description' => 'a gaming device  with a game horizon zero dawn',
            'category' => 'PLAYSTATION',
            'gallery' => 'http://cdn.shopify.com/s/files/1/0689/8689/6672/products/ps5-console-horizon-forbidden-west-bundle-front-box-us_e387ad0f-22d4-4867-8c43-b68485ee7661.png?v=1670618275'

        ]);
        DB::table('products')->insert([
            'name' => 'LG',
            'price' => '$200',
            'description' => 'a smart phone with 4gb ram and much more features',
            'category' => 'MOBILE',
            'gallery' => 'https://review-plus.com/wp-content/uploads/2020/09/lg-k71-1-300x300.jpg'

        ]);

        DB::table('products')->insert([
            'name' => 'Toshiba',
            'price' => '$350',
            'description' => 'a big tv screen and much more features',
            'category' => 'TV',
            'gallery' => 'https://m.media-amazon.com/images/I/61oi5QdCgPL.jpg'

        ]);
        DB::table('products')->insert([
            'name' => 'Playstation-5',
            'price' => '$500',
            'description' => 'a gaming device  with a game horizon zero dawn',
            'category' => 'PLAYSTATION',
            'gallery' => 'http://cdn.shopify.com/s/files/1/0689/8689/6672/products/ps5-console-horizon-forbidden-west-bundle-front-box-us_e387ad0f-22d4-4867-8c43-b68485ee7661.png?v=1670618275'

        ]);
    }
}
