<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 300);
            $table->unsignedBigInteger('author_id');
            $table->longText('content')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->string('cover_image')->nullable()->default('default.png');
            $table->enum('status', ['unpublished', 'published'])->default('unpublished');
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('sn')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
