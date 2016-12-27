<?php
//ini buat route admin
//daftarin di RouteServiceProvider.php nama file ini (/file route baru)
Route::group(['namespace' => 'admin','prefix' => 'admin'], function () {
    Route::resource('articles', "ArticleController", ['as'=> "admin"]);
});
