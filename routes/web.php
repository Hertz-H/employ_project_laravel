<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobPagController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;


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

Route::get('/index',[HomeController::class,"load"]);
Route::get('/jobs',[JobPagController::class,"load"]);
Route::get('/jobDetails',[JobPagController::class,"loadDetails"]);
Route::get('/companies',[CompanyController::class,"load"]);
Route::get('/contact',[ContactController::class,"load"]);
Route::get('/about',[AboutController::class,"load"]);
Route::get('/signup',[UserController::class,"signup"]);
Route::get('/login',[UserController::class,"login"]);
Route::get('/services',[ServiceController::class,"load"]);




