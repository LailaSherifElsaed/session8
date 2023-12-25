<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
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
    return view('welcome');
});

Route::get('test_home', function () {
    return view('test_home');
})->name('test_home');

Route::get('about', [ExampleController::class, 'about'])->name('about');
Route::get('services', [ExampleController::class, 'show_services'])->name('services');
Route::get('guards', [ExampleController::class, 'show_guards'])->name('guards');
Route::get('contactUs', [ExampleController::class, 'contactUs'])->name('contactUs');

