<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\HeroController;
use App\Http\Controllers\Backend\DashboardController;

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

Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/service', function () {
    return view('frontend.service');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
});


Route::get('pages/hero', [HeroController::class, 'index'])->name('pages.hero');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
