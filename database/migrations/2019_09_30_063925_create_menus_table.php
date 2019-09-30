<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('is_primary');
            $table->timestamps();
        });

        Schema::create('menu_items', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('type'); //url type, categories type or page type
            $table->string('url'); //absolute if type url and relative if other type
            $table->integer('order');

            $table->bigInteger('menu_id')->unsigned();
            $table->foreign('menu_id')->references('id')->on('menus');

            $table->bigInteger('parent')->unsigned()->nullable();
            $table->foreign('parent')->references('id')->on('menu_items');
            
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('menu_items');
        Schema::dropIfExists('menus');
    }
}
