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
            $table->string('product_name');
            $table->integer('price');
            $table->enum('category', ['men', 'women', 'kids', 'cosmetics', 'shoes']);
            $table->enum('accessories', ['true', 'false'])->default('false');
            $table->enum('type', ['casual', 'formal', 'sports'])->nullable();
            $table->longText('description')->nullable();
            $table->string('image', '600')->nullable();
            $table->float('discount')->nullable();
            $table->text('address', '600')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('email');
            $table->integer('quantity');
            $table->integer('available_quantity');
            $table->string('customer_name');

            // $table->string('country');
            // $table->string('color');
            // $table->string('size');

            $table->integer('updated_used_id')->nullable();

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
