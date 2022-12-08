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

}
