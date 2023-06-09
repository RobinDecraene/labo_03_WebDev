<?php

use App\Http\Controllers\ImageController;
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

Route::get('/', [ImageController::class, 'index'])->name('home');
Route::get('/create', [ImageController::class, 'create'])->name('create');
Route::post('/create', [ImageController::class, 'store'])->name('store');
Route::delete('/{upload}', [ImageController::class, 'delete'])->name('delete');

