$(document).ready(function () {
    console.log("document ready........");

    $("#download-cv").submit(function (event) {
        // Retrieve the selected value
        var selectedValue = $("#design").val();

        // Set the value of the hidden input field
        $("#design-hidden-input").val(selectedValue);

        console.log("form submitted.....");
        console.log("Selected value:", selectedValue);
    });
});
