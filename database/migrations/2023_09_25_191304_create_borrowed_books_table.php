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
        Schema::create('borrowed_books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('books_id'); 
            $table->unsignedBigInteger('users_id'); 
            $table->time('borrowed_date', $precision = 0);
            $table->time('return_date', $precision = 0);

            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('books_id')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowed_books');
    }
};
