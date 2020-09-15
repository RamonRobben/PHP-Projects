<?php

// Main
Route::get('/', 'PageController@index');
Route::get('/camping/stats', 'PageController@index');

// Employees
Route::get('/employees', 'PageController@employees');

// Customers
Route::get('/customers', 'PageController@index');