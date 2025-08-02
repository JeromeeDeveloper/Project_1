<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteStat;
use App\Models\Testimonial;

class LandingController extends Controller
{
    /**
     * Display the home page
     */
    public function index()
    {
        // Increment visitor counter
        SiteStat::incrementValue('visitors');
        
        // Get stats for the page
        $stats = [
            'visitors' => SiteStat::getValue('visitors', 15420),
            'likes' => SiteStat::getValue('likes', 8924),
            'comments' => SiteStat::getValue('comments', 3247),
            'satisfaction' => SiteStat::getValue('satisfaction', 98)
        ];
        
        // Get testimonials
        $testimonials = Testimonial::active()->ordered()->get();
        
        return view('landing.index', compact('stats', 'testimonials'));
    }

    /**
     * Display the contests page
     */
    public function custom()
    {
        return view('landing.custom');
    }

    /**
     * Display the contest details page
     */
    public function about()
    {
        return view('landing.about');
    }

    /**
     * Display the categories page
     */
    public function categories()
    {
        return view('landing.categories');
    }

    /**
     * Display the users page
     */
    public function contact()
    {
        return view('landing.contact');
    }
} 