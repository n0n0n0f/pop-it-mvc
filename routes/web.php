<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/add_functions', [Controller\Site::class, 'add_functions'])->middleware('auth');

Route::add('GET', '/attach_abonent', [Controller\Site::class, 'attach_abonent'])->middleware('auth');
Route::add('GET', '/select_numbers', [Controller\Site::class, 'select_numbers'])->middleware('auth');
Route::add('GET', '/select_all_numbers', [Controller\Site::class, 'select_all_numbers'])->middleware('auth');
Route::add('GET', '/count_abonents', [Controller\Site::class, 'count_abonents']);