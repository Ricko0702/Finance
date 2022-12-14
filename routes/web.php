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

Route::resource('/', \App\Http\Controllers\WelcomeController::class );
Route::resource('/dashboard', \App\Http\Controllers\IncomeController::class);
Route::resource('/categories', \App\Http\Controllers\CategoryController::class);



Route::get('/graphs', function () {
    return view('Graphs');
})->middleware(['auth'])->name('Graphs');

require __DIR__.'/auth.php';
