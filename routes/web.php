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
//post -->post(''/{}) input/ngambil id dari name->(...); yang bakal di pakai terus
//get ->
