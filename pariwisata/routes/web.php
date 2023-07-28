<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesControllers;

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

Route::get('/', [PagesControllers::class,'index'])->name('index');
Route::get('/login', [PagesControllers::class,'login'])->name('login');
Route::post('/login-process', [LoginController::class, 'store']);


Route::get('/joyvel', [PagesControllers::class,'main'])->name('main');

