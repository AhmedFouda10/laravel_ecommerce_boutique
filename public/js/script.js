// looding bar
var x = 0;
setInterval(function() {
    x = x + 1;
    $("span").html(x + "%" + " " + "Complete");
    $(".progress-bar").attr("style", "width:" + x + "%");
}, 1000);