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
        $sub_category = Sub_category::create([ //ID = 1
            'name'        => 'Boys Winter Collection',
            // 'description' => "",
            'category_id'      => "1",   //ID (1) from categories table -> "men"
        ]);

        $sub_category = Sub_category::create([ //ID = 2
            'name'        => "Boys' Coat",
            // 'description' => "",
            'category_id'      => "1",   //ID (1) from categories table -> "men"
        ]);


        $sub_category = Sub_category::create([ //ID = 3
            'name'        => 'Girls Winter Collection',
            // 'description' => "",
            'category_id'      => "2",   //ID (2) from categories table -> "women"
        ]);

        $sub_category = Sub_category::create([ //ID = 4
            'name'        => "Girls' Coat",
            // 'description' => "",
            'category_id'      => "2",   //ID (2) from categories table -> "women"
        ]);

        $sub_category = Sub_category::create([ //ID = 4
            'name'        => 'Kids Winter Collection',
            // 'description' => "",
            'category_id'      => "3",   //ID (3) from categories table -> "kids"
        ]);

        $sub_category = Sub_category::create([ //ID = 4
            'name'        => "Kids' Coat",
            // 'description' => "",
            'category_id'      => "3",   //ID (3) from categories table -> "kids"
        ]);
    }
}
