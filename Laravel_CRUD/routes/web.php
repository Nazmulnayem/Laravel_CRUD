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
Route::post('/userinfo/Save', 'userinfoController@userinfoSave')->name('Save');
Route::get('/userinfo/manage', 'userinfoController@userinfomanage')->name('manage');
Route::get('/userinfo/delete/{id}', 'userinfoController@userinfodelete')->name('delete');
Route::get('/userinfo/edit/{id}', 'userinfoController@userinfoedit')->name('edit');
Route::post('/userinfo/update', 'userinfoController@userinfoupdate')->name('update');


