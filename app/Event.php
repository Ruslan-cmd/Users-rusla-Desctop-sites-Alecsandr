<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}



