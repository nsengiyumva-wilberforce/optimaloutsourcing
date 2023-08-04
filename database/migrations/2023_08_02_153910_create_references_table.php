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
        Schema::create('references', function (Blueprint $table) {
            $table->string('reference_id')->primary();
            $table->string('profile_id');
            $table->foreign('profile_id')->references('profile_id')->on('profiles');
            $table->string('full_name');
            $table->string('title_and_organization');
            $table->string('email');
            $table->string('phone_number');
            $table->string('relationship');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('references');
    }
};
