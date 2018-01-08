<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProfileContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
      return $this->view('mails.profilemail')->with(
        [
          'name' => $request->name,
          'email_address' => $request->email_address,
          'categories' => $request->categories,
          'city' => $request->city,
          'country' => $request->country,
          'travel_session' => $request->travel_session,
          'est_time' => $request->est_time,
          'title' => $request->title,
          'img1' => $request->img1,
          'excerpt' => $request->excerpt,
          'img2' => $request->img2,
          'msg' => $request->msg,
          'img3' => $request->img3,
        ]
        )->to('explodanmail@gmail.com');
    }
}
