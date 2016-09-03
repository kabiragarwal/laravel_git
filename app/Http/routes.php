<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
    return 'hello';
});


//brance issue-1 chanes
Route::get('test', function(){
    return 'hello';
});

//git master changes
Route::get('contact', function(){
    return 'hello';
});

//brance issue-1 chanes
Route::get('home', function(){
    return '123hello';
});

//git testing
Route::get('home13', function(){
    return 'this is git testing';
});

Route::resource('reports', 'ReportsController');
Route::resource('pages', 'PagesController');
