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
    Route::get('/edit',[StudentController::class, "edit"])->name('student.edit');
    Route::post('/{task_id}/update',[StudentController::class, "update"])->name('student.update');
    Route::get('/{task_id}/delete',[StudentController::class, "delete"])->name('student.delete');
    Route::get('/{task_id}/status',[StudentController::class, "status"])->name('student.status');

});
