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
    return redirect('/posts');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', function () {
        echo 'You have access!';
    });

    Route::get('/admin/post/create', 'PostController@create');
    Route::get('/admin/post/edit/{id}', 'PostController@edit');
    Route::get('/admin/post/show/{id}', 'PostController@show');
    Route::get('/admin/posts', 'PostController@index');
    Route::post('/admin/post/store', 'PostController@store');
    Route::post('/admin/post/delete/{id}', 'PostController@delete');
    Route::post('/admin/post/update/{id}', 'PostController@update');
});

Route::get('/post/show/{post}', 'PostController@show');
Route::get('/posts', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::post('/post/store', 'PostController@store');
Route::get('/post/edit/{post}', 'PostController@edit');
Route::post('/post/update/{post}', 'PostController@update');
