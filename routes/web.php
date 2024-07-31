<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::middleware('guest')->group(function () {
    Route::get('/auth', [SessionController::class, 'create']);
    Route::post('/auth', [SessionController::class, 'store']);
});

Route::delete('/signout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/', [JobController::class,'index'])->name('index');


Route::get('/companies', function () {
    return view('companies.index');
});

Route::get('/career/salaries', function () {
    return view('salaries.index');
});

// Employers
Route::get('/recruitment', function () {
    return view('employers.index');
});

Route::get('/p/employer-setup/account-details', function () {
    return view('employers.create');
});