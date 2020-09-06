<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'name',
        'date',
        'time_start',
        'time_and',
        'person',
        'email',
        'phone',
    ];
    public $timestamps = false; //Указать, иначе появятся доп столбцы в базе данных
    protected $dates = [
        'date',
    ];  //Для работы формат с датой, распарсит и приведет к карбону
}
