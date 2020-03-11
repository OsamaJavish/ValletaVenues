<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('categories', 'VenueController@getCategories');

Route::get('get-venues', 'VenueController@getVenuesByCategory');
