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
            'image'         => 'assets/images/product-images/product-image36.jpg',
            'discount'     => "0",
            'available_quantity' => 60,

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
            'discount'     => "0.10",
            'available_quantity' => 30,

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
            'discount'     => "0.05",
            'available_quantity' => 90,
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
            'discount'     => "0.20",
            'available_quantity' => 80,
        ]);

        $product = Product::create([
            'name'                  => "Black men hand-bag",
            'price'                 => 500,
            'category'              => "men",
            'accessories'           => 'false',
            'type'                  => "casual",
            'description'           => "xxxxxxxxxxxxx",
            'image'                 => "assets\images\product-images\product-image32.jpg",
            'hover_image'           => 'assets\images\product-images\product-image32-1.jpg',
            'discount'              => "0.20",
            'available_quantity'    => 40,
            'other_types'           => "bags",
        ]);

        $product = Product::create([
            'name'               => "casual suit blazer",
            'price'              => 1200,
            'category'           => "men",
            'accessories'        => 'false',
            'type'               => "casual",
            'description'        => "xxxxxxxxxxxxx",
            'image'              => "assets\images\product-images\product-image40.jpg",
            'hover_image'        => 'assets\images\product-images\product-image40-1.jpg',
            'discount'           => "0.20",
            'available_quantity' => 45,
        ]);

        $product = Product::create([
            'name'                  => "tight short-jeans pants",
            'price'                 => 900,
            'category'              => "women",
            'accessories'           => 'false',
            'type'                  => "casual",
            'description'           => "yellow",
            'image'                 => "assets\images\product-images\product-image30.jpg",
            'hover_image'           => 'assets\images\product-images\product-image30-1.jpg',
            'discount'              => "0.20",
            'available_quantity'    => 50,
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
            'discount'     => "0.20",
            'available_quantity' => 70,
        ]);

        $product = Product::create([
            'name'               => "long boots hills",
            'price'              => 950,
            'category'           => "women",
            'accessories'        => 'false',
            'type'               => "formal",
            'description'        => "black xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx",
            'image'              => "assets\images\home3-small-banner1.jpg",
            'hover_image'        => 'assets\images\home3-small-banner1.jpg',
            'discount'           => "0.20",
            'available_quantity' => 70,
            'other_types'        => "bags",
        ]);
    }
}
