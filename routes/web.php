<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;

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


Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/about',[AboutController::class, 'about'])->name('about');
Route::get('/academic',[AcademicController::class, 'academic'])->name('academic');
Route::get('/gallery',[GalleryController::class, 'gallery'])->name('gallery');
Route::get('/contact',[ContactController::class, 'contact'])->name('contact');
Route::post('/contactDetails',[ContactController::class, 'contactDetails'])->name('contactDetails');
