$(function() {
    $("#dropdown").bind("click", showNavBar);
    function showNavBar() {
        $("#navbar").addClass("showing");
        $("#dropdown").unbind("click", showNavBar);
        $("#navbar > a:not(#dropdown)").addClass("animate");
        setTimeout(function() {
            $(document.body).bind("click", hideNavBar);
            $("#navbar > a").bind("click", hideNavBar);
        }, 1);
    }
    function hideNavBar() {
        $("#navbar").removeClass("showing");
        $("#navbar > a:not(#dropdown)").addClass("animate");
        $(document.body).unbind("click", hideNavBar);
        $("#navbar > a").unbind("click", hideNavBar);
        setTimeout(function() {
            $("#dropdown").bind("click", showNavBar);
        }, 1);
    }
    
    $("#navbar > a:not(#dropdown").on(
            "webkitTransitionEnd otransitionend oTransitionEnd \
            msTransitionEnd transitionend", function(event) {
        if (event.originalEvent.propertyName == "opacity") {
            $("#navbar > a:not(#dropdown)").removeClass("animate");
        }
    });
});