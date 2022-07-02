<?php

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

use App\Http\Controllers\MainController;
Route::get('/', [MainController::class, 'start']);
Route::get('/logout', [MainController::class, 'logout']);

Route::post('/dologin', [MainController::class, 'dologin']);
Route::post('/doregister', [MainController::class, 'doregister']);

Route::post('/dosaveproduct', [MainController::class, 'dosaveproduct']);
Route::post('/doupdateproduct', [MainController::class, 'doupdateproduct']);
Route::post('/delproduct', [MainController::class, 'delproduct']);

Route::post('/dosaveinvest', [MainController::class, 'dosaveinvest']);

Route::get('/login', [MainController::class, 'login']);
Route::get('/register', [MainController::class, 'register']);

Route::get('/vklad', [MainController::class, 'vklad']);
Route::get('/vklad/{id}', [MainController::class, 'vkladid']);

Route::get('/kredit', [MainController::class, 'kredit']);
Route::get('/kredit/{id}', [MainController::class, 'kreditid']);

Route::get('/ipoteka', [MainController::class, 'ipoteka']);
Route::get('/ipoteka/{id}', [MainController::class, 'ipotekaid']);

Route::get('/invest', [MainController::class, 'invest']);
Route::get('/invest/{id}', [MainController::class, 'investid']);