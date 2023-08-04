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
        Schema::create('certificates', function (Blueprint $table) {
            $table->string('certificate_id')->primary();
            $table->string('profile_id');
            $table->foreign('profile_id')->references('profile_id')->on('profiles');
            $table->string('certificate_name');
            $table->date('date_of_certification');
            $table->string('certificate_attachment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
