// Enabled smooth scrolling
const SCROLL_DUR = 500;
$(function() {
    $('a[href*="#"]:not([href="#"])').click(function(event) {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                var top = target.offset().top;
                if (target.selector == "#main") {
                    top = 0;
                    target.selector = "";
                }
                $('html, body').animate({
                    scrollTop: top
                }, SCROLL_DUR);
                setTimeout(function() {
                    document.location.hash = target.selector;
                }, SCROLL_DUR);
                return false;
            }
        }
    });
    $('a[href="#"]').click(function(event) {
        event.preventDefault();
    });
});

// show the tooltip
$(function() {
    $("button.showTooltip").hover(function(event) {
        showTooltip(event.currentTarget,
                    event.currentTarget.getAttribute("tooltip"));
        
        $(event.currentTarget).mouseout(mouseOut);
        function mouseOut(event) {
            hideTooltip();
            $(event.currentTarget).unbind("mouseout", mouseOut);
        }
    });
    function showTooltip(elem, text) {
        const MARGIN = 5;
        $elem = $(elem);
        var y = $elem.offset().top + $elem.outerHeight(true);
        var x = $elem.offset().left + $elem.outerWidth(true) / 2;
        $("#tooltip")
            .text(text)
            .css({top: (y + MARGIN) + "px",
                  left: x + "px"})
            .removeClass("hidden");
    }
    function hideTooltip() {
        $("#tooltip").addClass("hidden");
    }
});

// watch scrolling and update navbar accordingly
$(function() {
    $(document).scroll(updateNavBar);
    updateNavBar();
    function updateNavBar() {
        const MARGIN = 100;
        var i = 0, offset, scrollY = window.pageYOffset;
        while (offset = $("a.navLink").eq(++i).offset()) {
            //console.log(offset.top + " > " + scrollY);
            if (offset.top > scrollY + MARGIN) {
                var id = $("a.navLink").eq(i - 1).attr("id");
                $("nav > a").removeClass("current");
                $("nav > a[href='#" + id + "']").addClass("current");
                //console.log(id);
                return;
            }
        }
        // if you get here, you're at the bottom of the page
        $("a#dropdown").prev().addClass("current");
    }
});

// show/hide FAQ questions
$(function() {
    $(".faq > .question").click(function(event) {
        $(event.currentTarget).parent().toggleClass("show");
    });
});