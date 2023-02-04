<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();

            $table->string('customer_name');
            $table->string('phone_no')->unique();
            $table->string('email')->unique();
            $table->longText('address')->nullable();


            $table->string('product_name');
            $table->integer('price');
            $table->string('image')->nullable();
            $table->float('discount')->default(0);
            $table->integer('quantity')->default(1);
            $table->string('category');
            $table->string('sub_category');
            $table->longText('description')->nullable();


            $table->integer('available_quantity')->default(1);

            $table->integer('updated_used_id')->nullable();

            //foreign keys
            $table->integer('customer_id');
            $table->integer('product_id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
