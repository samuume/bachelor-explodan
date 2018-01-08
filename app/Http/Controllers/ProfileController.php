<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileFormRequest;
use App\Mail\ProfileContact;

class ProfileController extends Controller
{

  public function send(ProfileFormRequest $request) {
    \Mail::send(new ProfileContact());
    return \Redirect::route('tell')->with('message', 'Thanks for sharing with us!');
  }
}
