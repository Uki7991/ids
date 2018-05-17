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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', function () {
        echo 'You have access!';
    });


    Route::resource('post', 'PostController')->except([
        'index', 'show'
    ]);

    Route::resource('comment', 'CommentController')->only([
        'destroy', 'update', 'edit'
    ]);
});

Route::resource('post', 'PostController')->only([
    'index', 'show'
]);

Route::resource('comment', 'CommentController')->except([
    'destroy', 'update', 'edit'
]);
