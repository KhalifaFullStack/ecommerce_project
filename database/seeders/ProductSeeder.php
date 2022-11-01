<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $product = Product::create([
            'name'          => "Sweat-shirt",
            'price'         => 350,
            'category'      => "men",
            'accessories'   => "false",
            'type'          => "casual",
            'description'   => "xxxxxxxxxxxxxx",
            'discounts'     => "0",
            'image'         => 'assets/images/product-images/product-image36.jpg'
        ]);


        $product = Product::create([
            'name'          => "Winter coat",
            'price'         => 1000,
            'category'      => "men",
            'accessories'   => 'false',
            'type'          => "formal",
            'description'   => "2 Brown Colors",
            'image'         => "assets\images\product-images\product-image50.jpg",
            'hover_image'   => 'assets\images\product-images\product-image50-1.jpg',
            'discounts'     => "0.10",
        ]);

        $product = Product::create([
            'name'          => "dual-color jacket",
            'price'         => 700,
            'category'      => "men",
            'accessories'   => 'false',
            'type'          => "casual",
            'description'   => "2 Colors: black and navy blue",
            'image'         => "assets\images\product-images\product-image49.jpg",
            'hover_image'   => 'assets\images\product-images\product-image49-1.jpg',
            'discounts'     => "0.05",
        ]);

        $product = Product::create([
            'name'          => "Full suite",
            'price'         => 2000,
            'category'      => "men",
            'accessories'   => 'false',
            'type'          => "formal",
            'description'   => "2 Colors: brown and baby blue",
            'image'         => "assets\images\product-images\product-image41.jpg",
            'hover_image'   => 'assets\images\product-images\product-image41-1.jpg',
            'discounts'     => "0.20",
        ]);

        $product = Product::create([
            'name'          => "Black men hand-bag",
            'price'         => 500,
            'category'      => "men",
            'accessories'   => 'false',
            'type'          => "casual",
            'description'   => "xxxxxxxxxxxxx",
            'image'         => "assets\images\product-images\product-image32.jpg",
            'hover_image'   => 'assets\images\product-images\product-image32-1.jpg',
            'discounts'     => "0.20",
        ]);

        $product = Product::create([
            'name'          => "casual suit blazer",
            'price'         => 1200,
            'category'      => "men",
            'accessories'   => 'false',
            'type'          => "casual",
            'description'   => "xxxxxxxxxxxxx",
            'image'         => "assets\images\product-images\product-image40.jpg",
            'hover_image'   => 'assets\images\product-images\product-image40-1.jpg',
            'discounts'     => "0.20",
        ]);

        $product = Product::create([
            'name'          => "tight short-jeans pants",
            'price'         => 900,
            'category'      => "women",
            'accessories'   => 'false',
            'type'          => "casual",
            'description'   => "yellow",
            'image'         => "assets\images\product-images\product-image30.jpg",
            'hover_image'   => 'assets\images\product-images\product-image30-1.jpg',
            'discounts'     => "0.20",
        ]);

        $product = Product::create([
            'name'          => "short white dress",
            'price'         => 950,
            'category'      => "women",
            'accessories'   => 'false',
            'type'          => "casual",
            'description'   => "yellow",
            'image'         => "assets\images\product-images\product-image31.jpg",
            'hover_image'   => 'assets\images\product-images\product-image31-1.jpg',
            'discounts'     => 0.20,
        ]);
    }
}
