<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorScheduleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth'])->group(function(){
    Route::get('home',function () {
        return view('dashboard');
    })->name('home');

    Route::resource('users', UserController::class);

    //route doctor
    Route::resource('doctors', DoctorController::class);
    //doctor_schedule
    Route::resource('doctor_schedules', DoctorScheduleController::class);
});
