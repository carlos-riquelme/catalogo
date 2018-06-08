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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'admin'], function() {
    //
    Route::resource('admin/users', 'AdminUsersController');
    Route::resource('admin/authors', 'AdminAuthorsController');
    Route::resource('admin/titles', 'AdminTitlesController');
    Route::resource('admin/teachers', 'AdminTeachersController');

    Route::get('/admin', function(){


        return view('admin.index');
    
});

});





    //Deprecado
    // Route::get('admin/users', 'AdminUsersController@index');
    // Route::get('admin/users', 'AdminUsersController@store');
    // Route::get('admin/users/create', 'AdminUsersController@create')->name('admin.users.create');
    // Route::get('admin/users/{id}/edit', 'AdminUsersController@edit')->name('admin.users.edit');
    // Route::get('admin/users/{id}', 'AdminUsersController@update')->name('admin.users.update');
    // Route::get('admin/users/{id}', 'AdminUsersController@destroy')->name('admin.users.destroy');
    // Route::get('admin/users/{id}', 'AdminUsersController@show')->name('admin.users.show');


    
    


