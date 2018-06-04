<?php


Route::resource('tasks', 'TasksController');

Route::get('/', 'TasksController@index');
