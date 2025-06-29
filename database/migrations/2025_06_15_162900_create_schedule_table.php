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

        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('day_of_the_week', 10)->comment('Class Day');
            $table->datetime('time_slot')->comment('Class Time Slot');
            $table->string('room', 20)->comment('Room where class is');
            $table->integer('term')->comment('Term Number');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('schedules');
    }
};
