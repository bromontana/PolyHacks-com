// Enabled smooth scrolling
const SCROLL_DUR = 500;
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
          var top = target.offset().top;
          if (target.selector == "#main") top = 0;
        $('html, body').animate({
          scrollTop: top
        }, SCROLL_DUR);
        return false;
      }
    }
  });
});

$(function() {
    $("section.devel").append("\
            <p>Bacon ipsum dolor amet sausage cow beef kielbasa short loin, hamburger jerky pork pastrami ground round tenderloin shank fatback shankle doner. Capicola pork chop corned beef, prosciutto salami ground round bacon short ribs brisket tail chicken turducken kevin andouille porchetta. Venison picanha jerky filet mignon shank leberkas ball tip short loin capicola. Doner sausage ball tip, landjaeger tenderloin andouille burgdoggen short loin pork spare ribs flank. T-bone pork loin meatloaf, ham hock chuck tail pork belly fatback tongue beef salami. Shankle sirloin pastrami, t-bone pancetta ham porchetta salami jowl prosciutto. Bacon picanha venison tri-tip burgdoggen spare ribs strip steak kevin biltong.</p>\
            <p>Ham hock venison fatback porchetta burgdoggen meatball. Shoulder shank ham venison andouille meatball flank. Kielbasa pork loin ground round chicken shank pancetta. Boudin bacon fatback, cupim jowl leberkas pig shankle. Ground round t-bone rump tongue. Pork loin bacon jowl, pork belly tongue fatback biltong salami doner beef ribs. Burgdoggen hamburger short ribs, chicken chuck doner meatloaf spare ribs boudin frankfurter venison porchetta ball tip ham hock jowl.</p>\
            <p>Prosciutto filet mignon burgdoggen salami, kevin cupim bresaola flank shank. Kevin pork chop kielbasa short ribs tail turkey. Bacon pork chop prosciutto drumstick, shoulder capicola porchetta. Biltong swine pastrami, shank beef ribs corned beef tri-tip jowl. Venison swine capicola porchetta ham hock chuck. Jowl corned beef bacon spare ribs venison boudin. Jerky porchetta short loin ham chuck leberkas flank pork belly, bresaola kevin cow.</p>"
                       );
    
    $("button.showTooltip").hover(function(event) {
        console.log(event);
        showTooltip(event.currentTarget,
                    event.currentTarget.getAttribute("tooltip"));
        
        $(event.currentTarget).mouseout(mouseOut);
        function mouseOut(event) {
            hideTooltip();
            $(event.currentTarget).unbind("mouseout", mouseOut);
        }
    });
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