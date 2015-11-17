<?php

Route::get('/', function () {
    return view('welcome');
});

// Route::get('home', 'HomeController@index');

/**
 * Add route for auth
 */
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);