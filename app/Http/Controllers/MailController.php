<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailClass;
class MailController extends Controller
{
    public function send()
    {
        $comment = 'Это сообщение отправлено из формы обратной связи';
        $toEmail = "progectruslan@gmail.com";
        Mail::to($toEmail)->send(new MailClass($comment));

        return 'Сообщение отправлено на адрес ' . $toEmail;
    }
}
