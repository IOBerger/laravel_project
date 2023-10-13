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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->integer('importance');
            $table->boolean('is_active');
        });
        Schema::create('sources', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('link');
            $table->boolean('is_active');
        });
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
            $table->unsignedBigInteger('category');
            $table->unsignedBigInteger('source');
            $table->boolean('is_active');
            $table->text('text');
            $table->foreign('category')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('source')->references('id')->on('sources')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('sources');
    }
};
