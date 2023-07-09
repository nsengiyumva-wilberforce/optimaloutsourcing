<!DOCTYPE html>
<html>

<head>
    <title>{{ $profile->first_name . ' ' . $profile->last_name }} - Curriculum Vitae</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
            /* Added */
            align-items: center;
            /* Added */
            justify-content: center;
            /* Added */
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
            <div class="profile_pic text_center" style="background-image:url({{ asset('storage/' . $cover_photo) }})">
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
        <p>{{ $profile->location }}</p>
        <p>Email: {{ $profile->email }}</p>
        <p>Phone: {{ $profile->phone_number }}</p>
    </div>

    <div class="about">
        <h2>About you</h2>
        <p>{{ $profile->about_you }}</p>
    </div>


    <h2>Education and Training</h2>



    <h2>Work Experience</h2>
    <ul>
        <li>
            <strong>Job Title</strong><br>
            Company/Organization Name<br>
            Location<br>
            Start Date - End Date<br>
            Description of your responsibilities and achievements in the role.
        </li>
        <!-- Add more work experience entries if necessary -->
    </ul>

    <h2>Skills</h2>
    <ul>
        <li>Skill 1</li>
        <li>Skill 2</li>
        <li>Skill 3</li>
        <!-- Add more skills if necessary -->
    </ul>

    <h2>Languages</h2>
    <ul>
        <li>Language 1 - Proficiency Level</li>
        <li>Language 2 - Proficiency Level</li>
        <li>Language 3 - Proficiency Level</li>
        <!-- Add more languages if necessary -->
    </ul>

    <h2>References</h2>
    <p>Available upon request.</p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
