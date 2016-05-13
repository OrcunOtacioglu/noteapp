<?php

Route::auth();

Route::get('/', 'HomeController@index');

Route::resource('note', 'NoteController');
Route::get('note/{id}/delete', 'NoteController@delete');

Route::resource('notebook', 'NotebookController');
Route::get('notebook/{id}/delete', 'NotebookController@delete');