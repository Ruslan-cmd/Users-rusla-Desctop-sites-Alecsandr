<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Validation\Validator;

class TableReservationController extends Controller
{

    public function store(){
        $this->validateRequest();
    }
  private function validateRequest(){
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
              'date.required' => 'Необходимо выбрать дату',
              'time_period.required' => 'Необходимо выбрать время',
              'persons_count.required' => 'Необходимо указать колличество персон',
              'email.required' => 'Необходимо указать email',
              'phone.required' => 'Необходимо указать телефон',
              ])->validate();

  }
}
