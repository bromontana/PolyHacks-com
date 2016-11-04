<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset=utf-8>
        <title>PolyHacks - Florida Polytechnic University's Hackathon</title>
        
		<link rel="shortcut icon" href=resources/favicon.png />
        <meta name=description content="Florida Polytechnic University's Student Hackathon">
        <meta name=keywords content="florida,polytechnic,university,hackathon,poly,fl,flpoly,polyhacks,hack,programming,coding,code,event,major,league,hacking,mlh,stem,science,technology,engineering,mathematics,math,you,get,it">
        <meta name=author content="Gabriel Hutchison">
        
        <meta name="viewport" content="width=device-width,
            initial-scale=1.5,maximum-scale=1.0,user-scalable=no">

        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        
        <link href="https://fonts.googleapis.com/css?family=Roboto"
              rel="stylesheet">
        <link rel=stylesheet href=styles.css>
        <link rel=stylesheet href=sections.css>
        <link rel=stylesheet href=mobile.css>
        <link rel=stylesheet href=scrollbars.css>
        
        <script src=jquery.min.js></script>
        <script src=index.js></script>
        <script src=mobile.js></script>
        <script src=barrelroll.js></script>
    </head>
    <body>
        <nav id=navbar>
            <a href=#main class=current>
                <span>Home<div class=bar></div></span>
            </a>
            <a href=#qa>
                <span>Q&amp;A<div class=bar></div></span>
            </a>
            <a href=#whatnow>
                <span>What Now?<div class=bar></div></span>
            </a>
            <a href=#countdown>
                <span>Countdown<div class=bar></div></span>
            </a>
            <a href=#sponsors>
                <span>Sponsors<div class=bar></div></span>
            </a>
            <a href=#map>
                <span>Where?<div class=bar></div></span>
            </a>
            <!--<a href=#contact>
                <span>Contact<div class=bar></div></span>
            </a>-->
            <a href=# id=dropdown class=mobile>
                <img src=resources/hamburger.png
                     alt="Click to show links"
                     width=20 height=20>
            </a>
        </nav>
        <nav class=hidden><a href="#">d</a></nav>
        
        <a id=mlhBanner
           href="https://mlh.io/seasons/na-2017/events?utm_source=na-2017&utm_medium=TrustBadge&utm_campaign=na-2017&utm_content=white"
           target=_blank></a>
        
        <section id=main_s>
            <a id=main class=navLink></a>
            <h1>POLYHACKS</h1>
            <p>
                PolyHacks will be on March 24th-25th
                <br><br>
                Register by January 3rd!
            </p>
            <br>
            <div id=buttons>
                <button id=btnRegister class=showTooltip
                        tooltip="Sign up by January 3rd to attend!">
                    Register
                </button>
                <button id=btnVolunteer class=showTooltip
                        tooltip="Help us run the hackathon!">
                    Volunteer
                </button>
                <button id=btnSponsor class=showTooltip
                        tooltip="Give us $$$ plz!">
                    Sponsor us
                </button>
            </div>
        </section>
        
        <section id=qa_s>
            <a id=qa class=navLink></a>
            <h1>Q&amp;A</h1>
            <div class=faq>
                <a href=# class=question>Questiony Question?</a>
                <div class="answer devel">Answery Answer ans-answer</div>
            </div>
            <div class=faq>
                <a href=# class=question>Questiony Question?</a>
                <div class=answer>Answery Answer ans-answer</div>
            </div>
        </section>
        
        <section id=whatnow_s>
            <a id=whatnow class=navLink></a>
            <h1>What Now?</h1>
            <ul>
                <li>Make sure to register</li>
                <li>Come up with a hack</li>
                <li>Read the <a href="https://polyhacks.com/2016/pdf/mlh-code-of-conduct.pdf" target=_blank>code of conduct</a></li>
                <li> Prepare for a <span class=showTooltip
                    tooltip="Ask your doctor if caffeine is right for you">
                    caffeine</span> overdose</li>
            </ul>
        </section>
        
        <section id=countdown_s class=devel>
            <a id=countdown class=navLink></a>
            <h1>When?</h1>
            <div id=button>
                <div id=bigRedButton></div>
                <b><span id=buttonPresses>
<?php
    $num = (int) file_get_contents("clicks.txt");
    echo number_format($num . "");
?>
                    </span> button presses</b>
                <div>
<?php
    $str = "Everybody try to get <span id=goal>500</span> clicks!";
    if ($num > 500) $str = "It's working! Keep clicking for button-related puns! (next goal: <span id=goal>1500</span>)";
    if ($num > 1500) $str = "You guys are pressing me out. (next: <span id=goal>2500</span>)"; 
    if ($num > 2500) $str = "I'm hard pressed to show you these numbers. (<span id=goal>3500</span>)";
    if ($num > 3500) $str = "I'm part of an important click now. (<span id=goal>4500</span>)";
    if ($num > 4500) $str = "It's a very <i>PRESS-tigious</i> click. (<span id=goal>6500</span>)";
    if ($num > 6500) $str = "I'm wearing my best button-up shirt for my date tonight. (<span id=goal>8500</span>)";
    if ($num > 8500) $str = "Oh boy is she cute as a button, I can't wait! (<span id=goal>10,000</span>)";
    if ($num > 10000) $str = "Nevermind. I dumped that switch. She kept pushing my buttons. (<span id=goal>50,000</span>)";
    if ($num > 50000) $str = "Stop clicking me, I'm kinda <i>de-PRESSED</i> right now. (<span id=goal>75,000</span>)";
    if ($num > 75000) $str = "Seriously, you're such a pain in the button. (<span id=goal>100,000</span>)";
    if ($num > 100000) $str = "I didn't honestly expect you all to get this far. Next goal: (<span id=goal>1,000,000</span>)";
    if ($num > 1000000) $str = "Umm, you must really like clicking. You all deserve some kind of reward I guess...
                                <a href=\"https://www.google.com/maps/@51.4921374,-0.1928784,3a,75y,291.8h,71.14t/data=!3m7!1e1!3m5!1sc9UMhWP_MWm9U0L48xEjYw!2e0!3e5!7i13312!8i6656\"
                                target=_blank>Here's the TARDIS on Google Maps</a> (you can actually get inside it. And yes, it's bigger on the inside). Is that good enough?
                                <span id=goal style=\"display: none;\">100000000000</span>";
    echo $str;
?>
                </div>
            </div>
        </section>
        
        <section id=sponsors_s>
            <a id=sponsors class=navLink></a>
            <h1>Sponsors</h1>
            (Dynamic)
            Florida Polytechnic University
            <br>
            SGA
            <br>
            SHAPE
            <br>
            MLH
            <br>
            Others
            php load data images with alts
            <div id=sponsorImgs>
<?php
    $file = file_get_contents("resources/sponsors/images.xml");
    if ($file) {
        try {
            $xml = simplexml_load_string($file);
            $json = json_encode($xml);
            $array = json_decode($json, TRUE)["image"];
            
            function sortByOrder($a, $b) {
                if ($a["order"] == $b["order"]) return 0;
                return ($a["order"] < $b["order"]) ? -1 : 1;
            }
            
            // sort by 'order' value
            uasort($array, 'sortByOrder');
            
            foreach($array as $img) {
                $sponsorImg ="
                    <a class=\"sponsorImg priority{$img["size"]}\" target=_blank
                        href=\"{$img["href"]}\">
                        <img src=\"resources/sponsors/{$img["src"]}\"
                             alt=\"{$img["alt"]}\">
                    </a>
                ";
                echo $sponsorImg;
            }
        } catch (Exception $e) {
            echo "<h3>PHP Error: {$e->getMessage()}</h3>";
        }
    } else {
        echo "<h3 class=showTooltip tooltip=\"Or error...\">No sponsors!</h3>";
    }
?>
            </div>
        </section>
        
        <section id=map_s class=devel>
            <a id=map class=navLink></a>
            <h1>Where?</h1>
        </section>
        
        <section id=contact_s class=devel>
            <a id=contact class=navLink></a>
            <h1>Contact</h1>
        </section>
        
        <footer id=copyright>
            <a href="https://github.com/PrivacyPolicy/PolyHacks-com"
               target=_blank>&copy; Gabriel Hutchison</a>
        </footer>
        
        <!-- dynamic objects -->
        <div id=tooltip class=hidden></div>
        
        <script>
        // add temporary filler text
        $(".devel").append("\
                <p>Bacon ipsum dolor amet sausage cow beef kielbasa short loin, hamburger jerky pork pastrami ground round tenderloin shank fatback shankle doner. Capicola pork chop corned beef, prosciutto salami ground round bacon short ribs brisket tail chicken turducken kevin andouille porchetta. Venison picanha jerky filet mignon shank leberkas ball tip short loin capicola. Doner sausage ball tip, landjaeger tenderloin andouille burgdoggen short loin pork spare ribs flank. T-bone pork loin meatloaf, ham hock chuck tail pork belly fatback tongue beef salami. Shankle sirloin pastrami, t-bone pancetta ham porchetta salami jowl prosciutto. Bacon picanha venison tri-tip burgdoggen spare ribs strip steak kevin biltong.</p>\
                <p>Ham hock venison fatback porchetta burgdoggen meatball. Shoulder shank ham venison andouille meatball flank. Kielbasa pork loin ground round chicken shank pancetta. Boudin bacon fatback, cupim jowl leberkas pig shankle. Ground round t-bone rump tongue. Pork loin bacon jowl, pork belly tongue fatback biltong salami doner beef ribs. Burgdoggen hamburger short ribs, chicken chuck doner meatloaf spare ribs boudin frankfurter venison porchetta ball tip ham hock jowl.</p>\
                <p>Prosciutto filet mignon burgdoggen salami, kevin cupim bresaola flank shank. Kevin pork chop kielbasa short ribs tail turkey. Bacon pork chop prosciutto drumstick, shoulder capicola porchetta. Biltong swine pastrami, shank beef ribs corned beef tri-tip jowl. Venison swine capicola porchetta ham hock chuck. Jowl corned beef bacon spare ribs venison boudin. Jerky porchetta short loin ham chuck leberkas flank pork belly, bresaola kevin cow.</p>"
                           );
        </script>
    </body>
</html>