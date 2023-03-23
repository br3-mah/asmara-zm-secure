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
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('guests_id')->nullable();
            $table->unsignedInteger('rooms_id')->nullable();
            $table->string('reservation_code')->nullable();
            $table->string('reservation_date')->nullable();
            $table->string('checkin_date')->nullable();
            $table->string('checkout_date')->nullable();
            $table->integer('num_adults')->nullable();
            $table->integer('num_children')->nullable();
            $table->text('special_requests')->nullable();
            $table->integer('is_confirmed')->default(0);
            $table->string('confirmation_date')->nullable();
            $table->string('cancellation_date')->nullable();
            $table->integer('is_cancelled')->default(0);
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
