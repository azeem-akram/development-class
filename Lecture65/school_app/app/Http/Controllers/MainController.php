<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function jobListings()
    {
        return view('job-listings');
    }

    public function jobDetails()
    {
        return view('job-details');
    }

    public function contact()
    {
        return view('contact');
    }
}
