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
        Schema::create('applications', function (Blueprint $table) {
            $table->string('application_id')->primary();
            $table->string('job_id');
            $table->foreign('job_id')->references('job_id')->on('jobs');
            $table->string('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->string('resume');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
