<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'King Size Bed',
            'price' => '2000',
            'description' => 'This is some text for the LENOVO prenosnik Yoga 900 13ISK',
            'image' => '01.jpg',
        ]);

        Product::create([
            'name' => 'Queen Size Bed',
            'price' => '233',
            'description' => 'This is some text for the Macbook',
            'image' => '02.jpg',
        ]);

        Product::create([
            'name' => 'King Bed',
            'price' => '50',
            'description' => 'This is some text for the Ployster Beg',
            'image' => '03.jpg',
        ]);

        Product::create([
            'name' => 'Queen Bed',
            'price' => '3000',
            'description' => 'This is some text for the Samsung LED',
            'image' => '04.jpg',
        ]);
    }
}
