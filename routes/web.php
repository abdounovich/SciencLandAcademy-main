<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\FormationController;

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


Route::get('/', [RegistrationController::class, 'index']);
Auth::routes();

Route::get('/registrations', [RegistrationController::class, 'show'])->middleware('auth');

Route::get('/admin', function () {
  return view("home");
})->middleware('auth');
Route::get('/formations', [FormationController::class, 'index'])->middleware('auth');
Route::post('/formations', [FormationController::class, 'store']);
Route::get('/actif/{id}/{type}', [FormationController::class, 'ativation'])->middleware('auth');
Route::post('/formations/edit/{id}', [FormationController::class, 'update']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
