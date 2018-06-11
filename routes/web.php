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

Route::middleware(['auth'])->group(function(){
    //Roles {CRUD COMPLETO}
    Route::post('roles/store','RoleController@store')->name('roles.store')
        ->middleware('permission:roles.create');

    Route::get('roles','RoleController@index')->name('roles.index')
        ->middleware('permission:roles.index');

    Route::get('roles/create','RoleController@create')->name('roles.create')
        ->middleware('permission:roles.create');

    Route::put('roles/{role}','RoleController@update')->name('roles.update')
        ->middleware('permission:roles.edit');

    Route::put('roles/{role}','RoleController@show')->name('roles.show')
        ->middleware('permission:roles.show');

    Route::get('roles/{role}','RoleController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit','RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');
    //Usuarios {CRUD COMPLETO}
    //Roles {CRUD COMPLETO}
    Route::get('users','UserController@index')->name('users.index')
        ->middleware('permission:users.index');

    Route::get('users/create','UserController@create')->name('users.create')
        ->middleware('permission:users.create');

    Route::put('users/{role}','UserController@update')->name('users.update')
        ->middleware('permission:users.edit');

    Route::put('users/{role}','UserController@show')->name('users.show')
        ->middleware('permission:users.show');

    Route::get('users/{role}','UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');

    Route::get('users/{role}/edit','UserController@edit')->name('users.edit')
        ->middleware('permission:users.edit');

    //NOTICIAS {CRUD COMPLETO}
    Route::post('noticias/store','NoticiasController@store')->name('noticias.store')
        ->middleware('permission:noticias.create');

    Route::get('noticias','NoticiasController@index')->name('noticias.index')
        ->middleware('permission:noticias.index');

    Route::get('noticias/create','NoticiasController@create')->name('noticias.create')
        ->middleware('permission:noticias.create');

    Route::put('noticias/{role}','NoticiasController@update')->name('noticias.update')
        ->middleware('permission:noticias.edit');

    Route::put('noticias/{role}','NoticiasController@show')->name('noticias.show')
        ->middleware('permission:noticias.show');

    Route::get('noticias/{role}','NoticiasController@destroy')->name('noticias.destroy')
        ->middleware('permission:noticias.destroy');

    Route::get('noticias/{role}/edit','NoticiasController@edit')->name('noticias.edit')
        ->middleware('permission:noticias.edit');

});