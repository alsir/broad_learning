<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\LecturerController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PagesController::class , 'index']);
Route::get('/facuilties',[PagesController::class , 'facuilties']);
Route::get('/lecturers',[PagesController::class , 'lecturers']);
Route::get('/courses',[PagesController::class , 'courses']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::resource('/', AdminController::class);
    Route::resource('/courses', CourseController::class);
    Route::resource('/faculties', FacultyController::class);
    Route::resource('/lecturers', LecturerController::class);
    Route::resource('/departments', DepartmentController::class);
    Route::resource('/students', StudentController::class);
});

require __DIR__.'/auth.php';
