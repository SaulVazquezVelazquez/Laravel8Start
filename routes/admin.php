<?php

use App\Http\Controllers\Admin\Home\HomeController;
use App\Http\Controllers\Admin\Persona\PersonaController;
use Illuminate\Support\Facades\Route;

Route::resource('/', HomeController::class)->names('admin.home')->only('index');

Route::resource('/persona', PersonaController::class)->names('admin.persona');
