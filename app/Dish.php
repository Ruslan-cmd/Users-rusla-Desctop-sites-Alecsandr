<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        'dish',
        'price',
    ];
    public $timestamps = false; //Указать, иначе появятся доп столбцы в базе данных

    public function menu_sections()
    {
        return $this->belongsToMany('App\Menu_section','_dish__menu__section','Dish_id','Menu_section_id');
    }
}
