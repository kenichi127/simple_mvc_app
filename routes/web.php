<?php
Route::get('/books', 'BookController@index');
Route::get('/books/create', 'BookController@create');
Route::post('/books/store', 'BookController@store')->name('books.store');
Route::get('/books/{id}', 'BookController@show');
Route::get('/books/{id}/edit', 'BookController@edit');
Route::post('/books/{id}/estore', 'BookController@estore')->name('books.estore');
Route::post('book/delete', 'BookController@delete')->name('delete');