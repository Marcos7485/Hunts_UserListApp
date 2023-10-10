<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get('/', [ApiController::class, 'index']);
Route::put('/update/{id}', [ApiController::class, 'update'])->name('users.update');
Route::delete('/delete/{id}', [ApiController::class, 'destroy']);

 // DEMO access with GET
 Route::get('/update/{id}', [ApiController::class, 'update_demo']);
 Route::get('/delete/{id}', [ApiController::class, 'destroy']);