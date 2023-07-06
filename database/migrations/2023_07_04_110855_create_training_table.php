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
        Schema::create('training', function (Blueprint $table) {
            $table->string('training_id')->primary();
            $table->string('profile_id');
            $table->foreign('profile_id')->references('profile_id')->on('profiles');
            $table->string('training_title');
            $table->string('training_institution');
            $table->date('training_start_date');
            $table->date('training_end_date');
            $table->string('training_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training');
    }
};
