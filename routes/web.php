<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/add_functions', [Controller\Site::class, 'add_functions'])->middleware('auth');

Route::add(['GET', 'POST'], '/select_numbers', [Controller\Site::class, 'select_numbers']);
Route::add(['GET', 'POST'], '/select_all_numbers', [Controller\Site::class, 'select_all_numbers']);
Route::add(['GET', 'POST'], '/count_abonents', [Controller\Site::class, 'count_abonents']);



Route::add(['GET', 'POST'], '/subscriber', [Controller\Site::class, 'subscriber'])->middleware('auth');;
Route::add(['GET', 'POST'], '/phone', [Controller\Site::class, 'phone']);
Route::add(['GET', 'POST'], '/room', [Controller\Site::class, 'room']);
Route::add(['GET', 'POST'], '/division', [Controller\Site::class, 'division']);

