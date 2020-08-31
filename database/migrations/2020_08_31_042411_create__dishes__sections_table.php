<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('_dishes__sections', function (Blueprint $table) {
            $table->integer('menu_sections_id')->unsigned();
            $table->integer('dishes_id')->unsigned();
            $table->foreign('menu_sections_id')->references('id')->on('menu_sections')
                ->onDelete('cascade');
            $table->foreign('dishes_id')->references('id')->on('dishes')
                ->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('_dishes__sections');
    }
}
