<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableReservationController extends Controller
{
  public function index(){
      //глобальная функция находится в глобальном пространстве имен
      Validator::make(\request()->only(
      [
          'name',
          'date',
          'time_period',
          'persons_count',
          'email',
          'phone',
      ]),
      [
          'name' =>'required',
          'date' =>'required',
          'time_period' =>'required',
          'persons_count' =>'required',
          'email' =>'required',
          'phone' =>'required',
      ], [
              'name.required' => 'Необходимо указать имя',
              'date.required' => 'Необходимо указать имя',
              'time_period.required' => 'Необходимо указать имя',
              'persons_count.required' => 'Необходимо указать имя',
              'email.required' => 'Необходимо указать имя',
              'phone.required' => 'Необходимо указать имя',
              ]);

  }
}
