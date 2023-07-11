<!DOCTYPE html>
<html>

<head>
    <title>{{ $profile->first_name . ' ' . $profile->last_name }} - Curriculum Vitae</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 20px;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        p {
            margin-top: 0;
        }

        ul {
            list-style-type: none;
            padding-left: 0;
        }

        li {
            margin-bottom: 5px;
        }

        .profile_pic {
            height: 200px;
            width: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
        }


        .profile_pic img {
            max-height: 70px;
            max-width: 80px;
            border-radius: 50%;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="top_section">
        @if ($cover_photo)
            <div class="profile_pic" style="background-image:url({{ asset('storage/' . $cover_photo) }})">
                {{-- check if the profile photo exists and display the profile image else display an avatar  --}}
                @if ($profile->profile_photo)
                    <img src="{{ asset('storage/' . $profile->profile_photo) }}" alt="Avatar" height="120px"
                        width="110px" class="rounded">
                @else
                    <img src="{{ asset('assets/images/profile_avatar.jpg') }}" alt="Avatar" height="120px"
                        width="110px" class="rounded">
                @endif
            </div>
        @else
            <div class="profile_pic" style="background-image:url({{ asset('assets/images/cover_avatar.jpg') }})">
                {{-- check if the profile photo exists and display the profile image else display an avatar  --}}
                @if ($profile->profile_photo)
                    <img src="{{ asset('storage/' . $profile->profile_photo) }}" alt="Avatar" height="120px"
                        width="110px" class="rounded">
                @else
                    <img src="{{ asset('assets/images/profile_avatar.png') }}" alt="Avatar" height="120px"
                        width="110px" class="rounded">
                @endif
            </div>
        @endif
    </div>

    <div class="profile_info">
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
                                        {{ $training->training_start_date }} - {{ $training->training_end_date }}</div>
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
                                        {{ $experience->start_date }} - {{ $experience->end_date }}</div>
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
