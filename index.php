<?php ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Expires" content="30" />
    
    <title>Buscando el Norte</title>
    <meta name="author" content="Transmedia" />
    <meta name="description" content="Buscando el Norte - Save the Children Mexico" />    
    <!-- Who owns the content of this site? -->
    <meta name="Copyright" content="Save the Children Mexico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    
    <link rel="stylesheet" href="assets/css/style.css" />    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">        
           
    <link href="https://fonts.googleapis.com/css?family=Magra" rel="stylesheet">
</head>

<body>

<?php include_once("svg/buscandoelnorte.php"); ?> 
<style>
/* loading section */
.loadH-content{	width: 20%; margin: 0 auto; margin-top: 10%;}
#cargando-historia img{}
#cargando-texto-animado {position: relative;color: rgba(216, 212, 217, .3);font-size: 1.4em; width: 100%; text-align: right; right: 0;} 
#cargando-texto-animado:before {content: attr(data-text);position: absolute;overflow: hidden;max-width: 10em;white-space: nowrap;color: #fff;animation: loading 4s linear;}	
@keyframes loading {from { max-width: 0; }}
/* end - loading section */
</style>
    <div class="portrait-intro">
        <div class="girar">
            <img src="images/girrar-phone.png">
            <p>Gira tu dispositivo para poder visualizar el contenido</p>
        </div>
    </div>
    <div id="cargando-historia" class="section-site overlay">
        <div class="loadH-content">
            <img src="images/cargando-img.png">
            <p id="cargando-texto-animado" data-text="Cargando historia ...">Cargando historia ...</p>

            <div class="mss">
                <img src="images/icono-speaker.png">
                <p>Para una mejor experiencia, habilita el sonido de tu equipo o dispositivo.</p> 
            </div>
        </div>                        
    </div>
    <div class="wrapper" style="display:none">
        <header class="main-header">
            <h1 id="back-to-intro">
                <a href="#introduccion">
                    <img src="images/buscando-el-norte-logo-horizontal-top.png" width="541" height="61">
                </a>            
            </h1>
            <div class="chapter-title">    
                <h3>
                    <span id="title-capitulo01" style="display: none;">Cap&iacute;tulo 1: La partida</span>
                    <span id="title-capitulo02" style="display: none;">Cap&iacute;tulo 2: Las amigas del camino</span>
                    <span id="title-capitulo03" style="display: none;">Cap&iacute;tulo 3: Los peligros de la ruta</span>
                    <span id="title-capitulo04" style="display: none;">Cap&iacute;tulo 4: Al borde de la frontera</span>
                    <span id="title-capitulo05" style="display: none;">Cap&iacute;tulo 5: Encuentros y despedidas</span>
                    <span id="title-capitulo06" style="display: none;">Cap&iacute;tulo 6: El regreso</span>
                </h3>
                <?php /*
                <div> 
                    <a class="nav-chap-us" href="#capitulo02">C2</a>
                    <a class="nav-chap-us" href="#capitulo03">C3</a>
                    <a class="nav-chap-us" href="#capitulo04">C4</a>
                    <a class="nav-chap-us" href="#capitulo05">C5</a>
                    <a class="nav-chap-us" href="#firmapeticion">C6</a>
                </div>*/ ?>
            </div>
            <nav id="nav-menu">
                <a id="ben-main-menu" href="javascript:void(0);"><svg><use xlink:href="#menu"/></svg></a>
            </nav>
            <div class="submenu" style="display: none;">
                <ul>
                    <li><a href="#sobrenosotros">Sobre Buscando el norte</a></li> 
                    <li><a href="#historias">Historias de vida</a></li>
                    <li><a href="buscando-el-norte.pdf" download>Buscando el norte [PDF]</a></li>
                    <!--<li><a href="">Perfil del Migrante</a></li>
                    
                    <li><a href="">Información para tomadores de decisiones</a></li>
                    <li><a href="">Qué hacer si eres joven migrante</a></li>-->
                    <li><a href="#creditos">Créditos</a></li>
                </ul>
            </div>

        </header><!-- end headerr -->

        <div id="content-section">
            <section id="introduccion" class="section-site cpt00">                
                <a class="nav-next chapter-nav" href="#capitulo01"><svg><use xlink:href="#nav"/></svg></a>
                <div class="content-intro">
                    <div class="logo">
                        <img src="images/buscando-el-norte-logo-intro.png" width="781" height="260">
                        
                    </div> 
                    <a class="blackBtn intro-chapter-startbtn" href="#capitulo01" target="_top">COMENZAR</a>    
                </div>
                <div class="intro-chapter-menu" style="display:none">
                    <h3>Navega por los diferentes capítulos:</h3>
                    <ul>
                        <li><a href="#capitulo01"><img src="images/thumb-portada-c1.jpg"></a></li>
                        <li><a href="#capitulo02"><img src="images/thumb-portada-c2.jpg"></a></li>
                        <li><a href="#capitulo03"><img src="images/thumb-portada-c3.jpg"></a></li>
                        <li><a href="#capitulo04"><img src="images/thumb-portada-c4.jpg"></a></li>
                        <li><a href="#capitulo05"><img src="images/thumb-portada-c5.jpg"></a></li>
                        <li><a href="#capitulo06"><img src="images/thumb-portada-c6.jpg"></a></li>
                    </ul>
                </div>
                <div class="logo-stc"><img src="images/logo-save-children.png" width="578" height="146"></div>
                
                <div class="background-section">
                    <img class="med-bg" id="imgbg-introduccion" src="images/buscando-el-norte-1024-intro.png">
                </div>
            </section> 

            <section id="capitulo01" class="section-site cpt01"><!-- CAPITULO 01 -->
                <div class="side-nav-section" style="display: none"><!-- navegacion lateral por seccion -->
                    <ul>
                        <li class="sequence-thumb" id="sequence-capitulo01-scena-1"><a><img src="images/thumb-c1-e1.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo01-scena-2"><a><img src="images/thumb-c1-e2.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo01-scena-3"><a><img src="images/thumb-c1-e3.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo01-scena-4"><a><img src="images/thumb-c1-e4.jpg"></a></li>                        
                        <li class="sequence-thumb" id="sequence-capitulo01-scena-5"><a><img src="images/thumb-c1-e5.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo01-scena-6"><a><img src="images/thumb-c1-e6.jpg"></a></li>
                    </ul>
                </div>
                <div class="section-content-wrap"> <!-- contenedor de elementos del section -->
                    <a class="nav-before chapter-nav" href="/#introduccion"><svg><use xlink:href="#nav"/></svg></a>
                    <a class="nav-next" id="nav-next-capitulo01-inactive" href="/#capitulo02"  target="_top"><svg><use xlink:href="#nav"/></svg></a>
                    <a class="nav-next chapter-nav" id="nav-next-capitulo01-active" style="display: none" href="#capitulo02"><svg><use xlink:href="#nav"/></svg></a>
                    <div class="subs-section">  
                         <audio id="audio-capitulo01-scena-1" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo01/buscando-el-norte-capitulo01-E1.mp3" type="audio/mp3">
                            <em class="error"><strong>Error:</strong> Your browser doesn't appear to support HTML5 Audio.</em>
                        </audio>                        
                        <audio id="audio-capitulo01-scena-2" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo01/buscando-el-norte-capitulo01-E2.mp3" type="audio/mp3">                                                        
                        </audio>
                        <audio id="audio-capitulo01-scena-3" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo01/buscando-el-norte-capitulo01-E3.mp3" type="audio/mp3">                            
                        </audio>
                        <audio id="audio-capitulo01-scena-4" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo01/buscando-el-norte-capitulo01-E4.mp3" type="audio/mp3">                            
                        </audio>                        
                        <audio id="audio-capitulo01-scena-5" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo01/buscando-el-norte-capitulo01-E5.mp3" type="audio/mp3">                            
                        </audio>
                        <audio id="audio-capitulo01-scena-6" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo01/buscando-el-norte-capitulo01-E6.mp3" type="audio/mp3">                            
                        </audio>
                        <a href="javascript:void(0)" class="playAudio" id="playAudio-capitulo01" style="display: none"><svg><use xlink:href="#audioplay"/></svg></a>
                        <a href="javascript:void(0)" class="pauseAudio" id="pauseAudio-capitulo01"><svg><use xlink:href="#audiostop"/></svg></a>
                        <p class="passage-audio-unavailable" hidden>
                            <em class="error"><strong>Error:</strong> You will not be able to do the read-along audio because your browser is not able to play MP3, Ogg, or WAV audio formats.</em>
                        </p>
                        <div class="txt_capitulos" id="txt_capitulo01">&nbsp;</div>
                    </div>
                    <div class="background-section">
                    	<img src="images/capitulo01/escena-1/buscando-el-norte-capitulo01-escena-1-1.jpg" id="imgbg-capitulo01">                       
                    </div>                  
                </div>
            </section>
            
            <section id="capitulo02" class="section-site cpt02"><!-- CAPITULO 02 -->
                <div class="side-nav-section" style="display: none"><!-- navegacion lateral por seccion -->
                    <ul>
                        <li class="sequence-thumb" id="sequence-capitulo02-scena-1"><a><img src="images/thumb-c2-e1.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo02-scena-2"><a><img src="images/thumb-c2-e2.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo02-scena-3"><a><img src="images/thumb-c2-e3.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo02-scena-4"><a><img src="images/thumb-c2-e4.jpg"></a></li>                                               
                    </ul>
                </div>
                <div class="section-content-wrap"> <!-- contenedor de elementos del section -->
                    <a class="nav-before chapter-nav" href="#capitulo01"><svg><use xlink:href="#nav"/></svg></a>                    
                    <a class="nav-next" id="nav-next-capitulo02-inactive" href="#capitulo03"><svg><use xlink:href="#nav"/></svg></a>
                    <a class="nav-next chapter-nav" id="nav-next-capitulo02-active" style="display: none" href="#capitulo03"><svg><use xlink:href="#nav"/></svg></a>
                    <div class="subs-section">                      
                        <audio id="audio-capitulo02-scena-1" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo02/buscando-el-norte-capitulo02-E1.mp3" type="audio/mp3">                            
                        </audio>
                        <audio id="audio-capitulo02-scena-2" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo02/buscando-el-norte-capitulo02-E2.mp3" type="audio/mp3">                            
                        </audio> 
                        <audio id="audio-capitulo02-scena-3" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo02/buscando-el-norte-capitulo02-E3.mp3" type="audio/mp3">                            
                        </audio>
                        <audio id="audio-capitulo02-scena-4" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo02/buscando-el-norte-capitulo02-E4.mp3" type="audio/mp3">                            
                        </audio>
                        <a href="javascript:void(0)" class="playAudio" id="playAudio-capitulo02" style="display: none"><svg><use xlink:href="#audioplay"/></svg></a>
                        <a href="javascript:void(0)" class="pauseAudio" id="pauseAudio-capitulo02"><svg><use xlink:href="#audiostop"/></svg></a>                        
                        <div class="txt_capitulos" id="txt_capitulo02">&nbsp;</div>                    
                    </div> 
                    
                    <div class="background-section">
						<img src="images/capitulo02/escena-1/buscando-el-norte-capitulo02-escena-1-1.jpg" id="imgbg-capitulo02" style="display: none;">                                                
                    </div> 
                </div> <!--end section wrap -->
            </section>

            <section id="capitulo03" class="section-site cpt03"><!-- CAPITULO 03 -->
                <div class="side-nav-section" style="display: none"><!-- navegacion lateral por seccion -->
                    <ul>
                        <li class="sequence-thumb" id="sequence-capitulo03-scena-1"><a><img src="images/thumb-c3-e1.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo03-scena-2"><a><img src="images/thumb-c3-e2.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo03-scena-3"><a><img src="images/thumb-c3-e3.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo03-scena-4"><a><img src="images/thumb-c3-e4.jpg"></a></li>                                               
                    </ul>
                </div>
                <div class="section-content-wrap"> <!-- contenedor de elementos del section -->
                    <a class="nav-before chapter-nav" href="#capitulo02"><svg><use xlink:href="#nav"/></svg></a>
                    <a class="nav-next" id="nav-next-capitulo03-inactive" href="#capitulo04"><svg><use xlink:href="#nav"/></svg></a>
                    <a class="nav-next chapter-nav" id="nav-next-capitulo03-active" style="display: none" href="#capitulo04"><svg><use xlink:href="#nav"/></svg></a>
                    <div class="subs-section">  
                        <audio id="audio-capitulo03-scena-1" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo03/buscando-el-norte-capitulo03-E1.mp3" type="audio/mp3">                            
                        </audio>
                        <audio id="audio-capitulo03-scena-2" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo03/buscando-el-norte-capitulo03-E2.mp3" type="audio/mp3">                            
                        </audio>
                        <audio id="audio-capitulo03-scena-3" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo03/buscando-el-norte-capitulo03-E3.mp3" type="audio/mp3">                            
                        </audio>
                        <audio id="audio-capitulo03-scena-4" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo03/buscando-el-norte-capitulo03-E4.mp3" type="audio/mp3">                            
                        </audio>
                        <a href="javascript:void(0)" class="playAudio" id="playAudio-capitulo03" style="display: none"><svg><use xlink:href="#audioplay"/></svg></a>
                        <a href="javascript:void(0)" class="pauseAudio" id="pauseAudio-capitulo03"><svg><use xlink:href="#audiostop"/></svg></a>                        
                        <div class="txt_capitulos" id="txt_capitulo03">&nbsp;</div>
                    </div>
                    
                    <div class="background-section">
                        <img src="images/capitulo03/escena-1/buscando-el-norte-capitulo03-escena-1-1.jpg" id="imgbg-capitulo03" style="display: none;">                        
                    </div>                                                                  
                </div> <!--end section wrap -->
            </section>

            <section id="capitulo04" class="section-site cpt04"><!-- CAPITULO 04 -->
                <div class="side-nav-section" style="display: none"><!-- navegacion lateral por seccion -->
                    <ul>
                        <li class="sequence-thumb" id="sequence-capitulo04-scena-1"><a><img src="images/thumb-c4-e1.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo04-scena-2"><a><img src="images/thumb-c4-e2.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo04-scena-3"><a><img src="images/thumb-c4-e3.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo04-scena-4"><a><img src="images/thumb-c4-e4.jpg"></a></li>                        
                        <li class="sequence-thumb" id="sequence-capitulo04-scena-5"><a><img src="images/thumb-c4-e5.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo04-scena-6"><a><img src="images/thumb-c4-e6.jpg"></a></li>                                                                       
                    </ul>
                </div>
                <div class="section-content-wrap"> <!-- contenedor de elementos del section -->
                    <a class="nav-before chapter-nav" href="#capitulo03"><svg><use xlink:href="#nav"/></svg></a>
                    <a class="nav-next" id="nav-next-capitulo04-inactive" href="#capitulo05"><svg><use xlink:href="#nav"/></svg></a>
                    <a class="nav-next chapter-nav" id="nav-next-capitulo04-active" style="display: none" href="#capitulo05"><svg><use xlink:href="#nav"/></svg></a>
                    <div class="subs-section">  
                        <audio id="audio-capitulo04-scena-1" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo04/buscando-el-norte-capitulo04-E1.mp3" type="audio/mp3">                            
                        </audio>                        
                        <audio id="audio-capitulo04-scena-2" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo04/buscando-el-norte-capitulo04-E2.mp3" type="audio/mp3">                            
                        </audio>
                        <audio id="audio-capitulo04-scena-3" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo04/buscando-el-norte-capitulo04-E3.mp3" type="audio/mp3">                            
                        </audio>
                        <audio id="audio-capitulo04-scena-4" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo04/buscando-el-norte-capitulo04-E4.mp3" type="audio/mp3">                            
                        </audio>
                        <audio id="audio-capitulo04-scena-5" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo04/buscando-el-norte-capitulo04-E5.mp3" type="audio/mp3">                            
                        </audio>
                        <audio id="audio-capitulo04-scena-6" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo04/buscando-el-norte-capitulo04-E6.mp3" type="audio/mp3">                            
                        </audio>
                        <a href="javascript:void(0)" class="playAudio" id="playAudio-capitulo04" style="display: none"><svg><use xlink:href="#audioplay"/></svg></a>
                        <a href="javascript:void(0)" class="pauseAudio" id="pauseAudio-capitulo04"><svg><use xlink:href="#audiostop"/></svg></a>                        
                        <div class="txt_capitulos" id="txt_capitulo04">&nbsp;</div>
                    </div>
                    <div class="background-section">
                    	<img src="images/capitulo04/escena-1/buscando-el-norte-capitulo04-escena-1-1.jpg" id="imgbg-capitulo04" style="display: none;">                       
                    </div>    
                </div> <!--end section wrap -->
            </section>

            <section id="capitulo05" class="section-site cpt05"><!-- CAPITULO 05 -->
                <div class="side-nav-section" style="display: none"><!-- navegacion lateral por seccion -->
                    <ul>
                        <li class="sequence-thumb" id="sequence-capitulo05-scena-1"><a><img src="images/thumb-c5-e1.jpg"></a></li>                              
                        <li class="sequence-thumb" id="sequence-capitulo05-scena-2"><a><img src="images/thumb-c5-e2.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo05-scena-3"><a><img src="images/thumb-c5-e3.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo05-scena-4"><a><img src="images/thumb-c5-e4.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo05-scena-5"><a><img src="images/thumb-c5-e5.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo05-scena-6"><a><img src="images/thumb-c5-e6.jpg"></a></li>
                    </ul>                    
                </div>
                <div class="section-content-wrap"> <!-- contenedor de elementos del section -->
                    <a class="nav-before chapter-nav" href="#capitulo04"><svg><use xlink:href="#nav"/></svg></a>
                    <a class="nav-next" id="nav-next-capitulo05-inactive" href="#capitulo06"><svg><use xlink:href="#nav"/></svg></a>
                    <a class="nav-next chapter-nav" id="nav-next-capitulo05-active" style="display: none" href="#capitulo06"><svg><use xlink:href="#nav"/></svg></a>
                    <div class="subs-section">  
                        <audio id="audio-capitulo05-scena-1" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo05/buscando-el-norte-capitulo05-E1.mp3" type="audio/mp3">                            
                        </audio>
                        <audio id="audio-capitulo05-scena-2" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo05/buscando-el-norte-capitulo05-E2.mp3" type="audio/mp3">                            
                        </audio>
                        <audio id="audio-capitulo05-scena-3" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo05/buscando-el-norte-capitulo05-E3.mp3" type="audio/mp3">                            
                        </audio>
                        <audio id="audio-capitulo05-scena-4" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo05/buscando-el-norte-capitulo05-E4.mp3" type="audio/mp3">                            
                        </audio>
                        <audio id="audio-capitulo05-scena-5" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo05/buscando-el-norte-capitulo05-E5.mp3" type="audio/mp3">                            
                        </audio>
                        <audio id="audio-capitulo05-scena-6" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo05/buscando-el-norte-capitulo05-E6.mp3" type="audio/mp3">                        
                        </audio>
                        <a href="javascript:void(0)" class="playAudio" id="playAudio-capitulo05" style="display: none"><svg><use xlink:href="#audioplay"/></svg></a>
                        <a href="javascript:void(0)" class="pauseAudio" id="pauseAudio-capitulo05"><svg><use xlink:href="#audiostop"/></svg></a>                        
                        <div class="txt_capitulos" id="txt_capitulo05">&nbsp;</div>
                    </div> 
                    <div class="background-section">
						<img src="images/capitulo05/escena-1/buscando-el-norte-capitulo05-escena-1-1.jpg" id="imgbg-capitulo05" style="display: none;">                                      
                    </div>    
                </div>
            </section> 

            <section id="capitulo06" class="section-site cpt06"><!-- CAPITULO 05 -->
                <div class="side-nav-section" style="display: none"><!-- navegacion lateral por seccion -->
                    <ul>
                        <li class="sequence-thumb" id="sequence-capitulo06-scena-1"><a><img src="images/thumb-c6-e1.jpg"></a></li>                        
                        <li class="sequence-thumb" id="sequence-capitulo06-scena-2"><a><img src="images/thumb-c6-e2.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo06-scena-3"><a><img src="images/thumb-c6-e3.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo06-scena-4"><a><img src="images/thumb-c6-e4.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo06-scena-5"><a><img src="images/thumb-c6-e5.jpg"></a></li>
                        <li class="sequence-thumb" id="sequence-capitulo06-scena-6"><a href="javascript:void(0)"><img src="images/thumb-c6-e6.jpg"></a></li>
                    </ul>
                </div>
                <div class="section-content-wrap"> <!-- contenedor de elementos del section -->
                    <a class="nav-before chapter-nav" href="#capitulo05"><svg><use xlink:href="#nav"/></svg></a>
                    <a class="nav-next" id="nav-next-capitulo06-inactive" href="#firmapeticion"><svg><use xlink:href="#nav"/></svg></a>
                    <a class="nav-next chapter-nav" id="nav-next-capitulo06-active" style="display: none" href="#firmapeticion"><svg><use xlink:href="#nav"/></svg></a>                  
                    <div class="subs-section">
                        <audio id="audio-capitulo06-scena-1" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo06/buscando-el-norte-capitulo06-E1.mp3" type="audio/mp3">                                                        
                        </audio>  
                        <audio id="audio-capitulo06-scena-2" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo06/buscando-el-norte-capitulo06-E2.mp3" type="audio/mp3">                                                        
                        </audio>                        
                        <audio id="audio-capitulo06-scena-3" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo06/buscando-el-norte-capitulo06-E3.mp3" type="audio/mp3">                                                        
                        </audio>                        
                        <audio id="audio-capitulo06-scena-4" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo06/buscando-el-norte-capitulo06-E4.mp3" type="audio/mp3">                                                        
                        </audio>
                        <audio id="audio-capitulo06-scena-5" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo06/buscando-el-norte-capitulo06-E5.mp3" type="audio/mp3">                                                        
                        </audio>
                        <audio id="audio-capitulo06-scena-6" class="audios" ontimeupdate="set_current_audio_time(this)">
                            <source src="audio/capitulo06/buscando-el-norte-capitulo06-E6.mp3" type="audio/mp3">                                                        
                        </audio>
                        <a href="javascript:void(0)" class="playAudio" id="playAudio-capitulo06" style="display: none"><svg><use xlink:href="#audioplay"/></svg></a>
                        <a href="javascript:void(0)" class="pauseAudio" id="pauseAudio-capitulo06"><svg><use xlink:href="#audiostop"/></svg></a>                        
                        <div class="txt_capitulos" id="txt_capitulo06">&nbsp;</div>
                    </div>
                    <div class="background-section">
                    	<img src="images/capitulo06/escena-1/buscando-el-norte-capitulo06-escena-1-1.jpg" id="imgbg-capitulo06" style="display: none;">                                       
                    </div>     
                </div>
            </section> 
            
            <section id="firmapeticion" class="section-site peticion">
                <a class="nav-before chapter-nav" href="#capitulo06" id="back-to-capitulo06"><svg><use xlink:href="#nav"/></svg></a>           
                <div class="content-intro sign-p">
                    <img class="sign-logo-bn" src="images/buscando-el-norte-logo-horizontal-top.png" width="541" height="61">
                    <div class="sign-p-txt">
                      Buscando el Norte es el sueño de encontrar un &lt;&lt;mejor futuro&gt;&gt; en otro país, ya que el presente no es muy prometedor. Debido a la violencia y la falta de oportunidades, cada vez son más niños, niñas y adolescentes que deciden migran, a pesar de los peligros del viaje. Ellos están expuestos a todo tipo de vulneración de derechos en el tránsito, son detenidos y retornados a su comunidades de origen sin el debido proceso de protección. Y vuelven a los contextos de pobreza y violencia que originaron su migración. Con esta campaña nos unimos a la niñez migrante para exigir a las autoridades la garantía de sus derechos.
                      <br /><br />
                      Decimos NO a la DETENCIÓN y SI a la PROTECCIÓN de la niñez.
                      <br /><br />
                      Tu puedes ser parte de esto firmando nuestra petición.
                      <div class="sign-bottom">
                          <img src="images/logo-save-children.png" width="578" height="146">
                          <a class="blackBtn" href="https://goo.gl/CDG3yV" target="_blank">Firmar petición</a>
                      </div>                     
                    </div>                     
                </div>
                <div class="intro-chapter-menu">
                    <h3>Navega por los diferentes capítulos:</h3>
                    <ul>
                        <li><a href="#capitulo01"><img src="images/thumb-portada-c1.jpg"></a></li>
                        <li><a href="#capitulo02"><img src="images/thumb-portada-c2.jpg"></a></li>
                        <li><a href="#capitulo03"><img src="images/thumb-portada-c3.jpg"></a></li>
                        <li><a href="#capitulo04"><img src="images/thumb-portada-c4.jpg"></a></li>
                        <li><a href="#capitulo05"><img src="images/thumb-portada-c5.jpg"></a></li>
                        <li><a href="#capitulo06"><img src="images/thumb-portada-c6.jpg"></a></li>
                    </ul>
                </div>
                <div class="background-section">
                    <img class="med-bg" id="imgbg-firmapeticion" src="images/buscando-el-norte-1024-intro.png">
                </div>
            </section>
            
            <section id="sobrenosotros" class="section-site buscandoelnorte">
                <a class="nav-before chapter-nav" href="#introduccion"><svg><use xlink:href="#nav"/></svg></a>           
                <div class="content-intro sign-p">
                    <img class="sign-logo-bn" src="images/buscando-el-norte-logo-horizontal-top.png" width="541" height="61">
                    <div class="sign-p-txt">
                        Más  de  200.000 niños,  niñas  y  adolescentes fueron  detenidos en  la  frontera  sur  de  los Estados  Unidos en los  últimos  3  años. 75%  de ellos provenían  del  Triángulo  Norte  de Centroamérica. 43%  viajaba  sin  compañía  de  un  adulto  o  cuidador ,  aumentando  su vulnerabilidad en  una  ruta  donde  la trata  de  personas, el  tráfico,  la  explotación,  la violencia física y sexual son frecuentes.
                        <br/><br/>
                        Seis niños, niñas y adolescentes de El Salvador, Guatemala y Honduras, que hicieron este viaje, fueron  detenidos  en  diferentes  coordenadas  y  retornados  a  sus  comunidades  de origen,  compartieron fragmentos  de  su  vida  con  nosotros; para  ayudarnos  a  trazar  el mapa  de esta ruta  de  esperanza,  que  es  también  una  puerta  a  situaciones  tanto  o  más peligrosas que las que viven en sus propios barrios y ciudades.
                        <br/><br/>
                        Quisimos  hacerles un  homenaje retratando  parte  de  sus  cotidianidades,  problemáticas y razones  por  las  que  huyeron  de  sus  comunidades -en  busca de  un  mejor  futuro-, lanzándose a esta aventura, a pesar de los riesgos y posibilidades de ser detenidos por las autoridades fronterizas y devueltos a sus países.
                        <br/><br/>  
                        Así nació Buscando  el  Norte. Un relato elaborado   en   el   marco   del   proyecto &lt;&lt;fortalecimiento  de  los  sistemas  de  protección  para  la  niñez  y  adolescencia  migrante retornada a los países de El Salvador, Honduras y Guatemala&gt;&gt;, cuyo propósito es visibilizar la  realidad  de  estos  niños,  niñas  y  adolescentes,  los  peligros  del  viaje,  protocolos  y procesos  de  retorno,  para  apoyarles  en  esos  momentos  de  desesperanza, cuando debes volver al punto de partida con las heridas del camino y el miedo de enfrentarte al pasado.

                        <div class="intro-chapter-menu inner-page">
                            <h3>Navega por los diferentes capítulos:</h3>
                            <ul>
                                <li><a href="#capitulo01"><img src="images/thumb-portada-c1.jpg"></a></li>
                                <li><a href="#capitulo02"><img src="images/thumb-portada-c2.jpg"></a></li>
                                <li><a href="#capitulo03"><img src="images/thumb-portada-c3.jpg"></a></li>
                                <li><a href="#capitulo04"><img src="images/thumb-portada-c4.jpg"></a></li>
                                <li><a href="#capitulo05"><img src="images/thumb-portada-c5.jpg"></a></li>
                                <li><a href="#capitulo06"><img src="images/thumb-portada-c6.jpg"></a></li>
                            </ul>
                        </div>
                    </div>                     
                </div>
                <div class="background-section">
                    <img class="med-bg" id="imgbg-sobrenosotros" src="images/buscando-el-norte-1024-intro.png">
                </div>
            </section>
            <section id="historias" class="section-site buscandoelnorte">
                <a class="nav-before chapter-nav" href="#introduccion"><svg><use xlink:href="#nav"/></svg></a>           
                <div class="content-intro sign-p">
                    <div class="sign-p-txt">
                        <div class="title-info center">
                            <h2>Historias de Vida</h2> 
                            <h3><strong>Colección 01: La partida</strong></h3>
                        </div>
                        
                        <div class="h-cases">
                            <p>Estefany viajó cuando tenía 13 años con un grupo de amigos con quienes experimentó calamidades y peligros. ¡Los más grandes de su vida!.</p>
                            <div class="photo-cases">
                                <img src="images/hv/coleccion1-buscando-el-norte-07.jpg">  
                                <img src="images/hv/coleccion1-buscando-el-norte-05.jpg">       
                            </div>  
                            <div class="quote">
                                <i>Yo intenté emigrar por decisión propia, por ayudar a mi mamá. Lo hice por ella y por mi hermano, para que tuvieran un mejor futuro. Iba sola, con algunos amigos de la misma comunidad, pero no habían adultos en ese grupo.<br />
                                Para conseguir el dinero del viaje, yo le hacía trabajitos a un muchacho de una pulpería  en las tardes, cuando no iba a la escuela, y así ahorré.<br /> 
                                Cruzar de Guatemala a México nos costó bastante porque no íbamos con coyote, dos del grupo nos iban guiando. A veces no dormíamos, viajábamos más de noche porque está solitario y en el día hacíamos vigilancia. Es que en el camino hay muchos peligros. Íbamos más hembras que varones y una de ellas sufrió violación, fueron los que se dicen llamar «Z». Los identificamos porque andaban todos tatuados con la letra «Z». Nosotros por temor nos entregamos a la migración.
                                </i> 
                                <h4>Estefany - 15 a&ntilde;os</h4>
                                <p>San Pedro Sula, Honduras</p>  
                            </div>  
                        </div>
                       
                       <div class="h-cases">
                            <p>A José Nahúm su familia le prometió que en los Estados Unidos tendría un mejor futuro. </p>
                            <div class="photo-cases">
                                <img src="images/hv/coleccion1-buscando-el-norte-09.jpg">  
                                <img src="images/hv/coleccion1-buscando-el-norte-10.jpg">
                            </div>
                            <div class="quote">
                                <i>Yo estaba en medio de mis estudios cuando decidí irme. Me faltaba un mes para terminar el año, pero la economía estaba mal. Somos seis hermanos y a veces no ajustaba para ninguno. Si había para uno no alcanzaba para el otro. Así que tuve que partir para encontrar una vida, trabajar y estudiar allá, hacer algo por la familia.<br /> 
                                Me motivaron mis padres -ellos trabajan con préstamos-, y mi tío, que está allá y me dijo que me iba a apoyar y me iba a buscar trabajo cuando cruzara.<br /> 
                                Al emigrar, el nivel de vida de mi familia puede mejorar…  <br /> 
                                No llegué tan lejos que se diga, me agarraron aquí adelantito de Chiapas, México, en la primer caseta. Me tuvieron tres horas, iban cayendo más personas y ajustaron el viaje, me llevaron a la cárcel por decirlo así, donde estaban los hondureños, los guatemaltecos, los salvadoreños. Me sentía nervioso, no quería hablar con nadie.
                                </i>
                                <h4>José Nahúm-16 a&ntilde;os</h4>
                                <p>San Pedro Sula, Honduras</p>
                            </div>
                       </div>

                       <div class="h-cases">
                            <p>Gabriela llegó a cuarto grado de primaria y solamente habla idioma Quiché. Un día su padre le dio una noticia que cambiaría su vida.</p>
                            <div class="photo-cases">
                                <img src="images/hv/coleccion1-buscando-el-norte-01.jpg">  
                                <img src="images/hv/coleccion1-buscando-el-norte-11.jpg">
                            </div>
                            <div class="quote">
                                <i>«No es justo que sólo yo conozca los Estados y haga dinero», dijo mi papá un día que vino. Pero no me habló sobre el camino del desierto, ni tampoco cómo o dónde encontraría trabajo. Yo solamente sabía que iba a Texas. Mi mamá me aconsejó que no me fuera y que podía ser peligroso. Igual, me fui. Me puse pantalón porque es más seguro para las mujeres y arrancamos. Nos hicimos pasar por mexicanos porque el «coyote» nos dijo que era lo mejor. Pero no nos creyeron y en la frontera de Guatemala - México nos bajaron de la camioneta. Esperamos en la ruta a las autoridades de migración que nos llevarían a alguna instalación mexicana donde dormiríamos 2 días, nos dieron de comer y el kit de higiene. </i>
                                <h4>Gabriela - 15 años</h4>
                                <p>Quiché, Guatemala</p>
                            </div>
                       </div>

                       <div class="h-cases">
                            <p>Luis viajó en automóviles tipo panel, parecidos a los que entregan producto en tiendas pequeñas. </p>
                            <div class="photo-cases">
                                <img src="images/hv/coleccion1-buscando-el-norte-12.jpg">  
                                <img src="images/hv/coleccion1-buscando-el-norte-13.jpg">
                            </div>
                            <div class="quote">
                                <i>Yo había pensado en migrar pero después me arrepentí, ya no me quería ir. Pero como mi mamá ya había sacado el préstamo de Q75,000 ($9,740) del banco y ya estaba pagado el viaje para el lunes, me fui con mi padrastro. Yo pensé irme para trabajar y recuperar el dinero que debíamos. Ni sabía en qué podría trabajar, eso no lo tenía pensado. Solo llegar, trabajar y pagar.<br />
                                El lunes que salimos me sentía triste. Todo el camino me fui llorando hasta llegar a Xela. De allí poco a poco me fui acoplando al viaje. Fui conociendo más patojos de mi edad y fuimos pasando el camino juntos. Estaba triste por mis amigos, por mi familia pero ya iba montado allí.
                                Todos apretados, 110 personas, casi no se podía respirar porque no había ventanas. Íbamos camino a McAllen cuando nos detuvo la policía mexicana.<br /> 
                                Los «coyotes» intentaron sobornarlos, pero no. Nos llevaron a una estación que parecía una cárcel (…) Y allí  nos separaron: hombres, mujeres y niños. 
                                </i>
                                <h4>Luis-18 a&ntilde;os </h4>
                                <p>Quiché, Guatemala</p>
                            </div>
                       </div>

                       <div class="h-cases">
                            <p>Roberto y su familia se fueron huyendo de las extorsiones. El adolescente tuvo que abandonar sus estudios para preservar la vida.</p>
                            <div class="photo-cases">
                                <img src="images/hv/coleccion1-buscando-el-norte-14.jpg">  
                                <img src="images/hv/coleccion1-buscando-el-norte-15.jpg">
                            </div>
                            <div class="quote">
                                <i>Mi madre y mi hermano habían decido partir hacia Los ángeles, California, Estados Unidos. Yo apenas estaba iniciando primer año de bachillerato, no tenia deseos de migrar pero no tuve otra opción más que partir con ellos. Mi madre y mi hermano estaban muy mal
                                ante la situación crítica del país. Ellos anhelaban encontrar una mejor calidad de vida, se sentían desesperados por las extorsiones de los grupos antisociales. Además la mayor parte de mi familia está en Estados Unidos.<br /> 
                                El viaje no fue tan duro hasta que llegamos a México. Allí empezaron los problemas con los «coyotes» y nos agarró la policía. Me revisaron de pies a cabeza. Nos llevaron en la «perrera», así le dicen porque es como que ahí llevan a  los perros... Un lugar repleto de hombres de todas la nacionalidades, unos eran «bayuncos» y vulgares, la comida era¡horrible!, yo no comí. Nos separaron: a mi mamá a la zona de mujeres, mi hermano a la zona de hombres y yo a la zona de niños porque como yo no andaba mi pasaporte, porque como ustedes saben, las mentiras que dan, «no anden documentación porque si los agarran va a saber de donde son», y ese es el peor error que uno puede cometer, botar sus documentos.
                                </i>
                                <h4>Roberto - 18 a&ntilde;os</h4>
                                <p>San Salvador, El Salvador</p>
                            </div>
                       </div>

                       <div class="h-cases">
                            <p>Viajar o morir. Esa fue la disyuntiva familiar de Amalia, a quien la vida se le complicó por una pintura.</p>
                            <div class="photo-cases">
                                <img src="images/hv/coleccion1-buscando-el-norte-16.jpg">  
                                <img src="images/hv/coleccion1-buscando-el-norte-17.jpg">
                                <img src="images/hv/coleccion1-buscando-el-norte-18.jpg">  
                                <img src="images/hv/coleccion1-buscando-el-norte-19.jpg">
                            </div>
                            <div class="quote">
                                <i>Todo empezó cuando limpiamos el muro frente al parque central para hacer  un mural con unos amigos. Sin querer tapamos un graffiti de  la pandilla de la zona. Ellos se enfurecieron y mataron a un mi amigo que lideraba el proyecto.  Desde ese momento hemos tenido miedo de morir. Como una persecución constante… Mis padres buscaron alternativas para mantenernos seguros y como en los «Estados» tenemos familia decidimos irnos. <br /> 
                                Cuando nos arrestaron nos llevaron a migración, estuvimos unos días en un cuarto reducido y luego nos llevaron al centro de atención. Nos explicaron que podríamos aplicar para un asilo político en México pero si no calificábamos nos deportarían.
                                </i>
                                <h4>Amalia -16 a&ntilde;os</h4>
                                <p>Mercedes Uma&ntilde;a, El Salvador</p>
                            </div>
                       </div>


                        <div class="intro-chapter-menu inner-page">
                            <h3>Navega por los diferentes capítulos:</h3>
                            <ul>
                                <li><a href="#capitulo01"><img src="images/thumb-portada-c1.jpg"></a></li>
                                <li><a href="#capitulo02"><img src="images/thumb-portada-c2.jpg"></a></li>
                                <li><a href="#capitulo03"><img src="images/thumb-portada-c3.jpg"></a></li>
                                <li><a href="#capitulo04"><img src="images/thumb-portada-c4.jpg"></a></li>
                                <li><a href="#capitulo05"><img src="images/thumb-portada-c5.jpg"></a></li>
                                <li><a href="#capitulo06"><img src="images/thumb-portada-c6.jpg"></a></li>
                            </ul>
                        </div>

                    </div>                     
                </div>
                <div class="background-section">
                    <img class="med-bg" id="imgbg-historias" src="images/buscando-el-norte-1024-intro.png">
                </div>
            </section>
            
            <section id="creditos" class="section-site">
                <a class="nav-before chapter-nav" href="#introduccion"><svg><use xlink:href="#nav"/></svg></a>           
                <div class="content-intro sign-p">
                    <div class="sign-p-txt">
                        <h2>Créditos</h2>

                        <strong>Save the Children. Oficina Regional para América Latina y El Caribe, presenta:</strong><br/> 
                        Buscando el Norte <br/><br/>
                        
                        <strong>Coordinación:</strong><br />
                        Ivonne Arica<br />
                        Mónica Kuljich<br />
                        Laura Marco<br /><br />

                        <strong>Dirección y guión:</strong><br />
                        Carolina Ángel Idrobo <br/><br/> 
                        
                        <strong>Concepto de ilustraciones:</strong><br />
                        Martanoemí Noriega <br/><br/>

                        <strong>Concepto de diseño web:</strong><br />
                        Álvaro Rojas Tafur <br/><br/>
                        
                        <strong>Desarrollo y programación:</strong><br />
                        Ruth Margaret Florian Caipa <br/><br/>

                        <strong>Mapas:</strong><br />
                        Edgar Enrique Figueroa<br /><br />

                        <strong>Audio y diseño sonoro:</strong><br />
                        Luis Lasso<br/><br/>

                        <strong>Voces:</strong><br />
                        Valentina Noguera Idrobo<br/>
                        Paula Andrea Baruque<br/>
                        Santiago Baruque<br/>
                        Michael Griffith<br/>
                        Rodrigo Alvarado Szejner<br/>
                        Michelle Szejner<br/><br/>

                        <strong>Traducción:</strong><br />
                        Álvaro Girón<br/><br/>
                        
                        <strong>Colaboración:</strong><br />
                        Save the Children en Honduras<br />
                        Save the Children en Guatemala<br />
                        Save the Children en El Salvador<br/><br/>
                        
                        <strong>Producción:</strong><br />
                        Pela ́as y Pela ́os te cuentan...<br/><br/>
                                               
                        
                        Agradecemos profundamente a los niños, niñas y adolescentes del Triángulo Norte
                        de Centroamerica que hicieron parte del proceso de investigación. Ellos nos abrieron
                        sus espacios y compartieron sus testimonios para visibilizar lo que pasa cuando estás
                        migrando en condiciones de vulnerabilidad, y que sus historias sirvan como
                        referencia para todos aquellos niños, niñas y adolescentes que están pensando tomar
                        la ruta hacia los Estados.<br/>
                        
                        <div class="sign-bottom">
                          <img src="images/logo-save-children.png" width="578" height="146">    
                        </div> 

                        <div class="intro-chapter-menu inner-page">
                            <h3>Navega por los diferentes capítulos:</h3>
                            <ul>
                                <li><a href="#capitulo01"><img src="images/thumb-portada-c1.jpg"></a></li>
                                <li><a href="#capitulo02"><img src="images/thumb-portada-c2.jpg"></a></li>
                                <li><a href="#capitulo03"><img src="images/thumb-portada-c3.jpg"></a></li>
                                <li><a href="#capitulo04"><img src="images/thumb-portada-c4.jpg"></a></li>
                                <li><a href="#capitulo05"><img src="images/thumb-portada-c5.jpg"></a></li>
                                <li><a href="#capitulo06"><img src="images/thumb-portada-c6.jpg"></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                
                <div class="background-section">
                    <img class="med-bg" id="imgbg-creditos" src="images/buscando-el-norte-1024-intro.png">
                </div>
            </section>
            
            <!-- barra progreso -->
            <div id="barra-progreso">
                <div class="barra-marcador" style="width: 0%;"></div>
            </div>
                
        </div> <!-- end content -->
    </div><!-- end wrapper -->  

</body>

<script src="assets/js/libs/jquery-1.11.3.min.js"></script>    
<!-- for scrolling -->
<script src="assets/js/libs/jquery.disablescroll.min.js"></script>
<!-- for buscando el norte management -->
<script src="assets/js/functions.js"></script>
    
</html>
