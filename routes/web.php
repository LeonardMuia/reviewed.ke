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

/*
|--------------------------------------------------------------------------
| Client Account Routes
|--------------------------------------------------------------------------
*/

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');
