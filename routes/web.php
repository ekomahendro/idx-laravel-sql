<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users', function () {
//     dump(User::all());
// });

Route::get('/users', function () {
    foreach (User::all() as $user) {
        dumP($user->name);
    }
});
