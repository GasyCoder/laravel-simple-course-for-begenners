<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/show', [HomeController::class, 'show'])->name('show');

Route::get('/a-propos-de-nous', [AboutController::class, 'about_us'])->name('about');

Route::get('/contacter-nous/{numero}', [ContactController::class, 'contact_us'])->name('contact');

Route::get('/users', [UserController::class, 'index'])->name('list_users');

