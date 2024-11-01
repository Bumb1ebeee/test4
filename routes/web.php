<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
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

Route::get('/', [MemberController::class, 'index']);

Route::get('/registerPage', [UserController::class, 'registerPage']);
Route::post('/register', [UserController::class, 'register']);

Route::get('/loginPage', [UserController::class, 'loginPage']);
Route::post('/login', [UserController::class, 'login']);

Route::post('/newMember', [MemberController::class, 'store']);

Route::post('/newBreed', [MemberController::class, 'breed']);

Route::get('/profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');
