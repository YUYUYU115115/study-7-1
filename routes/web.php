<?php

/*
|--------------------------------------------------------------------------
| Web Routes
@@ -11,6 +10,9 @@
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@destroy');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store'); 
