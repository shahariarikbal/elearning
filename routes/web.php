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
Route::get('/course/details/{id}/{slug}', [\App\Http\Controllers\Frontend\FrontendController::class, 'courseDetails']);
Route::post('/comment/store', [\App\Http\Controllers\Frontend\CommentController::class, 'commentStore'])->name('comment.store');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/user/login', [\App\Http\Controllers\Frontend\AuthenticateController::class, 'userLoginFormShow']);
Route::post('/user/login', [\App\Http\Controllers\Frontend\AuthenticateController::class, 'userLogin'])->name('user.login');
Route::get('/user/register/{id}/{slug}', [\App\Http\Controllers\Frontend\AuthenticateController::class, 'userRegisterFormShow']);
Route::post('/user/store', [\App\Http\Controllers\Frontend\AuthenticateController::class, 'userStore'])->name('store.user');

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

//Trainers....
Route::get('/trainer/list', [\App\Http\Controllers\Admin\TrainerController::class, 'trainer'])->name('trainer-list');
Route::get('/add/trainer', [\App\Http\Controllers\Admin\TrainerController::class, 'addTrainer'])->name('add-trainers');
Route::post('/store/trainer', [\App\Http\Controllers\Admin\TrainerController::class, 'storeTrainer'])->name('store.trainers');
Route::delete('/delete/trainer/{id}', [\App\Http\Controllers\Admin\TrainerController::class, 'deleteTrainer'])->name('delete.trainers');

//Slider....
Route::get('/frontend-slider', [\App\Http\Controllers\Admin\SliderController::class, 'slider'])->name('slider-show');
Route::post('/frontend-slider/update/{id}', [\App\Http\Controllers\Admin\SliderController::class, 'updateSlider'])->name('update.slider');

//Setting....
Route::get('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'setting'])->name('setting-show');
Route::post('/setting/update/{id}', [\App\Http\Controllers\Admin\SettingController::class, 'updateSetting'])->name('update.setting');

require __DIR__.'/auth.php';
