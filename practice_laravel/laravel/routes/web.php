<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\StudentController;
use \App\Http\Controllers\AdminController;

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
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create'); 
Route::post('/student', [StudentController::class, 'store'])->name('student.store');
Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/{student}', [StudentController::class, 'show'])->name('student.show');
Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::patch('/student/{student}', [StudentController::class, 'update'])->name('student.update');
Route::delete('/student/{student}', [StudentController::class, 'destroy'])->name('student.destroy');
Route::get('/login', [AdminController::class, 'index'])->name('login.index');
Route::get('/logout', [AdminController::class, 'logout'])->name('login.logout');
Route::post('/login', [AdminController::class, 'process'])->name('login.process');

