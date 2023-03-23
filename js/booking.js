
// Check room availability
$('#test-form').submit(function(event) {
    event.preventDefault(); // prevent the form from submitting normally

    var formData = $(this).serialize(); // serialize the form data

    $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: formData,
        success: function(response) {
            // handle the response from the server
            if(response.message === 'No Rooms Founds. Please check other types of rooms.'){
                toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';
                toastr.info('No Rooms Available', 'We are sorry, but all of our rooms are currently booked and unavailable for the dates you have requested. We apologize for any inconvenience this may cause. Please check back with us at a later time.');
            }
        },
        error: function(xhr, status, error) {
            // handle errors
            console.log(xhr.responseText);
        }
    });
});