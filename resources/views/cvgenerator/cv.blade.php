<!DOCTYPE html>
<html>

<head>
    <title>{{ $profile->first_name . ' ' . $profile->last_name }} - Curriculum Vitae</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="container">
    <div class="top_section">
        @if ($cover_photo)
            <div class="profile_pic row justify-content-center"
                style="background-image:url({{ asset('storage/' . $cover_photo) }})">
                {{-- check if the profile photo exists and display the profile image else display an avatar  --}}
                @if ($profile->profile_photo)
                    <img src="{{ asset('storage/' . $profile->profile_photo) }}" alt="Avatar" class="rounded img-fluid w-25">
                @else
                    <img src="{{ asset('assets/images/profile_avatar.jpg') }}" alt="Avatar" class="rounded img-fluid w-25">
                @endif
            </div>
        @else
            <div class="profile_pic" style="background-image:url({{ asset('assets/images/cover_avatar.jpg') }})">
                {{-- check if the profile photo exists and display the profile image else display an avatar  --}}
                @if ($profile->profile_photo)
                    <img src="{{ asset('storage/' . $profile->profile_photo) }}" alt="Avatar" class="rounded img-fluid w-25">
                @else
                    <img src="{{ asset('assets/images/profile_avatar.png') }}" alt="Avatar" class="rounded img-fluid w-25">
                @endif
            </div>
        @endif
    </div>

    <div class="profile_info card card-body">
        <h1>{{ $profile->first_name . ' ' . $profile->last_name }}</h1>
        <p><strong>Location:</strong> {{ $profile->location }}</p>
        <p><strong>Email:</strong>{{ $profile->email }}</p>
        <p><strong>Phone:</strong> {{ $profile->phone_number }}</p>
    </div>

    <div class="about">
        <h2>About you</h2>
        <p>{{ $profile->about_you }}</p>
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
                                        {{ date('Y', strtotime($training->training_start_date)) }} - {{ date('Y', strtotime($training->training_start_date)) }}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
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
                                        {{ date('Y', strtotime($experience->start_date)) }} - {{ date('Y', strtotime($experience->training_start_date)) }}</div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4 mt-lg-5">
        <h2>Skills</h2>
        <div class="pxp-candidate-dashboard-skills mb-3">
            <ul id="selectedSkillsList" class="list-unstyled">
                @if ($skills)
                    @foreach ($skills as $skill)
                        <li data-id="{{ $skill->skill_id }}">{{ $skill->skill_name }}<span
                                class="fa fa-trash-o"></span></li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
    <h2>References</h2>
    <p>Available upon request.</p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
