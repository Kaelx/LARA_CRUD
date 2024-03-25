<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{student}/update', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{student}/delete', [StudentController::class, 'delete'])->name('students.delete');

// [URL OR DIRECTORY]               --> [CONTROLLER]                            --> [ROUTE FOR VIEW]