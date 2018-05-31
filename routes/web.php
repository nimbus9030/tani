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

// use App;
// use App\Tag;

// use TagController;

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('home');
});

// Route::get('/instagram', function () {
//     // $tag_table = App\Tag::class;
//     // $tag = $tag_table::first()['url'];
//     // return view('instagram2', ['tag' => $tag]);
//     // return view('instagram');
// });

// Route::get('/instagram', 'HomeController@insta')->name('insta');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@store')->name('store');

Route::get('/instagram', 'PublicSiteController@index')->name('public');
Route::get('/instagram2', 'PublicSiteController@event')->name('public');
Route::get('/instagram3', 'PublicSiteController@hotel')->name('public');
Route::get('/instagram4', 'PublicSiteController@magazine')->name('public');
Route::get('/instagram5', 'PublicSiteController@restaurant')->name('public');
Route::get('/instagram6', 'PublicSiteController@travel')->name('public');
Route::get('/instagram7', 'PublicSiteController@wedding')->name('public');

// Route::get('/getinsta', 'PublicSiteController@getInstagramInfos');