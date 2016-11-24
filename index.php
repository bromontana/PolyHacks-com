<!DOCTYPE html>
<html lang=en>
    <head>
        <meta name="google-site-verification" content="ZMou7wAyGT1u4_EMj8DC00FJhUCdFnN5NL61841EmTA" />
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

        <!--<link href="https://fonts.googleapis.com/css?family=Roboto"
              rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <link rel=stylesheet href=styles.css>
        <link rel=stylesheet href=colors.css>
        <link rel=stylesheet href=sections.css>
        <link rel=stylesheet href=mobile.css>
        <link rel=stylesheet href=scrollbars.css>
        <link rel=stylesheet href=resources/font-awesome-4.7.0/css/font-awesome.min.css>

        <script src=jquery.min.js></script>
        <script src=index.js></script>
        <script src=mobile.js></script>
        <script src=jsDate.js></script>
        <script src=barrelroll.js></script>
    </head>
    <body>
        <nav id=navbar>
            <!--<a href=#main class=current>
                <span>Home<div class=bar></div></span>
            </a>-->
            <a href=#main>
                <span>When?<div class=bar></div></span>
            </a>
            <a href=#qa>
                <span>What?<div class=bar></div></span>
            </a>
            <a href=#map>
                <span>Where?<div class=bar></div></span>
            </a>
            <a href=#whatnow>
                <span>How?<div class=bar></div></span>
            </a>
            <!--<a href=#countdown>
                <span>Countdown<div class=bar></div></span>
            </a>-->
            <a href=#sponsors>
                <span>Sponsors<div class=bar></div></span>
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
            <img id=logo src=resources/polyhax.png alt=PolyHacks>

              PolyHacks will be on March 24th-25th
              <br><br>
              Register by January 3rd!
              <br><br>
            <br>
            <div id=buttons>

                <button id=btnRegister class=showTooltip
                        tooltip="We will let you know when registration opens up!"
                        href="https://www.google.com" target=_blank>
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
                <a href=# class=question>What is a hackathon?</a>
                <div class=answer>A hackathon is a 24 hour event where people get
                                  together and build a project (or hack). The hack is not limited
                                  in scope, however we ask you to not to start yout hack
                                  before the hackathon</div>
            </div>
            <div class=faq float=right>
                <a href=# class=question>Can I go?</a>
                <div class=answer>In order to go, you have to be a student,
                                  and over the age of 18. </div>
            </div>
            <div class=faq>
                <a href=# class=question>Is it free?</a>
                <div class=answer>Yes! Polyhacks is completely FREE to attend! Food is included in the low, low, price of free</div>
            </div>
            <div class=faq>
                <a href=# class=question>What should I bring?</a>
                <div class=answer>We recommend that you bring a couple things:
                  <ul>
                    <li>Your laptop</li>
                    <li>All your chargers</li>
                    <li>A pillow and blanket (if you want to sleep)</li>
                    <li>If you want to hack some hardware, bring everything you can!</li>
                    <li>Lastly bring your awesome ideas and passion!</li>
                  </ul>
                </div>
            </div>
            <div class=faq>
                <a href=# class=question>Are there teams?</a>
                <div class=answer>Absolutely! We strongly enourage being a part of a team.
                                  Teams can be anywhere between 1 and 4 people and you can
                                  either come with a team or find one when you get here</div>
            </div>
        </section>

        <section id=map_s>
            <a id=map class=navLink></a>
            <div id=mapCover>
                <div id=mapDarkness>
                    <div id=mapEnableLabel>Click to view map</div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3517.8586799816926!2d-81.85351688463547!3d28.15079001247047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88dd69f623d73aa3%3A0xc795777acc89484!2s4700+Research+Way%2C+Polk+City%2C+FL+33868!5e0!3m2!1sen!2sus!4v1446167223548"
                        id=imTheMap frameborder="0" allowfullscreen="" class=preventScroll></iframe>
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

        <section id=countdown_s>
            <a id=countdown class=navLink></a>
            <h1>Countdown</h1>

            <div id=countdownTimer data-to='<?php
    $file = file_get_contents("countdown_date.json");
    $file = explode("}", $file)[0] . "}";
    $file = str_replace("\n", "", $file);
    $file = str_replace("\r", "", $file);
    $file = str_replace("    ", "", $file);
    $file = str_replace(",", ", ", $file);
    echo $file;
?>' data-past="Now!">Loading...</div>
            <br>
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
    $str = "Everybody try to get <span id=goal>500</span> presses!";
    if ($num > 500) $str = "It's working! Keep clicking for button-related puns! (next goal: <span id=goal>1,500</span>)";
    if ($num > 1500) $str = "You guys are pressing me out. (next: <span id=goal>2,500</span>)";
    if ($num > 2500) $str = "I'm hard pressed to show you these numbers. (<span id=goal>3,500</span>)";
    if ($num > 3500) $str = "I'm part of an important click now. (<span id=goal>4,500</span>)";
    if ($num > 4500) $str = "It's a very <i>PRESS-tigious</i> click. (<span id=goal>6,500</span>)";
    if ($num > 6500) $str = "I'm wearing my best button-up shirt for my date tonight. (<span id=goal>8,500</span>)";
    if ($num > 8500) $str = "Oh boy is she cute as a button, I can't wait! (<span id=goal>10,000</span>)";
    if ($num > 10000) $str = "Nevermind. I dumped that switch. She kept pushing my buttons. (<span id=goal>50,000</span>)";
    if ($num > 50000) $str = "Stop clicking me, I'm kinda <i>de-PRESSED</i> right now. (<span id=goal>75,000</span>)";
    if ($num > 75000) $str = "Seriously, you're such a pain in the button. (<span id=goal>100,000</span>)";
    if ($num > 100000) $str = "I didn't honestly expect you all to get this far. Next goal: (<span id=goal>1,000,000</span>)";
    if ($num > 1000000) $str = "Umm, you must really like clicking. You all deserve some kind of reward I guess...
                                <a href=\"https://www.youtube.com/watch?v=dQw4w9WgXcQ\"
                                target=_blank>Here's the source of my inspiration for button puns.</a> Honestly, this video has gotten me through a lot.
                                <span id=goal style=\"display: none;\">1,000,000,000,000</span>";
    echo $str;
?>
                </div>
            </div>
        </section>

        <section id=sponsors_s>
            <a id=sponsors class=navLink></a>
            <h1>Sponsors/​Partners</h1>
            <div id=sponsorImgs>
<?php
    $file = file_get_contents("resources/sponsors/images.xml");
    if ($file) {
        try {
            $xml = simplexml_load_string($file);
            $json = json_encode($xml);
            $array = json_decode($json, TRUE)["image"];

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



        <section id=contact_s>
            <a id=contact class=navLink></a>
            <p>Contact us</p>
            <a class="social fa fa-twitter" id=theTwitterLink
               target=_blank href="https://twitter.com/PolyHacks">
            </a>
            <a class="social fa fa-envelope" id=theEmailLink
               target=_blank href="mailto:hackspoly@gmail.com">
            </a>
            <a class="social fa fa-facebook" id=theFacebookLink
               target=_blank href="https://www.facebook.com/hackspoly">
            </a>
        </section>

        <footer id=copyright>
            <a href="https://github.com/PrivacyPolicy/PolyHacks-com"
               target=_blank>&copy; Gabriel Hutchison</a><a> &amp; Frank Calas</a>
        </footer>

        <!-- dynamic objects -->
        <div id=tooltip class=hidden></div>
    </body>
</html>
