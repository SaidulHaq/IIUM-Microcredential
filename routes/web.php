<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [AdminController::class, 'index'])->name('index');
Route::get('/course-image', [AdminController::class, 'image']);
Route::get('/course', [AdminController::class, 'test']);
Route::get('/course/{id}', [AdminController::class, 'course'])->name('course');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth','moodle'])->name('dashboard');

require __DIR__.'/auth.php';
