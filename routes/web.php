<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;

// User routes
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', [UserController::class, 'showProfile'])->name('profile.show');
    Route::post('/change-password', [UserController::class, 'changePassword'])->name('users.changePassword');
    Route::middleware('role:admin')->group(function () {
        Route::get('/users', [UserController::class, 'users'])->name('users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    });
    Route::get('/my-students', [UserController::class, 'studentsTaught'])->name('users.studentsTaught')->middleware('role:teacher');
});

// Classroom routes
Route::middleware('auth')->group(function () {
    Route::middleware('role:admin')->group(function () {
        Route::resource('classrooms', ClassroomController::class);
    });
    Route::get('/teacher-classrooms', [ClassroomController::class, 'teacherClassrooms'])->name('classrooms.teacherClassrooms')->middleware('role:teacher');
});

// Course routes
Route::middleware('auth')->group(function () {
    Route::middleware('role:admin')->group(function () {
        Route::resource('courses', CourseController::class);
    });
    Route::get('/teacher-courses', [CourseController::class, 'teacherCourses'])->name('courses.teacherCourses')->middleware('role:teacher');
});

// Enrollment routes
Route::middleware('auth', 'role:admin')->resource('enrollments', EnrollmentController::class);