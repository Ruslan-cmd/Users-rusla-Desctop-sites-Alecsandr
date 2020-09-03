<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuSection extends Model
{
    protected $fillable = [
        'section',
    ];
    public $timestamps = false; //Указать, иначе появятся доп столбцы в базе данных

    public function dishes()
    {
        return $this->belongsToMany(Dish::class);
    }
}
