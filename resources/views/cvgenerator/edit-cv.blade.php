<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Optimal Outsourcing-CV Editor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <div class="w-100">
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
            <div class="col-3 sidebar card card-body">
                <h4>What information do you want to show?</h4>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="contact_details" class="form-check-input">
                    <label for="contact_details" class="form-check-label">Contact Details</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="contact_details" class="form-check-input">
                    <label for="contact_details" class="form-check-label">Intro</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="contact_details" class="form-check-input">
                    <label for="contact_details" class="form-check-label">Work Experience</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="contact_details" class="form-check-input">
                    <label for="contact_details" class="form-check-label">Education</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="contact_details" class="form-check-input">
                    <label for="contact_details" class="form-check-label">Skills</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="contact_details" class="form-check-input">
                    <label for="contact_details" class="form-check-label">Languages</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="contact_details" class="form-check-input">
                    <label for="contact_details" class="form-check-label">Certificates</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="contact_details" class="form-check-input">
                    <label for="contact_details" class="form-check-label">Associations</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="contact_details" class="form-check-input">
                    <label for="contact_details" class="form-check-label">Hobbies</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="contact_details" class="form-check-input">
                    <label for="contact_details" class="form-check-label">Links</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="cv_info" id="contact_details" class="form-check-input">
                    <label for="contact_details" class="form-check-label">References</label>
                </div>

                <h4>Select the Design</h4>
                <select name="color" id="" class="form-select" aria-label="Select font">
                    <option value="modern" selected>modern</option>
                    <option value="classic">Classic</option>
                    <option value="international">International</option>
                    <option value="plain">Plain</option>
                </select>

                <h4>Which work Experience(s) do you want to show?</h4>
                <div class="form-check">
                    <input type="text" id="experience_1" class="form-check-input">
                    <label for="experience_1" class="form-check-label">Experience_1</label>
                </div>
                <div class="form-check">
                    <input type="text" id="experience_2" class="form-check-input">
                    <label for="experience_2" class="form-check-label">Experience_2</label>
                </div>
                <div class="form-check">
                    <input type="text" id="experience_3" class="form-check-input">
                    <label for="experience_3" class="form-check-label">Experience_3</label>
                </div>
            </div>

            <div class="col-9 document_area card card-body">
                <h1>s,d,d</h1>
                <iframe src="{{asset('assets/cvs/test.pdf')}}" frameborder="0"  height="100%"></iframe>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
