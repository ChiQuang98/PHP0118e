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
Route::get('admin/category','Admin\\CategoryController@index');
//them moi danh muc
Route::get('admin/category/add','Admin\\CategoryController@create');
//luu tru danh muc
Route::post('admin/category/add','Admin\\CategoryController@store');
//link edit danh muc
Route::get('admin/category/{id}/edit','Admin\\CategoryController@edit');
//link update
Route::patch('admin/category/{id}','Admin\\CategoryController@update');
//link xoa
Route::patch('admin/category/{id}/delete','Admin\\CategoryController@destroy');
