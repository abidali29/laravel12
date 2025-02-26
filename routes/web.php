<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

// Route::get('/chat', function () {
//     return view('chat');
// });