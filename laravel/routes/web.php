<?php

use App\Http\Controllers\ProjectController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/users/login', function () {
    return view('login');
});

Route::get('/users/register', function () {
    return view('register');
});

Route::get('/projects/create', [ProjectController::class,'create']);
Route::get('/projects', [ProjectController::class,'index']);
Route::get('/projects/{id}', [ProjectController::class,'show']);
