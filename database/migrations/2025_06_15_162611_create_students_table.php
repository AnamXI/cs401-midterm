<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {


        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('program')->comment("Student's Program");
            $table->string('enrollment_year', 4)->comment("Year student enrolled");
            $table->datetime('birthday')->comment("Student's Birthday");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('students');
    }
};
