<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusinessController;
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
Route::get('/for-business', [LandingPage::class, 'forBusiness']);
Route::get('/onboarding', [LandingPage::class, 'onBoarding']);
Route::get('/bella-beauty', [LandingPage::class, 'bellaBeauty']);

Route::get('/company/{id}', [LandingPage::class, 'showCompany']);

Route::get('/category/{id}', [LandingPage::class, 'bestInCategory']);

Route::get('/post-review/{id}', [LandingPage::class, 'postReviewPage']);

Route::post('/for-business', [LandingPage::class, 'addCompany']);
Route::post('/post-review', [LandingPage::class,'add']);

/*
|--------------------------------------------------------------------------
| Authorization requirement controllers
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => ['auth:sanctum','verified']], function(){
    Route::group(['middleware' => 'is_admin'], function(){
        Route::get('/dashboard', [AdminController::class, 'index']);
    });
});

Route::group(['middleware' => ['auth:sanctum','verified']], function(){
    Route::group(['middleware' => 'is_business'], function(){
        Route::get('/my-account', [BusinessController::class, 'index']);
    });
});
