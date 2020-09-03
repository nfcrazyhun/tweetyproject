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

//guest routes
Route::get('/home', 'HomeController@index')->name('home');


Route::middleware('auth')->group(function () {
    //explore
    Route::get('/explore', 'ExploreController')->name('explore'); //invocable

    //show user
    Route::resource('/profiles', 'ProfileController', ['parameters' => ['profiles' => 'user']])->only('show'); //show profile

    //tweet
    Route::resource('/tweets', 'TweetController');
    Route::post('/tweets/{tweet}/like', 'TweetLikesController@store');
    Route::delete('/tweets/{tweet}/like', 'TweetLikesController@destroy');

    //follow
    Route::post('/profiles/{user:username}/follow', 'FollowController@store')->name('follow');

    //----Profile group----
    Route::middleware('can:edit,user')->group(function () {
        //notification
        Route::get('/profiles/{user:username}/notifications', 'NotificationsController@index')->name('notifications.index');

        //profile except show
        Route::resource('/profiles', 'ProfileController', ['parameters' => ['profiles' => 'user']])->except('show'); //changed wildcard

        //remove asset
        Route::get('/profiles/{user:username}/edit/remove/{asset}', 'ProfileAssetController@destroy');
    });
    //----Profile group end----

});
