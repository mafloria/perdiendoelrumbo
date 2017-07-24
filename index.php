<?php ?>
<!doctype html>
<html class="no-js" lang="en">
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
.loadH-content{	width: 20%; margin: 0 auto; margin-top: 15%;}
#cargando-historia img{}
#cargando-texto-animado {position: relative;color: rgba(216, 212, 217, .3);font-size: 1.4em; width: 100%; text-align: right; right: 0;} 
#cargando-texto-animado:before {content: attr(data-text);position: absolute;overflow: hidden;max-width: 10em;white-space: nowrap;color: #fff;animation: loading 4s linear;}	
@keyframes loading {from { max-width: 0; }}
/* end - loading section */
</style>
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
                    <a class="nav-chap-us" href="#firmar-peticion">C6</a>
                </div> */ ?>
            </div>
            <nav id="nav-menu">
                <a id="ben-main-menu" href="javascript:void(0);"><svg><use xlink:href="#menu"/></svg></a>
            </nav>
            <div class="submenu" style="display: none;">
                <ul>
                    <li><a href="#sobre-buscandoelnorte">Sobre Buscando el norte</a></li>
                    <li><a href="">Historias de vida</a></li>
                    <li><a href="sobre-buscando-el-norte.pdf" download>Buscando el norte [PDF]</a></li>
                    <!--<li><a href="">Perfil del Migrante</a></li>
                    <li><a href="">Información para tomadores de decisiones</a></li>
                    <li><a href="">Qué hacer si eres joven migrante</a></li>-->
                    <li><a href="#creditos-buscandoelnorte">Créditos</a></li>
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
                    <a class="blackBtn intro-chapter-startbtn" href="#capitulo01">COMENZAR</a>    
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
                    <a class="nav-before chapter-nav" href="#introduccion"><svg><use xlink:href="#nav"/></svg></a>
                    <a class="nav-next" id="nav-next-capitulo01-inactive" href="#capitulo02"><svg><use xlink:href="#nav"/></svg></a>
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
                    <a class="nav-next" id="nav-next-capitulo06-inactive" href="#firmar-peticion"><svg><use xlink:href="#nav"/></svg></a>
                    <a class="nav-next chapter-nav" id="nav-next-capitulo06-active" style="display: none" href="#firmar-peticion"><svg><use xlink:href="#nav"/></svg></a>                  
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
            
            <section id="firmar-peticion" class="section-site peticion">
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
                    <img class="med-bg" id="imgbg-firmar-peticion" src="images/buscando-el-norte-1024-intro.png">
                </div>
            </section>
            
            <section id="sobre-buscandoelnorte" class="section-site buscandoelnorte">
                <a class="nav-before chapter-nav" href="#introduccion"><svg><use xlink:href="#nav"/></svg></a>           
                <div class="content-intro sign-p">
                    <img class="sign-logo-bn" src="images/buscando-el-norte-logo-horizontal-top.png" width="541" height="61">
                    <div class="sign-p-txt" style="height:400px; overflow-y: scroll">
                        Más  de  200.000 niños,  niñas  y  adolescentes fueron  detenidos en  la  frontera  sur  de  los Estados  Unidos en los  últimos  3  años. 75%  de ellos provenían  del  Triángulo  Norte  de Centroamérica. 43%  viajaba  sin  compañía  de  un  adulto  o  cuidador ,  aumentando  su vulnerabilidad en  una  ruta  donde  la trata  de  personas, el  tráfico,  la  explotación,  la violencia física y sexual son frecuentes.
                        <br/><br/>
                        Seis niños, niñas y adolescentes de El Salvador, Guatemala y Honduras, que hicieron este viaje, fueron  detenidos  en  diferentes  coordenadas  y  retornados  a  sus  comunidades  de origen,  compartieron fragmentos  de  su  vida  con  nosotros; para  ayudarnos  a  trazar  el mapa  de esta ruta  de  esperanza,  que  es  también  una  puerta  a  situaciones  tanto  o  más peligrosas que las que viven en sus propios barrios y ciudades.
                        <br/><br/>
                        Quisimos  hacerles un  homenaje retratando  parte  de  sus  cotidianidades,  problemáticas y razones  por  las  que  huyeron  de  sus  comunidades -en  busca de  un  mejor  futuro-, lanzándose a esta aventura, a pesar de los riesgos y posibilidades de ser detenidos por las autoridades fronterizas y devueltos a sus países.
                        <br/><br/>  
                        Así nació Buscando  el  Norte. Un relato elaborado   en   el   marco   del   proyecto &lt;&lt;fortalecimiento  de  los  sistemas  de  protección  para  la  niñez  y  adolescencia  migrante retornada a los países de El Salvador, Honduras y Guatemala&gt;&gt;, cuyo propósito es visibilizar la  realidad  de  estos  niños,  niñas  y  adolescentes,  los  peligros  del  viaje,  protocolos  y procesos  de  retorno,  para  apoyarles  en  esos  momentos  de  desesperanza, cuando debes volver al punto de partida con las heridas del camino y el miedo de enfrentarte al pasado.
                    </div>                     
                </div>                
                <div class="background-section">
                    <img class="med-bg" id="imgbg-firmar-peticion" src="images/buscando-el-norte-1024-intro.png">
                </div>
            </section>
            <section id="creditos-buscandoelnorte" class="section-site">
                <a class="nav-before chapter-nav" href="#introduccion"><svg><use xlink:href="#nav"/></svg></a>           
                <div class="content-intro sign-p">
                    <img class="sign-logo-bn" src="images/buscando-el-norte-logo-horizontal-top.png" width="541" height="61">
                    <div class="sign-p-txt" style="height:400px; overflow-y: scroll">
                        <h3>EQUIPO DE TRABAJO</h3>
                        <strong>Save the Children Panamá, presenta</strong><br/> 
                        Buscando el Norte <br/><br/>
                        
                        <strong>Dirección y guión</strong><br />
                        Carolina Ángel Idrobo <br/><br/> 
                        
                        <strong>Concepto de ilustraciones</strong><br />
                        Martanoemí Noriega <br/><br/>

                        <strong>Concepto de diseño web</strong><br />
                        Álvaro Rojas Tafur <br/><br/>
                        
                        <strong>Desarrollo y programación</strong><br />
                        Ruth Margaret Florian Caipa <br/><br/>
                        
                        <strong>Coordinación Save the Children</strong><br />
                        Laura Marco <br/>
                        Ivonne Arica<br/>
                        Mónica Kuljich<br/><br/>
                        
                        <strong>Mapas</strong><br />
                        Edgar Enrique Figueroa<br/><br/>
                        
                        <strong>Audio y diseño sonoro</strong><br />
                        Luis Lasso<br/><br/>
                        
                        <strong>Voces</strong><br />
                        Laura Valentina Noguera Idrobo<br/>
                        Paula Andrea Baruque<br/>
                        Santiago Baruque<br/>
                        Michael Griffith<br/>
                        Rodrigo Alvarado Szejner<br/>
                        Michelle Szejner<br/>
                        Manuel Antonio Jované Carrillo<br/><br/>
                        
                        <strong>Traducción</strong><br />
                        Álvaro Girón<br/><br/>
                        
                        <strong>Investigación </strong><br />
                        Save the Children Honduras, Guatemala, El Salvador<br/><br/>
                        
                        <strong>Producción</strong><br />
                        Pela ́as y Pela ́os te cuentan...<br/><br/>
                        
                        Agradecemos  profundamente  a  los  niños,  niñas  y  adolescentes  del  triángulo  norte  de Centroamérica que hicieron parte del proceso de investigación. Ellos nos abrieron sus espacios y compartieron sus testimonios para visibilizar lo que pasa cuando estás migrando en condiciones de vulnerabilidad, y que sus historias sirvan como referencia para todos aquellos niños, niñas y adolescentes que están pensando tomar la ruta hacia los Estados.
                        <div class="sign-bottom">
                          <img src="images/logo-save-children.png" width="578" height="146">    
                        </div>                         
                    </div>                     
                </div>                
                <div class="background-section">
                    <img class="med-bg" id="imgbg-firmar-peticion" src="images/buscando-el-norte-1024-intro.png">
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
