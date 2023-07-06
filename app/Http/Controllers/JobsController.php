<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    public function index()
    {
        //get all jobs from the database
        $jobs = Job::with('user')->get();;

        //dd the users who posted the jobs
        return view('jobs.index', compact('jobs'));
    }

    public function newJob()
    {
        return view('jobs.newJob');
    }

    /**
     * Store a new job.
     */
    public function store(Request $request)
    {
        //get the logged in user_id
        $userId = Auth::id();

        //check if its a draft or a to be published job!!!
        if($request->published == "false"){
            $request->published = 0;
        } else {
            $request->published = 1;
        }

        //save the job to the database
        $job = Job::create([
            'job_user_id' =>$userId,
            'job_title' => $request->job_title,
            'location' => $request->location,
            'category' => $request->category,
            'description' => $request->description,
            'experience' => $request->experience,
            'career_level' => $request->career_level,
            'employment_type' => $request->employment_type,
            'salary_range' => $request->salary_range,
            'published' => $request->published,
        ]);
        return redirect()->route('newJob')->with('success', 'Job created successfully.');
    }

    public function manageJobs()
    {
        //only get jobs that belong to the logged in user and paginate them
        $availableJobs = Job::where('job_user_id', Auth::id())->paginate(10);
        $number_of_jobs = count($availableJobs);
        return view('jobs.manage-jobs.index', compact('availableJobs', 'number_of_jobs'));
    }
}
