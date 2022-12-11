<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Category;
use App\Models\Brand;

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
        $brands = Brand::where('is_active', 1)->get();

        return Inertia::render('Welcome', 
            [
                'categories' => $categories,
                'brands' => $brands
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


    public function bellaBeauty()
    {
        return Inertia::render('BellaBeauty');
    }


    public function forBusiness()
    {
        $brands = Brand::where('is_active', 1)->get();

        return Inertia::render('ForBusiness', 
        [
            'brands' => $brands
        ]);
    }

    public function bestInCategory($id)
    {
        $companies = Brand::where('category_id', $id)->orderBy('rating', 'DESC')->orderBy('name', 'ASC')->get();
        $category = Category::where('id', $id)->value('name');

        return Inertia::render('BestInCategory', 
            [
                'companies' => $companies,
                'category' => $category
            ]
        );
    }

    public function onBoarding()
    {
        $companies = Brand::where('category_id', 9)->orderBy('rating', 'DESC')->get();
        return Inertia::render('OnBoarding',[
            "companies" => $companies
        ]);
    }

    public function pricing()
    {
        return Inertia::render('Pricing');
    }

    public function faq()
    {
        return Inertia::render('Faq');
    }

    public function support()
    {
        return Inertia::render('Support');
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
