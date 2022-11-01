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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', '400');
            $table->integer('price');
            $table->enum('category', ['men', 'women', 'kids', 'cosmetics', 'shoes']);
            $table->enum('accessories', ['true', 'false'])->default('false');
            $table->enum('type', ['casual', 'formal', 'sports'])->nullable();
            $table->longText('description')->nullable();
            $table->string('image', '600')->nullable();
            $table->string('hover_image', '600')->nullable();
            $table->float('discounts')->nullable();

            $table->integer('supplier_id')->nullable();
            $table->integer('variation_id')->nullable();

            $table->integer('created_used_id')->nullable();
            $table->integer('updated_user_id')->nullable();


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
        Schema::dropIfExists('products');
    }
};
