<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;
    public $feedback;

   public function __construct($feedback)
   {
       $this->feedback = $feedback;
   }

    public function build()
    {
        //Необходимо для вывода на отдельной станице сообщения о доставке
        return $this->view('emails.feedback');
    }
}
