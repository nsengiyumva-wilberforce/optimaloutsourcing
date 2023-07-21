$(document).ready(function () {
    $("#download-cv").submit(function (event) {
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

    $("#select-color").change(function () {
        // Retrieve the selected value for design template
        var designValue = $("#design-style").val();

        //retrieve the selected value for color
        var selectedColor = $("#select-color").val();

        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: "/update-cv",
            type: "POST",
            dataType: "json",
            data: { "_token": "{{ csrf_token() }}", "design": designValue, "effect_color": selectedColor },
            success: function(response) {
                console.log("Request succeeded:", response);
            },
            error: function(xhr, status, error) {
                console.error("Request failed:", error);
            }
        });
    });

    console.log("cv.js loaded");
});
