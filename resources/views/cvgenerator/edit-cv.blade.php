<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Optimal Outsourcing-CV Editor</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/cv.css?v=') . time() }}" rel="stylesheet">
</head>

<body>
    <div class="w-100 ms-2">
        <div class="toolbar card card-body">
            <h1 class="text-center">Optimal outsourcing CV Editor</h1>
        </div>

        <div class="side_bar_doc_area row">
            <div class="col-md-3 sidebar card card-body">
                <div class="col-md-12">
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

                <div class="col-md-12">
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

                <div class="col-md-12">
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
                    <option value="international" {{ $design == 'international' ? 'selected' : '' }}>International
                    </option>
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
                {{-- <iframe id="cvIframe" src="{{ asset('assets/cvs/' . $cv_file_name . '#toolbar=0') }}"></iframe> --}}
                <canvas id="the-canvas"></canvas>
                <div class="pdf-nav">
                    <button id="prev" class="btn btn-outline-dark m-1">Previous</button>
                    <button id="next" class="btn btn-outline-dark m-1">Next</button>
                    &nbsp; &nbsp;
                    <span>Page: <span id="page_num"></span> / <span id="page_count"></span></span>
                    <button class="btn btn-outline-dark m-1" id="download-cv"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                        </svg></button>
                </div>
                <div class="hidden-area">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"
        integrity="sha512-t2JWqzirxOmR9MZKu+BMz0TNHe55G5BZ/tfTmXMlxpUY8tsTo3QMD27QGoYKZKFAraIPDhFv56HLdN11ctmiTQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.worker.min.js"
        integrity="sha512-pv2/orJjnw8dhKWgxFt9wRdN4bvDgkzxVWCjqERXQEAo23ZvwM20xZx5en5FzpKhjCHZPZZz6C02fnCoUZPKdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                        reloadPDF()
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

            $('#download-cv').click(function() {
                $.ajax({
                    url: "{{ route('createCv') }}",
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        // Create a temporary anchor tag to initiate the download
                        let downloadLink = document.createElement('a');
                        downloadLink.href = response.file_url;
                        downloadLink.download = 'CV.pdf';
                        downloadLink.target = '_blank';

                        // Trigger the click event on the anchor tag to initiate the download
                        document.body.appendChild(downloadLink);
                        downloadLink.click();
                        document.body.removeChild(downloadLink);
                    },
                    error: function(error) {
                        alert('Failed to download the CV')
                    }
                })
            })
            // If absolute URL from the remote server is provided, configure the CORS
            // header on that server.
            var url = "{{ asset('assets/cvs/' . $cv_file_name) }}"

            // Loaded via <script> tag, create shortcut to access PDF.js exports.
            var pdfjsLib = window['pdfjs-dist/build/pdf'];

            var pdfDoc = null,
                pageNum = 1,
                pageRendering = false,
                pageNumPending = null,
                scale = 1.5,
                canvas = document.getElementById('the-canvas'),
                ctx = canvas.getContext('2d');

            /**
             * Get page info from document, resize canvas accordingly, and render page.
             * @param num Page number.
             */
            function renderPage(num) {
                pageRendering = true;
                // Using promise to fetch the page
                pdfDoc.getPage(num).then(function(page) {
                    var viewport = page.getViewport({
                        scale: scale
                    });
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    // Render PDF page into canvas context
                    var renderContext = {
                        canvasContext: ctx,
                        viewport: viewport
                    };
                    var renderTask = page.render(renderContext);

                    // Wait for rendering to finish
                    renderTask.promise.then(function() {
                        pageRendering = false;
                        if (pageNumPending !== null) {
                            // New page rendering is pending
                            renderPage(pageNumPending);
                            pageNumPending = null;
                        }
                    });
                });

                // Update page counters
                document.getElementById('page_num').textContent = num;
            }

            /**
             * If another page rendering in progress, waits until the rendering is
             * finised. Otherwise, executes rendering immediately.
             */
            function queueRenderPage(num) {
                if (pageRendering) {
                    pageNumPending = num;
                } else {
                    renderPage(num);
                }
            }

            /**
             * Displays previous page.
             */
            function onPrevPage() {
                if (pageNum <= 1) {
                    return;
                }
                pageNum--;
                queueRenderPage(pageNum);
            }
            document.getElementById('prev').addEventListener('click', onPrevPage);

            /**
             * Displays next page.
             */
            function onNextPage() {
                if (pageNum >= pdfDoc.numPages) {
                    return;
                }
                pageNum++;
                queueRenderPage(pageNum);
            }
            document.getElementById('next').addEventListener('click', onNextPage);

            /**
             * Asynchronously downloads PDF.
             */
            pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
                pdfDoc = pdfDoc_;
                document.getElementById('page_count').textContent = pdfDoc.numPages;

                // Initial/first page rendering
                renderPage(pageNum);
            });

            // Function to reload the PDF on the canvas
            function reloadPDF() {
                // Clear the existing canvas
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                //reload the pdf
                pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
                    pdfDoc = pdfDoc_;
                    document.getElementById('page_count').textContent = pdfDoc.numPages;

                    // Initial/first page rendering
                    renderPage(pageNum);
                });
            }
        });
    </script>
</body>

</html>
