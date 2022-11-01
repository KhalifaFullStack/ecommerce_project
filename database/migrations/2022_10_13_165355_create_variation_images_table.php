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
        Schema::create('variation_images', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->enum('color_availability', ['yes', 'no']);
            //to be improved by making the user able to add their colors

            $table->string('orange')->nullable();
            $table->string('yellow')->nullable();
            $table->string('red')->nullable();
            $table->string('green')->nullable();
            $table->string('blue')->nullable();
            $table->string('gray')->nullable();
            $table->string('cyan')->nullable();
            $table->string('pink')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variation_images');
    }
};
