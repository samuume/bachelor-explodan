<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Categories;
use App\Location;
use App\File;
use App\Http\Requests;
use Auth;

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct() {

    }

    public function index() {
      // Index for all users api
      $posts = Post::with('user', 'categories', 'location')->get();
      return $posts;
    }
    public function show($id) {
      // User api by id
      $post = Post::find($id, array('id', 'title', 'body', 'image', 'status', 'featured', 'created_at', 'updated_at', 'price', 'extra_image_one', 'extra_image_two', 'travel_session', 'est_time', 'stars'));
      return $post;
    }
    public function profile() {
      return view('profile', array('user' => Auth::user()) );
    }

}
