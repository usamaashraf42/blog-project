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

Route::get('/','PublicController@index');
Route::get('about','PublicController@about')->name('about');
Route::get('contact','PublicController@contact')->name('contact');
Route::get('post/{id}','PublicController@post')->name('post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function(){
    Route::get('dashboard', 'AdminController@index')->name('admindashboard');
});
Route::prefix('user')->group(function(){
    Route::get('dashboard','UserController@index')->name('userdashboard');
    Route::get('comment','UserController@comment')->name('usercomment');
    Route::get('profile','UserController@profile')->name('profile');
    Route::post('post/profile','UserController@postprofile')->name('post_profile');
    Route::post('password/change','UserController@postpassword')->name('password');
});
Route::prefix('auther')->group(function(){
    Route::get('dashboard', 'AutherController@index')->name('autherdashboard');
    Route::get('comment', 'AutherController@comment')->name('authercomment');
    Route::get('post', 'AutherControllex@auther')->name('autherpost');
});
