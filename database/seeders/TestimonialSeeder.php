<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'customer_name' => 'John Smith',
                'customer_title' => 'Homeowner',
                'testimonial' => 'Amazing quality sheds! The delivery and installation was perfect. The team at ALL PRO SALES went above and beyond to ensure everything was exactly how I wanted it. Highly recommend!',
                'rating' => 5,
                'product_category' => 'Sheds',
                'is_featured' => true,
                'sort_order' => 1
            ],
            [
                'customer_name' => 'Sarah Johnson',
                'customer_title' => 'Garden Enthusiast',
                'testimonial' => 'The greenhouse is exactly what I needed for my garden. Great customer service and professional installation team. The climate control system works perfectly!',
                'rating' => 5,
                'product_category' => 'Greenhouses',
                'is_featured' => true,
                'sort_order' => 2
            ],
            [
                'customer_name' => 'Mike Davis',
                'customer_title' => 'Business Owner',
                'testimonial' => 'Excellent deck materials and the polly furniture is so durable. Will definitely buy again! The weather-resistant materials are holding up perfectly.',
                'rating' => 5,
                'product_category' => 'Deck Materials',
                'is_featured' => true,
                'sort_order' => 3
            ],
            [
                'customer_name' => 'Lisa Wilson',
                'customer_title' => 'Property Manager',
                'testimonial' => 'We ordered multiple storage sheds for our rental properties. ALL PRO SALES delivered on time and the quality is outstanding. Great value for money!',
                'rating' => 5,
                'product_category' => 'Sheds',
                'is_featured' => false,
                'sort_order' => 4
            ],
            [
                'customer_name' => 'Robert Brown',
                'customer_title' => 'Retired',
                'testimonial' => 'The polly furniture set we bought is perfect for our patio. It\'s comfortable, durable, and looks great. The customer service was exceptional throughout the process.',
                'rating' => 5,
                'product_category' => 'Polly Furniture',
                'is_featured' => false,
                'sort_order' => 5
            ],
            [
                'customer_name' => 'Jennifer Lee',
                'customer_title' => 'Homeowner',
                'testimonial' => 'Free delivery and installation made this purchase even better! The shed was exactly as described and the installation team was professional and courteous.',
                'rating' => 5,
                'product_category' => 'Sheds',
                'is_featured' => false,
                'sort_order' => 6
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
