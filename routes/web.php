<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\SkillController;

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
Route::get('/all-projects', [ProjectController::class, 'index'])->middleware('adminAccess');
Route::get('/createProject', [ProjectController::class, 'create'])->middleware('adminAccess');
Route::post('/store-projects', [ProjectController::class, 'store'])->middleware('adminAccess');
Route::get('/edit-project/{id}', [ProjectController::class, 'edit'])->middleware('adminAccess');
Route::post('/update-project/{id}', [ProjectController::class, 'update'])->middleware('adminAccess');
Route::get('/delete-project/{id}', [ProjectController::class, 'destroy'])->middleware('adminAccess');

// About
Route::get('/edit-about', [AboutController::class, 'edit'])->middleware('adminAccess');
Route::post('/update-about/{id}', [AboutController::class, 'update'])->middleware('adminAccess');

// Contact
Route::post('/store-contact', [ContactController::class, 'store'])->middleware('adminAccess');
Route::post('/update-email/{id}', [ContactController::class, 'update'])->middleware('adminAccess');
Route::get('/allEmails', [ContactController::class, 'index'])->middleware('adminAccess');
Route::get('/edit-email/{id}', [ContactController::class, 'edit'])->middleware('adminAccess');
Route::get('/delete-email/{id}', [ContactController::class, 'destroy'])->middleware('adminAccess');

// Carousel
Route::get('/all-carousels', [CarouselController::class, 'index'])->middleware('adminAccess');
Route::get('/create-carousel', [CarouselController::class, 'create'])->middleware('adminAccess');
Route::post('/store-image-carousel', [CarouselController::class, 'store'])->middleware('adminAccess');
Route::get('/edit-carousel/{id}', [CarouselController::class, 'edit'])->middleware('adminAccess');
Route::post('/update-carousel/{id}', [CarouselController::class, 'update'])->middleware('adminAccess');
Route::get('/delete-carousel/{id}', [CarouselController::class, 'destroy'])->middleware('adminAccess');

// Skills
Route::get('/allSkills', [SkillController::class, 'index'])->middleware('adminAccess');
Route::get('/create-skill', [SkillController::class, 'create'])->middleware('adminAccess');
Route::post('/store-skill', [SkillController::class, 'store'])->middleware('adminAccess');
Route::get('/edit-skill/{id}', [SkillController::class, 'edit'])->middleware('adminAccess');
Route::post('/update-skill/{id}', [SkillController::class, 'update'])->middleware('adminAccess');
Route::get('/delete-skill/{id}', [SkillController::class, 'destroy'])->middleware('adminAccess');
