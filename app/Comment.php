<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name',
        'profession',
        'comment',
        'rating',
    ];
    public $timestamps = false; //Указать, иначе появятся доп столбцы в базе данных
}
