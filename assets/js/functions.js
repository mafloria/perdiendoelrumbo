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
	
//*********** window size to fix content	   
	setHeight();
		  
	$(window).resize(function() {
		setHeight();
	});
	//adjust sections to the browser height
	function setHeight() {
		windowHeight = $(window).innerHeight();
		windowWidth = $(window).innerWidth();
		$('#content-section .section-site').css('height', windowHeight);		
		$('#content-section .section-site').css('width', windowWidth);
	};
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
		      }
		    }
		});
//*********** end - scrolls to an href section exactly	

//********** actions
	$("#ben-main-menu").click(function(){
		$(".submenu").toggle('slow');
	});
//********** end - actions

//********** images map
	//fix the image map coordenates
    $('img[usemap]').imageMap();
    
//********** end - images map

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
		for(j=1; j<=18; j++){ clearTimeout(timer[j]); }
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
		for(i=txt_sc1_line; i<=18; i++, delayCounter++){						
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
    text_sc1[2]="she would go quiet when sensing danger, picking up the pace."; 
    text_sc1[3]="Faster, you can’t miss the train, whispered the honeyed-eyed girl.";
    text_sc1[4]="And she would laugh. Tic tac, tic tac...";
    text_sc1[5]="her heart about to jump out of her chest.";
    text_sc1[6]="Adrenaline, the thrill of the journey."; 
    text_sc1[7]="Tic tac, tic tac, a rush of thoughts and ideas, ";
    text_sc1[8]="her inner dialogues always ended well, because everything will be ok. ";
    text_sc1[9]="I don’t travel alone, God is by my side. Tic tac, tic tac...";     
    text_sc1[10]="Staying home is just too risky. Leaving is just too risky.";
	text_sc1[11]="To make it all the way is... to save oneself";                
    text_sc1[12]="She will see her mom and, if she’s lucky she’ll see her dad too -if he gets acquitted-."; 
    text_sc1[13]="Innocence and hope push her to keep going."; 
    text_sc1[14]="She was three years old when they left San Pedro Sula."; 
    text_sc1[15]="She can’t remember their voices or laughter, but she doesn’t mind that."; 
    text_sc1[16]="There will be plenty of time to recover the time they have lost.";
    text_sc1[17]="She would hugh them first and then tell them about her life, school and girlfriends, Pachito -her best friend-;"; 
    text_sc1[18]="she would tell them about her quinceañera, her grandparents and their day-to-day struggles, how tough life is in Honduras,";
	
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