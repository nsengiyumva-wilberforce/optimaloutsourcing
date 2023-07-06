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
        Schema::create('jobs', function (Blueprint $table) {
            $table->string('job_id')->primary();
            $table->string('job_user_id');
            $table->foreign('job_user_id')->references('user_id')->on('users');
            $table->string('job_title');
            $table->string('location');
            $table->string('category');
            $table->text('description');
            $table->string('experience');
            $table->string('career_level');
            $table->string('employment_type');
            $table->string('salary_range');
            $table->unsignedInteger('application_count')->default(0);
            $table->boolean('published');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
