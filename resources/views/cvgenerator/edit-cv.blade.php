<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Optimal Outsourcing-CV Editor</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="w-100 ms-2">
        <div class="toolbar card card-body">
            <h1 class="text-center">Optimal outsourcing CV Editor</h1>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <div class="row">
                        <div class="col">
                            Effect Color
                        </div>
                    </div>
                    <select name="color" id="select-color" class="form-select" aria-label="Select color">
                        <option {{ $theme_color == 'black' ? 'selected' : '' }}>Black</option>
                        <option value="blue" {{ $theme_color == 'blue' ? 'selected' : '' }}></option>
                        <option value="#FFFF00" {{ $theme_color == 'yellow' ? 'selected' : '' }}>yellow</option>
                        <option value="#FFA500" {{ $theme_color == 'orange' ? 'selected' : '' }}>orange</option>
                        <option value="green" {{ $theme_color == 'green' ? 'selected' : '' }}>green</option>
                        <option value="purple" {{ $theme_color == 'purple' ? 'selected' : '' }}>purple</option>
                        <option value="grey" {{ $theme_color == 'grey' ? 'selected' : '' }}>grey</option>
                        <option value="violete" {{ $theme_color == 'violet' ? 'selected' : '' }}>violet</option>
                        <option value="indigo" {{ $theme_color == 'indigo' ? 'selected' : '' }}>indigo</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <div class="row">
                        <div class="col">
                            Font Size
                        </div>
                    </div>
                    <input type="radio" name="font_size" class="form-check-input" id="small">
                    <label for="small" class="form-check-label">Small</label>
                    <input type="radio" name="font_size" class="form-check-input" id="normal">
                    <label for="normal" class="form-check-label">Normal</label>
                    <input type="radio" name="font_size" class="form-check-input" id="large">
                    <label for="normal" class="form-check-label">Large</label>
                </div>

                <div class="col-md-3">
                    <div class="row">
                        <div class="col">
                            Font Family
                        </div>
                    </div>
                    <select name="color" id="" class="form-select" aria-label="Select font">
                        <option value="times" selected>Traditional:Times</option>
                        <option value="helvatica">Classic:Helvatica</option>
                        <option value="baskerville">Elegant:Baskerville</option>
                        <option value="poppins">Modern:Poppins</option>
                        <option value="rockwell">Bold:Rockwell</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="side_bar_doc_area row">
            <div class="col-md-3 sidebar card card-body">
                <h4>What information do you want to show?</h4>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="contact_details" class="form-check-input">
                    <label for="contact_details" class="form-check-label">Contact Details</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="intro" class="form-check-input">
                    <label for="intro" class="form-check-label">Intro</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="work_experience" class="form-check-input">
                    <label for="work_experience" class="form-check-label">Work Experience</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="education" class="form-check-input">
                    <label for="education" class="form-check-label">Education</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="skills" class="form-check-input">
                    <label for="skills" class="form-check-label">Skills</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="languages" class="form-check-input">
                    <label for="languages" class="form-check-label">Languages</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="certificates" class="form-check-input">
                    <label for="certificates" class="form-check-label">Certificates</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="associations" class="form-check-input">
                    <label for="associations" class="form-check-label">Associations</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="hobbies" class="form-check-input">
                    <label for="hobbies" class="form-check-label">Hobbies</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="links" class="form-check-input">
                    <label for="links" class="form-check-label">Links</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="references" class="form-check-input">
                    <label for="references" class="form-check-label">References</label>
                </div>

                <h4>Select the Design</h4>
                <select name="color" id="design-style" class="form-select" aria-label="Select font">
                    <option value="international" {{ $design == 'international' ? 'selected' : '' }}>International</option>
                    <option value="modern" {{ $design == 'modern' ? 'selected' : '' }}>modern</option>
                    <option value="classic" {{ $design == 'classic' ? 'selected' : '' }}>Classic</option>
                    <option value="plain" {{ $design == 'plain' ? 'selected' : '' }}>Plain</option>
                </select>

                <h4>Which work Experience(s) do you want to show?</h4>
                <div class="form-check">
                    <input type="checkbox" id="experience_1" class="form-check-input">
                    <label for="experience_1" class="form-check-label">Experience_1</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="experience_2" class="form-check-input">
                    <label for="experience_2" class="form-check-label">Experience_2</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="experience_3" class="form-check-input">
                    <label for="experience_3" class="form-check-label">Experience_3</label>
                </div>
                {{-- <a href="/create-cv" class="btn btn-primary">Apply Changes</a> --}}
            </div>

            <div class="col-md-9 document_area card card-body pdf-body">
                <iframe id="cvIframe" src="{{ asset('assets/cvs/' . $cv_file_name . '#toolbar=0') }}"
                    frameborder="0" height="100%"></iframe>
                <div class="m-2">
                    <form action="/create-cv" id="download-cv">
                        <input type="hidden" name="design" id="design-hidden-input">
                        <input type="hidden" name="design" id="color-hidden-input">
                        <button class="btn btn-primary" type="submit">Download Your CV</button>
                    </form>

                    <form action="/create-cv" id="download-cv" id="update-form">
                        <input type="hidden" name="design" id="design-hidden-input-update">
                        <input type="hidden" name="design" id="color-hidden-input-update">
                    </form>
                    <form action="/update-cv" method="POST" id="update-cv">
                        @csrf
                        <input type="hidden" name="design" id="design-hidden-input-update">
                        <input type="hidden" name="effect_color" id="color-hidden-input-update">
                    </form>
                </div>
            </div>

        </div>

    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/cv.js') }}"></script> --}}

    <script>
        $(document).ready(function() {
            $("#download-cv").submit(function(event) {
                // Retrieve the selected value for design template
                var selectedValue = $("#design-style").val();

                //retrieve the selected value for color
                var selectedColor = $("#select-color").val();

                // Set the value of the hidden input field
                $("#design-hidden-input").val(selectedValue);
                console.log("design:", selectedValue);

                // Set the value of the hidden input field
                $("#color-hidden-input").val(selectedColor);
                console.log("color:", selectedColor);

                console.log("form submitted.....");
                console.log("Selected value:", selectedValue);
            });

            $("#select-color").change(function() {
                // Retrieve the selected value for design template
                var designValue = $("#design-style").val();
                console.log("design:", designValue);

                //retrieve the selected value for color
                var selectedColor = $("#select-color").val();

                console.log("csrf token:", "{{ csrf_token() }}");
                var data = {
                    "design": designValue,
                    "effect_color": selectedColor
                };

                //use ajax to submit the data
                $.ajax({
                    url: "{{ route('updateCv') }}",
                    type: "POST",
                    //stringfy the data before sending it to the server
                    data: JSON.stringify(data),
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        console.log(response);
                        //reload all iFrames
                        $('iframe').each(function() {
                            this.contentWindow.location.reload(true);
                        });
                    },
                    error: function(error) {
                        console.log(error);
                        // alert("error");
                    }
                });
            });

            $("#design-style").change(function() {
                // Retrieve the selected value for design template
                var designValue = $("#design-style").val();
                console.log("design:", designValue);

                //retrieve the selected value for color
                var selectedColor = $("#select-color").val();

                data = {
                    "design": designValue,
                    "effect_color": selectedColor
                };

                //use ajax to submit the data
                $.ajax({
                    url: "{{ route('updateCv') }}",
                    type: "POST",
                    //stringfy the data before sending it to the server
                    data: JSON.stringify(data),
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        console.log("success");
                        //reload all iFrames
                        $('iframe').each(function() {
                            this.contentWindow.location.reload(true);
                        });
                    },
                    error: function(error) {
                        console.log(error);
                        // alert("error");
                    }
                });
            });
        });
    </script>
</body>

</html>
