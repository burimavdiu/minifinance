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
        $("#message").css("display", "block");// ndryshimi i style-it
        $("#message").html(message);
        return result;
    });
});