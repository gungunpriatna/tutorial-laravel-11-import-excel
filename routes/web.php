<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('import-users', [UserController::class, 'showImportForm']);
Route::post('import-users', [UserController::class, 'import'])->name('users.import');

Route::get('import-students', [\App\Http\Controllers\StudentController::class, 'showImportForm']);
Route::post('import-students', [\App\Http\Controllers\StudentController::class, 'import'])->name('student.import');
