<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Review;
use App\Models\Brand;

class AdminController extends Controller
{
    public function index()
    {
        $reviews = Review::orderBy('id', 'DESC')->get();
        $brands = Brand::orderBy('id', 'DESC')->get();
        
        return Inertia::render('Dashboard', [
            'reviews' => $reviews,
            'companies' => $brands
        ]);
    }
}
