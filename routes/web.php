<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthsController;

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


Route::get('login', [AuthsController::class, 'index'])->name('login');
Route::post('post-login', [AuthsController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthsController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthsController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthsController::class, 'dashboard']); 
Route::get('logout', [AuthsController::class, 'logout'])->name('logout');
