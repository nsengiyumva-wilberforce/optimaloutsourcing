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

        //get the languages for the user
        $languages = $profile->languages;

        //get certificates for the user
        $certificates = $profile->certificates;

        //get references for the user
        $references = $profile->references;

        //get the cover photo
        $cover_photo = $profile->cover_photo;
        return view('profile.index', compact('profile', 'skills', 'experiences', 'trainings', 'profile_photo', 'cover_photo', 'user_skills', 'languages', 'certificates', 'references'));
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

        //get languages from the request
        $languages = json_decode($request->input('languages'));

        //get certificates from the request
        $certificates = json_decode($request->input('certificates'));

        //get references from the request
        $references = json_decode($request->input('references'));

        //get authenticated user
        $user = auth()->user();

        //get the profile of the authenticated user
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
            if ($experiences != null && $request->input('job_title') != null) {
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
            if ($trainings != null && $request->input('training_title') != null) {
                $trainingIndex = count($trainings);
                $trainings[$trainingIndex] = new \stdClass();
                $trainings[$trainingIndex]->training_title = $request->input('training_title');
                $trainings[$trainingIndex]->training_institution = $request->input('training_institution');
                $trainings[$trainingIndex]->training_start_date = $request->input('training_start_date');
                $trainings[$trainingIndex]->training_end_date = $request->input('training_end_date');
                $trainings[$trainingIndex]->training_description = $request->input('training_description');
            }
        }
        if ($request->input('language') && $languages == null) {
            //validate the request
            $request->validate([
                'language' => 'required',
                'spoken_language_level' => 'required',
                'written_language_level' => 'required',
            ]);

            //create a new language object
            $languages[] = new \stdClass();
            //add the language to the array
            $languages[0]->language = $request->input('language');
            $languages[0]->spoken_language_level = $request->input('spoken_language_level');
            $languages[0]->written_language_level = $request->input('written_language_level');
        } else {

            if ($languages != null && $request->input('language') != null) {
                $languageIndex = count($languages);
                $languages[$languageIndex] = new \stdClass();
                $languages[$languageIndex]->language = $request->input('language');
                $languages[$languageIndex]->spoken_language_level = $request->input('spoken_language_level');
                $languages[$languageIndex]->written_language_level = $request->input('written_language_level');
            }
        }

        if ($request->input('full_name') && $references == null) {
            //validate the request
            $request->validate([
                'full_name' => 'required',
                'title_and_organization' => 'required',
                'email' => 'required',
                'phone_number' => 'required',
                'relationship' => 'required',
            ]);

            //create a new reference object
            $references[] = new \stdClass();
            //add the reference to the array
            $references[0]->full_name = $request->input('full_name');
            $references[0]->title_and_organization = $request->input('title_and_organization');
            $references[0]->email = $request->input('email');
            $references[0]->phone_number = $request->input('phone_number');
            $references[0]->relationship = $request->input('relationship');
        } else {
            if ($references != null && $request->input('full_name') != null) {
                $referenceIndex = count($references);
                $references[$referenceIndex] = new \stdClass();
                $references[$referenceIndex]->full_name = $request->input('full_name');
                $references[$referenceIndex]->title_and_organization = $request->input('title_and_organization');
                $references[$referenceIndex]->email = $request->input('email');
                $references[$referenceIndex]->phone_number = $request->input('phone_number');
                $references[$referenceIndex]->relationship = $request->input('relationship');
            }
        }

        if ($request->input('certificate_name') && $request->input('date_of_certification')  && $certificates == null) {
            //validate the request
            $request->validate([
                'certificate_name' => 'required',
                'date_of_certification' => 'required',
                'certificate_attachment' => 'required',
            ]);

            //create a new reference object
            $certificates[] = new \stdClass();
            //add the reference to the array
            //get the cover image
            if ($request->hasFile('certificate_attachment')) {
                $file = $request->file('certificate_attachment');
                // Perform necessary validations or file processing
                $path = $file->store('certificate_attachments', 'public');

                //save the image path in the database
                $certificates[0]->certificate_attachment = $path;
            }
            $certificates[0]->certificate_name = $request->input('certificate_name');
            $certificates[0]->date_of_certification = $request->input('date_of_certification');
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
        //insert languages into the database
        if ($languages) {
            foreach ($languages as $language) {
                $profile->languages()->create([
                    'language' => $language->language,
                    'spoken_language_level' => $language->spoken_language_level,
                    'written_language_level' => $language->written_language_level,
                ]);
            }
        }
        //insert references into the database
        if ($references) {
            foreach ($references as $reference) {
                $profile->references()->create([
                    'full_name' => $reference->full_name,
                    'title_and_organization' => $reference->title_and_organization,
                    'email' => $reference->email,
                    'phone_number' => $reference->phone_number,
                    'relationship' => $reference->relationship,
                ]);
            }
        }

        //insert certificates into the database
        if ($certificates) {
            foreach ($certificates as $certificate) {
                $profile->certificates()->create([
                    'certificate_name' => $certificate->certificate_name,
                    'date_of_certification' => $certificate->date_of_certification,
                    'certificate_attachment' => $certificate->certificate_attachment,
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

        //get all the languages for the user
        $languages = $profile->languages;

        //get all the references for the user
        $references = $profile->references;

        //get all the certificates for the user
        $certificates = $profile->certificates;

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
            'languages' => $languages,
            'references' => $references,
            'certificates' => $certificates,
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

        //get all the languages for the user
        $languages = $profile->languages;

        //get all the references for the user
        $references = $profile->references;

        //get all the certificates for the user
        $certificates = $profile->certificates;

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
            'languages' => $languages,
            'references' => $references,
            'certificates' => $certificates,
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
        // Save the PDF to the assets folder in the public directory
        $pdf->save(public_path('assets/cvs/' . $cv_file_name));

        return 200;
    }
}
