<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {

        return view('layouts/contact_form',  [
            $this->store(),
        ]);
    }
    public function store()
    {
        $this->validateRequest();
        Contact::create(\request()->only(
            [
                'name',
                'email',
                'message',
            ]));
        //with - с каким сообщением нужно вернуться
        return redirect()->back('#reservation_table_form')->with('Reservation_status','Спасибо! Мы свяэемся с вами как можно скорее...');
    }

    private function validateRequest(){
        //глобальная функция находится в глобальном пространстве имен
        Validator::make(\request()->only(
            [
                'name',
                'email',
                'message',
            ]),
            [
                'name' =>'required',
                'email' =>'required',
                'message' =>'required',
            ], [
                'name.required' => 'Необходимо указать имя',
                'email.required' => 'Необходимо указать email',
                'message' => 'Поле сообщения не может быть пустым',
            ])->validate();
    }
}
