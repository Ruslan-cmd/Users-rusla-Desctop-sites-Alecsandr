<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailClass;

class ContactController extends Controller
{

    public function store()
    {
        $this->validateRequest();
        Contact::create(\request()->only(
            [
                'name',
                'email',
                'message',
            ]));

        $comment = Contact::query()
        ->pluck('message')
        ->last();
        $toEmail = "bakautovalex@gmail.com";
        Mail::to($toEmail)->send(new MailClass($comment));
        return redirect()->back()->with('Contact_status','Спасибо! Ваше обращение отправлено на адрес: '. $toEmail);
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
                'message.required' => 'Поле сообщения не может быть пустым',
            ])->validate();
    }
    public function send()
    {
        $comment = 'Это сообщение отправлено из формы обратной связи';
        $toEmail = "progectruslan@gmail.com";
        Mail::to($toEmail)->send(new MailClass($comment));
        return 'Сообщение отправлено на адрес ' . $toEmail;
    }
}
