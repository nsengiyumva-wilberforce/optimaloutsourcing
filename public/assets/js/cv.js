$(document).ready(function() {
    console.log('document ready........')

    $('#download-cv').click(function() {
      // Retrieve the selected value
      var selectedValue = $('#design').val();

      // Send the GET request
      $.ajax({
        url: '/create-cv',
        type: 'GET',
        data: { design: selectedValue },
        success: function(response) {
          console.log('GET request successful!');
          console.log(response)
          // Additional code or actions upon successful response
        },
        error: function(xhr, status, error) {
          console.log('GET request error:', error);
          // Additional error handling code
        }
      });
    });
  });
