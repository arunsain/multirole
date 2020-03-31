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

Route::prefix('admin')->namespace('Auth\admin')->group(function(){

 	 Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
        Route::post('login', 'LoginController@login');
        Route::post('logout', 'LoginController@logout')->name('admin.logout');

        //forgot password 

         Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
        Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');
        Route::post('password/reset', 'ResetPasswordController@reset')->name('admin.password.update');

         Route::get('register', 'RegisterController@showRegistrationForm')->name('admin.register');
        Route::post('register', 'RegisterController@register');


});

Route::prefix('admin')->namespace('admin')->group(function(){

 	 Route::get('dashboard', 'DashboardController@index');
      //  Route::post('login', 'Auth\admin\LoginController@login');
      //  Route::post('logout', 'Auth\admin\LoginController@logout')->name('admin.logout');


});


Route::prefix('user')->namespace('user')->group(function(){

 	 Route::get('dashboard', 'DashboardController@index');
      //  Route::post('login', 'Auth\admin\LoginController@login');
      //  Route::post('logout', 'Auth\admin\LoginController@logout')->name('admin.logout

 	 });

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
