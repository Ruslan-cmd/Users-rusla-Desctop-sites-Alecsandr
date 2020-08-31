<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishMenuSectionTable extends Migration
{
    public function up()
    {
        Schema::create('_dish__menu__section', function (Blueprint $table) {
            $table->integer('Dish_id');
            $table->integer('Menu_section_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('_dish__menu__section');
    }
}
