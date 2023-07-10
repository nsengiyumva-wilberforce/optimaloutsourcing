<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Salary_level;
use Illuminate\Http\Request;
use App\Models\Employment_type;
use App\Models\Experience_level;
class SettingsController extends Controller
{
    public function index()
    {
        //get all the employment types
        $employmentTypes = Employment_type::all();

        //get all the experience levels
        $experienceLevels = Experience_level::all();

        //get all the salary ranges
        $salaryRanges = Salary_level::all();

        //get all the job categories
        $categories = Category::all();

        return view('settings.index', compact('employmentTypes', 'experienceLevels', 'salaryRanges', 'categories'));
    }

    public function createEmploymentType(Request $request)
    {
        //store to the database
        $employmentType = new Employment_type();
        $employmentType->name = $request->name;
        $employmentType->save();

        return redirect()->route('settings');
    }

    public function createExperienceLevel(Request $request)
    {
        //store to the database
        $experienceLevel = new Experience_level();
        $experienceLevel->name = $request->name;
        $experienceLevel->save();

        return redirect()->route('settings');
    }

    public function createSalaryRange(Request $request)
    {
        //store to the database
        $salaryRange = new Salary_level();
        $salaryRange->starting_salary = $request->starting_salary;
        $salaryRange->ending_salary = $request->ending_salary;
        $salaryRange->save();

        return redirect()->route('settings');
    }

    public function createJobCategory(Request $request)
    {
        //store to the database
        $jobCategory = new Category();
        $jobCategory->name = $request->name;
        $jobCategory->save();

        return redirect()->route('settings');
    }
}
