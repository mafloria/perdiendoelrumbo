<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>

    <meta charset="utf-8">

    <!--
        HTML5 Reset: https://github.com/murtaugh/HTML5-Reset
        Free to use
    -->

    <!-- Always force latest IE rendering engine (even in intranet) -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Important stuff for SEO, don't neglect. (And don't dupicate values across your site!) -->
    <title></title>
    <meta name="author" content="" />
    <meta name="description" content="" />

    <!-- Don't forget to set your site up: http://google.com/webmasters -->
    <meta name="google-site-verification" content="" />

    <!-- Who owns the content of this site? -->
    <meta name="Copyright" content="" />

    <!--  Mobile Viewport
    http://j.mp/mobileviewport & http://davidbcalhoun.com/2010/viewport-metatag
    device-width : Occupy full width of the screen in its current orientation
    initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
    maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width (wrong for most sites)
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Use Iconifyer to generate all the favicons and touch icons you need: http://iconifier.net -->
    <link rel="shortcut icon" href="favicon.ico" />

    <!-- concatenate and minify for production -->
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />

    <!-- Lea Verou's prefixfree (http://leaverou.github.io/prefixfree/), lets you use un-prefixed properties in your CSS files -->
    <script src="assets/js/libs/prefixfree.min.js"></script>

    <!-- This is a minimized, base version of Modernizr. (http://modernizr.com)
          You will need to create new builds to get the detects you need. -->
    <script src="assets/js/libs/modernizr-3.2.0.base.js"></script>   

</head>
    <body>
        <h1>Perdiendo el Rumbo</h1>        

        <article>
            

            <p class="passage-audio">
                <audio id="passage-audio" class="passage" controls>
                    <!-- @todo WebM? -->
                    <source src="audio/test.mp3" type="audio/mp3">
                    <source src="audio/test.ogg" type="audio/ogg">
                    <source src="audio/test.wav" type="audio/wav">
                    <em class="error"><strong>Error:</strong> Your browser doesn't appear to support HTML5 Audio.</em>
                </audio>
            </p>
            <a href="javascript:void(0)" id="playAudio">Play</a>
            <a href="javascript:void(0)" id="pauseAudio">Pause</a>
            <p class="passage-audio-unavailable" hidden>
                <em class="error"><strong>Error:</strong> You will not be able to do the read-along audio because your browser is not able to play MP3, Ogg, or WAV audio formats.</em>
            </p>
            <span class="txt_sc1"></span>
                      
        </article>


    </body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="assets/js/libs/jquery.fittext.js"></script>
<script src="assets/js/libs/jquery.lettering.js"></script>
<script src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script>
<script src="assets/js/libs/jquery.textillate.js"></script>
<script src="assets/js/functions.js"></script>
    
    
</html>
