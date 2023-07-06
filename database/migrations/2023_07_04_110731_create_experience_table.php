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
        Schema::create('experience', function (Blueprint $table) {
            $table->string('experience_id')->primary();
            $table->string('profile_id');
            $table->foreign('profile_id')->references('profile_id')->on('profiles');
            $table->string('job_title');
            $table->string('company_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('job_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience');
    }
};
