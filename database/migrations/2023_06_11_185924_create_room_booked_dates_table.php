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
        Schema::create('room_booked_dates', function (Blueprint $table) {
            $table->id();
            $table->integer('booking_id')->nullable();
            $table->integer('room_id')->nullable();
            $table->date('book_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_booked_dates');
    }
};
