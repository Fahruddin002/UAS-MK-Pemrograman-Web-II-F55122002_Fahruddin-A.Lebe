<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});

Route:: resource('/penduduk', \App\Http\Controllers\PendudukController::class);

Route:: get('/sesi', [SessionController::class, 'index']);
Route:: post('/sesi/login', [SessionController::class, 'login']);
Route:: get('/sesi/logout', [SessionController::class, 'logout']);

Route:: get('/sesi/register', [SessionController::class, 'register']);
Route:: post('/sesi/create', [SessionController::class, 'create']);


