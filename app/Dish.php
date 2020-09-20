<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        'dish',
        'price',
    ];
    public $timestamps = false; //Указать, иначе sql выдаст ошибку при заполнении столбцов которых нет

    public function menuSections()
    {
        return $this->belongsToMany(MenuSection::class);
    }
    public function mainSection(){
        return $this->belongsTo(MainSection::class);
    }
}
