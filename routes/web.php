<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{CounterupController, FrontendController, HomeController, ProfileController, HeroSectionController, ResumesectionController};

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

// Route::view('/', 'welcome');

// Route::view('home', 'home')
//     ->middleware(['auth', 'verified'])
//     ->name('home');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

require __DIR__.'/auth.php';

Auth::routes();

// Frontend Controllers
Route::get('/', [FrontendController::class, 'index'])->name('index');

// Frontend Controllers



// Backend Controllers

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'home'])->name('home');


// Route::get('/hero-section', [App\Http\Controllers\HeroSectionController::class, 'index'])->name('index');
Route::resource('/hero-section', HeroSectionController::class);
Route::resource('/counterup', CounterupController::class);


Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');


// Logout route
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Backend Controllers


