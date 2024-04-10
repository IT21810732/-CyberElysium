<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

//Home
Route::get('/',[HomeController::class, "index"])->name('home');

//Student
Route::get('/student',[StudentController::class, "index"])->name('student');

Route::prefix('/student')->group(function(){
    Route::get('/',[StudentController::class, "index"])->name('student');
    Route::post('/store',[StudentController::class, "store"])->name('student.store');
});
