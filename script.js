$(document).ready(function () {
    $("#loginform").submit(function () {
        if ($("#exampleInputUsername1").val() == "") {
            $("#message").html("Shtypni username");
            return false;
        }
        if ($("#exampleInputPassword1").val() == "") {
            $("#message").html("Shtypni password");
            return false;
        }
    });
});