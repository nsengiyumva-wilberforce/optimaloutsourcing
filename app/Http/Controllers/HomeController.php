<?php

namespace App\Http\Controllers;

use App\Models\Employment_type;
use Illuminate\Http\Request;
use App\Models\Job;

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

        // Send the email
        $to = "nsengiyumvawilberforce@gmail.com";
        $subject = "Contact Us Form";
        $message = "Name: " . $request->name . "\n";
        $message .= "Email: " . $request->email . "\n";
        $message .= "Message: " . $request->message . "\n";
        $headers = "From: " . $request->email . "\r\n" .
            "CC: ";
        mail($to, $subject, $message, $headers);


        return view('contact-us');
    }
}
