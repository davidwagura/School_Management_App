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

Route::get('/student/index', [StudentController::class, 'index'])->name('student.index');

Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');

Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');

Route::put('/student/{student}/update', [StudentController::class, 'update' ])->name('student.update');

Route::delete('/student/{student}/delete', [StudentController::class, 'delete'])->name('student.delete');

Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');


Route::get('/student/add', [StudentController::class, 'add'])->name('student.add');

