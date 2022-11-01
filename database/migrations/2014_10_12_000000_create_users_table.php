<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('name')->nullable();
            $table->string('phone_no')->unique()->nullable();
            $table->text('biography', '600')->nullable();
            $table->string('password');
            $table->enum('gender', ['male', 'female']);
            $table->enum('user_type', ['admin', 'moderator', 'supplier', 'customer']);
            $table->string('dob')->nullable();
            $table->text('address', '600')->nullable();

            $table->string('whatsapp')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();

            //Relations starts here:


            //Relations ENDs here

            $table->dateTime('last_login_time')->nullable();
            $table->string('last_login_place')->nullable();

            $table->integer('created_used_id')->nullable();
            $table->integer('updated_user_id')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
