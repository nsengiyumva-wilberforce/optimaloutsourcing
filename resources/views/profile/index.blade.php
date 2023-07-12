@extends('layouts.sidebar')
@section('content')
        <div class="pxp-dashboard-content-details">
            <h1>Edit Profile</h1>
            <p class="pxp-text-light">Edit your candidate profile page info.</p>

            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mt-4 mt-lg-5">
                    <div class="col-xxl-8">
                        <div class="mb-3">
                            <label for="pxp-candidate-first-name" class="form-label">First Name</label>
                            <input type="text" name="first_name" id="pxp-candidate-first-name"
                                class="form-control" placeholder="Add Your First Name"
                                value="{{ $profile->first_name ?? '' }}">
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
                                    <input type="text" name="title" id="pxp-candidate-title"
                                        class="form-control" placeholder="E.g. Web Designer"
                                        value="{{ $profile->title ?? '' }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="pxp-candidate-location" class="form-label">Location</label>
                                    <input type="tel" name="location" id="pxp-candidate-location"
                                        class="form-control" placeholder="E.g. San Francisco, CA"
                                        value="{{ $profile->location ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="pxp-candidate-email" class="form-label">Email</label>
                                    <input type="email" name="email" id="pxp-candidate-email"
                                        class="form-control" placeholder="candidate@email.com"
                                        value="{{ $profile->email ?? '' }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="pxp-candidate-phone" class="form-label">Phone</label>
                                    <input type="tel" name="phone_number" id="pxp-candidate-phone"
                                        class="form-control" placeholder="(+12) 345 6789"
                                        value="{{ $profile->phone_number ?? '' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="form-label">&nbsp;</div>
                        <div class="pxp-candidate-cover mb-3">
                            <input type="file" name="cover_photo" id="pxp-candidate-cover-choose-file"
                                accept="image/*">
                            <label for="pxp-candidate-cover-choose-file" class="pxp-cover">
                                @if ($profile_photo)
                                    <img src="{{ asset('storage/' . $cover_photo) }}" alt="Cover Photo" height="100%" width="100%">
                                @else
                                    <span>Upload Cover
                                        Image</span>
                                @endif
                            </label>
                        </div>
                        <div class="pxp-candidate-photo mb-3">
                            <input type="file" name="profile_photo" id="pxp-candidate-photo-choose-file"
                                accept="image/*">
                            <label for="pxp-candidate-photo-choose-file"
                                class="pxp-cover">
                                @if ($profile_photo)
                                    <img src="{{ asset('storage/' . $profile_photo) }}" alt="Cover Photo" height="100%" width="100%">
                                @else
                                <span>Upload<br>Photo</span>
                                @endif
                                </label>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="pxp-candidate-about" class="form-label">About you</label>
                    <textarea class="form-control" name="about_you" id="pxp-candidate-about" placeholder="Type your info here...">{{ $profile->about_you}}</textarea>
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
                                                    {{ $experience->start_date }} - {{ $experience->end_date }}</div>
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
                                <input type="text" name="job_title" id="pxp-candidate-work-title"
                                    class="form-control" placeholder="E.g. Web Designer">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-candidate-work-company" class="form-label">Company</label>
                                <input type="text" name="company_name" id="pxp-candidate-work-company"
                                    class="form-control" placeholder="Company name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-candidate-start-date" class="form-label">Start Date</label>
                                <input type="date" name="start_date" id="pxp-candidate-start-date"
                                    class="form-control" placeholder="E.g. 2005 - 2013">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-candidate-end-date" class="form-label">End Date</label>
                                <input type="date" name="end_date" id="pxp-candidate-end-date"
                                    class="form-control" placeholder="E.g. 2005 - 2013">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pxp-candidate-work-about" class="form-label">Description</label>
                        <textarea class="form-control pxp-smaller" name="job_description" id="pxp-candidate-work-about"
                            placeholder="Type a short description here..."></textarea>
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
                                    class="form-control" placeholder="E.g. Architecure">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-candidate-edu-school" class="form-label">School</label>
                                <input type="text" name="training_institution" id="pxp-candidate-edu-school"
                                    class="form-control" placeholder="School name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-candidate-edu-start-time" class="form-label">Start Date</label>
                                <input type="date" name="training_start_date" id="pxp-candidate-edu-start-time"
                                    class="form-control" placeholder="E.g. 2005 - 2013">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-candidate-edu-end-time" class="form-label">End Date</label>
                                <input type="date" name="training_end_date" id="pxp-candidate-edu-end-time"
                                    class="form-control" placeholder="E.g. 2005 - 2013">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pxp-candidate-edu-about" class="form-label">Description</label>
                        <textarea class="form-control pxp-smaller" name="training_description" id="pxp-candidate-edu-about"
                            placeholder="Type a short description here..."></textarea>
                    </div>
                    <input type="hidden" name="trainings" id="trainings-hidden-field">
                    <button class="btn rounded-pill pxp-subsection-cta" id="add-edu-btn">Add Education</button>
                </div>

                <div class="mt-4 mt-lg-5">
                    <button class="btn rounded-pill pxp-section-cta" type="submit">Save Profile</button>
                </div>
            </form>
        </div>
    </div>
@endsection
