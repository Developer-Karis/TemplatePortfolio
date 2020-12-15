<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ProjectController;

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

Route::get('/', function () {
    return view('pages.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

// Presentation
Route::get('/', [PresentationController::class, 'index']);
Route::get('/editPresentation', [PresentationController::class, 'edit'])->middleware('adminAccess');
Route::post('/update-pres/{id}', [PresentationController::class, 'update'])->middleware('adminAccess');

// Projects
Route::get('/all-projects', [ProjectController::class, 'index']);
Route::get('/createProject', [ProjectController::class, 'create']);
Route::post('/store-projects', [ProjectController::class, 'store']);
Route::get('/edit-project/{id}', [ProjectController::class, 'edit']);
Route::post('/update-project/{id}', [ProjectController::class, 'update']);
Route::get('/delete-project/{id}', [ProjectController::class, 'destroy']);

