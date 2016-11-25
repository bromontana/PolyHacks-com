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
    $(".showTooltip").hover(function(event) {
        if (event.type === "mouseenter") {
            showTooltip(event.currentTarget,
                        event.currentTarget.getAttribute("tooltip"));
        } else {
            hideTooltip();
        }
    });
    function showTooltip(elem, text) {
        const MARGIN = 5;
        $elem = $(elem);
        var y = $elem.offset().top + $elem.outerHeight(true);
        var x = $elem.offset().left + $elem.outerWidth(true) / 2 -
            parseInt($elem.css("margin-left"));
        // adjust to prevent tooltip from being offscreen
        var $tooltip = $("#tooltip");
        $tooltip.text(text);
        // move off the right of the screen, then the left
        while (x + $tooltip.width() / 2 >
            $(document.body).width() - MARGIN * 3) x -= 1;
        while (x - $tooltip.width() / 2 < MARGIN * 3) x += 1;
        $tooltip.css(
                {top: (y + MARGIN) + "px",
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
        $("#mapCover").addClass("preventScroll");
        const MARGIN = 100;
        var i = 0, offset, scrollY = window.pageYOffset;
        while (offset = $("a.navLink").eq(++i).offset()) {
            //console.log(offset.top + " > " + scrollY);
            if (offset.top > scrollY + MARGIN) {
                var id = $("a.navLink").eq(i - 1).attr("id");
                $("nav > a").removeClass("current");
                $("nav > a[href='#" + id + "']").addClass("current");
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

// countdown timer
$(function() {
    var endDate = new Date();
    var data = JSON.parse($("#countdownTimer").attr("data-to"));
    endDate.setFullYear(data.yr);
    endDate.setMonth(data.mo - 1);
    endDate.setDate(data.day);
    endDate.setHours(data.hr);
    endDate.setMinutes(data.min);
    endDate.setSeconds(data.sec);
    endDate.setMilliseconds(data.ms);
    var interval = setInterval(function() {
        var curDate = new Date();
        //console.log("%O ?< %O", endDate, curDate);
        if (endDate > curDate) {
            var data = Date.DateDiff(curDate, endDate);
            var days = data.d;
            var hours = data.h % 24;
            var mins = data.n % 60;
            var secs = data.s % 60;

            $("#countdownTimer").text(
                days + " days : " +
                hours + " hrs : " +
                mins + " mins : " +
                secs + " secs"
            );
        } else {
            clearInterval(interval);
            $("#countdownTimer").text(
                $("#countdownTimer").attr("data-past"));
        }
    }, 1000);
});

// click button
$(function() {
    $("#bigRedButton").click(function(event) {
        // allow frequent taps on mobile
        event.preventDefault();
        sendClickToServer();
    }).dblclick(function(event) {
        // allow frequent taps on mobile
        event.preventDefault();
        sendClickToServer();
    }).on("contextmenu", function(event) {
        // prevent right-click menu from showing up
        event.preventDefault();
        sendClickToServer();
    }).on("touchend", function(event) {
        // allow frequent taps on mobile
        event.preventDefault();
        sendClickToServer();
    });
    function sendClickToServer() {
        // push data to server
        $.ajax({
            dataType: "text",
            url: "add_click.php?cache=" + Date.now(),
            method: "GET",
            success: function(data, status) {
                if (data.indexOf("failure") == 0) {
                    console.error("Could not upload button click; "
                                  + "is there no connection?");
                } else {
                    setValue(data);
                    console.log("Added one click to the many, many clicks.");
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Could not upload button click;"
                              + "is there no connection?");
                console.error(errorThrown);
            }
        });
    }
    function setValue(val) {
        var valInt = parseInt(val);
        var goalInt = parseInt($("#goal").text().split(",").join(""));
        if (valInt > goalInt) {
            document.location.reload();
        }
        $("#buttonPresses").text(commaFormatted(val));
    }
    function commaFormatted(amount) {
        const DELIM = ',';
        amount = amount + "";
        var newAmount = "";
        for (var i = amount.length - 1; i >= 0; i--) {
            newAmount = amount[i] + newAmount;
            if ( (amount.length - i) % 3 == 0) {
                newAmount = DELIM + newAmount;
            }
        }
        return (newAmount[0] == DELIM) ? newAmount.substr(1) : newAmount;
    }
});

// prevent scrolling from working on the Google Map
$(function() {
    $("#mapCover").click(function(event) {
        $("#mapCover").removeClass("preventScroll");
    });
});

$(function() {
    var dragging = false;
    $("a > button")
        .on("touchstart", function(event) {
            dragging = false;
        })
        .on("touchmove", function(event) {
            dragging = true;
        })
        .on("touchend", function(event) {
            if (!dragging) {
                event.target.parentElement.click();
                event.preventDefault();
            }
    });
});
