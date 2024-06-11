<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::resource('siswas', SiswaController::class);

Route::get('/', function () {
    return view('welcome');
});
