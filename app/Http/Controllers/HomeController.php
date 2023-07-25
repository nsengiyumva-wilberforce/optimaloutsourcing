<?php

namespace App\Http\Controllers;

use App\Models\Employment_type;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        //number of available jobs
        $jobs = Job::count();

        //get all the employment types
        $employmentTypes = Employment_type::all();
        return view('index', compact('jobs', 'employmentTypes'));
    }

    public function count_down()
    {
        return view('count-down');
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

    //add conta us page
    public function submitContactForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        //send the email using contactmail mailable
        Mail::to('nsengiyumvawilberforce@gmail.com')->send(new \App\Mail\ContactMail($validatedData));

        //redirect to the contact us page with a success message
        return redirect()->back()->with('success', 'Thank you for contacting us!');
        }
}
