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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('body');
            $table->integer('user_id')->references('id')->on('users');
            $table->integer('category')->references('id')->on('categories');
            $table->boolean('is_collection');
            $table->integer('tag_1')->references('id')->on('tags');
            $table->integer('tag_2')->references('id')->on('tags');
            $table->integer('tag_3')->references('id')->on('tags');
            $table->integer('tag_4')->references('id')->on('tags');
            $table->integer('tag_5')->references('id')->on('tags');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
