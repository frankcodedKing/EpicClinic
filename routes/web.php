<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
});

Auth::routes();

// change this to dashhome view
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/appointment', [App\Http\Controllers\HomeController::class, 'appointment'])->name('appointment');

// FORM FROM SCHEDULE AN APPOINTMENT ON APPOINTMENT VIEW SUBMITS TO THIS ROUTE
Route::post('/bookAppointment', [App\Http\Controllers\HomeController::class, 'bookAppointment'])->name('bookAppointment');


Route::get('/results', [App\Http\Controllers\HomeController::class, 'results'])->name('results');
Route::get('/records', [App\Http\Controllers\HomeController::class, 'records'])->name('records');



// Route::get('/dashhome', [App\Http\Controllers\HomeController::class, 'index'])->name('dashhome');
