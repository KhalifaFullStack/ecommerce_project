<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sub_category;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub_category = Sub_category::create([ //id=1
            'name'        => 'clothes',
            'description' => "xxxxxxxxxxxx",
            'category_id'      => "1",
        ]);

        $sub_category = Sub_category::create([ //id=2
            'name'        => "shoes",
            'description' => "xxxxxxxxxxxx",
            'category_id'      => "1",
        ]);

        $sub_category = Sub_category::create([ //id=3
            'name'        => "bags",
            'description' => "xxxxxxxxxxxx",
            'category_id'      => "1",
        ]);

        $sub_category = Sub_category::create([ //id=4
            'name'        => 'watches',
            'description' => "xxxxxxxxxxxx",
            'category_id'      => "1",
        ]);

        $sub_category = Sub_category::create([ //id=5
            'name'        => "accessories",
            'description' => "xxxxxxxxxxxx",
            'category_id'      => "1",
        ]);

        //------------------ starting sub-category for women - id=2

        $sub_category = Sub_category::create([ //id=6
            'name'        => 'clothes',
            'description' => "xxxxxxxxxxxx",
            'category_id'      => "2",
        ]);

        $sub_category = Sub_category::create([ //id=7
            'name'        => "shoes",
            'description' => "xxxxxxxxxxxx",
            'category_id'      => "2",
        ]);

        $sub_category = Sub_category::create([ //id=8
            'name'        => "bags",
            'description' => "xxxxxxxxxxxx",
            'category_id'      => "2",
        ]);

        $sub_category = Sub_category::create([ //id=9
            'name'        => 'accessories',
            'description' => "xxxxxxxxxxxx",
            'category_id'      => "2",
        ]);

        $sub_category = Sub_category::create([ //id=10
            'name'        => "jewelry",
            'description' => "xxxxxxxxxxxx",
            'category_id'      => "2",
        ]);

        $sub_category = Sub_category::create([ //id=11
            'name'        => "cosmetics",
            'description' => "xxxxxxxxxxxx",
            'category_id'      => "2",
        ]);

        //------------------ starting sub-category for Kids - id=3

        $sub_category = Sub_category::create([ //id=12
            'name'        => 'kids fashion',
            'description' => "xxxxxxxxxxxx",
            'category_id'      => "3",
        ]);

        $sub_category = Sub_category::create([
            'name'        => 'baby & toddler toys', //id=14
            'description' => "xxxxxxxxxxxx",
            'category_id'      => "3",
        ]);

        //------------------ starting Automotive parts for Kids - id=4

        $sub_category = Sub_category::create([ //id=15
            'name'        => 'accessories',
            'description' => "xxxxxxxxxxxx",
            'category_id'      => "4",
        ]);

        $sub_category = Sub_category::create([ //id=16
            'name'        => 'Sport packs',
            'description' => "xxxxxxxxxxxx",
            'category_id'      => "4",
        ]);
    }
}
