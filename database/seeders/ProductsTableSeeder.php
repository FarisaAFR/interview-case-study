<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Casual Shirt',
                'category' => 'shirts',
                'status' => 1,
                'image' => 'https://example.com/images/casual-shirt.jpg',
            ],
            [
                'name' => 'Denim Jeans',
                'category' => 'trousers',
                'status' => 1,
                'image' => 'https://example.com/images/denim-jeans.jpg',
            ],
            [
                'name' => 'Leather Jacket',
                'category' => 'outwear',
                'status' => 1,
                'image' => 'https://example.com/images/leather-jacket.jpg',
            ],
            [
                'name' => 'Sneakers',
                'category' => 'shoes',
                'status' => 1,
                'image' => 'https://example.com/images/sneakers.jpg',
            ],
            [
                'name' => 'Handbag',
                'category' => 'accessories',
                'status' => 1,
                'image' => 'https://example.com/images/handbag.jpg',
            ],
            [
                'name' => 'Summer Dress',
                'category' => 'dress',
                'status' => 1,
                'image' => 'https://example.com/images/summer-dress.jpg',
            ],
        ]);
    }
}
