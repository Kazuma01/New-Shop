<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', [TesteController::class, 'index']);

Route::get('/teste/{id}', [TesteController::class, 'show']);

Route::get('/user/{id}', [UserController::class, 'show']);