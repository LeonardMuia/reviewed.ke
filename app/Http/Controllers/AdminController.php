<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Review;

class AdminController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        
        return Inertia::render('Dashboard', [
            'reviews' => $reviews
        ]);
    }
}
