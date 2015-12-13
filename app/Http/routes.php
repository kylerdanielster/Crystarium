<?php

Route::get('/', 'PagesController@index');

Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');

Route::get('gallery', 'PagesController@imgGallery');

//Route::get('reviews', 'ReviewsController@index');
//Route::get('reviews/create', 'ReviewsController@create');
//Route::get('reviews/{id}', 'ReviewsController@show');
//Route::post('reviews', 'ReviewsController@store');

Route::resource('reviews', 'ReviewsController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

