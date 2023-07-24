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

    // If absolute URL from the remote server is provided, configure the CORS
    // header on that server.
    var url ="../assets/cvs/test.pdf";

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
});
