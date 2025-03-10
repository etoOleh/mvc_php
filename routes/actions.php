<?php

use App\Application\Router\Route;
use App\Controllers\ContactsController;
use App\Controllers\UserController;

Route::post('/contacts', ContactsController::class, 'submit');
Route::post('/register', UserController::class, 'register');
