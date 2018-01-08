<?php

namespace App\Http\Controllers;
use App\Location;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{

  public function __construct() {

  }

  public function index($id = null) {
    // Index for all users api
    $location = Location::all();
    return $location;
  }

  public function show($id) {
    // User api by id
    $location = Location::find($id, array('id', 'city', 'country'));
    return $location;
  }
}
