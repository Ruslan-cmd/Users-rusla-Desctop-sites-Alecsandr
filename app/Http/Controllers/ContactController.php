<?php

namespace App\Http\Controllers;
use Composer\EventDispatcher\Event;
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
        $fromEmail = Contact::query()
            ->pluck('email')
            ->last();
        $name = Contact::query()
            ->pluck('name')
            ->last();

        $toEmail = "progectruslan@gmail.com";
        Mail::to($toEmail)->send(new MailClass($name));
        Mail::to($fromEmail)->send(new MailClass('Спасибо за обращение, ваша заявка взята в работу '));
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

}
