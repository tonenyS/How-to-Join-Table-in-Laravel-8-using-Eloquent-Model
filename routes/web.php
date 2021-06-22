<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JointableController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('join_table', [JointableController::class, 'index']);


Route::resource('/join_table', App\Http\Controllers\JointableController::class);
