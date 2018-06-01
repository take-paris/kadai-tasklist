<?php


Route::resource('messages', 'TasksController');

Route::get('/', 'TasksController@index');
