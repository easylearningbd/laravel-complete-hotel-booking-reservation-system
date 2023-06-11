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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('rooms_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('check_in')->nullable();
            $table->string('check_out')->nullable();
            $table->string('persion')->nullable();
            $table->string('number_of_rooms')->nullable();

            $table->float('total_night')->default(0);
            $table->float('actual_price')->default(0);
            $table->float('subtotal')->default(0);
            $table->integer('discount')->default(0);
            $table->float('total_price')->default(0);

            $table->string('payment_method')->nullable();
            $table->string('transation_id')->nullable();
            $table->string('payment_status')->nullable();

            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable(); 
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('address')->nullable();

            $table->string('code')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
