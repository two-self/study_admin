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
Route::get('test', 'AipOcrController@pictureCharacter');

Route::get('calendar', function (){
    return view('calendar');
});
Route::any('chart-showcase', function (){
    return view('chart-showcase');
});
Route::get('code-editor', function (){
    return view('code-editor');
});
Route::get('form-showcase', function (){
    return view('form-showcase');
});
Route::get('form-wizard', function (){
    return view('form-wizard');
});
Route::get('gallery', function (){
    return view('gallery');
});
Route::get('grids', function (){
    return view('gridst');
});
Route::get('icons', function (){
    return view('icons');
});
Route::get('index', function (){
    return view('index');
});
Route::get('new-user', function (){
    return view('new-user');
});
Route::get('personal-info', function (){
    return view('personal-info');
});
Route::get('signin', function (){
    return view('signin');
});
Route::get('signup', function (){
    return view('signup');
});
Route::get('tables', function (){
    return view('tables');
});
Route::get('ui-elements', function (){
    return view('ui-elements');
});
Route::get('user-list', function (){
    return view('user-list');
});
Route::get('user-profile', function (){
    return view('user-profile');
});

