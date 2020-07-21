$(document).ready(function () {
    $('#submit').click(function () {
        var a = $('#age').val();
        if (!isNaN(a) && $('#age').val().length < 3 && $('#age').val().length > 0) {
            console.log("Age is valid");
        } else {
            alert("Age must be a 2 digit numeric value.");
            event.preventDefault();
        }

    });
});
