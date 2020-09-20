<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainSection extends Model
{
    protected $fillable = [
        'name_of_main_section',
    ];
     public $timestamps = false; //Указать, иначе появятся доп столбцы в базе данных

     public function dishes(){
     return $this->hasMany(Dish::class);
 }
}
