<?php

Route::group(['prefix'=>'/admin'], function () {
	Route::get('/dashboard', 'Admincontroller@index')->name('admin.dashboard');
	Route::get('/profile', 'Admincontroller@Profile')->name('admin.dashboard.index');
	Route::get('/blog', 'Admincontroller@Blog')->name('admin.dashboard.blog');

});



// Route::name('admin')->group(function () {
//     Route::get('admin/dashboard', 'Admincontroller@index')->name('users');
// });