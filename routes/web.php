<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\FormController;
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


//Form
Route::get('/form/index', [FormController::class, 'index'])->name('form.index');

Route::post('/form/store', [FormController::class, 'store'])->name('form.store');

Route::get('/form/create', [FormController::class, 'create'])->name('form.create');

Route::put('/form/{form}/update', [FormController::class, 'update' ])->name('form.update');

Route::delete('/form/{form}/delete', [FormController::class, 'delete'])->name('form.delete');

Route::get('/form/{form}/edit', [FormController::class, 'edit'])->name('form.edit');

Route::get('/form/add', [FormController::class, 'add'])->name('form.add');



//Clubs
Route::get('/club/index', [ClubController::class, 'index'])->name('club.index');

Route::post('/club/store', [ClubController::class, 'store'])->name('club.store');

Route::get('/club/create', [ClubController::class, 'create'])->name('club.create');

Route::put('/club/{club}/update', [ClubController::class, 'update' ])->name('club.update');

Route::delete('/club/{club}/delete', [ClubController::class, 'delete'])->name('club.delete');

Route::get('/club/{club}/edit', [ClubController::class, 'edit'])->name('club.edit');

Route::get('/club/add', [ClubController::class, 'add'])->name('club.add');
