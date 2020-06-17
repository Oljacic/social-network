<?php

use Illuminate\Support\Facades\Route;

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
})->name('home');

Route::post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'user.signup'
]);

Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'user.signin'
]);


Route::get('/dashboard', 'UserController@getDashboard')->name('dashboard')->middleware('guest');




