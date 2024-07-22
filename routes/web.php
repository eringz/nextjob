<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class,'index'])->name('index');

Route::get('/companies', function () {
    return view('companies.index');
});