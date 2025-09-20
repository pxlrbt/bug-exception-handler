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
        Schema::create('a', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('a_b', function (Blueprint $table) {
            $table->id();
            $table->foreignId('a_id')->constrained('a')->onDelete('cascade');
            $table->foreignId('b_id')->constrained('b')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('b', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }
};
