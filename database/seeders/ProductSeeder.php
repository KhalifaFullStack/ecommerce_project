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
            'discount'      => "0",
            'description'   => "xxxxxxxxxxxxxx",
            'brand_name'    => "polo",
        ]);

        $product = Product::create([
            'name'          => "Long Dress",
            'price'         => 1000,
            'description'   => "xxxxxxxxxxxxxxx",
            'discount'      => "0.10",
            'brand_name'    => "H&M",

        ]);

        $product = Product::create([
            'name'          => "dual-color jacket",
            'price'         => 700,
            'description'   => "2 Colors: black and navy blue",
            'discount'      => "0.05",
            'brand_name'    => "zara",
        ]);

        $product = Product::create([
            'name'          => "Full suite",
            'price'         => 2000,
            'description'   => "2 Colors: brown and baby blue",
            'discount'      => "0.20",
            'brand_name'    => "zara",
        ]);

        $product = Product::create([
            'name'          => "Black men hand-bag",
            'price'         => 500,
            'description'   => "xxxxxxxxxxxxx",
            'discount'      => "0.20",
            'brand_name'    => "zara",

        ]);
    }
}
