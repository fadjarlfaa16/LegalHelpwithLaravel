$(document).ready(function () {
    $("#reg").hide();
    $("#in").hide();

    $("#start").click(function () {
        $("#in").hide();
        $("#reg").fadeIn();
        $(".content").hide();
    });

    $("#haveAcc").click(function () {
        $("#reg").hide();
        $("#in").fadeIn();
    });

    $("#reg-btn").click(function () {
        $("#in").hide();
        $("#reg").fadeIn();
    });

    $("#submit-reg").click(function () {
        $("#reg").hide();
        $("#in").fadeIn();
    });
});
