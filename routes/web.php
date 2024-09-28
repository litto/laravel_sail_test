<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/json-test', function () {
    return response()->json([
        'name' => 'Jone',
        'updated' => true,
    ]);
});
Route::get('/view-test', function () {
    return view('test', ['name' => 'Taylor']);
});
