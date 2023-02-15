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
            'discount'      => 0,
            'description'   => "xxxxxxxxxxxxxx",
            'brand_name'    => "polo",
            'subcat_id'     => 1,
            //product-image36-1
        ]);

        $product = Product::create([
            'name'          => "Long Dress",
            'price'         => 1000,
            'description'   => "xxxxxxxxxxxxxxx",
            'discount'      => 0.10,
            'brand_name'    => "H&M",
            'subcat_id'     => 6,
            //women/home-dress-1
        ]);

        $product = Product::create([
            'name'          => "formal shoes",
            'price'         => 700,
            'description'   => "brown interview shoes",
            'discount'      => 0.05,
            'brand_name'    => "zara",
            'subcat_id'     => 2,
            //men/shoes4-1 
        ]);

        $product = Product::create([
            'name'          => "green hand-bag",
            'price'         => 2000,
            'description'   => "xxxxxxxxxxxxx",
            'discount'      => 0.20,
            'brand_name'    => "zara",
            'subcat_id'     => 8,
            //bags/bags5-1
        ]);

        $product = Product::create([
            'name'          => "Carbon slide-mirrors cover",
            'price'         => 200,
            'description'   => "xxxxxxxxxxxxx",
            'discount'      => 0.20,
            'brand_name'    => "ford",
            'subcat_id'     => 15,
        ]);
    }
}
