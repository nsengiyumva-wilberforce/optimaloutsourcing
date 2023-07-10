<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class HomeController extends Controller
{
    public function index()
    {
        //number of available jobs
        $jobs = Job::count();
        return view('index', compact('jobs'));
    }

    //add about us page
    public function about_us()
    {
        return view('about-us');
    }

    //add contact us page
    public function contact_us()
    {
        return view('contact-us');
    }

    //add faqs page
    public function faq()
    {
        return view('faqs');
    }
}
