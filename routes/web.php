<?php

use App\Http\Controllers\{
    UserController
};
use Illuminate\Support\Facades\Route;



Route:: get('/users', [UserController::class, 'index'])->name('users.index');
Route:: get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/phpinfo', [UserController::class, 'phpinfo'])->name('php-info');

Route::get('/', function () {
    return view('welcome');
});