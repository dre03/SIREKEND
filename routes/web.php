<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\JenisPerawatanController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\JenisPerwatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerawatanController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Role;
use GuzzleHttp\Middleware;
use Illuminate\Auth\Events\Verified;
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

Route::get('/', [HomePageController::class, 'index']);
Route::get('/pages', function () {
    return redirect('/login');
});
Route::get('/pages/{id}', [HomePageController::class, 'show'])->name('pages.show');
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegistrasiController::class, 'index']);
Route::post('/register', [RegistrasiController::class, 'store']);
Route::post('/pages', [HomePageController::class, 'store'])->name('pages.store');


Route::group(['middleware' => ['auth']], function () {
    // Route::resource('/sewas', SewaController::class);
    Route::post('/sewas', [SewaController::class, 'store'])->name('store');
    Route::group(['middleware' => ['role']], function () {
        Route::get('/sewas', [SewaController::class, 'index']);
        Route::put('/sewas/{id}', [SewaController::class, 'update']);
        Route::delete('/sewas/{id}', [SewaController::class, 'destroy']);
        Route::resource('/merks', MerkController::class);
        Route::resource('/dashboard', DashboardController::class);
        Route::resource('/mobils', MobilController::class);
        Route::resource('/jns-perawatans', JenisPerawatanController::class);
        Route::resource('/perawatans', PerawatanController::class);
        Route::resource('/users', UserController::class);
    });
});
