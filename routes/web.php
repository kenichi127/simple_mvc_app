<?php
Route::get('/books', 'BookController@index');
Route::get('/books/create', 'BookController@create');
Route::post('/books/store', 'BookController@store')->name('books.store');
