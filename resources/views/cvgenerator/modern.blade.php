<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
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

        .left_chamber {
            width: 40%;
            float: left;
        }

        .right_chamber {
            width: 55%;
            float: right;
        }

        div {
            text-align: justify;
            page-break-inside: auto;
        }

        table {
            page-break-inside: auto;
        }


        .fa {
            display: inline;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 1;
            font-family: FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            color: {{ $theme_color }};
        }

        .watermark {
            float: right;
            margin: -6%
        }

        .side_bar {
            border-left: 2px solid {{ $theme_color }};
        }
    </style>
</head>

<body>
    <img src="{{ asset('assets/images/logo.png') }}" alt="water marking logo" class="watermark">
    <div>
        <div class="left_chamber">
            @if ($profile->profile_photo)
                <img src="{{ asset('storage/' . $profile->profile_photo) }}" alt="Avatar" class="rounded img-fluid"
                    height="10%">
            @else
                <img src="{{ asset('assets/images/modern.png') }}" alt="Avatar" class="rounded img-fluid"
                    height="10%">
            @endif

            @if ($contact_details)
                <div class="tag_info">
                    <h1>{{ $profile->first_name . ' ' . $profile->last_name }}</h1>
                    <p>{{ $profile->title }}</p>
                    <p>Phone: {{ $profile->phone_number }}</p>
                    <p>Email:{{ $profile->email }}</p>
                </div>
            @endif
        </div>
        <div class="right_chamber">
            @if ($intro)
                <div>
                    <h5><span class="fa fa-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;INTRO</h5>
                    <p>
                        {{ $profile->about_you }}
                    </p>
                </div>
            @endif
            @if ($work_experience)
                <div>
                    <h5><span class="fa fa-briefcase"></span>&nbsp;&nbsp;&nbsp;&nbsp;WORK EXPERIENCE</h5>
                    <div class="side_bar">
                        @if ($experiences)
                            @foreach ($experiences as $experience)
                                <p style="padding-left: 5px">
                                    <b>{{ $experience->job_title }}</b> | {{ $experience->company_name }} |
                                    {{ date('Y', strtotime($experience->start_date)) }} -
                                    {{ date('Y', strtotime($experience->training_end_date)) }}
                                <ul type="none" style="padding-left: 5px">
                                    <li>{{ $experience->job_description }}</li>
                                </ul>
                                </p>
                            @endforeach
                        @endif
                    </div>
                </div>
            @endif
            @if ($education)
                <div>
                    <h5><span class="fa fa-graduation-cap"></span>&nbsp;&nbsp;&nbsp;&nbsp;EDUCATION</h5>
                    <div class="side_bar">
                        @if ($trainings)
                            @foreach ($trainings as $training)
                                <p style="padding-left: 5px">
                                    <b>{{ $training->training_title }}</b> | {{ $training->training_institution }} |
                                    {{ date('Y', strtotime($training->training_start_date)) }} -
                                    {{ date('Y', strtotime($training->training_end_date)) }}
                                <ul type="none" style="padding-left: 5px">
                                    <li>{{ $training->training_description }}
                                    </li>
                                </ul>
                                </p>
                            @endforeach
                        @endif
                    </div>
                </div>
            @endif
            @if ($professional_skills)
                <div>
                    <h5><span class="fa fa-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;SKILLS</h5>
                    <div class="side_bar">
                        @if ($skills)
                            @foreach ($skills as $skill)
                                <p style="padding-left: 5px">
                                    <b>{{ $skill->skill_name }}</b>
                                </p>
                            @endforeach
                        @endif
                    </div>
                </div>
            @endif
            @if ($professional_languages)
                <div>
                    <h5><span class="fa fa-graduation-cap"></span>&nbsp;&nbsp;&nbsp;&nbsp;LANGUAGE SKILLS</h5>
                    <div class="side_bar">
                        @if ($languages)
                            <p style="padding-left: 5px"><span
                                    style="margin-right: 10px;font-weight:bold;">Language</span><span
                                    style="margin-right: 10px;font-weight:bold;">Spoken</span><span>Written</span></p>
                            @foreach ($languages as $language)
                                <p style="padding-left: 5px">
                                    <span style="margin-right: 10px;font-weight:bold;">{{ $language->language }}</span>
                                    <span style="margin-right: 10px;">{{ $language->spoken_language_level }}</span>
                                    <span>{{ $language->written_language_level }}</span>
                                </p>
                            @endforeach
                        @endif
                    </div>
                </div>
            @endif
            @if ($professional_certificates)
                <div>
                    <h5><span class="fa fa-certificate"></span>&nbsp;&nbsp;&nbsp;&nbsp;CERTIFICATES</h5>
                    <div class="side_bar">
                        @if ($certificates)
                            @foreach ($certificates as $certificate)
                                <p style="padding-left: 5px">
                                    <b>{{ $certificate->certificate_name }}</b>
                                </p>
                            @endforeach
                        @endif
                    </div>
                </div>
            @endif
            @if ($professional_references)
                <div>
                    <h5><span class="fa fa-share-alt"></span>&nbsp;&nbsp;&nbsp;&nbsp;REFERENCES</h5>
                    <div class="side_bar">
                        @if ($references)
                            @foreach ($references as $reference)
                                <div style="padding-left: 5px">
                                    <p>
                                        <b>{{ $reference->full_name }}</b>
                                    </p>
                                    <p>
                                        {{ $reference->title_and_organization }}
                                    </p>
                                    <p>
                                        <b>{{ $reference->phone_number }}</b>
                                    </p>
                                    <p>
                                        <b>{{ $reference->email }}</b>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            @endif
        </div>
</body>

</html>
