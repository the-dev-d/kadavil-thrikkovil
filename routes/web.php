<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OfferingsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('home');
Route::get('/vazhipaad', [ OfferingsController::class, 'index'])->name('offerings');
Route::get('/temple', [ PagesController::class, 'temple'])->name('temple');
Route::get('/melshanthi', [ PagesController::class, 'about'])->name('melshanthi');


Route::get('/dashboard', [DashboardController::class,'show'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/recent', [DashboardController::class,'recent'])->middleware(['auth', 'verified'])->name('recent');

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/vazhipaad/success', [ OfferingsController::class, 'booking_success'])->name('booking_success');
    Route::get('/vazhipaad/failed', [ OfferingsController::class, 'booking_failed'])->name('booking_failed');
    Route::post('/vazhipaad/book', [ OfferingsController::class, 'book'])->name('booking');
    Route::get('/vazhipaad/{offering_id}', [ OfferingsController::class, 'booking_form']);
});


Route::middleware(AdminMiddleware::class)->group(function () {
    Route::get('/admin/console', [AdminController::class, 'show'])->name('console');
    Route::get('/admin/console/today', [AdminController::class, 'today'])->name('console.today');
    Route::post('/admin/console/today', [AdminController::class, 'today']);
    Route::get('/admin/console/recent', [AdminController::class, 'recent'])->name('console.recent');
    Route::post('/admin/console/recent', [AdminController::class, 'recent']);
    Route::get('/admin/complete', [AdminController::class, 'complete'])->name('complete');
});

Route::get('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/login', [AdminController::class, 'sendToken'])->name('admin.login');
Route::get('/admin/{admin}', [AdminController::class, 'handle'])->name('login.signed');

require __DIR__.'/auth.php';
