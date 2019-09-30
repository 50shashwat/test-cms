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
            $table->bigIncrements('id');
            
            $table->bigInteger('author_id')->unsigned()->nullable()->default(0);
            $table->foreign('author_id')->references('id')->on('admins')->onDelete('cascade');

            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->datetime('posted_at');
            $table->timestamps();

            
            $table->index('title');
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
