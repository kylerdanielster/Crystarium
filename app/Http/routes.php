<?php

Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');

Route::get('reviews', 'ReviewsController@index');
Route::get('reviews/create', 'ReviewsController@create');
Route::get('reviews/{id}', 'ReviewsController@show');
Route::post('reviews', 'ReviewsController@store');
