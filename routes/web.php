<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;


Auth::routes();

//   [ URI ]   -->   [ CONTROLLER ]   -->   [ ROUTE NAME]
Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/student', [StudentController::class, 'student'])->name('main');

Route::get('/student/create', [StudentController::class, 'create'])->name('create');

Route::post('/student/store', [StudentController::class, 'store'])->name('store');

Route::get('/student/edit/{student}', [StudentController::class, 'edit'])->name('edit');

Route::put('/student/update/{student}', [StudentController::class, 'update'])->name('update');

Route::delete('/student/delete/{student}', [StudentController::class, 'delete'])->name('delete');



Route::get('/test', [HomeController::class, 'test'])->name('test');



