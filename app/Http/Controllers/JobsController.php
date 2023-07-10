<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Employment_type;
use App\Models\Experience_level;
use App\Models\Salary_level;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->key_word; // Get the keyword from the request
        $category = $request->input('category', ''); // Get the category from the request with a default empty value
        $location = $request->input('location', ''); // Get the location from the request with a default empty value
        // Query the jobs table based on the keyword and location
        $query = Job::query();

        if ($keyword) {
            // Check if the keyword matches the job title
            $query->where(function ($q) use ($keyword) {
                $q->where('job_title', 'like', "%$keyword%")
                    ->orWhere('description', 'like', "%$keyword%");
            });
        }

        if ($location) {
            $query->where('location', 'like', "%$location%");
        }

        // Retrieve the jobs with the associated users
        $jobs = $query->with('user')->get();

        // Get all the experience levels
        $experienceLevels = Experience_level::all();

        // Get all the salary ranges
        $salaryRanges = Salary_level::all();

        // Get all the employment types
        $employmentTypes = Employment_type::all();

        // Get all categories
        $categories = Category::all();

        // Pass the data to the view
        return view('jobs.index', compact('jobs', 'experienceLevels', 'salaryRanges', 'employmentTypes', 'categories'));
    }


    public function newJob()
    {
        //get all the experience levels
        $experienceLevels = Experience_level::all();

        //get all the salary ranges
        $salaryRanges = Salary_level::all();

        //get all the employment types
        $employmentTypes = Employment_type::all();

        //get all job categories
        $categories = Category::all();
        return view('jobs.newJob', compact('experienceLevels', 'salaryRanges', 'employmentTypes', 'categories'));
    }

    /**
     * Store a new job.
     */
    public function store(Request $request)
    {
        //get the logged in user_id
        $userId = Auth::id();

        //check if publishe is true or false
        if ($request->published == 'true') {
            $published = 1;
        } else {
            $published = 0;
        }
        //save the job to the database
        $job = Job::create([
            'job_user_id' => $userId,
            'job_title' => $request->job_title,
            'location' => $request->location,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'experience' => $request->experience,
            'experience_level_id' => $request->experience_level_id,
            'employment_type_id' => $request->employment_type_id,
            'salary_range_id' => $request->salary_range_id,
            'published' => $published,
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

    //serach jobs by category or location or country
    public function search(Request $request)
    {
        $keyword = $request->input('keyword'); // Get the keyword from the request
        $location = $request->input('location'); // Get the location from the request

        // Query the jobs table based on the keyword and location
        $query = Job::query();

        if ($keyword) {
            // Check if the keyword matches the job title
            $query->where(function ($q) use ($keyword) {
                $q->where('job_title', 'like', "%$keyword%")
                    ->orWhere('description', 'like', "%$keyword%");
            });
        }

        if ($location) {
            $query->where('location', 'like', "%$location%");
        }

        // Retrieve the jobs with the associated users
        $jobs = $query->with('user')->get();

        // Pass the jobs to the view
        return view('jobs.index', compact('jobs'));
    }
}
