<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->string('profile_id')->primary();
            $table->string('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('title')->nullable();
            $table->string('cover_photo')->nullable();
            $table->string('profile_photo')->nullable();
            $table->string('location')->nullable();
            $table->string('email');
            $table->string('phone_number');
            $table->string('about_you')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
