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
<?php 
include_once("svg/buscandoelnorte.php");
include_once("config.php"); 
?>
    <div class="wrapper">

        <header class="main-header">

            <h1>
                <a href="#introduccion">
                    <img src="<?php echo $urls["url_base"];?>images/buscando-el-norte-logo-horizontal-top.png" width="541" height="61">
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

            <section id="introduccion" class="section-site cpt00">

                <div class="content-intro">
                    <div class="logo">
                        <img src="<?php echo $urls["url_base"];?>images/buscando-el-norte-logo-intro.png" width="781" height="260">
                    </div> 
                    <a class="blackBtn" href="#capitulo01">COMENZAR</a>     
                </div>
                <div class="background-section">
                    <img class="med-bg" src="<?php echo $urls["url_base"];?>images/buscando-el-norte-1024-intro.png">
                    <img class="large-bg" src="<?php echo $urls["url_base"];?>images/buscando-el-norte-1920-intro.png">
                </div>
            </section> 

            <section id="capitulo01" class="section-site cpt01"><!-- CAPITULO 01 -->
                <div class="subs-section">  
                     <audio id="audio-capitulo01" class="audios">                
                        <source src="audio/CAP1.mp3" type="audio/mp3">                    
                        <em class="error"><strong>Error:</strong> Your browser doesn't appear to support HTML5 Audio.</em>
                    </audio>
                    <a href="javascript:void(0)" class="playAudio" id="playAudio-capitulo01" style="display: none"><svg><use xlink:href="#audioplay"/></svg></a>
                    <a href="javascript:void(0)" class="pauseAudio" id="pauseAudio-capitulo01"><svg><use xlink:href="#audiostop"/></svg></a>
                    <p class="passage-audio-unavailable" hidden>
                        <em class="error"><strong>Error:</strong> You will not be able to do the read-along audio because your browser is not able to play MP3, Ogg, or WAV audio formats.</em>
                    </p>
                    <div class="txt_sc1"></div>
                </div>
                <div class="background-section">
                    <!--<img src="<?php echo $urls["url_base"];?>images/buscando-el-norte-1024-capitulo01.png">-->
                    <div class="med-bg">
                        <img src="<?php echo $urls["url_base"];?>images/buscando-el-norte-1024-capitulo01.png" alt="Buscando el norte - capítulo 1" width="1024" height="678" usemap="#MapCapitulo01" id="buscandoelnorte-capitulo01" />
                        <map name="MapCapitulo01">
                          <area shape="poly" class="abrir-detalle-modal" id="capitulo01-escena1" coords="237,246,238,277,246,295,258,323,274,336,285,324,283,296,283,274,287,248,277,242" href="javascript:void(0)">
                          <area shape="poly" class="abrir-detalle-modal" id="capitulo01-escena2" coords="571,514,588,567,609,572,653,537,634,492,571,514" href="javascript:void(0)">
                          <area shape="poly" class="abrir-detalle-modal" id="capitulo01-escena3"coords="529,314,566,316,596,303,590,194,556,191,531,192,525,261,528,316" href="javascript:void(0)">
                          <area shape="poly" class="abrir-detalle-modal" id="capitulo01-escena4" coords="565,459,623,424,628,415,645,417,668,413,690,401,677,382,655,389,663,369,657,314,667,285,685,263,685,247,661,246,657,262,645,276,617,291,600,316,589,346,573,373,555,392,554,419,567,459" href="javascript:void(0)">
                          <area shape="poly" class="abrir-detalle-modal" id="capitulo01-escena5" coords="896,115,886,177,948,201,955,130,897,116" href="javascript:void(0)">
                        </map> 
                    </div>
                    
                    <div class="large-bg">
                        <img src="<?php echo $urls["url_base"];?>images/buscando-el-norte-1920-capitulo01.png" alt="" width="1920" height="1080" usemap="#Map"/>
                        <map name="Map">
                          <area shape="poly" coords="1071,874,1101,969,1147,972,1212,916,1187,829" href="#">
                          <area shape="poly" coords="1043,633,1033,676,1044,776,1174,716,1296,668,1267,616,1241,628,1242,560,1297,381,1237,366,1206,408,1121,472" href="#">
                          <area shape="poly" coords="986,265,1107,269,1109,472,1048,495,994,496" href="#">
                          <area shape="poly" coords="444,387,492,377,530,386,530,452,531,520,512,542,473,512,449,440" href="#">
                          <area shape="poly" coords="1679,128,1802,165,1781,289,1662,242" href="#">
                        </map>
                    </div>
                </div>

            </section>

            <section id="capitulo02" class="section-site cpt02"><!-- CAPITULO 02 -->
                <div class="subs-section">   
                    <audio id="audio-capitulo02" class="audios" controls>                
                        <source src="audio/CAP2.mp3" type="audio/mp3">                    
                        <em class="error"><strong>Error:</strong> Your browser doesn't appear to support HTML5 Audio.</em>
                    </audio> 
                    <a href="javascript:void(0)" class="playAudio" id="playAudio-capitulo02"><svg><use xlink:href="#audioplay"/></svg></a>
                    <a href="javascript:void(0)" class="pauseAudio" id="pauseAudio-capitulo02"><svg><use xlink:href="#audiostop"/></svg></a>
                    <p class="passage-audio-unavailable" hidden>
                        <em class="error"><strong>Error:</strong> You will not be able to do the read-along audio because your browser is not able to play MP3, Ogg, or WAV audio formats.</em>
                    </p>                
                </div> 
                <div class="background-section">
                    <img src="<?php echo $urls["url_base"];?>images/buscando-el-norte-1024-capitulo02.png">
                </div>                
            </section>

            <section id="capitulo03" class="section-site cpt03"><!-- CAPITULO 03 -->
                <div class="subs-section">  
                    <audio id="audio-capitulo03" class="audios" controls>                
                        <source src="audio/CAP3.mp3" type="audio/mp3">                    
                        <em class="error"><strong>Error:</strong> Your browser doesn't appear to support HTML5 Audio.</em>
                    </audio>
                    <a href="javascript:void(0)" class="playAudio" id="playAudio-capitulo03"><svg><use xlink:href="#audioplay"/></svg></a>
                    <a href="javascript:void(0)" class="pauseAudio" id="pauseAudio-capitulo03"><svg><use xlink:href="#audiostop"/></svg></a>
                    <p class="passage-audio-unavailable" hidden>
                        <em class="error"><strong>Error:</strong> You will not be able to do the read-along audio because your browser is not able to play MP3, Ogg, or WAV audio formats.</em>
                    </p>
                </div>
                <div class="background-section">
                    <img src="<?php echo $urls["url_base"];?>images/buscando-el-norte-1024-capitulo03.png">
                </div> 

            </section>

            <section id="capitulo04" class="section-site cpt04"><!-- CAPITULO 04 -->
                
            </section>

            <section id="capitulo05" class="section-site cpt05"><!-- CAPITULO 05 -->
                
            </section> 

            <section id="capitulo06" class="section-site cpt06"><!-- CAPITULO 05 -->
                
            </section> 

            <!-- barra progreso -->
            <div id="barra-progreso">
                <div class="barra-marcador" style="width: 30%;"></div>
            </div>
        </div> <!-- end content -->
    </div><!-- end wrapper -->  
    
    <div id="modal-description-escenas">
        <div>HOLA</div>
    </div>    
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="assets/js/libs/jquery.fittext.js"></script>
<script src="assets/js/libs/jquery.lettering.js"></script>
<script src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script>
<script src="assets/js/libs/jquery.textillate.js"></script>
<script src="assets/js/libs/jquery.disablescroll.min.js"></script>
<script src="assets/js/image-map-master/image-map.js"></script>
<script src="assets/js/functions.js"></script>
    
<style>
    body { width: 33102px;}
    html {
    overflow: scroll;
    overflow-x: hidden;
}
::-webkit-scrollbar {
    width: 0px;  /* remove scrollbar space */
    background: transparent;  /* optional: just make scrollbar invisible */
}
/* optional: show position indicator in red */
::-webkit-scrollbar-thumb {
    background: #FF0000;
}
</style>    
</html>
