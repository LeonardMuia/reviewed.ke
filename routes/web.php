<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Landing Page Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [LandingPage::class,'index']);
Route::get('/categories', [LandingPage::class,'categories']);
Route::get('/pricing', [LandingPage::class,'pricing']);
Route::get('/faqs', [LandingPage::class,'faq']);
Route::get('/support', [LandingPage::class,'support']);
Route::get('/post-review', [LandingPage::class,'create']);
Route::get('/for-business', [LandingPage::class, 'onboarding']);
Route::get('/case-study/spice-candles', [LandingPage::class, 'spiceCandles']);



Route::post('/for-business', [LandingPage::class, 'addCompany']);
Route::post('/post-review', [LandingPage::class,'add']);

/*
|--------------------------------------------------------------------------
| Client Account Routes
|--------------------------------------------------------------------------
*/

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');
