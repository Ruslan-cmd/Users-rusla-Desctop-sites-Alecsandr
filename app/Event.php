<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Spatie\MediaLibrary\HasMedia\HasMedia;
//use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Event extends Model
{
    protected $fillable = [
        'title',
        'date',
        'time_start',
        'time_end',
        'description',
        'organizer',
        'price',
        'phone',
        'email',
    ];
    /* protected $guarded = []; Равносильно $fillable для всех полей */
    public $timestamps = false; //Указать, иначе появятся доп столбцы в базе данных
    protected $dates = [
      'date',
    ];  //Для работы функции format с датой
       //т.к.обращение идет к строке, и date является строкой
    //а у строки нет метода format
    //laravel рачпарсит и приведет к экземпляру Carbon
}



