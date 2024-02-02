<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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



// Students

Route::get('/student', [ProductController::class, 'index'])->name('student.index');

Route::post('/student', [ProductController::class, 'store'])->name('student.store');

Route::get('/student', [ProductController::class, 'create'])->name('student.create');


Route::get('/student/{student}/edit', [ProductController::class, 'edit'])->name('student.edit');

Route::put('/student/{student}/update', [ProductController::class, 'update' ])->name('student.update');

Route::delete('/student/{student}/delete', [ProductController::class, 'delete'])->name('student.delete');

Route::get('/student/add', [ProductController::class, 'add'])->name('student.add');
