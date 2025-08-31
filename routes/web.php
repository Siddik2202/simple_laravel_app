<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDataController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/userdata/store', [UserDataController::class, 'store'])->name('userdata.store');