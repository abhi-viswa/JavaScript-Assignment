$(document).ready(function () {
    $('#applicationForm').on('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission

        const formData = $(this).serialize(); // Serialize the form data
        console.log(formData)
        // Submit form data to the PHP script using AJAX
        $.post('submit.php', formData, function (data) {
            // Display the result in the result div
            $('#result').html(data).removeClass('hidden');
        }).fail(function () {
            alert('An error occurred. Please try again.');
        });
    });
});
