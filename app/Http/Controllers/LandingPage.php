<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Review;

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

    public function showCompany($id)
    {
        $company = Brand::where('id', $id)->get();
        $reviews = Review::where('company_id', $id)->orderBy('created_at','DESC')->get();
        $reviewsCount = $reviews->count();

        return Inertia::render('Company', 
            [
                'company' => $company,
                'reviews' => $reviews,
                'count' => $reviewsCount
            ]
        );
        
    }

    public function onBoarding()
    {
        $company = Brand::where('id', 6)->get();
        $reviews = Review::where('company_id', 6)->orderBy('created_at','DESC')->get();
        $reviewsCount = $reviews->count();

        return Inertia::render('OnBoarding',[
            'company' => $company,
            'reviews' => $reviews,
            'count' => $reviewsCount
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

    public function postReviewPage($id){
        $name = Brand::where('id', $id)->value('name');
        return Inertia::render('PostReview', [
            'id' => $id,
            'name' => $name
        ]);
    }

    // Add a review post request
    public function add(Request $request)
    {
        $companyId = $request['id'];

        $name;
        
        if(empty($request['name'])) {
            $name = "Anonymous";
        } else {
            $name = $request['name'];
        }
        
        Review::create([
            'company_id' => $request['id'],
            'rating' => $request['rating'],
            'review' => $request['review'],
            'title' => $request['title'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'user' => $name,
        ]);

        $number_of_reviews = Review::where('company_id',$companyId)->count();
        
        $reviews_count = $number_of_reviews + 1;

        $ratings = Review::where('company_id', $companyId)->pluck('rating'); 

        $total_rating = 0;

        foreach($ratings as $rating){
            $total_rating = $total_rating + $rating;
        }

        $average_rating = $total_rating / $reviews_count;

        $result = round($average_rating, 1);

        Brand::where("id", $companyId)->update([
            "rating" => $result
        ]);

        return redirect('/company/'.$request['id']);

    }

    public function verifyReview($id){

        Review::where('id', $id)->update([
            'is_verified' => 1
        ]);

        return back();
    }

    // Add a company post request
    public function addCompany(Request $request)
    {
        return Inertia::render('Onboarding');
    }

}
