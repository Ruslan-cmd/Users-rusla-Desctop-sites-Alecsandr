<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
   public function send(){
//message - обязательный параметр
       Mail::send(['text' => 'mail'],['name', 'Web dev blog'], function($message){

           $message->to('progectruslan@gmail.com','To Web dev blog')->subject('Test email');
           $message->from('progectruslan@gmail.com','Web dev blog');
       });

   }
}
