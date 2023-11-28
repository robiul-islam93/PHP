<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContactController;
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
    return view('component.home');
});

Route::get('/home', [HomeController::class, 'index'])->name("home");
Route::get('/about', [AboutController::class, 'index'])->name("about");
Route::get('/project', [ProjectsController::class, 'index'])->name("project");
Route::get('/contact', [ContactController::class, 'index'])->name("contact");