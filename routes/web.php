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

/*
Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/', function()
{
	return Cache::get( 'videoList' );
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/switchlang', 'Web\HomeController@language');
Route::get('/lang/{locale}', 'Web\HomeController@lang');

Route::get('/', 'Web\HomeController@index');
//Route::get('/language', 'Web\HomeController@language');
Route::post('/contactus', 'Web\ContactController@Contectus')->name('contactus');
Route::get('/contact', 'Web\ContactController@index')->name('contact');

Route::any('/search', 'Web\HomeController@search')->name('search');

Route::get('/post/{cat_id}/{slug}','Web\HomeController@post')->name('post.showPost');
Route::get('/{y}/{m}/{d}/{slug}','Web\HomeController@post')->name('post.showPost');
Route::get('/tags/{cat_id}/{slug}','Web\HomeController@tags')->name('post.tags');

Route::post('/subscribe', 'Web\HomeController@subscribe')->name('subscribe');

Route::get('/campaigns', 'Web\HomeController@CAMPAIGNS')->name('campaigns');
Route::get('/news', 'Web\HomeController@news')->name('news');
Route::get('/releases', 'Web\HomeController@releases')->name('releases');
Route::get('/about', 'Web\HomeController@about')->name('about');

Route::get('/get-involved', 'Web\HomeController@shareus')->name('get-involved');
Route::get('/donate', 'Web\HomeController@tabaraa')->name('donate');


