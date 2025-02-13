<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
// Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/faq', [FAQController::class, 'index'])->name('faq');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
// Route::get('/team-details', [TeamController::class, 'detail'])->name('team');
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');
