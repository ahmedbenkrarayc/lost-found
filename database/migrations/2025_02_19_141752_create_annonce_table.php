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
        Schema::create('annonce', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('cover');
            $table->dateTime('date');
            $table->string('place');
            $table->string('phone');
            $table->string('type');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('users_id');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonce');
    }
};
