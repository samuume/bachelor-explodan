<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\File;
use App\Http\Requests;
use Auth;
use Illuminate\Http\Request;
use Image;

class UserController extends Controller
{
    public function __construct() {

    }

    public function index($id = null) {
      // Index for all users api
      $users = User::all();
      return $users;
    }
    public function show($id) {
      // User api by id
      $users = User::find($id, array('id', 'name', 'email', 'avatar'));
      return $users;
    }

    public function profile() {
      return view('profile', array('user' => Auth::user()));
    }

    public function update_avatar(Request $request) {

      if($request->hasFile('avatar')) {
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename) );

        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();
      }

      return view('profile', array ('user' => Auth::user()) );

    }

}
