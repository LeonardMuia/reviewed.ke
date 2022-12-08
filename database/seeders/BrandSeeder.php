<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [   
                "category_id" => 4,
                "name" => "Safaricom",
                "about" => "Safaricom PLC is a listed Kenyan mobile network operator headquartered at Safaricom House in Nairobi, Kenya. It is the largest telecommunications provider in Kenya, and one of the most profitable companies in the East and Central Africa region.",
                "rating" => 4.8,
                "website_url" => "http://www.safaricom.co.ke/",
                "company_phone" => "+254 722 002 100",
                "company_email" => "customercare@safaricom.co.ke",
                "address" => "SAFARICOM HOUSE. Waiyaki Way, Westlands. Nairobi, Kenya.",
                "logo_path" => "/images/logos/1.png",
                "is_verified" => 1,
                "is_claimed" => 1,
            ],
            [   
                "category_id" => 1,
                "name" => "KCB Bank",
                "about" => "KCB Bank Kenya Limited is a financial services provider headquartered in Nairobi, Kenya. It is licensed as a commercial bank, by the Central Bank of Kenya, the national banking regulator. The bank has also been running Agency banking model.",
                "rating" => 4.3,
                "website_url" => "http://ke.kcbgroup.com/",
                "company_phone" => "+254 711 087 000",
                "company_email" => "contactcentre@kcb.co.ke",
                "address" => "Kencom House, 8th Floor, Moi Avenue. Nairobi, Kenya",
                "logo_path" => "/images/logos/2.png",
                "is_verified" => 1,
                "is_claimed" => 1,
            ],
            [   
                "category_id" => 2,
                "name" => "Jubilee Insurance",
                "about" => "The Jubilee Insurance Company of Kenya, mostly known as Jubilee Insurance, is an insurance company in Kenya, which has the largest economy in the East African Community.",
                "rating" => 4.0,
                "website_url" => "https://jubileeinsurance.com/ke/",
                "company_phone" => "+254 20 328 1000",
                "company_email" => "info@jubileekenya.com",
                "address" => "Jubilee Insurance House, Wabera Street. Nairobi, Kenya",
                "logo_path" => "/images/logos/3.png",
                "is_verified" => 1,
                "is_claimed" => 1,
            ],
            [   
                "category_id" => 4,
                "name" => "Telkom",
                "about" => "Telkom Kenya is an integrated telecommunications provider in Kenya. It was previously a part of the Kenya Posts and Telecommunications Corporation which was the sole provider of both postal and telecommunication services.",
                "rating" => 3.6,
                "website_url" => "https://telkom.co.ke/",
                "company_phone" => "+254 20 222 1000",
                "company_email" => "customercare@telkom.co.ke",
                "address" => "Telkom Plaza, Ralph Bunche Rd. Nairobi, Kenya.",
                "logo_path" => "/images/logos/4.png",
                "is_verified" => 1,
                "is_claimed" => 1,
            ],
            [   
                "category_id" => 5,
                "name" => "Jumia",
                "about" => "Jumia is a Pan-African technology company that is built around a marketplace, logistics service and payment service. The logistics service enables the delivery of packages through a network of local partners while the payment services facilitate the payments of online transactions within Jumia's ecosystem.",
                "rating" => 4.7,
                "website_url" => "https://www.jumia.co.ke/",
                "company_phone" => "+254 711 011 011",
                "company_email" => "customercare@jumia.co.ke",
                "address" => "Kaka House, Mua Close, Westlands. Nairobi, Kenya.",
                "logo_path" => "/images/logos/5.png",
                "is_verified" => 1,
                "is_claimed" => 1,
            ],
            [   
                "category_id" => 5,
                "name" => "Hotpoint",
                "about" => "Hotpoint is a British brand of domestic appliances. Ownership of the brand is split between American company Whirlpool, which has the rights in Europe, and Chinese company Haier, which has the rights in the Americas through its purchase of GE Appliances in 2016.",
                "rating" => 4.2,
                "website_url" => "https://hotpoint.co.ke/",
                "company_phone" => "+254 800 720 404",
                "company_email" => "customercare@jumia.co.ke",
                "address" => "Misha Towers, Westlands Rd. Nairobi, Kenya.",
                "logo_path" => "/images/logos/6.png",
                "is_verified" => 1,
                "is_claimed" => 1,
            ],
            [   
                "category_id" => 5,
                "name" => "University of Nairobi",
                "about" => "The University of Nairobi is a collegiate research university based in Nairobi. It is the largest university in Kenya. Although its history as an educational institution dates back to 1956, it did not become an independent university until 1970.",
                "rating" => 3.2,
                "website_url" => "https://www.uonbi.ac.ke/",
                "company_phone" => "+254 20 224 5566",
                "company_email" => "admissions@uonbi.ac.ke",
                "address" => "University of Nairobi, University Way, Nairobi Kenya.",
                "logo_path" => "/images/logos/7.png",
                "is_verified" => 1,
                "is_claimed" => 0,
            ],
            [   
                "category_id" => 3,
                "name" => "Aga Khan Hospital",
                "about" => "The Aga Khan University Hospital in Nairobi, established in 1958 is a 254-bed long-term care facility offering general medical services, specialist clinics and diagnostic services. The hospital receives referrals for specialised medical care and diagnostic services from various hospitals and clinics in the region. ",
                "rating" => 4.2,
                "website_url" => "https://www.agakhanhospitals.org/en/kenya",
                "company_phone" => "+254 20 366 2000",
                "company_email" => "akuh.information@aku.edu",
                "address" => "Aga Khan University Hospital, 3rd Parklands Avenue, Limuru Road, Nairobi, Kenya.",
                "logo_path" => "/images/logos/7.png",
                "is_verified" => 1,
                "is_claimed" => 0,
            ],
        ];

        foreach($brands as $brand) {
            Brand::create($brand);
        }
    }
}
