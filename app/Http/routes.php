<?php

Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');

Route::get('reviews', 'ReviewsController@index');