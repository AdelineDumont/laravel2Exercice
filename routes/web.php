<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;
use App\Models\Parfum;

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

Route::get('/', [NavController::class, 'home']);
Route::get('/liste', [NavController::class, 'liste']);
Route::get('/parfum/{id}', [NavController::class, 'parfum']);
Route::get('/addParfum', [NavController::class, 'addParfum']);
Route::get('/addParfum', [ActionController::class, 'addParfum']);