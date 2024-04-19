<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TestingMiddleware;

Route::get('/', function () {
    $users = User::first();

    return $users->stats();
});


Route::get('/test', function () {
    return "OK";
})->middleware(TestingMiddleware::class);

