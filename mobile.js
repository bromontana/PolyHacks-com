$(function() {
    $("#dropdown").click(showNavBar);
    function showNavBar() {
        $("#navbar").addClass("showing").unbind("click", showNavBar);
        $("#navbar > a:not(#dropdown)").addClass("animate");
        setTimeout(function() {
            $("*").click(hideNavBar);
        }, 1);
    }
    function hideNavBar() {
        $("#navbar").removeClass("showing");
        $("#navbar > a:not(#dropdown)").addClass("animate");
        $("*").unbind("click", hideNavBar);
        setTimeout(function() {
            $("#dropdown").click(showNavBar);
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