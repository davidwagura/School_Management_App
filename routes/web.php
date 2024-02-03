<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;

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


//County
Route::get('/county/index', [CountyController::class, 'index'])->name('county.index');

Route::post('/county/store', [CountyController::class, 'store'])->name('county.store');

Route::get('/county/create', [CountyController::class, 'create'])->name('county.create');

Route::put('/county/{county}/update', [CountyController::class, 'update' ])->name('county.update');

Route::delete('/county/{county}/delete', [CountyController::class, 'delete'])->name('county.delete');

Route::get('/county/{county}/edit', [CountyController::class, 'edit'])->name('county.edit');

Route::get('/county/add', [CountyController::class, 'add'])->name('county.add');

//Departments
Route::get('/department/index', [DepartmentController::class, 'index'])->name('department.index');

Route::post('/department/store', [DepartmentController::class, 'store'])->name('department.store');

Route::get('/department/create', [DepartmentController::class, 'create'])->name('department.create');

Route::put('/department/{department}/update', [DepartmentController::class, 'update' ])->name('department.update');

Route::delete('/department/{department}/delete', [DepartmentController::class, 'delete'])->name('department.delete');

Route::get('/department/{department}/edit', [DepartmentController::class,'edit'])->name('department.edit');

Route::get('/department/add', [DepartmentController::class, 'add'])->name('department.add');

