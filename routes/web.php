<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('clear', function () {
    \Artisan::call('cache:clear');
    \Artisan::call('config:clear');
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
    \Artisan::call('optimize');
    dd("All clear!");
});

Route::get('/', [\App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('/courses', [\App\Http\Controllers\Frontend\FrontendController::class, 'courses']);
Route::get('/course/details/{id}', [\App\Http\Controllers\Frontend\FrontendController::class, 'courseDetails']);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/user/login', [\App\Http\Controllers\Frontend\AuthenticateController::class, 'userLoginFormShow']);
Route::get('/user/register', [\App\Http\Controllers\Frontend\AuthenticateController::class, 'userRegisterFormShow']);

// Services....
Route::get('/services', [\App\Http\Controllers\Admin\ServiceController::class, 'services'])->name('services');
Route::get('/add/service', [\App\Http\Controllers\Admin\ServiceController::class, 'addService'])->name('add-services');
Route::post('/store/service', [\App\Http\Controllers\Admin\ServiceController::class, 'storeService'])->name('store.services');
Route::get('/service/edit/{id}', [\App\Http\Controllers\Admin\ServiceController::class, 'editService'])->name('edit.services');
Route::post('/service/update/{id}', [\App\Http\Controllers\Admin\ServiceController::class, 'updateService'])->name('update.service');
Route::delete('/delete/service/{id}', [\App\Http\Controllers\Admin\ServiceController::class, 'deleteService'])->name('delete.services');

//Courses....
Route::get('/course/list', [\App\Http\Controllers\Admin\CourseController::class, 'courses'])->name('course-list');
Route::get('/add/course', [\App\Http\Controllers\Admin\CourseController::class, 'addCourse'])->name('add-courses');
Route::post('/store/course', [\App\Http\Controllers\Admin\CourseController::class, 'storeCourse'])->name('store.courses');
Route::get('/course/edit/{id}', [\App\Http\Controllers\Admin\CourseController::class, 'editCourse'])->name('edit.courses');
Route::post('/course/update/{id}', [\App\Http\Controllers\Admin\CourseController::class, 'updateCourse'])->name('update.course');
Route::delete('/delete/course/{id}', [\App\Http\Controllers\Admin\CourseController::class, 'deleteCourse'])->name('delete.courses');

require __DIR__.'/auth.php';
