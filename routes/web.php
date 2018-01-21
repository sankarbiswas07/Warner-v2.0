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

Route::get('/', 'pagesController@index');
Route::post('/student', 'studentsFeedController@store')->name('student.feed.submit');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('blogs', 'blogController');



Route::prefix('mentor')->group(function(){
    Route::get('/register', 'Auth\MentorLoginController@showSignupForm')->name('mentor.signup');
    Route::post('/register', 'Auth\MentorLoginController@signupFormSubmit')->name('mentor.signup.submit');

    Route::get('/login', 'Auth\MentorLoginController@showLoginForm')->name('mentor.login');
    Route::post('/login', 'Auth\MentorLoginController@login')->name('mentor.login.submit');
   

    Route::get('/', 'MentorController@index')->name('mentor.dashboard');
});