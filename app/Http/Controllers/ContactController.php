<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Mail\Sendmail;

class ContactController extends Controller
{
   public function index() {
     return view('contact');
   }
   public function send(ContactFormRequest $request) {
     \Mail::send(new Sendmail());
     return \Redirect::route('contact')->with('message', 'Thanks for the message, we will back at you shortly!');
   }
}
