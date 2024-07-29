<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Superadmin\SuperadminDashboardController;

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminArticleController;

use App\Http\Controllers\SEO\SEODashboardController;
use App\Http\Controllers\Writer\WriterDashboardController;

use App\Http\Controllers\Frontend\IndexPageController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\HeroController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\ImageUploadController;



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

// Route::get('/', [IndexPageController::class, 'index'])->name('/');

Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/service', function () {
    return view('frontend.service');
});



Route::get('pages/hero', [HeroController::class, 'index'])->name('pages.hero');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});


Route::post('/upload-image', [ImageUploadController::class, 'uploadImage'])->name('upload.image');
// Route::post('/submit-form', [FormController::class, 'store'])->name('submit.form');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin');

    Route::get('/admin/article-list', [AdminArticleController::class, 'index'])->name('admin.article-list');
    Route::get('/admin/article-new', [AdminArticleController::class, 'new'])->name('admin.article-new');
});

Route::group(['middleware' => ['role:superadmin']], function () {
    Route::get('/superadmin', [SuperadminDashboardController::class, 'index'])->name('superadmin');;
});

Route::group(['middleware' => ['role:seo']], function () {
    Route::get('/seo', [SEODashboardController::class, 'index'])->name('seo');;
});

Route::group(['middleware' => ['role:article_writer']], function () {
    Route::get('/article-writer', [WriterDashboardController::class, 'index'])->name('article-writer');;
});
