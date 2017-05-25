<!doctype html>
<html class="no-js" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Buscando el Norte</title>
    <meta name="author" content="" />
    <meta name="description" content="" />
    <!-- Don't forget to set your site up: http://google.com/webmasters -->
    <meta name="google-site-verification" content="" />
    <!-- Who owns the content of this site? -->
    <meta name="Copyright" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" />

    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/bootstrapValidator.css">

    <script src="assets/js/libs/prefixfree.min.js"></script>
    <script src="assets/js/libs/modernizr-3.2.0.base.js"></script> 
    <link href="https://fonts.googleapis.com/css?family=Magra" rel="stylesheet">  

</head>

<body>
<?php include_once("svg/buscandoelnorte.php"); ?>
    <div class="wrapper">

        <header class="main-header">

            <h1>
                <a href="#">
                    <img src="http://localhost/perdiendoelrumbo/images/buscando-el-norte-logo-horizontal-top.png" width="541" height="61">
                </a>
            </h1>

            <nav id="nav-menu">
                <a id="ben-main-menu" href="javascript:void(0);"><svg><use xlink:href="#menu"/></svg></a>
            </nav>
            <div class="submenu" style="display: none;">
                <ul>
                    <li><a href="">Información Educativa</a></li>
                    <li><a href="">Perfil del Migrante</a></li>
                    <li><a href="">Información para tomadores de decisiones</a></li>
                    <li><a href="">Qué hacer si eres joven migrante</a></li>
                    <li><a href="">Créditos</a></li>
                </ul>
            </div>

        </header><!-- end headerr -->

        <div id="content-section">

            <a class="nav-before" href=""><svg><use xlink:href="#nav"/></svg></a>
            <a class="nav-next" href=""><svg><use xlink:href="#nav"/></svg></a>  

            <section class="section-site cpt00">
                <div class="content-intro">
                    <div class="logo">
                        <img src="http://localhost/perdiendoelrumbo/images/buscando-el-norte-logo-intro.png" width="781" height="260">
                    </div> 
                    <a class="blackBtn" href="#capitulo01">COMENZAR</a>     
                </div>
                <div class="background-section">
                    <img class="med-bg" src="http://localhost/perdiendoelrumbo/images/buscando-el-norte-1024-intro.png">
                    <img class="large-bg" src="http://localhost/perdiendoelrumbo/images/buscando-el-norte-1920-intro.png">
                </div>
            </section> 

            <section id="capitulo01" class="section-site cpt01">
                <div class="background-section">
                    <img src="http://localhost/perdiendoelrumbo/images/buscando-el-norte-1024-capitulo01.png">
                </div>    
            </section>

            <section id="capitulo02" class="section-site cpt02"></section>

            <section id="capitulo03" class="section-site cpt03"></section>

            <section id="capitulo04" class="section-site cpt04"></section>

            <section id="capitulo05" class="section-site cpt05"></section> 

            <section id="capitulo06" class="section-site cpt06"></section> 

            <!-- bnarra subtitulos-->
                <div id="subs-section">
                    <article>
        
                        <audio id="passage-audio" class="passage" controls>
                                <!-- @todo WebM? -->
                            <source src="audio/test.mp3" type="audio/mp3">
                            <source src="audio/test.ogg" type="audio/ogg">
                            <source src="audio/test.wav" type="audio/wav">
                            <em class="error"><strong>Error:</strong> Your browser doesn't appear to support HTML5 Audio.</em>
                        </audio>        
                        <a href="javascript:void(0)" id="playAudio"><svg><use xlink:href="#audioplay"/></svg></a>
                        <a href="javascript:void(0)" id="pauseAudio"><svg><use xlink:href="#audiostop"/></svg></a>
                        <p class="passage-audio-unavailable" hidden>
                            <em class="error"><strong>Error:</strong> You will not be able to do the read-along audio because your browser is not able to play MP3, Ogg, or WAV audio formats.</em>
                        </p>
                        <span class="txt_sc1"></span>
                                  
                    </article    
                </div>
            <!-- barra progreso -->
            <div id="barra-progreso">
                <div class="barra-marcador" style="width: 30%;"></div>
            </div>
        </div> <!-- end content -->
    </div><!-- end wrapper -->  


    <article style="display: none;">
        
        <audio id="passage-audio" class="passage" controls>
                <!-- @todo WebM? -->
            <source src="audio/test.mp3" type="audio/mp3">
            <source src="audio/test.ogg" type="audio/ogg">
            <source src="audio/test.wav" type="audio/wav">
            <em class="error"><strong>Error:</strong> Your browser doesn't appear to support HTML5 Audio.</em>
        </audio>        
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
<script src="assets/js/libs/jquery.disablescroll.min.js"></script>
<script src="assets/js/functions.js"></script>
    
    
</html>
