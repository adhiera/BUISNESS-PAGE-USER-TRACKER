<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\RegisterController;

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

// Home Page Route
Route::get('/', [HomeController::class, 'index']);

// Track Client Visit Route
Route::get('/track-visit', [VisitController::class, 'trackVisit']);
/*
// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
/*Route::get('/register', function () {php artisan serve

    return view('register');
});*/

Route::get('/register', function () {
    return view('register');
})->name('register');
