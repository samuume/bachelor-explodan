<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Sendmail extends Mailable
{
   use Queueable, SerializesModels;

   /**
    * Create a new message instance.
    *
    * @return void
    */
   public function __construct()
   {

   }

   /**
    * Build the message.
    *
    * @return $this
    */
   public function build(Request $request)
   {
       return $this->view('mails.email')->with(
         [
           'name' => $request->name,
           'email_address' => $request->email_address,
           'msg' => $request->msg,
         ]
         )->to('explodanmail@gmail.com');
   }
}
