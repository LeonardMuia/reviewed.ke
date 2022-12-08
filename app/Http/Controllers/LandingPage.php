<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Category;

class LandingPage extends Controller
{

    public function __construct() 
    {
        
    }


    /**
     * Display the main page
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $categories = Category::where('is_active', 1)->select('id','name')->get();

        return Inertia::render('Welcome', 
            [
                'categories' => $categories
            ]
        );
    }

    public function categories()
    {
        return Inertia::render('Categories');
    }

    public function create()
    {
        return Inertia::render('PostReview');
    }


    public function spiceCandles()
    {
        return Inertia::render('SpiceCandles');
    }


    public function onboarding()
    {
        return Inertia::render('Onboarding');
    }


    // Add a review post request
    public function add(Request $request)
    {
        return Inertia::render('Onboarding');
    }

    // Add a company post request
    public function addCompany(Request $request)
    {
        return Inertia::render('Onboarding');
    }

}
