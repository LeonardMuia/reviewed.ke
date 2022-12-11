<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews = [
            [
                'company_id' => 6, // ABSA
                'rating' => 4,
                'review' => 'ABSA will help you make life easier in terms of baking. This bank will help you connect to other people in just one click away in any parts of the world. One of the safest way to transfer money, as they aimed to combined innovation and technology at once.',
                'title' => 'Quality Service',
                'user' => 'Dorothy',
                'phone' => '722350400',
                'email' => 'dorothytesh@gmail.com',
            ],
            [
                'company_id' => 6, // ABSA
                'rating' => 5,
                'review' => 'Absa is one of the most leading online bank, innovative and hi tech, safest way to transfer money,reliable, and secure, thank you Absa.',
                'title' => 'Secure and trustworthy',
                'user' => 'James Maina',
                'phone' => '722000000',
                'email' => 'jamesmaina@gmail.com',
            ],
            [
                'company_id' => 6, // ABSA
                'rating' => 4,
                'review' => 'This is my first time dealing with business financing loan with ABSA and the whole process was very easy to follow. Timothy and Angela were very professional and helpful when I had some questions regarding to the loan. I would definitely recommend ABSA to anyone looking for funding for their business. Thanks again',
                'title' => 'Awesome Experience through ABSA',
                'user' => 'Jules',
                'phone' => '722054000',
                'email' => 'julesj@gmail.com',
            ],
            [
                'company_id' => 6, // ABSA
                'rating' => 1,
                'review' => 'After waiting a week, I was informed that they would not process my personal loan. They initially accepted the loan and documents. Then said they could not help me. I will have to resubmit my loan, being paced at the end of the line with some other bank. And just about the time the money is running out at the government. Thank you very much. I guess there was no profit for them, so they told me to pound sand',
                'title' => 'They denied me loan',
                'user' => 'Anonymous',
            ],
        ];

        foreach($reviews as $review) {
            Review::create($review);
        }
    }
}
