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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable(false);
            $table->string('author')->nullable(false);
            $table->text('content')->nullable(false);
            $table->string('category')->nullable(false);
            $table->string('keywords')->nullable(false);
            $table->string('image')->nullable(false);

            $table->integer('likes')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};