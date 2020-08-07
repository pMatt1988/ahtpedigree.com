<?php
Route::get('/', "AdminController@index");

/**
 * Edit USERS
 */
Route::get('users', 'EditUsersController@index');
//Route::get('users/{id}', 'EditUsersController@show');
Route::get('users/{id}/edit', 'EditUsersController@edit');
Route::post('users/{id}', 'EditUsersController@update');

Route::get('dogs/{id}', 'AdminController@showdog');
Route::get('dogs/{id}/history', 'AdminController@history');
Route::get('dogs/history/{id}', 'AdminController@showhistory');
Route::get('dogs/history/{id}/delete', 'AdminController@deletehistory');
Route::get('dogs/history/{id}/restore', 'AdminController@restorehistory');


