<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TranslateController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/translate', [TranslateController::class, 'translate'])->name('translate');