<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product_detail;

class Product_detailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Product_detail = Product_detail::create([
            'size'          => "XL",
            'color'         => "grey",
            'quantity'      => 5,
            'image'         => '/assets/images/product-images/product-image36.jpg',
            'product_id'    => 1,
        ]);

        $Product_detail = Product_detail::create([
            'size'          => "XXL",
            'color'         => "grey",
            'quantity'      => 5,
            'image'         => '',
            'product_id'    => 1,
        ]);

        $Product_detail = Product_detail::create([
            'size'          => "L",
            'color'         => "grey",
            'quantity'      => 5,
            'image'         => '',
            'product_id'    => 1,
        ]);

        $Product_detail = Product_detail::create([
            'size'          => "M",
            'color'         => "grey",
            'quantity'      => 5,
            'image'         => '',
            'product_id'    => 1,
        ]);

        $Product_detail = Product_detail::create([
            'size'          => "XL",
            'color'         => "yellow",
            'quantity'      => 5,
            'image'         => '/assets/images/product-images/product-image36.jpg',
            'product_id'    => 1,
        ]);

        $Product_detail = Product_detail::create([
            'size'          => "XXL",
            'color'         => "yellow",
            'quantity'      => 5,
            'image'         => '',
            'product_id'    => 1,
        ]);

        $Product_detail = Product_detail::create([
            'size'          => "L",
            'color'         => "yellow",
            'quantity'      => 5,
            'image'         => '',
            'product_id'    => 1,
        ]);

        $Product_detail = Product_detail::create([
            'size'          => "M",
            'color'         => "yellow",
            'quantity'      => 5,
            'image'         => '',
            'product_id'    => 1,
        ]);
        //---------------------------------------- end of product_id 1 ----------------------


        $Product_detail = Product_detail::create([
            'size'          => "M",
            'color'         => "colors",
            'quantity'      => 3,
            'image'         => '/assets/images/product-detail-page/product-with-right-thumbs-1.jpg',
            'product_id'    => 2,
        ]);

        $Product_detail = Product_detail::create([
            'size'          => "L",
            'color'         => "colors",
            'quantity'      => 3,
            'image'         => '/assets/images/product-detail-page/product-with-right-thumbs-2.jpg',
            'product_id'    => 2,
        ]);

        $Product_detail = Product_detail::create([
            'size'          => "XL",
            'color'         => "colors",
            'quantity'      => 3,
            'image'         => '/assets/images/product-detail-page/product-with-right-thumbs-3.jpg',
            'product_id'    => 2,
        ]);

        $Product_detail = Product_detail::create([
            'size'          => "XXL",
            'color'         => "colors",
            'quantity'      => 3,
            'image'         => '/assets/images/product-detail-page/product-with-right-thumbs-3.jpg',
            'product_id'    => 2,
        ]);

        //---------------------------------------- end of product_id 2 ----------------------

    }
}
