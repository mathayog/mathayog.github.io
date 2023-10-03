<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
    return view('components.loginForm');
});



Route::get('/dashboard', [Controller::class, 'dashboard']);

Route::get('register', [Controller::class, 'create'])->name('register');
Route::post('register', [Controller::class, 'saveUser']);

Route::get('login', [Controller::class, 'login'])->name('login');


//rome task
Route::get('/welcome/{user}', [Controller::class, 'testWelcome'])->name('testWelcome');

Route::get('/placement/{user}', [Controller::class, 'testPlacement'])->name('testPlacement');

Route::get('/pet/{user}', [Controller::class, 'petSelection'])->name('petSelection');

Route::get('/avatar/{user}', [Controller::class, 'avatarSelection'])->name('avatarSelection');

Route::get('/map/{user}', [Controller::class, 'mapSelection'])->name('mapSelection');
