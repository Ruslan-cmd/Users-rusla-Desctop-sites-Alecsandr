<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishMenuSectionTable extends Migration
{
    public function up()
    {
        Schema::create('dish_menu_section', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dish_id')->unsigned()->index();
            $table->foreign('dish_id')->references('id')->on('dishes')->onDelete('cascade');
            $table->integer('menu_section_id')->unsigned()->index();
            $table->foreign('menu_section_id')->references('id')->on('menu_sections')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dish_menu_section');
    }
}
