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
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('room_number')->nullable();
            $table->unsignedInteger('room_types_id')->nullable();
            $table->unsignedInteger('modified_by')->nullable();
            $table->integer('num_adult')->nullable();
            $table->integer('num_children')->nullable();
            $table->string('bed_type')->nullable();
            $table->integer('occupancy')->nullable();
            $table->integer('is_available')->nullable();
            $table->string('image_path')->nullable();
            $table->float('price', 9, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
