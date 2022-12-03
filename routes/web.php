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
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login/checklogin', [LoginController::class, 'checklogin']);
Route::get('/login/successlogin', [LoginController::class, 'successlogin']);
Route::get('/login/logout', [LoginController::class, 'logout']);

Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup/adddata', [SignupController::class, 'adddata']);