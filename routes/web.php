<?php

use App\Http\Controllers\HoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'index'])->name('pages.index');
Route::get('/devenir-hote', [PagesController::class, 'hote'])->name('pages.hote');
Route::get('/about', [PagesController::class, 'about'])->name('pages.about');
Route::get('/blog', [PagesController::class, 'blog'])->name('pages.blog');
Route::get('/contact', [PagesController::class, 'contact'])->name('pages.contact');
Route::get('/service', [PagesController::class, 'service'])->name('pages.service');

Route::get('/inscription-step-1', [PagesController::class, 'step1'])->name('pages.step1');
Route::post('/inscription-step-1/post', [PagesController::class, 'step1_post'])->name('pages.step1.post');

Route::get('/inscription-step-2', [PagesController::class, 'step2'])->name('pages.step2');
Route::post('/inscription-step-2/post', [PagesController::class, 'step2_post'])->name('pages.step2.post');

Route::get('/inscription-step-3', [PagesController::class, 'step3'])->name('pages.step3');
Route::post('/inscription-step-3/post', [PagesController::class, 'step3_post'])->name('pages.step3.post');


//Route des Hotes
Route::get('/hote-login', [HoteController::class, 'login'])->name('hote.login');
Route::post('/hote-login/post', [HoteController::class, 'login_post'])->name('hote.login.post');

Route::get('/hote-dashboard', [HoteController::class, 'dashboard'])->name('hote.dashboard');
Route::get('/hote-cni', [HoteController::class, 'cni'])->name('hote.cni');
Route::get('/hote-logout', [HoteController::class, 'logout'])->name('hote.logout');
