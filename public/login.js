$(document).ready(function() {
    $('.signup-form').on('submit', function(e) {
        console.log("Form is submitting"); // Add this line to check if the event is triggered
        // e.preventDefault(); // Uncomment this line if you have specific validations
        // Perform any additional checks or functionality needed
        // If everything is okay, submit the form
        // this.submit(); // Make sure the form is actually submitted
    });
});
