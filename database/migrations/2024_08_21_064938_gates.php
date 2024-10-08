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
        Schema::create('gates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id');
            $table->integer('total')->default(1);
            $table->timestamps();

            $table->foreign('book_id')->references('id')->on('books');
        });
    }   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
