<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CandidatesController extends Controller
{
    public function index()
    {
        //get all users whose role is employee
        $candidates = User::where('role', 'employee')->get();
        return view('candidates.index', compact('candidates'));
    }

    public function candidateDashbaord()
    {
        return view('candidates.dashboard');
    }
    //retrieve a single candidate
    public function candidateDetails($id)
    {
        return view('candidates.candidate-details');
    }
}
