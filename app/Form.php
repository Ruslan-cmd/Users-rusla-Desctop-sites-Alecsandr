<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'name',
        'date',
        'time_start',
        'time_end',
        'person',
        'email',
        'phone',
    ];
    public $timestamps = false; //Указать, иначе появятся доп столбцы в базе данных
    protected $dates = [
        'date',
    ];  //Для работы формат с датой, распарсит и приведет к карбону
}
