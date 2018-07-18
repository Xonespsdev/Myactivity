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
Route::group(['prefix'=>'/'], function(){
Route::get('/',['uses'=>'HomeController@index', 'as' =>'home']);
Route::get('/blog', 'Homecontroller@Blog')->name('home.page.blog');
Route::get('/about', 'Homecontroller@About')->name('home.page.about');
Route::get('/contact', 'Homecontroller@Contact')->name('home.page.contact');

});
