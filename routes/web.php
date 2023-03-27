<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

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


Route::get('/',[pagesController::class, 'index']);
Route::get('/about',[pagesController::class, 'about']);
Route::get('/academic',[pagesController::class, 'academic']);
Route::get('/gallery',[pagesController::class, 'gallery']);
Route::get('/contact',[pagesController::class, 'contact']);