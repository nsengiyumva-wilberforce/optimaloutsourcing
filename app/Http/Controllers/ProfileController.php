<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use Barryvdh\DomPDF\Facade\Pdf;
;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        if (count($skills) > 0 && $skills[0] != "") {
            $profile->skills()->sync($skills);
        }

        //handle form information in case it was not added to the DOM for job expereince and training
        if ($request->input('job_title') && $experiences == null) {
            //validate the request
            $request->validate([
                'job_title' => 'required',
                'company_name' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'job_description' => 'required',
            ]);

            //create a new experience object
            $experiences[] = new \stdClass();
            //add the experience to the array
            $experiences[0]->job_title = $request->input('job_title');
            $experiences[0]->company_name = $request->input('company_name');
            $experiences[0]->start_date = $request->input('start_date');
            $experiences[0]->end_date = $request->input('end_date');
            $experiences[0]->job_description = $request->input('job_description');
        } else {
            if ($experiences != null) {
                $experienceIndex = count($experiences);
                $experiences[$experienceIndex] = new \stdClass();
                $experiences[$experienceIndex]->job_title = $request->input('job_title');
                $experiences[$experienceIndex]->company_name = $request->input('company_name');
                $experiences[$experienceIndex]->start_date = $request->input('start_date');
                $experiences[$experienceIndex]->end_date = $request->input('end_date');
                $experiences[$experienceIndex]->job_description = $request->input('job_description');
            }
        }

        if ($request->input('training_title') && $trainings == null) {
            //validate the request
            $request->validate([
                'training_title' => 'required',
                'training_institution' => 'required',
                'training_start_date' => 'required',
                'training_end_date' => 'required',
                'training_description' => 'required',
            ]);

            //create a new training object
            $trainings[] = new \stdClass();
            //add the training to the array
            $trainings[0]->training_title = $request->input('training_title');
            $trainings[0]->training_institution = $request->input('training_institution');
            $trainings[0]->training_start_date = $request->input('training_start_date');
            $trainings[0]->training_end_date = $request->input('training_end_date');
            $trainings[0]->training_description = $request->input('training_description');
        } else {
            if ($trainings != null) {
                $trainingIndex = count($trainings);
                $trainings[$trainingIndex] = new \stdClass();
                $trainings[$trainingIndex]->training_title = $request->input('training_title');
                $trainings[$trainingIndex]->training_institution = $request->input('training_institution');
                $trainings[$trainingIndex]->training_start_date = $request->input('training_start_date');
                $trainings[$trainingIndex]->training_end_date = $request->input('training_end_date');
                $trainings[$trainingIndex]->training_description = $request->input('training_description');
            }
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

    public function createCV(Request $request)
    {
        $full_name = auth()->user()->profile->first_name . ' ' . auth()->user()->profile->last_name;
        $cv_file_name = $full_name . '-CV.pdf';
        $path = public_path('assets/cvs/' . $cv_file_name);

        if (file_exists($path)) {
            return response()->json(['file_url' => asset('assets/cvs/' . $cv_file_name)]);
        } else {
            abort(404, 'File not found.');
        }
    }

    public function editCv(Request $request, string $template)
    {
        $design = $request->input('design') ? $request->input('design') : $template;
        $effect_color = $request->input('effect_color');
        $font_size = $request->input('font_size') ? $request->input('font_size') : 'normal';
        $font_family = $request->input('font_family') ? $request->input('font_family') : 'times new roman';
        //get all the profile info for the user
        $profile = auth()->user()->profile;

        //get all the skills in skills table
        $skills = $profile->skills;

        //get all the experiences for the user
        $experiences = $profile->experiences;

        //get all the trainings for the user
        $trainings = $profile->trainings;

        //get the profile photo
        $profile_photo = $profile->profile_photo;

        //generate the full file name
        $full_name = auth()->user()->profile->first_name . ' ' . auth()->user()->profile->last_name;
        $cv_file_name = $full_name . '-CV.pdf';

        //get the cover photo
        $cover_photo = $profile->cover_photo;
        $data = [
            'profile' => $profile,
            'skills' => $skills,
            'experiences' => $experiences,
            'trainings' => $trainings,
            'profile_photo' => $profile_photo,
            'cover_photo' => $cover_photo,
            'theme_color' => $effect_color,
            'cv_file_name' => $cv_file_name,
            'design' => $design,
            'font_size' => $font_size,
            'font_family' => $font_family
        ];
        if ($design == 'plain')
            $pdf = Pdf::loadView('cvgenerator.cv', $data);

        if ($design == 'classic')
            $pdf = Pdf::loadView('cvgenerator.classic', $data);

        if ($design == 'international')
            $pdf = Pdf::loadView('cvgenerator.international', $data);

        if ($design == 'modern')
            $pdf = Pdf::loadView('cvgenerator.modern', $data);


        //check if there is no $design
        if ($design == null) {
            $pdf = Pdf::loadView('cvgenerator.international', $data);
        }

        //check if $pdf is not set
        if (!isset($pdf)) {
            $pdf = Pdf::loadView('cvgenerator.international', $data);
        }
        // $pdf->output();
        // $canvas = $pdf->getDomPDF()->getCanvas();
        // $height = $canvas->get_height();
        // $width = $canvas->get_width();
        // $canvas->set_opacity(.2, "Multiply");
        // $canvas->page_text(
        //     $width / 5, $height / 2,
        //     'Optimal Outsourcing',
        //     null,
        //     50,
        //     array(0, 0, 0),
        //     2,
        //     2,
        //     -45
        // );

        // Save the PDF to the assets folder in the public directory
        $pdf->save(public_path('assets/cvs/' . $cv_file_name));

        return view('cvgenerator.edit-cv', $data);
    }

    public function updateCV(Request $request)
    {
        // Get the JSON data from the request
        $jsonData = $request->getContent();

        // Decode the JSON string into a PHP array
        $data = json_decode($jsonData, true);

        // Using array notation
        $design = $data['design'];
        $effect_color = $data['effect_color'];
        $font_family = $data['font_family'];
        $font_size = $data['font_size'];

        //get all the profile info for the user
        $profile = auth()->user()->profile;

        //get all the skills in skills table
        $skills = $profile->skills;

        //get all the experiences for the user
        $experiences = $profile->experiences;

        //get all the trainings for the user
        $trainings = $profile->trainings;

        //get the profile photo
        $profile_photo = $profile->profile_photo;

        //generate the full file name
        $full_name = auth()->user()->profile->first_name . ' ' . auth()->user()->profile->last_name;
        $cv_file_name = $full_name . '-CV.pdf';

        //get the cover photo
        $cover_photo = $profile->cover_photo;
        $data = [
            'profile' => $profile,
            'skills' => $skills,
            'experiences' => $experiences,
            'trainings' => $trainings,
            'profile_photo' => $profile_photo,
            'cover_photo' => $cover_photo,
            'theme_color' => $effect_color,
            'cv_file_name' => $cv_file_name,
            'design' => $design,
            'font_size' => $font_size,
            'font_family' => $font_family
        ];
        if ($design === "plain")
            $pdf = Pdf::loadView('cvgenerator.cv', $data);

        if ($design === "classic")
            $pdf = Pdf::loadView('cvgenerator.classic', $data);

        if ($design === "international") {
            $pdf = Pdf::loadView('cvgenerator.international', $data);
        }

        if ($design === "modern") {
            $pdf = Pdf::loadView('cvgenerator.modern', $data);
        }
        //check if there is no $design
        if ($design == null) {
            $pdf = Pdf::loadView('cvgenerator.international', $data);
        }

        //check if $pdf is not set
        if (!isset($pdf)) {
            $pdf = Pdf::loadView('cvgenerator.international', $data);
        }
        // $pdf->output();
        // $canvas = $pdf->getDomPDF()->getCanvas();
        // $height = $canvas->get_height();
        // $width = $canvas->get_width();
        // $canvas->set_opacity(.2, "Multiply");
        // $canvas->page_text(
        //     $width / 5, $height / 2,
        //     'Optimal Outsourcing',
        //     null,
        //     50,
        //     array(0, 0, 0),
        //     2,
        //     2,
        //     -45
        // );

        //set the custom font family
        // Save the PDF to the assets folder in the public directory
        $pdf->save(public_path('assets/cvs/' . $cv_file_name));

        return 200;
    }
}
