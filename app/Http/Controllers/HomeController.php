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
}
