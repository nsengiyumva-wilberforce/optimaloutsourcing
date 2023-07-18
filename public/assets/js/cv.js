$(document).ready(function () {
    $("#download-cv").submit(function (event) {
        // Retrieve the selected value
        var selectedValue = $("#design").val();

        // Set the value of the hidden input field
        $("#design-hidden-input").val(selectedValue);

        console.log("form submitted.....");
        console.log("Selected value:", selectedValue);
    });

    $('#select-color').change(function() {
        var selectedOption = $(this).val();

        console.log(selectedOption); // Output the selected option value to the console

        // Use the selected option value as needed
        // You can perform any desired actions or make an AJAX request to the server
    });
});
