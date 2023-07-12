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
        //get all the applications for the logged in user with job details and candidate's details
        $candidates = auth()->user()->applications()->with('job', 'user.profile')->get();
        $number_of_candidates = count($candidates);
        return view('candidates.dashboard', compact('candidates', 'number_of_candidates'));
    }
    //retrieve a single candidate
    public function candidateDetails($id)
    {
        //get the candidate details with their profile
        $candidate = User::where('user_id', $id)->with('profile')->first();

        //get candidate's skills from the profile_skills table
        $skills = $candidate->profile->skills()->get();

        //get the user's work experience
        $experiences = $candidate->profile->experiences()->get();

        //get the user's trainings
        $trainings = $candidate->profile->trainings()->get();

        return view('candidates.candidate-details', compact('candidate', 'skills', 'experiences', 'trainings'));
    }
}
