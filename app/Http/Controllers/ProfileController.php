<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Skill;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index()
    {
        //get all the profile info for the user
        $profile = auth()->user()->profile;

        //get all the skills in skills table
        $skills = Skill::all();

        //get all the skills for the user
        $user_skills = $profile->skills;


        //get all the experiences for the user
        $experiences = $profile->experiences;

        //get all the trainings for the user
        $trainings = $profile->trainings;

        //get the profile photo
        $profile_photo = $profile->profile_photo;

        //get the cover photo
        $cover_photo = $profile->cover_photo;
        return view('profile.index', compact('profile', 'skills', 'experiences', 'trainings', 'profile_photo', 'cover_photo', 'user_skills'));
    }

    public function update(Request $request)
    {
        //get the skills from the request
        $selectedSkills = $request->input('skills');
        //split the skills into an array
        $skills = explode(',', $selectedSkills);
        //get experiences from the request
        $experiences = json_decode($request->input('experiences'));
        //get traingings from the request
        $trainings = json_decode($request->input('trainings'));
        $user = auth()->user();
        $profile = $user->profile;
        //attach the skills to the profile
        if (count($skills) > 0) {
            $profile->skills()->sync($skills);
        }
        //insert experiences into the database
        if ($experiences) {
            foreach ($experiences as $experience) {
                $profile->experiences()->create([
                    'job_title' => $experience->job_title,
                    'company_name' => $experience->company_name,
                    'start_date' => $experience->start_date,
                    'end_date' => $experience->end_date,
                    'job_description' => $experience->job_description,
                ]);
            }
        }

        //insert trainings into the database
        if ($trainings) {
            foreach ($trainings as $training) {
                $profile->trainings()->create([
                    'training_title' => $training->training_title,
                    'training_institution' => $training->training_institution,
                    'training_start_date' => $training->training_start_date,
                    'training_end_date' => $training->training_end_date,
                    'training_description' => $training->training_description,
                ]);
            }
        }
        //get the cover image
        if ($request->hasFile('cover_photo')) {
            $file = $request->file('cover_photo');
            // Perform necessary validations or file processing
            $path = $file->store('cover_photos', 'public');

            //save the image path in the database
            $profile->cover_photo = $path;
        }

        //get the profile image
        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            // Perform necessary validations or file processing
            $path = $file->store('profile_photos', 'public');

            //save the image path in the database
            $profile->profile_photo = $path;
        }

        $profile->update([
            'title' => $request->input('title'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone_number' => $request->input('phone_number'),
            'location' => $request->input('location'),
            'about_you' => $request->input('about_you'),
        ]);
        $user->save();

        return redirect()->route('profile.update')->with('success', 'Profile updated successfully.');
    }

    public function cvGenerator()
    {
        return view('cvgenerator.index');
    }

    public function createCV()
    {
        //get all the profile info for the user
        $profile = auth()->user()->profile;

        //get all the skills in skills table
        $skills = Skill::all();

        //get all the experiences for the user
        $experiences = $profile->experiences;

        //get all the trainings for the user
        $trainings = $profile->trainings;

        //get the profile photo
        $profile_photo = $profile->profile_photo;

        //get the cover photo
        $cover_photo = $profile->cover_photo;
        $data = [
            'profile' => $profile,
            'skills' => $skills,
            'experiences' => $experiences,
            'trainings' => $trainings,
            'profile_photo' => $profile_photo,
            'cover_photo' => $cover_photo,
        ];
        // Set the success message in the session
        $pdf = Pdf::loadView('cvgenerator.cv', $data);

        //Session::flash('success', 'CV generated successfully.');

        //get the logeed in user first_name and last_name
        $full_name = auth()->user()->profile->first_name.' '.auth()->user()->profile->last_name;

        // Return the PDF download response
        return $pdf->download($full_name.' CV.pdf');
        //return view('cvgenerator.cv', $data);
    }
}
