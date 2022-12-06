<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

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
        return Inertia::render('Welcome');
    }

}
