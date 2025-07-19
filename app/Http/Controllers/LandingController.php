<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display the home page
     */
    public function index()
    {
        return view('landing.index');
    }

    /**
     * Display the contests page
     */
    public function contests()
    {
        return view('landing.contests');
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
    public function users()
    {
        return view('landing.users');
    }
} 