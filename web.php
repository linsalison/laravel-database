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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/hai', function () {
    return "<h1>Hello</h1>";
});

Route::get('/users/{id}', function ($id) {
    return 'hai my id is'.$id;
});

Route::get('/about', function () {
    return view('Shares.about');
});

Route::get('/index', 'SharesController@index');
Route::get('/about', 'SharesController@about');
Route::get('/services', 'SharesController@service');


Route::get('/form', function () {
    return view('form');
});

Route::get('/create', function () {
    return view('Student.stud');
});
Route::resource('/book','BooksController');
Route::get('/sample', 'BooksController@sample');

Route::get('/create', function () {
    return view('Student.stud');
});
Route::resource('/student','StudentsController');
Route::get('/sample', 'StudentsController@sample');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
