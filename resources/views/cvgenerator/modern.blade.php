<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $profile->first_name . ' ' . $profile->last_name }} - Curriculum Vitae</title>
</head>

<body>
    <table>
        <tbody>
            <tr>
                <td rowspan="6" style="vertical-align: top;">
                    <img src="profile.png" alt="profile photo" />
                    <div>
                        <h1>{{ $profile->first_name . ' ' . $profile->last_name }}</h1>
                        <p>{{ $profile->title }}</p>
                        <p>Phone: {{ $profile->phone_number }}</p>
                        <p>Email:{{ $profile->email }}</p>
                    </div>
                </td>
                <td>
                    <h5>INTRO</h5>
                    <p>
                        {{ $profile->about_you }}
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>WORK EXPERIENCE</h5>
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
                    <h5>EDUCATION</h5>
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
                    <h5>SKILLS</h5>
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
                    <h5>
                        HOBBIES
                    </h5>
                    <p>
                        Programming Projects: Engage in personal coding projects to explore new technologies, build
                        software applications, or contribute to open-source projects. It's a great way to enhance your
                        programming skills and expand your portfolio.
                    </p>
                    <p>
                        Game Development: Create your own video games or contribute to game modding communities. This
                        hobby allows you to combine your coding expertise with creativity and problem-solving skills.
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>
                        REFERENCES
                    </h5>
                    <p>
                        <!-- Add requests please -->
                        <b>John Doe</b> | Software Engineer | Company Name |
                        <a href="mailto:johndoe@gmail.com">johndoe@gmail.com</a>

                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
