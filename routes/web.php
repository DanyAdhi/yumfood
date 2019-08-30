<?php

Route::get('/', function () {
    return view('welcome');
});


//======Route Vendor======//
Route::post('/vendor', "VendorsController@store");
Route::get('/vendors', "VendorsController@index");
Route::get('/vendor/{idVendor}', "VendorsController@show");
Route::delete('/vendor/{idVendor}', "VendorsController@destroy");
Route::put('/vendor/{idVendor}', "VendorsController@update");

//======Route Menu======//
Route::get('/menus',"MenuController@all");
Route::get('/menu/{idVendor}',"MenuController@index");
Route::get('/menu/{idVendor}/{idMenu}', "MenuController@show");

//======Route Order======//
Route::get('/order', "OrdersController@index");
Route::post('/order', "OrdersController@store");