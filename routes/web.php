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
  return view('welcome');
});

//resource maps requests to CRUD functions
// Route::resource('posts', 'PostsController');

// Route::get('/posts', 'PostsController@index');

Route::get('/about', function () {
  return "About Page";
});

Route::get('/contact', 'PostsController@contact');

Route::get('/post/{id}/{name}', 'PostsController@showPost');

// Route::get('/post/{id}/{name}', function ($id, $name) {
//   return "This is post number " . $id . " and belongs to " . $name;
// });

//naming routes
Route::get('/admin/posts/example', array('as' => 'admin.home', function () {
  $url = route('admin.home');
  return "This is the route using naming routes: " . $url;
}));
