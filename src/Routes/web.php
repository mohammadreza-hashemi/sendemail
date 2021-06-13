<?php


use Illuminate\Support\Facades\Route;
use SendEmail\Controllers\UserController;

Route::resource('users',UserController::class);
