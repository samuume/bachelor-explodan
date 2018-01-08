<?php

namespace App\Http\Controllers;

use App\Categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function __construct() {

    }

    public function index($id = null) {
      // Index for all users api
      $categories = Categories::all();
      return $categories;
    }

    public function show($id) {
      // User api by id
      $categories = Categories::find($id, array('id', 'name', 'slug'));
      return $categories;
    }

}
