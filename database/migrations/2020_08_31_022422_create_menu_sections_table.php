<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('menu_sections', function (Blueprint $table) {
            $table->id();
            $table->string('section');
        });
    }
    public function down()
    {
        Schema::dropIfExists('menu_sections');
    }
}
