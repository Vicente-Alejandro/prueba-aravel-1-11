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
            $table -> id();
            $table -> string('name', 50);
            $table -> string('slug', 85);
            $table -> text('description');
            $table -> text('content')->nullable(true);
            $table -> string('image', 255)->nullable(true);
            $table -> enum('status', ['PUBLISHED', 'DRAFT'])->default('DRAFT');
            $table -> timestamps();

            $table -> foreignId('category_id') -> references('id') -> on('categories') -> onDelete('cascade');
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

