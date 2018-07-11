<?php

Route::get('/', function () {
    return redirect()->route('home');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add', 'HomeController@add')->name('add');
Route::get('/editor', 'HomeController@editor')->name('editor');

// Route::post('/home', 'HomeController@store')->name('store');

// Route::get('/editor', 'HomeController@editor')->name('editor');
// Route::post('/editor', 'HomeController@writeHtml')->name('write_html');

// Route::get('/instagram', 'PublicSiteController@index');
// Route::get('/instagram2', 'PublicSiteController@event');
// Route::get('/instagram3', 'PublicSiteController@hotel');
// Route::get('/instagram4', 'PublicSiteController@magazine');
// Route::get('/instagram5', 'PublicSiteController@restaurant');
// Route::get('/instagram6', 'PublicSiteController@travel');
// Route::get('/instagram7', 'PublicSiteController@wedding');

// Route::get('/pera',function(){
//     return view('welcome');
// });

// Route::get('writehtml', 'PublicSiteController@writehtml')->name('writehtml');
// Route::get('/getinsta', 'PublicSiteController@getInstagramInfos');