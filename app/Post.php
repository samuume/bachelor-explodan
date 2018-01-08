<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
  use Searchable;

  public function user() {
    return $this->belongsTo('App\User', 'author_id', 'id');
  }

  public function categories() {
    return $this->belongsTo('App\Categories', 'category_id', 'id');
  }

  public function location() {
    return $this->belongsTo('App\Location', 'location_id', 'id');
  }

}
