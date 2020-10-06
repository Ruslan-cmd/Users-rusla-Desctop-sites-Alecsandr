<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailClass;
class MailController extends Controller
{
    /*  public function send(){
   //message - обязательный параметр
          Mail::send(['text' => 'mail'],['name', 'Web dev blog'], function($message){

              $message->to('progectruslan@gmail.com','To Web dev blog')->subject('Test email');
              $message->from('progectruslan@gmail.com','Web dev blog');
          });

      }
   }*/
    public function send()
    {
        $comment = 'Это сообщение отправлено из формы обратной связи';
        $toEmail = "progectruslan@gmail.com";
        Mail::to($toEmail)->send(new MailClass($comment));
        return 'Сообщение отправлено на адрес ' . $toEmail;
    }
}
