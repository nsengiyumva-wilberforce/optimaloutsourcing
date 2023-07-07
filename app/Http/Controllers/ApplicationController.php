<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class ApplicationController extends Controller
{
    public function index()
    {
        //get all applications with their job information
        $applications = auth()->user()->applications()->with('job')->get();
        return view('applications.index', compact('applications'));
    }

    public function showapplicationForm($job_id)
    {
        //store the application
        $job = Job::findOrFail($job_id);

        if($job)
        {
            //check if the logged in user has already applied for this job
            $hasApplied = $job->applications()->where('user_id', auth()->user()->user_id)->exists();

            if($hasApplied)
            {
                return redirect()->back()->with('error', 'You have already applied for this job');
            }
            //store the application
            $job->applications()->create([
                'user_id' => auth()->user()->user_id,
                'resume'=> "no resume uploaded",
                'status' => 'pending'
            ]);
        }
        return view('applications.applicationForm');
    }
}
