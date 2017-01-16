<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*
Route::get('home', function () {
    return view('home');
})->name('home');

*/
Route::get('/', "HomeController@index");

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('profile/{id}', "HomeController@profile")->name('id_org');
Route::get('contact', "HomeController@contact")->name('contact');
Route::post('contact', "HomeController@contact_submit")->name('contact_submit');

Route::resource('articles', "ArticleController");
Route::resource('reporter', "ReporterController");
Route::resource('images', "ImageController");
Route::resource('comment', "CommentController");

Route::post('upload', "ImageController@store")->name('uploadstore');
Route::get('image', "ImageController@index")->name('viewimage');
Route::get('commentimage/{id}', "ImageController@show")->name('detailimage');
Route::get('updateimage/{id}/edit', "ImageController@update")->name('updateimage');
Route::get('export/{id}', "ImageController@exportexcel")->name('export');

Route::post('getimport', "ImageController@importtexcel")->name('getimport');

Route::get('signup', 'UsersController@signup')->name('signup');
Route::post('signup', 'UsersController@signup_store')->name('signup.store');

Route::get('login', 'SessionsController@login')->name('login');
Route::post('login', 'SessionsController@login_store')->name('login.store');
Route::get('logout', 'SessionsController@logout')->name('logout');

Route::get('forgot-password', 'ReminderController@create')->name('reminders.create');
Route::post('forgot-password', 'ReminderController@store')->name('reminders.store');
Route::get('reset-password/{id}/{token}', 'ReminderController@edit')->name('reminders.edit');
Route::post('reset-password/{id}/{token}', 'ReminderController@update')->name('reminders.update');

//post -->post(''/{}) input/ngambil id dari name->(...); yang bakal di pakai terus
//get ->
