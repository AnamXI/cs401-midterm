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

        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->comment('Class Subject')->max(50);
            $table->string('course_code')->comment('Class Course Code')->max(10);
            $table->integer('credits')->comment('Amount of credits in the class');
            $table->string('description')->comment('Class Description');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('classes');
    }
};
