<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile->first_name . ' ' . $profile->last_name }} - Curriculum Vitae</title>
    <style>
        @font-face {
            font-family: 'Baskervville';
            font-style: normal;
            font-weight: 400;
            src: url({{ asset('assets/fonts/Baskervville-Regular.ttf') }});
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            src: url({{ asset('assets/fonts/Poppins-Regular.ttf') }});
        }

        @font-face {
            font-family: 'Rockwell';
            font-style: normal;
            font-weight: 0;
            src: url({{ asset('assets/fonts/Rockwell-Bold.ttf') }});
        }

        body {
            font-size: 14px;
            font-family: {{ $font_family }};
        }

        .tag_info p {
            margin: 5px 0 0 0;
            border-bottom: 5px dotted {{ $theme_color }};
        }

        h3 {
            border-bottom: 5px solid {{ $theme_color }};
        }

        h1 {
            color: {{ $theme_color }}
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <th>
                <h1>{{ $profile->first_name . ' ' . $profile->last_name }}</h1>
                <p class="loc">{{ $profile->location }}</p>
            </th>
            <th>
                @if ($profile->profile_photo)
                    <img src="{{ asset('storage/' . $profile->profile_photo) }}" alt="Avatar" class="rounded img-fluid"
                        height="10%">
                @else
                    <img src="{{ asset('assets/images/international.png') }}" alt="Avatar" class="rounded img-fluid"
                        height="10%">
                @endif
            </th>
            <th>
                <div class="info">
                    <p>{{ $profile->title }}</p>
                    <p>Phone: {{ $profile->phone_number }}</p>
                    <p>Email:{{ $profile->email }}</p>
                </div>
            </th>
        </thead>
    </table>
    <table>
        <tr>
            <td>
                <h3>INTRO</h3>
                <p>
                    {{ $profile->about_you }}
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <h3>WORK EXPERIENCE</h3>
                @if ($experiences)
                    @foreach ($experiences as $experience)
                        <p>
                            <b>{{ $experience->job_title }}</b> | {{ $experience->company_name }} |
                            {{ date('Y', strtotime($experience->start_date)) }} -
                            {{ date('Y', strtotime($experience->training_end_date)) }}
                        <ul>
                            <li>{{ $experience->job_description }}</li>
                        </ul>
                        </p>
                    @endforeach
                @endif
            </td>
        </tr>
        <tr>
            <td>
                <h3>EDUCATION</h3>
                @if ($trainings)
                    @foreach ($trainings as $training)
                        <p>
                            <b>{{ $training->training_title }}</b> | {{ $training->training_institution }} |
                            {{ date('Y', strtotime($training->training_start_date)) }} -
                            {{ date('Y', strtotime($training->training_end_date)) }}
                        <ul>
                            <li>{{ $training->training_description }}
                            </li>
                        </ul>
                        </p>
                    @endforeach
                @endif
            </td>
        </tr>
        <tr>
            <td>
                <h3>SKILLS</h3>
                @if ($skills)
                    @foreach ($skills as $skill)
                        <p>
                            <b>{{ $skill->skill_name }}</b>
                        </p>
                    @endforeach
                @endif
            </td>
        </tr>
        <tr>
            <td>
                <h3>CERTIFICATES</h3>
                <p>
                    <b>Certificate Name</b> | Issuing Organization | 2019
                <ul>
                    <li>Relevant Coursework: Data Structures and Algorithms, Software Engineering, Database
                        Management Systems, Operating Systems, Computer Networks, Web Development, Mobile
                        Application Development, Machine Learning, Artificial Intelligence, Computer Vision,
                        Natural Language Processing, Big Data Analytics, Cloud Computing, Software Testing and
                        Quality Assurance, Software Project Management, Software Security, Computer Graphics,
                        Computer Architecture, Embedded Systems, Internet of Things, Blockchain Technology,
                        Quantum Computing, Cryptography, Parallel Computing, Computer Vision, Robotics, Virtual
                        Reality, Augmented Reality, Human-Computer Interaction, Game Development, Computer
                        Animation, Computer Forensics, Computer Vision, Computer-Aided Design, Computer-Aided
                        Manufacturing, Computer-Aided Engineering, Computer-Aided Software Engineering, Computer
                        Aided Software Testing, Computer-Aided Software Maintenance, Computer-Aided Software
                        Configuration Management, Computer-Aided Software Quality Assurance, Computer-Aided
                        Software Project Management, Computer-Aided Software Security, Computer-Aided Software
                        Testing, Computer-Aided Software Maintenance, Computer-Aided Software Configuration
                        Management, Computer-Aided Software Quality Assurance, Computer-Aided Software Project
                        Management, Computer-Aided Software Security, Computer-Aided Software Testing, Computer-
                        Aided Software Maintenance, Computer-Aided Software Configuration Management, Computer-
                        Aided Software Quality Assurance, Computer-Aided Software Project Management, Computer-
                        Aided Software Security, Computer-Aided Software Testing, Computer-Aided Software
                        Maintenance, Computer-Aided Software Configuration Management, Computer-Aided Software
                        Quality Assurance, Computer-Aided Software Project Management, Computer-Aided Software
                        Security, Computer-Aided Software Testing, Computer-Aided Software Maintenance,
                        Computer-Aided Software Configuration Management, Computer-Aided Software Quality
                    </li>
                </ul>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <h3>LANGUAGES</h3>
                <p>
                    <b>Language Name</b> | Proficiency Level
                <ul>
                    <!-- add languages like English, french -->
                    <li>English | Native</li>
                    <li>French | Intermediate</li>
                </ul>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <h3>INTERESTS</h3>
                <p>
                    <b>Interest Name</b>
                <ul>
                    <!-- add interests like reading, writing -->
                    <li>Reading</li>
                    <li>Writing</li>
                </ul>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <h3>REFERENCES</h3>
                <p>
                    <b>Reference Name</b> | Reference Title | Reference Company
                <ul>
                    <li>Reference Description</li>
                </ul>
                </p>
            </td>
    </table>
</body>

</html>
