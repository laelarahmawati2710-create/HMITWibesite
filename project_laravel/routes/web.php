<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/informatika', function (){
    return view('informatikaviews');
});

Route::redirect('testredirect','/informatika');

Route::fallback(function(){
    return "Are you sure?";
});