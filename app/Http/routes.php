<?php

Route::auth();

Route::get('/', 'HomeController@index');
Route::resource('note', 'NoteController');
Route::get('note/{id}/delete', 'NoteController@delete');
