<!DOCTYPE html>
<html>
<head>
  <title>Your Name - Curriculum Vitae</title>
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
  </style>
</head>
<body>
  <h1>{{$profile->first_name.' '.$profile->last_name}}</h1>
  <p>{{$profile->location}}</p>
  <p>Email: {{$profile->email}}</p>
  <p>Phone: {{ $profile->phone_number}}</p>

  <h2>Summary</h2>
  <p>{{ $profile->about_you}}</p>

  <h2>Education</h2>
  <ul>
    <li>
      <strong>Degree Name</strong><br>
      University/Institution Name<br>
      Location<br>
      Year of Graduation
    </li>
    <!-- Add more education entries if necessary -->
  </ul>

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
</body>
</html>
