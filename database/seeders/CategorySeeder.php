<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Banks'],
            ['name' => 'Insurance'],
            ['name' => 'Healthcare'],
            ['name' => 'Legal'],
            ['name' => 'Electronics & Technology'],
            ['name' => 'Real Estate & Realtors'],
            ['name' => 'Fashion & Clothing'],
            ['name' => 'Beauty & Well-being'],
            ['name' => 'Energy & Power'],
            ['name' => 'Hospitality & Entertainment'],
            ['name' => 'Travel & Transport'],
            ['name' => 'Furnite & Decor'],
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
