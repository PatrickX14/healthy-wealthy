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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('foodname');
            $table->string('foodkcal');
            $table->string('foodcategory');
            $table->string('disease')->uniqid();
            $table->longText('foodingr');
            $table->longText('foodrecipe');
            $table->string('video');
            $table->string('picture');
            $table->string('refer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
