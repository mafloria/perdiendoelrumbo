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
   <!-- <script src="https://www.w3schools.com/lib/w3.js"></script>-->
    <link href="https://fonts.googleapis.com/css?family=Magra" rel="stylesheet">  

</head>

<body>
<?php 
include_once("svg/buscandoelnorte.php");
include_once("config.php"); 
?>
	<div id="overlay"></div>
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
            
            <section id="introduccion" class="section-site cpt00">                
                <a class="nav-next" href="#capitulo01"><svg><use xlink:href="#nav"/></svg></a>

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
                <a class="nav-before" href="#introduccion"><svg><use xlink:href="#nav"/></svg></a>
                <a class="nav-next" href="#capitulo02"><svg><use xlink:href="#nav"/></svg></a>
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
                    <div class="txt_capitulos" id="txt_capitulo01"></div>                    
                </div>
                <div class="background-section">
                    <div class="med-bg">
                        <img src="<?php echo $urls["url_base"];?>images/buscando-el-norte-1024-capitulo01.png" alt="Buscando el norte - capítulo 1" usemap="#MapCapitulo01" id="buscandoelnorte-capitulo01-1024" />
                        <map name="MapCapitulo01">
                          <area shape="poly" class="abrir-detalle-modal" id="capitulo01-escena-1" coords="237,246,238,277,246,295,258,323,274,336,285,324,283,296,283,274,287,248,277,242" data-tooltip-content="#tooltip_capitulo01-escena-1" href="javascript:void(0)">
                          <area shape="poly" class="abrir-detalle-modal" id="capitulo01-escena-2" coords="571,514,588,567,609,572,653,537,634,492,571,514" data-tooltip-content="#tooltip_capitulo01-escena-2" href="javascript:void(0)">
                          <area shape="poly" class="abrir-detalle-modal" id="capitulo01-escena-3"coords="529,314,566,316,596,303,590,194,556,191,531,192,525,261,528,316" data-tooltip-content="#tooltip_capitulo01-escena-3" href="javascript:void(0)">
                          <area shape="poly" class="abrir-detalle-modal" id="capitulo01-escena-4" coords="565,459,623,424,628,415,645,417,668,413,690,401,677,382,655,389,663,369,657,314,667,285,685,263,685,247,661,246,657,262,645,276,617,291,600,316,589,346,573,373,555,392,554,419,567,459" data-tooltip-content="#tooltip_capitulo01-escena-4" href="javascript:void(0)">
                          <area shape="poly" class="abrir-detalle-modal" id="capitulo01-escena-3-5" coords="896,115,886,177,948,201,955,130,897,116" data-tooltip-content="#tooltip_capitulo01-escena-5" href="javascript:void(0)">
                        </map>
                        
                        <div class="tooltip-html-titlecontent"><?php //tooltips ?>
                            <span id="tooltip_capitulo01-escena-1">
                                <svg><use xlink:href="#view-more"/></svg>
                                <p>ver más</p>    
                            </span>                           
                            <span id="tooltip_capitulo01-escena-2">
                                <svg><use xlink:href="#view-more"/></svg>
                                <p>ver más</p> 
                            </span>                  
                            <span id="tooltip_capitulo01-escena-3">
                                <svg><use xlink:href="#view-more"/></svg>
                                <p>ver más</p> 
                            </span>
                            <span id="tooltip_capitulo01-escena-4">
                                <svg><use xlink:href="#view-more"/></svg>
                                <p>ver más</p> 
                            </span>
                            <span id="tooltip_capitulo01-escena-5">
                                <svg><use xlink:href="#view-more"/></svg>
                                <p>ver más</p> 
                            </span>                               
                        </div> 
                         
                    </div>
                </div>
				<div id="modal-description-escenas-capitulo01" class="modal-descriptions" style="display: none">
					<?php include_once("modal_details_cap01.php"); ?>
					<?php // <div w3-include-html="modal_details_cap01.html"></div> ?>         
	    		</div>
            </section>
			
            <section id="capitulo02" class="section-site cpt02"><!-- CAPITULO 02 -->
                <a class="nav-before" href="#capitulo01"><svg><use xlink:href="#nav"/></svg></a>
                <a class="nav-next" href="#capitulo03"><svg><use xlink:href="#nav"/></svg></a>
                <div class="subs-section">   
                    <audio id="audio-capitulo02" class="audios">                
                        <source src="audio/CAP2.mp3" type="audio/mp3">                    
                        <em class="error"><strong>Error:</strong> Your browser doesn't appear to support HTML5 Audio.</em>
                    </audio> 
                    <a href="javascript:void(0)" class="playAudio" id="playAudio-capitulo02" style="display: none"><svg><use xlink:href="#audioplay"/></svg></a>
                    <a href="javascript:void(0)" class="pauseAudio" id="pauseAudio-capitulo02"><svg><use xlink:href="#audiostop"/></svg></a>
                    <p class="passage-audio-unavailable" hidden>
                        <em class="error"><strong>Error:</strong> You will not be able to do the read-along audio because your browser is not able to play MP3, Ogg, or WAV audio formats.</em>
                    </p>
					<div class="txt_capitulos" id="txt_capitulo02"></div>                    
                </div> 
                
                <div class="background-section">
                    <div class="med-bg">
                        <img src="<?php echo $urls["url_base"];?>images/buscando-el-norte-1024-capitulo02.png" alt="Buscando el norte - capítulo 2" width="1024" height="678" usemap="#MapCapitulo02" id="buscandoelnorte-capitulo02-1024"/>
                        <map name="MapCapitulo02">
                          <area shape="poly" class="abrir-detalle-modal" id="capitulo02-escena-1" data-tooltip-content="#tooltip_capitulo02-escena-1" coords="491,241,558,243,592,225,641,171,667,132,718,121,740,108,699,51,604,59,572,86,540,118,505,160,483,231" href="javascript:void(0);">
                          <area shape="poly" class="abrir-detalle-modal" id="capitulo02-escena-2" data-tooltip-content="#tooltip_capitulo02-escena-1" coords="245,375,224,389,207,435,179,483,163,522,173,542,195,546,211,501,233,474,260,437,272,407,286,389,262,375" href="javascript:void(0);">
                          <area shape="poly" class="abrir-detalle-modal" id="capitulo02-escena-3" data-tooltip-content="#tooltip_capitulo02-escena-1" coords="998,517,946,526,936,457,920,436,884,487,843,479,849,426,827,485,790,499,779,409,771,326,761,249,733,240,734,209,754,185,756,143,789,127,803,89,871,85,896,56,930,36,975,100,1000,122,1018,132,1018,501" href="javascript:void(0);">
                        </map>
                        <div class="tooltip-html-titlecontent"><?php //tooltips ?>
                            <span id="tooltip_capitulo02-escena-1">
                                <svg><use xlink:href="#view-more"/></svg>
                                <p>ver más</p> 
                            </span>                           
                            <span id="tooltip_capitulo02-escena-2">
                                <svg><use xlink:href="#view-more"/></svg>
                                <p>ver más</p> 
                            </span>                  
                            <span id="tooltip_capitulo02-escena-3">
                                <svg><use xlink:href="#view-more"/></svg>
                                <p>ver más</p> 
                            </span>                            
                        </div>
                    </div>
                </div> 
                
            	<div id="modal-description-escenas-capitulo02" class="modal-descriptions" style="display: none">
					<?php include_once("modal_details_cap02.php"); ?>         
					
	    		</div>
            </section>

            <section id="capitulo03" class="section-site cpt03"><!-- CAPITULO 03 -->
                <a class="nav-before" href="#capitulo02"><svg><use xlink:href="#nav"/></svg></a>
                <a class="nav-next" href="#capitulo04"><svg><use xlink:href="#nav"/></svg></a>
                <div class="subs-section">  
                    <audio id="audio-capitulo03" class="audios">                
                        <source src="audio/CAP3.mp3" type="audio/mp3">                    
                        <em class="error"><strong>Error:</strong> Your browser doesn't appear to support HTML5 Audio.</em>
                    </audio>
                    <a href="javascript:void(0)" class="playAudio" id="playAudio-capitulo03" style="display: none"><svg><use xlink:href="#audioplay"/></svg></a>
                    <a href="javascript:void(0)" class="pauseAudio" id="pauseAudio-capitulo03"><svg><use xlink:href="#audiostop"/></svg></a>
                    <p class="passage-audio-unavailable" hidden>
                        <em class="error"><strong>Error:</strong> You will not be able to do the read-along audio because your browser is not able to play MP3, Ogg, or WAV audio formats.</em>
                    </p>
                    <div class="txt_capitulos" id="txt_capitulo03"></div>
                </div>
                
                <div class="background-section">
                    <!-- imagenes de transicion: estas imagenes aparecen y desaparecen hasta llegar a la imagen del map-->
                    <img src="<?php echo $urls["url_base"];?>images/buscando-el-norte-1024-capitulo03a.jpg" class="capitulo03-rotating-item" vwidth="1024" height="678" style="display: none;">
                    <img src="<?php echo $urls["url_base"];?>images/buscando-el-norte-1024-capitulo03b.jpg" class="capitulo03-rotating-item" width="1024" height="678" style="display: none;">
                    <img src="<?php echo $urls["url_base"];?>images/buscando-el-norte-1024-capitulo03c.jpg" class="capitulo03-rotating-item" width="1024" height="678" style="display: none;">
                    <!--//-->
                    <img src="<?php echo $urls["url_base"];?>images/buscando-el-norte-1024-capitulo03.png" usemap="#MapCapitulo03" class="capitulo03-rotating-item" id="buscandoelnorte-capitulo03-1024" style="display: none;">
                    <map name="MapCapitulo03">
                      <area shape="poly" class="abrir-detalle-modal" id="capitulo03-escena-1" data-tooltip-content="#tooltip_capitulo03-escena-1" coords="109,143,123,200,93,244,99,298,126,328,162,309,206,315,228,297,267,282,343,295,367,257,459,294,496,288,409,224,339,194,348,150,314,132,281,140,269,163,231,150,206,133,155,134" href="javascript:void(0);">
                      <area shape="poly" class="abrir-detalle-modal" id="capitulo03-escena-2" data-tooltip-content="#tooltip_capitulo03-escena-2" coords="349,376,327,389,297,473,264,501,228,548,265,572,307,599,349,599,379,568,407,551,408,529,423,480,418,452,469,430,614,359,596,337,395,361" href="javascript:void(0);">
                      <area shape="poly" class="abrir-detalle-modal" id="capitulo03-escena-3" data-tooltip-content="#tooltip_capitulo03-escena-3" coords="598,251,725,272,749,247,749,230,704,189,715,158,698,123,716,104,719,69,699,45,661,54,603,116,608,217" href="javascript:void(0);">
                    </map>
                    <div class="tooltip-html-titlecontent"><?php //tooltips ?>
                            <span id="tooltip_capitulo03-escena-1">
                                <b>Tooltip capitulo 3 escena 1</b><p><svg><use xlink:href="#nav"/></svg></p>
                            </span>                           
                            <span id="tooltip_capitulo03-escena-2">
                                <b>Tooltip capitulo 3 escena 2</b><p><svg><use xlink:href="#nav"/></svg></p>
                            </span>                  
                            <span id="tooltip_capitulo03-escena-3">
                                <b>Tooltip capitulo 3 escena 3</b><p><svg><use xlink:href="#nav"/></svg></p>
                            </span>                            
                    </div>
                </div>
                
				<div id="modal-description-escenas-capitulo03" class="modal-descriptions" style="display: none">
					<?php include_once("modal_details_cap03.php"); ?>         
	    		</div>
            </section>

            <section id="capitulo04" class="section-site cpt04"><!-- CAPITULO 04 -->
                <a class="nav-before" href="#capitulo03"><svg><use xlink:href="#nav"/></svg></a>
                <a class="nav-next" href="#capitulo05"><svg><use xlink:href="#nav"/></svg></a>
                <div class="background-section">
                    <img src="<?php echo $urls["url_base"];?>images/buscando-el-norte-1024-capitulo04.jpg">
                </div>    
            </section>

            <section id="capitulo05" class="section-site cpt05"><!-- CAPITULO 05 -->
                <a class="nav-before" href="#capitulo04"><svg><use xlink:href="#nav"/></svg></a>
                <a class="nav-next" href="#capitulo06"><svg><use xlink:href="#nav"/></svg></a> 
                <div class="background-section">
                    <img src="<?php echo $urls["url_base"];?>images/buscando-el-norte-1024-capitulo05.jpg">
                </div>    
            </section> 

            <section id="capitulo06" class="section-site cpt06"><!-- CAPITULO 05 -->
                <a class="nav-before" href="#capitulo05"><svg><use xlink:href="#nav"/></svg></a>
                <a class="nav-next" href="#introduccion"><svg><use xlink:href="#nav"/></svg></a> 
                <div class="background-section">
                    <img src="<?php echo $urls["url_base"];?>images/buscando-el-norte-1024-capitulo06.jpg">
                </div>     
            </section> 
			
            <!-- barra progreso -->
            <div id="barra-progreso">
                <div class="barra-marcador" style="width: 0%;"></div>
            </div>
                
        </div> <!-- end content -->
    </div><!-- end wrapper -->  

</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<!--<script src="assets/js/libs/jquery-1.11.3.min.js"></script>-->    

<!-- for tool tip management -->
<link rel="stylesheet" href="assets/js/tooltipster/dist/css/tooltipster.bundle.min.css">    
<script src="assets/js/tooltipster/dist/js/tooltipster.bundle.min.js"></script>
<script type="text/javascript" src="assets/js/tooltipster/dist/js/plugins/tooltipster-follower.min.js"></script>
<link rel="stylesheet" href="assets/js/tooltipster/dist/css/plugins/tooltipster-follower.css">
<link rel="stylesheet" href="assets/js/tooltipster/dist/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-shadow.min.css">    

<!-- for text -->
<script src="assets/js/libs/jquery.fittext.js"></script>
<script src="assets/js/libs/jquery.lettering.js"></script>
<script src="assets/js/libs/jquery.textillate.js"></script>

<!-- for scrolling -->
<script src="assets/js/libs/jquery.disablescroll.min.js"></script>

<!-- for image map  -->
<script src="assets/js/image-map-master/image-map.js"></script>

<!-- for buscando el norte management -->
<script src="assets/js/functions.js"></script>
    
<style>
    body { width: 33102px;}
    html {
    /*overflow: scroll;
    overflow-x: hidden;*/
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
