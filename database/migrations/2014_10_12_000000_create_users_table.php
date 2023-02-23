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
            $table->string('username')->unique();
            $table->string('name')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('cover_pic')->nullable();
            $table->string('phone_no')->unique()->nullable();
            $table->longText('biography')->nullable();
            $table->string('password');
            $table->enum('gender', ['male', 'female']);
            $table->enum('user_type', ['admin', 'moderator', 'supplier', 'customer']);
            $table->string('dob');
            $table->longText('address')->nullable();
            $table->enum('status', ['inactive', 'active', 'blocked'])->default('active');

            $table->string('whatsapp')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();

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
