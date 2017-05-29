// Browser detection for when you get desperate. A measure of last resort.
// http://rog.ie/post/9089341529/html5boilerplatejs
// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }
// Uncomment the below to use:
// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);
/*
 * Buscando el Norte - Transmedia
 *
 * Copyright (c) 2017 
 * Date: May 22 - 2017
 * Author: Margaret Florian (mafloria)
 */
$(document).ready(function(){
	//progress bar
	var progress_bar = 0;
	var capitulo01_escena01 = capitulo01_escena02 = capitulo01_escena03 = capitulo01_escena04 = capitulo01_escena05 = 3;
//*********** window size to fix content	   
	setHeight();
		  
	$(window).resize(function() {
		setHeight();
	});
	//adjust sections to the browser height
	function setHeight() {
		windowHeight = $(window).innerHeight();
		windowWidth = $(window).innerWidth();
		$('#content-section').css('height', windowHeight);
		$('#content-section .section-site').css('height', windowHeight);		
		$('#content-section .section-site').css('width', windowWidth);
		$('img[usemap]').css('height', windowHeight);
		$('img[usemap]').css('width', windowWidth);
	};
	
	//fix the image map coordenates
    $('img[usemap]').imageMap();
//*********** end - window size to fix content

//*********** scrolls to an href section exactly
    $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);		      
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({		          		         
	          scrollLeft: target.offset().left
            }, 1000);
        
		    autoplay_audios(this.hash.slice(1));
		    return false;
		  }//end if target length
		}//end if location
	});
//*********** end - scrolls to an href section exactly	

//********** actions
	$("#ben-main-menu").click(function(){
		$(".submenu").toggle('slow');
	});
	//opens escenas
	$(".abrir-detalle-modal").click(function(){
		var id_info = $(this).attr('id');
		var id_array = id_info.split('-');
		$("#modal-description-escenas-"+id_array[0]).show();
		$(".escenas-detail").hide();
		$("#detailwin-"+id_info).show();
		
		progress_bar += eval(id_array[0]+"_"+id_array[1]); //add progress value
		eval(id_array[0]+"_"+id_array[1]+"=0;"); //set scena value to 0
		console.log(progress_bar+"::"+eval(id_array[0]+"_"+id_array[1]));
		$(".barra-marcador").css("width", progress_bar+"%");
	});
	
	
//********** end - actions

//********** Audios	
	var vid_capitulo01 = document.getElementById("audio-capitulo01");
	var vid_capitulo02 = document.getElementById("audio-capitulo02");
	var vid_capitulo03 = document.getElementById("audio-capitulo03");
	var vid_capitulo04 = document.getElementById("audio-capitulo04");
	var vid_capitulo05 = document.getElementById("audio-capitulo05");
	var vid_capitulo06 = document.getElementById("audio-capitulo06");
	
	var txt_sc1_line = 0;
	var pausePhrases = false;
	var timer = new Array();
	var delayCounter = 1;
	
	//click over play audio icon
	$(".playAudio").click(function(){
		var id_info = $(this).attr('id').split('-');
		eval("vid_"+id_info[1]).play();
		if(txt_sc1_line==0){
			$(".txt_sc1").html(text_sc1[0]);
			$(".txt_sc1").textillate('start');
			txt_sc1_line++;
		}
		pausePhrases = false;
		writesentences(); //translated text
		$("#pauseAudio-"+id_info[1]).show();
		$(this).hide();	
	});
	
	//click over pause audio icon
	$(".pauseAudio").click(function(){
		var id_info = $(this).attr('id').split('-');
		eval("vid_"+id_info[1]).pause();
		
		pausePhrases = true; //pause translated text
		console.log("PAUSE: "+txt_sc1_line);		
		
		//clear all text runing
		for(j=1; j<=38; j++){ clearTimeout(timer[j]); }
		delayCounter = 1;
		txt_sc1_line++;
		
		$("#playAudio-"+id_info[1]).show();
		$(this).hide();
	});
	
	//start the audio when the chapter is displayed
	function autoplay_audios(capitulo){
		eval("vid_"+capitulo).play();		
		$(".txt_sc1").html(text_sc1[0]);
		$(".txt_sc1").textillate('start');
		txt_sc1_line++;		
		pausePhrases = false;
		writesentences();	//translated text
	}
	
//********** end - Audios	
	
	async function writesentences(){		
		for(i=txt_sc1_line; i<=38; i++, delayCounter++){
			 (function (i, delayCounter) {
			    timer[i] = setTimeout(function () {
			    	if(!pausePhrases){
				      	$('.txt_sc1').removeData();
						$(".txt_sc1").html(text_sc1[i]);
						//$(".txt_sc1").textillate('start');
						txt_sc1_line = i;
						console.log("THIS IS"+txt_sc1_line+':'+i+"--"+delayCounter);
					}
			    }, 6000*delayCounter);
			  })(i, delayCounter);			  
		}
	}
		
	
	var text_sc1 = new Array();
	text_sc1[0]="Tic tac, tic tac..."; 
    text_sc1[1]="Amalia was never afraid, or so I thought every time I saw her, strong and confindent. Tic tac, tic tac...";	
    text_sc1[2]="she would go quiet when sensing danger, picking up the pace. Faster, you can’t miss the train, "; 
    text_sc1[3]="whispered the honeyed-eyed girl. And she would laugh. Tic tac, tic tac... ";
    text_sc1[4]="her heart about to jump out of her chest. Adrenaline, the thrill of the journey.";
    text_sc1[5]="Tic tac, tic tac, a rush of thoughts and ideas, her inner dialogues always ended well, ";
    text_sc1[6]="because everything will be ok. I don’t travel alone, God is by my side. ";     
    text_sc1[7]="Tic tac, tic tac... ";
    text_sc1[8]="Tic tac, tic tac... Staying home is just too risky. Leaving is just too risky.";
	text_sc1[9]="To make it all the way is... to save oneself. She will see her mom and, ";                
    text_sc1[10]="if she’s lucky she’ll see her dad too -if he gets acquitted-. Innocence and hope push her to keep going. "; 
    text_sc1[11]="She was three years old when they left San Pedro Sula. "; 
    text_sc1[12]="She can’t remember their voices or laughter, but she doesn’t mind that. There will be plenty of time to recover the time they have lost."; 
    text_sc1[13]="She would hugh them first and then tell them about her life, school and girlfriends, Pachito -her best friend-;"; 
    text_sc1[14]="she would tell them about her quinceañera, her grandparents and their day-to-day struggles, ";
	//ready up to here
	text_sc1[15]="how tough life is in Honduras, her plans of becoming a lawyer, and just how happy she is to see them again.";
	text_sc1[16]="Happiness! How long is forever? ";
	text_sc1[17]="She heard somewhere it can be just a second, and now she gets it. Tic tac, tic tac...";
	text_sc1[18]="It’s been a long time coming, but the day is here, at last! ";
	text_sc1[19]="She’ll start her journey heading North where life is better, or so everybody says. Tic tac, tic tac...";
	/*text_sc1[20]="She’ll leave at 4:00 a.m. The sky is really dark, there are no stars to light the way";
	text_sc1[21]="but the birdsongs announce that dawn is coming.";*/ 
	text_sc1[20]="Her grandparents wish her a safe trip by the door. With tears and blessings they say goodbye to their little girl,";
	text_sc1[21]="accepting the inevitable. They are afraid. It doesn’t matter she’s dressed ‘like a boy’,";
	text_sc1[22]="that attire is an armour as fragile as she can seem.";
	/*text_sc1[23]=" black hat, denim trousers, an oversized stripe shirt, and a pocket knife.";*/
	//text_sc1[22]="";
	text_sc1[23]="They have lost their own children: one died in the gang war, and another one awaits sentence in a US cell.";
	text_sc1[24]="Hope and sustenance to their lives, gone. Are you ready? Asks grandma. Yes, answers the granddaughter.";
	text_sc1[25]="Her heart is a tight knot in her chest and tears swell up in her eyes. ";
	text_sc1[26]="She hesitates for an instance. What if she could stay and study and look after her old folks?";
	text_sc1[27]="They hug each other, don’t want to let go. They’ve been together all her life.";
	text_sc1[28]="She’s all they have left. But they can’t hold her back. Life in La Rivera, their neighbourhood,";
	text_sc1[29]="is increasingly difficult, the fighting and shootouts are getting worse.";
	text_sc1[30]="The nights are riddled with bullets and there is blood on the streets,";
	text_sc1[31]="bodies strewn around the floor haunt the residents. Anyone can be the next victim. ";
	text_sc1[32]="Teenage girls definitely are. Amalia is growing, her shape and way of walking are gracious. The mareros need women.";
	text_sc1[33]="She has to leave and reach her destination guided by the angels of the road. Tic tac, tic tac ...";
	text_sc1[34]="She separates tenderly from her grandma. A kiss in the forehead, a caress, -I’ll make sure you come too- she says with a smile.";
	text_sc1[35]="she carries a picture of her family in her pocket, along with an old letter to her father.";
	text_sc1[36]="She turns back and starts walking.";
	text_sc1[37]="Her grandmother makes crosses in the air, she has her blessings against all danger and evil.";
	
	$('.txt_sc1').textillate({
		
		 // the default selector to use when detecting multiple texts to animate
		  selector: '.texts',
		
		  // enable looping
		  loop: false,
		
		  // sets the minimum display time for each text before it is replaced
		  minDisplayTime: 2000,
		
		  // sets the initial delay before starting the animation
		  // (note that depending on the in effect you may need to manually apply
		  // visibility: hidden to the element before running this plugin)
		  initialDelay: 0,
		
		  // set whether or not to automatically start animating
		  autoStart: false,
		
		  // custom set of 'in' effects. This effects whether or not the
		  // character is shown/hidden before or after an animation
		  inEffects: [],
		
		  // custom set of 'out' effects
		  outEffects: [ 'hinge' ],
		
		  // in animation settings
		  in: {		  	
		    effect: 'fadeIn', // set the effect name		    
		    delayScale: 1, // set the delay factor applied to each consecutive character
		    delay: 50, // set the delay between each character
		    sync: false, // set to true to animate all the characters at the same time
		    shuffle: false, // randomize the character sequence // (note that shuffle doesn't make sense with sync = true)
		    reverse: false, // reverse the character sequence // (note that reverse doesn't make sense with sync = true)		
		    
		    callback: function () {} // callback that executes once the animation has finished
		  },
		
		  // out animation settings.
		  out: {
		    effect: 'fadeOut',
		    delayScale: 1.5,
		    delay: 50,
		    sync: true,
		    shuffle: false,
		    reverse: false,
		    callback: function () {}
		  },
		
		  // callback that executes once textillate has finished
		  callback: function () {},
		
		  // set the type of token to animate (available types: 'char' and 'word')
		  type: 'word'
		
	});

});