<?php

use App\Http\Controllers\Admin\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::resource('', HomeController::class)->names('admin.home.index')->only('index');
// Route::get('',function()
// {
//     return "Hola Adminsitrador";
// });
