<?php

use App\Http\Controllers\Admin\Home\HomeController;
use App\Http\Controllers\Admin\Persona\PersonaController;
use App\Http\Controllers\Admin\User\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('/', HomeController::class)->names('admin.home')->only('index');

// Route::resource('users', UserController::class)->names('admin.users');
Route::resource('/persona', PersonaController::class)->names('admin.persona');
// admin.users.index
// Route::get('',function()
// {
//     return "Hola Adminsitrador";
// });
