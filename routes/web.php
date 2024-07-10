<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/teste/teste2', function () {
    return view('teste2');
});
