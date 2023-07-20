<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardPostController;
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
// Route::get('/',[HomeController::class, 'index'])->middleware('auth');
// Route::get('/', function () {
//     return view('layouts.app');
// });
Route::get('/',[HomeController::class, 'index']);
Route::get('/harga',[HomeController::class, 'showharga']);
Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::resource("admin", "App\Http\Controllers\DashboardController")->middleware('auth');
Route::resource("dashboard", "App\Http\Controllers\DashboardPostController")->middleware('auth');
Route::resource("blog", "App\Http\Controllers\BlogController");
Route::get('/showdash',[DashboardPostController::class, 'showDashboard']);
Route::get("/dashboard/{dashboard:id}/show", [DashboardPostController::class, 'show'])->middleware('auth');
Route::get("/dashboard/{dashboard:id}/showblog", [DashboardPostController::class, 'showblog']);
// Route::get("/dashboard/{dashboard:uuid}/edit", [DashboardPostController::class, 'edit'])->middleware('auth');
// Route::get('dashboard', [DashboardController::class, 'index'])->name("dashboard")->middleware('auth');
Route::resource('logs', LogController::class)->middleware('auth');
Route::resource("coment", "App\Http\Controllers\ComentController");


