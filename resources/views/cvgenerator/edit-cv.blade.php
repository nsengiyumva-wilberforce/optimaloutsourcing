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
                    <select name="color" id="" class="form-select" aria-label="Select color">
                        <option selected>Black</option>
                        <option value="blue">Blue</option>
                        <option value="yellow">yellow</option>
                        <option value="orange">orange</option>
                        <option value="green">green</option>
                        <option value="purple">purple</option>
                        <option value="grey">grey</option>
                        <option value="violete">violet</option>
                        <option value="indigo">indigo</option>
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
                <select name="color" id="design" class="form-select" aria-label="Select font">
                    <option value="modern">modern</option>
                    <option value="classic">Classic</option>
                    <option value="international">International</option>
                    <option value="plain" selected>Plain</option>
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
                <a href="/create-cv" class="btn btn-primary">Apply Changes</a>
            </div>

            <div class="col-md-9 document_area card card-body pdf-body">
                <div id="pdfCover"></div>
                <iframe src="{{ asset('assets/cvs/'.$cv_file_name.'#toolbar=0') }}" frameborder="0" height="100%"></iframe>
                <div class="m-2">
                    <form action="/create-cv" id="download-cv">
                        <input type="hidden" name="design" id="design-hidden-input">
                        <button class="btn btn-primary" type="submit">Download Your CV</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/cv.js') }}"></script>

</body>

</html>
