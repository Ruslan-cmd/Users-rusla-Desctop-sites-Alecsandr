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

}