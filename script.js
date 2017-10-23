$(document).ready(function() {
    $("#loginform").submit(function() {
        var input = $("#exampleInputUsername1").val();
        var result = true;
        var message = "";
        if (input === "") {
            message = "Shtypni username";
            result = false;
        }
        input = $("#exampleInputPassword1").val();
        if (input === "") {
            if (!result) {
                message += "<br />";
            }
            message += "Shtypni password";
            result = false;
        }
        if (!result) {
            $("#message").html(message);
            $("#message").removeClass("sr-only").addClass("show");
        }
        return result;
    });
});