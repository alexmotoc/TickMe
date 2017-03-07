$(document).ready(function() {
    $("#centeredRegister").submit(function(event) {
        return validateForm();
    });
});

function validateForm() {
    var user = $("#username").val();
    var name = $("#name").val();
    var email = $("#email").val();
    var confirm_email = $("#confirm_email").val();
    var password = $("#password").val();
    var confirm_password = $("#confirm_password").val();

    $("#errors").empty();

    if (!user) {
        $("#errors").append("<p id='error-text'>No username!</p>");
        return false;
    }

    if (!name) {
        $("#errors").append("<p id='error-text'>No name!</p>");
        return false;
    }

    if (!email) {
        $("#errors").append("<p id='error-text'>No email!</p>");
        return false;
    }

    if (!confirm_email) {
        $("#errors").append("<p id='error-text'>No confirmation email!</p>");
        return false;
    }

    if (!password) {
        $("#errors").append("<p id='error-text'>No password!</p>");
        return false;
    }

    if (!confirm_password) {
        $("#errors").append("<p id='error-text'>No confirmation password!</p>");
        return false;
    }

    if (email != confirm_email) {
        $("#errors").append("<p id='error-text'>Emails do not match!</p>");
        return false;
    }

    if (password != confirm_password) {
        $("#errors").append("<p id='error-text'>Passwords do not match!</p>");
        return false;
    }

    return true;
}
