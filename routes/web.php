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
Route::get('/home', 'HomeController@showHome')->name('showHome');

Route::get('/register', 'RegisterController@showRegister')->name('showRegister');
Route::post('/register', 'RegisterController@handleRegister')->name('handleRegister');

Route::post('/login', 'LoginController@handleLogin')->name('handleLogin');

Route::get('/logout', 'LogoutController@handleLogout')->name('handleLogout');

Route::get('/myspace', 'MySpaceController@showmySpace')->name('showmySpace')->middleware('auth');

Route::get('/personnal-information', 'PersonnalInformationController@showPersonnalInformation')->name('showPersonnalInformation')->middleware('auth');
Route::get('/personnal-information-form', 'PersonnalInformationController@showPersonnalInformationForm')->name('showPersonnalInformationForm')->middleware('auth');
Route::post('/personnal-information', 'PersonnalInformationController@updatePersonnalInformation')->name('updatePersonnalInformation')->middleware('auth');

Route::get('/pictures', 'PicturesController@showPictures')->name('showPictures')->middleware('auth');
Route::post('/pictures', 'PicturesController@handlePictures')->name('handlePictures')->middleware('auth');
Route::get('/pictures/{id}', 'PicturesController@deletePicture')->name('deletePicture')->middleware('auth');

Route::get('/personnal-messages', 'MessagesController@showMessages')->name('showMessages')->middleware('auth');

Route::get('/users', 'UserController@showUsers')->name('showUsers')->middleware('auth');
Route::get('/message-form/{id}', 'UserController@messageForm')->name('messageForm')->middleware('auth');

Route::post('/personnal-messages', 'MessagesController@sendMessage')->name('sendMessage')->middleware('auth');



