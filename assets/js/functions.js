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
	var capitulo01_escena_1 = capitulo01_escena_2 = capitulo01_escena_3 = capitulo01_escena_4 = 4;
	var capitulo02_escena_1 = capitulo02_escena_2 = capitulo02_escena_3 = 5.3;	
	
	// load audios elements	
	var vid_capitulo01 = document.getElementById("audio-capitulo01");
	var vid_capitulo02 = document.getElementById("audio-capitulo02");
	var vid_capitulo03 = document.getElementById("audio-capitulo03");
	var vid_capitulo04 = document.getElementById("audio-capitulo04");
	var vid_capitulo05 = document.getElementById("audio-capitulo05");
	var vid_capitulo06 = document.getElementById("audio-capitulo06");
	
	//inizialice global vars 
	var current_chapter_total_lines = 0;
	var text_current_line = 0;
	var text_current_chapter = new Array();//the actual chapter is loaded in this array to show the text
	var pausePhrases = false;
	var timer = new Array();
	var delayCounter = 1;
	
	//scenas
	var total_scenas_capitulo01 = 4;
	var total_scenas_capitulo02 = 3;
	var current_scena_number = 0;
	
//*********** window size to fix content	   
	setHeight();
	//w3.includeHTML();
		  
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
        	
        	let_audios_text_begins(); //restart audios and text if the user returns start all again
        	
		    if(this.hash.slice(1)!="introduccion") autoplay_audios(this.hash.slice(1));
		    
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
		var id_array = id_info.split('-'); //0: capitulo 2:scena number
		
		abrir_detalle_modal(id_array[0], id_array[2]);
	});	   
	
	// shows the place name in the map with styles
	// setup some defaults for all tooltipsters
	$.fn.tooltipster('setDefaults', {});// 	 	  
	$( ".abrir-detalle-modal" ).tooltipster({
		theme: 'tooltipster-shadow',
		animation: 'face',
		delay: 0,        
		trackTooltip: true,
		contentCloning: true,		
		plugins: ['follower']
	});	
	
	//closes all detail popup windows (really only closes the only opened one)
	$(".close-scenas-detail").click(function(){
		$(".escenas-detail").hide();
		var capitulo = $(this).parent().attr('id').split('-');;
		$("#modal-description-escenas-"+capitulo[1]).hide();
		$("#overlay").hide();
	})	
	
	$(".next-scenas-detail").click(function(){		
		var parent_id_info = $(this).parent().attr('id').split("-");
		
		$(".escenas-detail").hide();
		
		if(current_scena_number==eval("total_scenas_"+parent_id_info[1])){
			current_scena_number = 1;			
		}else{
			current_scena_number++;
		}
		abrir_detalle_modal(parent_id_info[1], current_scena_number); //param: capitulo number
	});
	
	function abrir_detalle_modal(capitulo, escena_number){
		$("#modal-description-escenas-"+capitulo).show();
		$(".escenas-detail").hide();
		$("#detailwin-"+capitulo+"-escena-"+escena_number).show();
		
		pause_audio(capitulo);
		current_scena_number = escena_number;
		
		progress_bar += eval(capitulo+"_escena_"+escena_number); //add progress value
		eval(capitulo+"_escena_"+escena_number+"=0;"); //set scena value to 0
		console.log(progress_bar+"::"+eval(capitulo+"_escena_"+escena_number));
		$(".barra-marcador").css("width", progress_bar+"%");
		
		$("#overlay").show();
	}
		
	
	
//********** end - actions

//********** audios
	
	//click over play audio icon
	$(".playAudio").click(function(){
		var id_info = $(this).attr('id').split('-');
		eval("vid_"+id_info[1]).play();
		if(text_current_line==0){
			$("#txt_"+id_info[1]).html(text_current_chapter[0]);
			//$("#txt_"+id_info[1]).textillate('start');
			text_current_line++;
		}
		pausePhrases = false;
		writesentences(id_info[1]); //translated text
		$("#pauseAudio-"+id_info[1]).show();
		$(this).hide();	
	});	
	//click over pause audio icon
	$(".pauseAudio").click(function(){
		var id_info = $(this).attr('id').split('-');
		
		pause_audio(id_info[1]);				
	});	
	
	function pause_audio(capitulo){
		eval("vid_"+capitulo).pause();
		
		pausePhrases = true; //pause translated text
		console.log("PAUSE: "+text_current_line);		
		
		//clear all text runing
		for(j=1; j<=current_chapter_total_lines; j++){ clearTimeout(timer[j]); }
		delayCounter = 1;
		text_current_line++;
		
		$("#playAudio-"+capitulo).show();
		$("#pauseAudio-"+capitulo).hide();
	}
	
	//start the audio when the chapter is displayed
	function autoplay_audios(capitulo){
		text_current_chapter = eval("text_"+capitulo);
		current_chapter_total_lines = text_current_chapter.length;
		
		eval("vid_"+capitulo).load();
		eval("vid_"+capitulo).play();
		$("#txt_"+capitulo).html(text_current_chapter[0]);
		//$("#txt_"+capitulo).textillate('start');
		
		text_current_line++;
		pausePhrases = false;
		writesentences(capitulo);	//translated text
		
		$("#playAudio-"+capitulo).hide();
		$("#pauseAudio-"+capitulo).show();
	}
	//when back or forward restart audios and texts
	function let_audios_text_begins(){
		vid_capitulo01.pause();vid_capitulo02.pause();vid_capitulo03.pause();//vid_capitulo04.pause();vid_capitulo05.pause();vid_capitulo06.pause();		
		for(j=1; j<=current_chapter_total_lines; j++){ clearTimeout(timer[j]); }
		pausePhrases = false;
		current_chapter_total_lines = 0;
		text_current_line = 0;
		delayCounter = 1;
		current_scena_number = 0;
		
	} 
	
//********** end - Audios	

//********** texts
	//write texts acording the chapter
	async function writesentences(capitulo){		
		for(i=text_current_line; i<=current_chapter_total_lines; i++, delayCounter++){
			 (function (i, delayCounter) {
			    timer[i] = setTimeout(function () {
			    	if(!pausePhrases){
				      	$('#txt_'+capitulo).removeData();
						$("#txt_"+capitulo).html(text_current_chapter[i]);
						//$(".txt_sc1").textillate('start');
						text_current_line = i;
						console.log("THIS IS"+text_current_line+':'+i+"--"+delayCounter);
					}
			    }, 6000*delayCounter);
			  })(i, delayCounter);			  
		}
	}

//********** end - texts	
	var text_capitulo01 = new Array();
	text_capitulo01[0]="Tic tac, tic tac..."; 
    text_capitulo01[1]="Amalia was never afraid, or so I thought every time I saw her, strong and confindent. Tic tac, tic tac...";	
    text_capitulo01[2]="she would go quiet when sensing danger, picking up the pace. Faster, you can’t miss the train, "; 
    text_capitulo01[3]="whispered the honeyed-eyed girl. And she would laugh. Tic tac, tic tac... ";
    text_capitulo01[4]="her heart about to jump out of her chest. Adrenaline, the thrill of the journey.";
    text_capitulo01[5]="Tic tac, tic tac, a rush of thoughts and ideas, her inner dialogues always ended well, ";
    text_capitulo01[6]="because everything will be ok. I don’t travel alone, God is by my side. ";     
    text_capitulo01[7]="Tic tac, tic tac... ";
    text_capitulo01[8]="Tic tac, tic tac... Staying home is just too risky. Leaving is just too risky.";
	text_capitulo01[9]="To make it all the way is... to save oneself. She will see her mom and, ";                
    text_capitulo01[10]="if she’s lucky she’ll see her dad too -if he gets acquitted-. Innocence and hope push her to keep going. "; 
    text_capitulo01[11]="She was three years old when they left San Pedro Sula. "; 
    text_capitulo01[12]="She can’t remember their voices or laughter, but she doesn’t mind that. There will be plenty of time to recover the time they have lost."; 
    text_capitulo01[13]="She would hugh them first and then tell them about her life, school and girlfriends, Pachito -her best friend-;"; 
    text_capitulo01[14]="she would tell them about her quinceañera, her grandparents and their day-to-day struggles, ";
	//ready up to here
	text_capitulo01[15]="how tough life is in Honduras, her plans of becoming a lawyer, and just how happy she is to see them again.";
	text_capitulo01[16]="Happiness! How long is forever? ";
	text_capitulo01[17]="She heard somewhere it can be just a second, and now she gets it. Tic tac, tic tac...";
	text_capitulo01[18]="It’s been a long time coming, but the day is here, at last! ";
	text_capitulo01[19]="She’ll start her journey heading North where life is better, or so everybody says. Tic tac, tic tac...";
	/*text_capitulo01[20]="She’ll leave at 4:00 a.m. The sky is really dark, there are no stars to light the way";
	text_capitulo01[21]="but the birdsongs announce that dawn is coming.";*/ 
	text_capitulo01[20]="Her grandparents wish her a safe trip by the door. With tears and blessings they say goodbye to their little girl,";
	text_capitulo01[21]="accepting the inevitable. They are afraid. It doesn’t matter she’s dressed ‘like a boy’,";
	text_capitulo01[22]="that attire is an armour as fragile as she can seem.";
	/*text_capitulo01[23]=" black hat, denim trousers, an oversized stripe shirt, and a pocket knife.";*/
	//text_capitulo01[22]="";
	text_capitulo01[23]="They have lost their own children: one died in the gang war, and another one awaits sentence in a US cell.";
	text_capitulo01[24]="Hope and sustenance to their lives, gone. Are you ready? Asks grandma. Yes, answers the granddaughter.";
	text_capitulo01[25]="Her heart is a tight knot in her chest and tears swell up in her eyes. ";
	text_capitulo01[26]="She hesitates for an instance. What if she could stay and study and look after her old folks?";
	text_capitulo01[27]="They hug each other, don’t want to let go. They’ve been together all her life.";
	text_capitulo01[28]="She’s all they have left. But they can’t hold her back. Life in La Rivera, their neighbourhood,";
	text_capitulo01[29]="is increasingly difficult, the fighting and shootouts are getting worse.";
	text_capitulo01[30]="The nights are riddled with bullets and there is blood on the streets,";
	text_capitulo01[31]="bodies strewn around the floor haunt the residents. Anyone can be the next victim. ";
	text_capitulo01[32]="Teenage girls definitely are. Amalia is growing, her shape and way of walking are gracious. The mareros need women.";
	text_capitulo01[33]="She has to leave and reach her destination guided by the angels of the road. Tic tac, tic tac ...";
	text_capitulo01[34]="She separates tenderly from her grandma. A kiss in the forehead, a caress, -I’ll make sure you come too- she says with a smile.";
	text_capitulo01[35]="she carries a picture of her family in her pocket, along with an old letter to her father.";
	text_capitulo01[36]="She turns back and starts walking.";
	text_capitulo01[37]="Her grandmother makes crosses in the air, she has her blessings against all danger and evil.";

	var text_capitulo02 = new Array();
	text_capitulo02[0]="I met Amalia in Chiapas. When crossing borders, people get together to support each other,"; 
    text_capitulo02[1]="the bigger ones carry the lighter ones, the healthy look after the sick ones and that way we all keep going.";	
    text_capitulo02[2]="In that particular group there were people from far away, who spoke different languages. From Haiti "; 
    text_capitulo02[3]="and Africa, I believe. They came in rafts by the sea, walking through hills and secret paths, ";
    text_capitulo02[4]="hiding in cargo containers, with little girls and babies. Just like us! ";
    text_capitulo02[5]="But on a much longer journey. Multicoloured bodies, beautiful and fragile, ";
    text_capitulo02[6]="drinking water and showering in the river. Some Cubans were sharing stories from their journey: ";     
    text_capitulo02[7]="They climbed a massive mountain in the Darién jungle, they crossed a river that overflowed, ";
    text_capitulo02[8]="a woman and two kids didn’t make it to the other side, and there are other bodies scattered around... ";
	text_capitulo02[9]="Just thinking how much distance we still had to cover, and imagining the million things that could happen,";                
    text_capitulo02[10]=" I got scared.  And then I saw her. Like a ghost. "; 
    text_capitulo02[11]="A girl alone in the middle of a bunch of people who doesn’t look afraid. "; 
    text_capitulo02[12]="She seemed cool and secure, serene almost, sitting amongst the tents by the river. "; 
    text_capitulo02[13]="That was Amalia. I admired her the moment I saw her! She sat by my side with a smile, "; 
    text_capitulo02[14]="maybe because she saw my face while listening to the Cubans, and gave a mango.";
    text_capitulo02[15]="-	What’s your name? -	Gabriela-, I replied. - And yours? -Amalia- she said, -Pleasure to meet you-. And she smiled.";
    text_capitulo02[16]="-	Where are you from, Gabriela? -	From El Salvador-, I said. -I don’t know anyone from there-, she said. ";
    text_capitulo02[17]="-  What is it like? -Now you know me- I joked, and continued: Small and suffering. ";
    text_capitulo02[18]="When there isn’t gang violence there are hurricanes destroying everything and if we survive that, ";
    text_capitulo02[19]="then we have to face poverty. My teacher says God forgot about El Salvador.";
    //text_capitulo02[20]="I sighed and we fell silent for a minute. Being by a river makes your thoughts start flowing. So I started over with my questions.";
    text_capitulo02[20]="-	Where are you from? -	From Honduras-, she replied. -	And why are you travelling alone?- I inquired, because like my mom says, I’m very curious.";
    
    text_capitulo02[21]="- I could not! -	Because I have no one to keep me company-, she said calmly.";
    text_capitulo02[22]="My parents are in the U.S., my brother was 12 when the Mara took him,";
    text_capitulo02[23]="and that wasn’t even the last time they threatened my family. After a while they started harassing me, ";
    text_capitulo02[24]="and my grandparents are too old to protect me. I had to leave. It’s been a long, hard way, ";
    text_capitulo02[25]="but just as complicated is to keep living there. It would be nice to have a friend, don’t you think?-, then she smiled again.";
    
    text_capitulo02[26]="-	Of course it would be nice!- I had a bite of the mango and thought of her solitary journey. ";
    text_capitulo02[27]="-	Aren’t you afraid?- I continued. -	Umm, not really. We’re not alone in this journey, God is with us-, I believed her.";
    text_capitulo02[28]="-	Mom, can Amalia join us?- I asked. -	Sure-, she replied.  Amalia is my sister on this journey. Now we will always be together.";    
    
});