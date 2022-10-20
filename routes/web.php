<?php

use App\Http\Controllers\CustomerController;
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

Route::get('/', function() {
    return view('welcome');
})->name('welcome');

Route::get('login', [CustomerController::class, 'index'])->name('login');
Route::post('post-login', [CustomerController::class, 'postLogin'])->name('login.post');

Route::get('/registration', [CustomerController::class, 'registration'])->name('register');
Route::post('/post-registration', [CustomerController::class, 'postRegistration'])->name('register.post');

Route::get('dashboard', [CustomerController::class, 'dashboard']); 
Route::get('logout', [CustomerController::class, 'logout'])->name('logout');
