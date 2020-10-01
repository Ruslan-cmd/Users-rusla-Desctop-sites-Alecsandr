<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableReservation extends Model
{
   protected  $guarded =[];
   protected $casts =[
       'persons_count' => 'integer',
       'date' =>'date',
   ];
}
