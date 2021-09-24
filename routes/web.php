<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', 'TodoController@index')->name('todo.index');

Route::get('/todos/create', 'TodoController@create');

Route::post('/todos/create', 'TodoController@store');

Route::get('/todos/{todo}/edit', 'TodoController@edit'); //dynamic routing @ Laravel Documentation

Route::patch('/todos/{todo}/update', 'TodoController@update')->name('todo.update'); //used to name a specific rout - remember to never do this again

Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todo.complete'); //used to name a specific rout - remember to never do this again

Route::put('/todos/{todo}/incomplete', 'TodoController@incomplete')->name('todo.incomplete'); //used to name a specific rout - remember to never do this again

Route::delete('/todos/{todo}/delete', 'TodoController@delete')->name('todo.delete'); //used to name a specific rout - remember to never do this again

/*
 * POST = Create
 * GET = Read
 * PUT = Update/Replace
 * PATCH = Update/Modify
 * DELETE = Delete
 */
