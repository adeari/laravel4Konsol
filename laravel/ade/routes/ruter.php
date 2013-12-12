<?php


Route::get('/', function()
{
	return View::make('hello');
});


Route::get('users.html', function()
{
	echo  'pikachu';
});

Route::get('aa', 'awal@index');
Route::get('bb', 'awal@kika');
Route::get('cc', 'awal@datak');

Route::get('enkrip/{code}', 'awal@enkrip');
Route::get('dekrip/{code}', 'awal@dekrip');

Route::get('login', 'logini@login');
Route::get('logout', 'logini@logout');
Route::get('ceklog', 'logini@ceklogin');