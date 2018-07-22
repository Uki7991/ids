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


    Route::resource('post', 'PostController');

    Route::resource('comment', 'CommentController');

    Route::resource('service', 'ServiceController');

    Route::resource('worker', 'WorkerController');

    Route::resource('setting', 'SettingController');

    Route::resource('slide', 'SlideController');

    Route::resource('director', 'DirectorController')->only([
        'edit', 'update'
    ]);
});

Route::resource('post', 'PostController')->only([
    'index', 'show'
]);

Route::resource('comment', 'CommentController')->only([
    'index', 'show', 'store'
]);

Route::resource('service', 'ServiceController')->only([
    'index', 'show'
]);