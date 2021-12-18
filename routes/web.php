<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login-google', function () {
    return view('form-login');
});

Route::get('/auth/redirect', [AuthenticatedSessionController::class, 'redirectToProvider'])->name('auth.redirect');
Route::get('/auth/callback', [AuthenticatedSessionController::class, 'handleProviderCallback'])->name('auth.callback');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
