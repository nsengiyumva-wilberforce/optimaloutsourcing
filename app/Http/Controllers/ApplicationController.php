<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('applications.index');
    }

    public function showapplicationForm()
    {
        return view('applications.applicationForm');
    }
}
