<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_section extends Model
{
    protected $fillable = [
        'section',
    ];
    public $timestamps = false; //Указать, иначе появятся доп столбцы в базе данных

    public function dishes()
    {
        return $this->belongsToMany('App\Dish','_dish__menu__section','Menu_section_id','Dish_id');
    }
}
