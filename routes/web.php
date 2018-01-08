<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  $posts = App\Post::all();
  return view('frontpage', compact('posts'));
});

Route::get('/browse', function () {
  $posts = App\Post::all();
  return view('filterPage', compact('posts'));
})->name('browse');

Route::get('/about', function () {
  return view('aboutpage');
})->name('about');

Route::get('/contact', function () {
  return view('contact');
})->name('contact');
//Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@index'])->name('contact');
Route::post('contact', ['as' => 'contact_store', 'uses' => 'ContactController@send']);

Auth::routes();

Route::get('profile', 'UserController@profile')->name('profile');
Route::post('profile', 'UserController@update_avatar');

Route::get('/tell', function () {
  return view('subviews.tell');
})->name('tell');
Route::post('tell', ['as' => 'tell_store', 'uses' => 'ProfileController@send']);

//Facebook socailie login
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('s3-image-upload','S3ImageController@imageUpload');
Route::post('s3-image-upload','S3ImageController@imageUploadPost');

Route::get('/{slug}', function($slug){
  $post = App\Post::where('slug', '=', $slug)->firstOrFail();
  return view('singlePost', compact('post'));
});
