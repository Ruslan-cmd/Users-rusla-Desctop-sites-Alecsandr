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
            //индексация для легкого вывода данных и хранение индексированных данных в оперативной памяти
            $table->unsignedBigInteger('dish_id')->index();
            $table->unsignedBigInteger('menu_section_id')->index();
            //внешний ключ, связка с первичным ключом другой базы
            $table->foreign('dish_id')
                ->references('id')
                ->on('dishes')
                //удаление записи из таблицы dishes удалит связанные данне в промежуточной таблице
                ->onDelete('cascade');
            $table->foreign('menu_section_id')
                ->references('id')
                ->on('menu_sections')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dish_menu_section');
    }
}
