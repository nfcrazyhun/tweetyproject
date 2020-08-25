<?php

use Illuminate\Support\Facades\Auth;
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
});
//Auth::loginUsingId(2);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/tweets', 'TweetController');
Route::post('/tweets/{tweet}/like', 'TweetLikesController@store');
Route::delete('/tweets/{tweet}/like', 'TweetLikesController@destroy');

Route::resource('/profiles', 'ProfileController', ['parameters' => ['profiles' => 'user']] ); //changed wildcard
Route::post('/profiles/{user:username}/follow','FollowController@store')->name('follow');
Route::get('/profiles/{user:username}/notifications','NotificationsController@index')->name('notifications.index');

Route::get('/explore', 'ExploreController')->name('explore'); //invocable
