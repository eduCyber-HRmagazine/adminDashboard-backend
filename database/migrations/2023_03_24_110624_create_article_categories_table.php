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
        Schema::create('article_categories', function (Blueprint $table) {
            $table->id();
            $table->string('articleCategoryName');
            $table->string('subCategory')->unique();
            $table->string('slug')->unique();
            $table->boolean('hasComments');
            $table->boolean('hasSource');
            $table->boolean('hasYoutubeLink');
            $table->boolean('hasAuthor');
            $table->boolean('canModified');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_categories');
    }
};
