@extends('layouts.sidebar')
@section('content')
    <div class="pxp-dashboard-content-details">
        <div class="row">
            <div class="col-md-9">
                <h1>Edit Profile</h1>
                <p class="pxp-text-light">Edit your candidate profile page info.</p>
            </div>
            <div class="col-md-3">
                <div class="card card-body">
                    <h6>Turn your profile into a professional CV</h6>
                    <a href="/cv-generator" class="btn btn-primary">Download CV</a>
                </div>
            </div>
        </div>

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mt-4 mt-lg-5">
                <div class="col-xxl-8">
                    <div class="mb-3">
                        <label for="pxp-candidate-first-name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="pxp-candidate-first-name" class="form-control"
                            placeholder="Add Your First Name" value="{{ $profile->first_name ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="pxp-candidate-last-name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" id="pxp-last-name" class="form-control"
                            placeholder="Add Your Last Name" value="{{ $profile->last_name ?? '' }}">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="pxp-candidate-title" class="form-label">Title</label>
                                <input type="text" name="title" id="pxp-candidate-title" class="form-control"
                                    placeholder="E.g. Web Designer" value="{{ $profile->title ?? '' }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="pxp-candidate-location" class="form-label">Location</label>
                                <input type="tel" name="location" id="pxp-candidate-location" class="form-control"
                                    placeholder="E.g. San Francisco, CA" value="{{ $profile->location ?? '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="pxp-candidate-email" class="form-label">Email</label>
                                <input type="email" name="email" id="pxp-candidate-email" class="form-control"
                                    placeholder="candidate@email.com" value="{{ $profile->email ?? '' }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="pxp-candidate-phone" class="form-label">Phone</label>
                                <input type="tel" name="phone_number" id="pxp-candidate-phone" class="form-control"
                                    placeholder="(+12) 345 6789" value="{{ $profile->phone_number ?? '' }}">
                            </div>
                        </div>
                    </div>
                </div>
               <div class="col-xxl-4">
                    <div class="form-label">&nbsp;</div>
                    <div class="pxp-candidate-photo mb-3">
                        <input type="file" name="profile_photo" id="pxp-candidate-photo-choose-file" accept="image/*">
                        <label for="pxp-candidate-photo-choose-file" class="pxp-cover">
                            @if ($profile_photo)
                                <img src="{{ asset('storage/' . $profile_photo) }}" alt="Profile Photo" height="100%"
                                    width="100%">
                            @else
                                <span>Upload<br>Photo</span>
                            @endif
                        </label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="pxp-candidate-about" class="form-label">About you</label>
                <textarea class="form-control" name="about_you" id="pxp-candidate-about" placeholder="Type your info here...">{{ $profile->about_you }}</textarea>
            </div>

            <div class="mt-4 mt-lg-5">
                <h2>Skills</h2>
                <div class="pxp-candidate-dashboard-skills mb-3">
                    <ul id="selectedSkillsList" class="list-unstyled">
                        @if ($skills)
                            @foreach ($user_skills as $skill)
                                <li data-id="{{ $skill->skill_id }}">{{ $skill->skill_name }}<span
                                        class="fa fa-trash-o"></span></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <input type="hidden" name="skills" id="selectedSkillsInput">
                <div class="input-group mb-3">
                    <select id="skillsSelect" class="form-select">
                        <option value="">Select a skill</option>
                        @foreach ($skills as $skill)
                            <option value="{{ $skill->skill_id }}">{{ $skill->skill_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mt-4 mt-lg-5">
                <h2>Work Experience</h2>
                <div class="table-responsive">
                    <table class="table align-middle" id="experience-table">
                        <tbody>
                            @if ($experiences)
                                @foreach ($experiences as $experience)
                                    <tr data-id="{{ $experience->experience_id }}">
                                        <td style="width: 30%;">
                                            <div class="pxp-candidate-dashboard-experience-title">
                                                {{ $experience->job_title }}</div>
                                        </td>
                                        <td style="width: 25%;">
                                            <div class="pxp-candidate-dashboard-experience-company">
                                                {{ $experience->company_name }}</div>
                                        </td>
                                        <td style="width: 25%;">
                                            <div class="pxp-candidate-dashboard-experience-time">
                                                {{ date('Y', strtotime($experience->start_date)) }} -
                                                {{ date('Y', strtotime($experience->end_date)) }}</div>
                                        </td>
                                        <td>
                                            <div class="pxp-dashboard-table-options">
                                                <ul class="list-unstyled">
                                                    <li><button title="Edit" class="edit-btn"><span
                                                                class="fa fa-pencil"></span></button></li>
                                                    <li><button title="Delete" class="delete-btn"><span
                                                                class="fa fa-trash-o"></span></button></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>

                <div class="row mt-3 mt-lg-4">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="pxp-candidate-work-title" class="form-label">Job title</label>
                            <input type="text" name="job_title" id="pxp-candidate-work-title" class="form-control"
                                placeholder="E.g. Web Designer" value="{{ old('job_title') }}">
                            @if ($errors->has('job_title'))
                                <div class="alert alert-danger">
                                    <p>{{ $errors->first('job_title') }}</p>
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="pxp-candidate-work-company" class="form-label">Company</label>
                            <input type="text" name="company_name" id="pxp-candidate-work-company"
                                class="form-control" placeholder="Company name" value="{{ old('company_name') }}">
                            @if ($errors->has('company_name'))
                                <div class="alert alert-danger">
                                    <p>{{ $errors->first('company_name') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="pxp-candidate-start-date" class="form-label">Start Date</label>
                            <input type="date" name="start_date" id="pxp-candidate-start-date" class="form-control"
                                placeholder="E.g. 2005 - 2013" value="{{ old('start_date') }}">
                            @if ($errors->has('start_date'))
                                <div class="alert alert-danger">
                                    <p>{{ $errors->first('start_date') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="pxp-candidate-end-date" class="form-label">End Date</label>
                            <input type="date" name="end_date" id="pxp-candidate-end-date" class="form-control"
                                placeholder="E.g. 2005 - 2013" value="{{ old('end_date') }}">
                            @if ($errors->has('end_date'))
                                <div class="alert alert-danger">
                                    <p>{{ $errors->first('end_date') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pxp-candidate-work-about" class="form-label">Description</label>
                    <textarea class="form-control pxp-smaller" name="job_description" id="pxp-candidate-work-about"
                        placeholder="Type a short description here...">{{ old('job_description') }}</textarea>
                    @if ($errors->has('job_description'))
                        <div class="alert alert-danger">
                            <p>{{ $errors->first('job_description') }}</p>
                        </div>
                    @endif
                </div>
                <input type="hidden" name="experiences" id="experiences-hidden-field">
                <button class="btn rounded-pill pxp-subsection-cta" id="add-experience-btn">Add
                    Experience</button>
            </div>

            <div class="mt-4 mt-lg-5">
                <h2>Education & Training</h2>
                <div class="table-responsive">
                    <table class="table align-middle" id="training-table">
                        <tbody>
                            @if ($trainings)
                                @foreach ($trainings as $training)
                                    <tr data-id="{{ $training->training_id }}">
                                        <td style="width: 30%;">
                                            <div class="pxp-candidate-dashboard-experience-title">
                                                {{ $training->training_title }}</div>
                                        </td>
                                        <td style="width: 25%;">
                                            <div class="pxp-candidate-dashboard-experience-company">
                                                {{ $training->training_institution }}</div>
                                        </td>
                                        <td style="width: 25%;">
                                            <div class="pxp-candidate-dashboard-experience-time">
                                                {{ $training->start_date }} - {{ $training->end_date }}</div>
                                        </td>
                                        <td>
                                            <div class="pxp-dashboard-table-options">
                                                <ul class="list-unstyled">
                                                    <li><button title="Edit" class="edit-btn"><span
                                                                class="fa fa-pencil"></span></button></li>
                                                    <li><button title="Delete" class="delete-btn"><span
                                                                class="fa fa-trash-o"></span></button></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>

                <div class="row mt-3 mt-lg-4">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="pxp-candidate-edu-title" class="form-label">Title</label>
                            <input type="text" name="training_title" id="pxp-candidate-edu-title"
                                class="form-control" placeholder="E.g. Architecure" value="{{ old('training_title') }}">
                            @if ($errors->has('training_title'))
                                <div class="alert alert-danger">
                                    <p>{{ $errors->first('training_title') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="pxp-candidate-edu-school" class="form-label">School</label>
                            <input type="text" name="training_institution" id="pxp-candidate-edu-school"
                                class="form-control" placeholder="School name"
                                value="{{ old('training_institution') }}">
                            @if ($errors->has('training_institution'))
                                <div class="alert alert-danger">
                                    <p>{{ $errors->first('training_institution') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="pxp-candidate-edu-start-time" class="form-label">Start Date</label>
                            <input type="date" name="training_start_date" id="pxp-candidate-edu-start-time"
                                class="form-control" placeholder="E.g. 2005 - 2013"
                                value="{{ old('training_start_date') }}">
                            @if ($errors->has('training_start_date'))
                                <div class="alert alert-danger">
                                    <p>{{ $errors->first('training_start_date') }}</p>
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="pxp-candidate-edu-end-time" class="form-label">End Date</label>
                            <input type="date" name="training_end_date" id="pxp-candidate-edu-end-time"
                                class="form-control" placeholder="E.g. 2005 - 2013"
                                value="{{ old('training_end_date') }}">
                            @if ($errors->has('training_end_date'))
                                <div class="alert alert-danger">
                                    <p>{{ $errors->first('training_end_date') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pxp-candidate-edu-about" class="form-label">Description</label>
                    <textarea class="form-control pxp-smaller" name="training_description" id="pxp-candidate-edu-about"
                        placeholder="Type a short description here...">{{ old('training_description') }}</textarea>
                    @if ($errors->has('training_description'))
                        <div class="alert alert-danger">
                            <p>{{ $errors->first('training_description') }}</p>
                        </div>
                    @endif
                </div>
                <input type="hidden" name="trainings" id="trainings-hidden-field">
                <button class="btn rounded-pill pxp-subsection-cta" id="add-edu-btn">Add Education</button>
            </div>

            <div class="mt-4 mt-lg-5">
                <h2>Language Skills</h2>
                <div class="row mt-3 mt-lg-4">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="language" class="form-label">Language</label>
                            <input type="text" name="language" id="language" class="form-control"
                                placeholder="E.g. English" value="{{ old('language') }}">
                            @if ($errors->has('language'))
                                <div class="alert alert-danger">
                                    <p>{{ $errors->first('language') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="spoken_language_level" class="form-label">Spoken language level</label>
                            <select id="spoken_language_level" name="spoken_language_level" class="form-select">
                                    <option value="none">None</option>
                                    <option value="basic">Basic</option>
                                    <option value="fluent">Fluent</option>
                                    <option value="native">Native</option>
                            </select>
                            @if ($errors->has('spoken_language_level'))
                                <div class="alert alert-danger">
                                    <p>{{ $errors->first('spoken_language_level') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="written_language_level" class="form-label">Written language level</label>
                            <select id="written_language_level" name="written_language_level" class="form-select">
                                    <option value="none">None</option>
                                    <option value="basic">Basic</option>
                                    <option value="fluent">Fluent</option>
                                    <option value="native">Native</option>
                            </select>
                            @if ($errors->has('written_language_level'))
                                <div class="alert alert-danger">
                                    <p>{{ $errors->first('written_language_level') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <input type="hidden" name="languages" id="trainings-hidden-field">
                <button class="btn rounded-pill pxp-subsection-cta" id="add-edu-btn">Add Language</button>
            </div>

            <div class="mt-4 mt-lg-5">
                <h2>Certificates</h2>
                <div class="row mt-3 mt-lg-4">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="certificate_name" class="form-label">Certificate Name</label>
                            <select id="certificate_name" name="certificate_name" class="form-select">
                                    <option>Select Certificate</option>
                                    <option value="basic">Certificate inFrench Language</option>
                                    <option value="fluent">Certified Ethical Hacker (CEH)</option>
                                    <option value="native">Certified Fraud Examiner</option>
                            </select>
                            @if ($errors->has('certificate_name'))
                                <div class="alert alert-danger">
                                    <p>{{ $errors->first('certificate_name') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="date_of_certification" class="form-label">When you got certificate?</label>
                            <input type="date" name="date_of_certification" id="date_of_certification" placeholder="Select Month" class="form-control">
                            @if ($errors->has('date_of_certification'))
                                <div class="alert alert-danger">
                                    <p>{{ $errors->first('date_of_certification') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="certificate_attachment" class="form-label">Have Attachment for Certificate? Great?</label>
                            <input type="file" name="certificate_attachment" id="certificate_attachment" class="form-control">
                            @if ($errors->has('certificate_attachment'))
                                <div class="alert alert-danger">
                                    <p>{{ $errors->first('certificate_attachment') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <input type="hidden" name="languages" id="trainings-hidden-field">
                <button class="btn rounded-pill pxp-subsection-cta" id="add-edu-btn">Add Certificate</button>
            </div>

            <div class="mt-4 mt-lg-5">
                <button class="btn rounded-pill pxp-section-cta" type="submit">Save Profile</button>
            </div>
        </form>
    </div>
    </div>
@endsection
