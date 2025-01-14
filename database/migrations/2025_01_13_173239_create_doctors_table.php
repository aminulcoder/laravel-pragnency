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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            // $table->string('email');
            // $table->string('phone')->nullable();
            // $table->string('clinic')->nullable();
            // $table->string('dob')->nullable();
            // $table->string('specialization')->nullable();
            // $table->string('experience')->nullable();
            // $table->string('gender')->nullable();
            // $table->longText('description')->nullable();
            // $table->string('address')->nullable();
            // $table->string('country')->nullable();
            // $table->string('city')->nullable();
            // $table->string('postcode')->nullable();
            // $table->boolean('status')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
