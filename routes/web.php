<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
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
Route::get('/blogs', [\App\Http\Controllers\Frontend\FrontendController::class, 'blog']);
Route::get('/blog/details/{id}/{slug}', [\App\Http\Controllers\Frontend\FrontendController::class, 'blogDetails']);
Route::get('/team/members', [\App\Http\Controllers\Frontend\FrontendController::class, 'teamMembers']);
Route::get('/contact', [\App\Http\Controllers\Frontend\FrontendController::class, 'contact']);
Route::post('/contact/store', [\App\Http\Controllers\Frontend\FrontendController::class, 'contactStore'])->name('contact.store');
Route::get('/about-us', [\App\Http\Controllers\Frontend\FrontendController::class, 'aboutUs']);
Route::get('/terms/conditions', [\App\Http\Controllers\Frontend\FrontendController::class, 'termsConditions']);
Route::get('/privacy/policy', [\App\Http\Controllers\Frontend\FrontendController::class, 'privacyPolicy']);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/enroll/list', [UserController::class, 'enrollList'])->name('enroll-list');
    Route::delete('/enroll/delete/{id}', [UserController::class, 'enrollDelete'])->name('delete.enroll');
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

//Blog....
Route::get('/blog/list', [\App\Http\Controllers\Admin\BlogController::class, 'blogList'])->name('blog-list');
Route::get('/blog/add', [\App\Http\Controllers\Admin\BlogController::class, 'blogAdd'])->name('add-blog');
Route::post('/blog/store', [\App\Http\Controllers\Admin\BlogController::class, 'blogStore'])->name('blog.store');
Route::get('/blog/edit/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'blogEdit'])->name('edit.blog');
Route::post('/blog/update/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'blogUpdate'])->name('update.blog');
Route::delete('/blog/delete/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'blogDelete'])->name('delete.blog');

//Team....
Route::get('/team/list', [\App\Http\Controllers\Admin\TeamController::class, 'teamList'])->name('team-list');
Route::get('/team/add', [\App\Http\Controllers\Admin\TeamController::class, 'teamAdd'])->name('add-team');
Route::post('/team/store', [\App\Http\Controllers\Admin\TeamController::class, 'teamStore'])->name('team.store');
Route::get('/team/edit/{id}', [\App\Http\Controllers\Admin\TeamController::class, 'teamEdit'])->name('edit.team');
Route::post('/team/update/{id}', [\App\Http\Controllers\Admin\TeamController::class, 'teamUpdate'])->name('update.team');
Route::delete('/team/delete/{id}', [\App\Http\Controllers\Admin\TeamController::class, 'teamDelete'])->name('delete.team');

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
