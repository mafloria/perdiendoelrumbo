/*
 * Buscando el Norte - Transmedia
 *
 * Copyright (c) 2017 
 * Date: May 22 - 2017
 * Author: Margaret Florian (mafloria - UXDevco)
 */

// Setup total images per chapter per scena
	var totalimg_capitulo01_scena_1 = 4; var totalimg_capitulo01_scena_2 = 10; var totalimg_capitulo01_scena_3 = 2; var totalimg_capitulo01_scena_4 = 4; var totalimg_capitulo01_scena_5 = 3; var totalimg_capitulo01_scena_6 = 2;
	var totalimg_capitulo02_scena_1 = 4; var totalimg_capitulo02_scena_2 = 4; var totalimg_capitulo02_scena_3 = 5; var totalimg_capitulo02_scena_4 = 8;
	var totalimg_capitulo03_scena_1 = 7; var totalimg_capitulo03_scena_2 = 3; var totalimg_capitulo03_scena_3 = 12; var totalimg_capitulo03_scena_4 = 4;
	var totalimg_capitulo04_scena_1 = 6; var totalimg_capitulo04_scena_2 = 5; var totalimg_capitulo04_scena_3 = 7; var totalimg_capitulo04_scena_4 = 6;var totalimg_capitulo04_scena_5 = 8;var totalimg_capitulo04_scena_6 = 1;
	var totalimg_capitulo05_scena_1 = 5; var totalimg_capitulo05_scena_2 = 2; var totalimg_capitulo05_scena_3 = 4; var totalimg_capitulo05_scena_4 = 2;var totalimg_capitulo05_scena_5 = 5;var totalimg_capitulo05_scena_6 = 2;
	var totalimg_capitulo06_scena_1 = 2; var totalimg_capitulo06_scena_2 = 5; var totalimg_capitulo06_scena_3 = 4; var totalimg_capitulo06_scena_4 = 1;var totalimg_capitulo06_scena_5 = 3;var totalimg_capitulo06_scena_6 = 2;
	
	//setup time when the image is displayed
	var timeimg_capitulo01_scena_1 = [10, 16, 25, 27]; 
	var timeimg_capitulo01_scena_2 = [8, 14, 17, 18, 27, 43, 45, 47, 50, 57];
	var timeimg_capitulo01_scena_3 = [9, 10];
	var timeimg_capitulo01_scena_4 = [9, 19, 32, 44];
	var timeimg_capitulo01_scena_5 = [5, 7, 15];
	var timeimg_capitulo01_scena_6 = [12, 29];
	
	var timeimg_capitulo02_scena_1 = [12, 16, 25, 33]; 
	var timeimg_capitulo02_scena_2 = [9, 13, 16, 19];
	var timeimg_capitulo02_scena_3 = [9, 28, 36, 42, 49];
	var timeimg_capitulo02_scena_4 = [3, 6, 9, 13, 16, 25, 43, 120];
	
	var timeimg_capitulo03_scena_1 = [11, 25, 32, 36, 46, 50, 64]; 
	var timeimg_capitulo03_scena_2 = [12, 31, 35];
	var timeimg_capitulo03_scena_3 = [13, 30, 42, 46, 50, 53, 56, 59, 62, 65, 67, 82];
	var timeimg_capitulo03_scena_4 = [22, 31, 44, 53];
	
	var timeimg_capitulo04_scena_1 = [10, 22, 29, 32, 36, 41]; 
	var timeimg_capitulo04_scena_2 = [2, 4, 5, 6, 11];
	var timeimg_capitulo04_scena_3 = [17, 20, 25, 27, 28, 33, 54];
	var timeimg_capitulo04_scena_4 = [11, 30, 39, 44, 57, 63];
	var timeimg_capitulo04_scena_5 = [9, 25, 29, 31, 46, 49, 58, 66];
	var timeimg_capitulo04_scena_6 = [45];
	
	var timeimg_capitulo05_scena_1 = [8, 16, 20, 29, 52]; 
	var timeimg_capitulo05_scena_2 = [4, 34];
	var timeimg_capitulo05_scena_3 = [10, 26, 43, 53];
	var timeimg_capitulo05_scena_4 = [11, 30];
	var timeimg_capitulo05_scena_5 = [14, 25, 28, 29, 32];
	var timeimg_capitulo05_scena_6 = [12, 34];
	
	var timeimg_capitulo06_scena_1 = [4, 21]; 
	var timeimg_capitulo06_scena_2 = [4, 5, 12, 16, 33];
	var timeimg_capitulo06_scena_3 = [18, 30, 33, 56];
	var timeimg_capitulo06_scena_4 = [24];
	var timeimg_capitulo06_scena_5 = [22, 30, 39];
	var timeimg_capitulo06_scena_6 = [15, 68];
	
	//setup line number for each scena inside the chapter
	var textini_capitulo01 = [0, 6, 16, 21, 29, 33]; 	
	var textini_capitulo02 = [0, 5, 9, 17]; 		
	var textini_capitulo03 = [0, 11, 17, 30];
	var textini_capitulo04 = [0, 6, 7, 16, 27, 37];	 	
	var textini_capitulo05 = [0, 9, 14, 23, 28, 33];
	var textini_capitulo06 = [0, 3, 8, 17, 21, 27];
	
	var current_scena_number = 1;
	var current_chapter = "capitulo01";
	var current_image_counter = 1;
	var stop_last_image = false;
	var last_image_displayed = "";
	
	//initialice global vars 
	var current_chapter_total_lines = 0;
	var text_current_line = 0;
	var text_current_chapter = new Array();//the actual chapter is loaded in this array to show the text
	var pausePhrases = false;
	var timer = new Array();
	var delayCounter = 1;
	
	var interval;
	
/* function needed to load before html end loading */
function set_current_audio_time(event){
		current_audio_tracktime = event.currentTime;
		console.log(" image counter:"+current_image_counter);				
		if(eval(current_image_counter+" < totalimg_"+current_chapter+"_scena_"+current_scena_number) && !stop_last_image){
			//console.log(eval("timeimg_"+current_chapter+"_scena_"+current_scena_number+"["+(current_image_counter-1)+"]")+"<"+current_audio_tracktime);
			if(eval("timeimg_"+current_chapter+"_scena_"+current_scena_number+"["+(current_image_counter-1)+"]<current_audio_tracktime")){				
				//$(".background-section > img").hide();				
				current_image_counter++;
				$("#imgbg-"+current_chapter).attr("src", "images/"+current_chapter+"/escena-"+current_scena_number+"/buscando-el-norte-"+current_chapter+"-escena-"+current_scena_number+"-"+current_image_counter+".jpg");
				//$("#imgbg-"+current_chapter+"-scena-"+current_scena_number+"-"+current_image_counter).show();//shows new background image
				console.log("#imgbg-"+current_chapter+"-scena-"+current_scena_number+"-"+current_image_counter + "---"+current_audio_tracktime );
			}
		}else{
			if(stop_last_image==false){ last_image_displayed = "#imgbg-"+current_chapter+"-scena-"+current_scena_number+"-"+current_image_counter; }						
			
			stop_last_image = true;
			current_image_counter = 1;			
		}
		
	}

//document ready	
$(document).ready(function(){	
	$(".main-header > h1").hide();
	
	//progress bar
	var progress_bar = 0;
	var capitulo01_escena_1 = capitulo01_escena_2 = capitulo01_escena_3 = capitulo01_escena_4 = capitulo01_escena_5 = capitulo01_escena_6 = 3;
	var capitulo02_escena_1 = capitulo02_escena_2 = capitulo02_escena_3 = capitulo02_escena_4 = 3;
	var capitulo03_escena_1 = capitulo03_escena_2 = capitulo03_escena_3 = capitulo03_escena_4 = 3;	
	var capitulo04_escena_1 = capitulo04_escena_2 = capitulo04_escena_3 = capitulo04_escena_4 = capitulo04_escena_5 = capitulo04_escena_6 =3;
	var capitulo05_escena_1 = capitulo05_escena_2 = capitulo05_escena_3 = capitulo05_escena_4 = capitulo05_escena_5 = capitulo05_escena_6 =3;
	var capitulo06_escena_1 = capitulo06_escena_2 = capitulo06_escena_3 = capitulo06_escena_4 = capitulo06_escena_5 = capitulo06_escena_6 =4;
	
	// load audios elements	
	//capitulo 01
	var vid_capitulo01_scena_1 = document.getElementById("audio-capitulo01-scena-1"); var vid_capitulo01_scena_2 = document.getElementById("audio-capitulo01-scena-2"); var vid_capitulo01_scena_3 = document.getElementById("audio-capitulo01-scena-3"); var vid_capitulo01_scena_4 = document.getElementById("audio-capitulo01-scena-4");	var vid_capitulo01_scena_5 = document.getElementById("audio-capitulo01-scena-5"); var vid_capitulo01_scena_6 = document.getElementById("audio-capitulo01-scena-6");	
	//capitulo 02
	var vid_capitulo02_scena_1 = document.getElementById("audio-capitulo02-scena-1"); var vid_capitulo02_scena_2 = document.getElementById("audio-capitulo02-scena-2"); var vid_capitulo02_scena_3 = document.getElementById("audio-capitulo02-scena-3"); var vid_capitulo02_scena_4 = document.getElementById("audio-capitulo02-scena-4");	
	//capitulo 03
	var vid_capitulo03_scena_1 = document.getElementById("audio-capitulo03-scena-1"); var vid_capitulo03_scena_2 = document.getElementById("audio-capitulo03-scena-2"); var vid_capitulo03_scena_3 = document.getElementById("audio-capitulo03-scena-3"); var vid_capitulo03_scena_4 = document.getElementById("audio-capitulo03-scena-4");	
	//capitulo 04
	var vid_capitulo04_scena_1 = document.getElementById("audio-capitulo04-scena-1"); var vid_capitulo04_scena_2 = document.getElementById("audio-capitulo04-scena-2"); var vid_capitulo04_scena_3 = document.getElementById("audio-capitulo04-scena-3"); var vid_capitulo04_scena_4 = document.getElementById("audio-capitulo04-scena-4"); var vid_capitulo04_scena_5 = document.getElementById("audio-capitulo04-scena-5"); var vid_capitulo04_scena_6 = document.getElementById("audio-capitulo04-scena-6");	
	//capitulo 05
	var vid_capitulo05_scena_1 = document.getElementById("audio-capitulo05-scena-1"); var vid_capitulo05_scena_2 = document.getElementById("audio-capitulo05-scena-2"); var vid_capitulo05_scena_3 = document.getElementById("audio-capitulo05-scena-3"); var vid_capitulo05_scena_4 = document.getElementById("audio-capitulo05-scena-4"); var vid_capitulo05_scena_5 = document.getElementById("audio-capitulo05-scena-5"); var vid_capitulo05_scena_6 = document.getElementById("audio-capitulo05-scena-6");
	//capitulo 06
	var vid_capitulo06_scena_1 = document.getElementById("audio-capitulo06-scena-1"); var vid_capitulo06_scena_2 = document.getElementById("audio-capitulo06-scena-2");  var vid_capitulo06_scena_3 = document.getElementById("audio-capitulo06-scena-3"); var vid_capitulo06_scena_4 = document.getElementById("audio-capitulo06-scena-4"); var vid_capitulo06_scena_5 = document.getElementById("audio-capitulo06-scena-5"); var vid_capitulo06_scena_6 = document.getElementById("audio-capitulo06-scena-6");						
	
	//scenas counter and total per chapter
	var total_scenas_capitulo01 = 6;
	var total_scenas_capitulo02 = 4;
	var total_scenas_capitulo03 = 4;
	var total_scenas_capitulo04 = 6;
	var total_scenas_capitulo05 = 6;
	var total_scenas_capitulo06 = 6;
	
	
//*********** window size to fix content	   
	setHeight();	
		  
	$(window).resize(function() {
		setHeight();
	});
	//adjust sections to the browser height
	function setHeight() {
		windowHeight = $(window).innerHeight();
		windowWidth = $(window).innerWidth();
		//loading
		$('#cargando-historia').css('height', windowHeight);
		$('#cargando-historia').css('width', windowWidth);
		
		//general containers
		$('#content-section').css('height', windowHeight);
		$('#content-section .section-site').css('height', windowHeight);		
		$('#content-section .section-site').css('width', windowWidth);		
		
		//background images
		$('.background-section img').css('height', windowHeight);
		//$('.background-section img').css('width', windowWidth);		
	};
//*********** end - window size to fix content

//*********** scrolls to an href section exactly - just for biggest navegation
    $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      $(".submenu").hide();
	      
	      var target = $(this.hash);		      
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	     
	      let_audios_text_begins(); //restart audios and text if the user returns start all again
        	
		    if(this.hash.slice(1)=="introduccion") {
		    	if(progress_bar>=100){ $(".intro-chapter-menu").show(); $(".intro-chapter-startbtn").hide(); }
		    	else{ $(".intro-chapter-menu").hide(); $(".intro-chapter-startbtn").show(); }
		    	$(".main-header > h1").hide();//hide image page title
		    	$(".chapter-title").hide(); //hide chpaters title
		    	$("#nav-menu").show();//show main menu
				$("#imgbg-introduccion").show();
		    }else{
		    	current_chapter = this.hash.slice(1);
		    	autoplay_audios(this.hash.slice(1));
		    	$(".main-header > h1").show();//page title
		    	$("#nav-menu").hide();//hide main menu
		    	$(".chapter-title").show();//show chapter title section
		    	$(".chapter-title > h3 > span").hide(); //hide chapter titles
		    	$("#title-"+current_chapter).show(); //show only current chapter title		    	
		    }
		    
		    $("#sequence-"+current_chapter+"-scena-1 a").addClass("current-scene");		    		    		    		      

	     
	      if (target.length) {
	        $('html, body').animate({		          		         
	          scrollLeft: target.offset().left
            }, 1000);//1000
        	
        	
		    return false;
		  }//end if target length
		}//end if location
	});
//*********** end - scrolls to an href section exactly	

//********** actions
	$("#ben-main-menu").click(function(){
		$(".submenu").toggle('slow');
	});			
	
//********** end - actions

//********** audios
	//listen each audio to check if it is finihed
	vid_capitulo01_scena_1.onended = function() { audio_ended_action(); }; vid_capitulo01_scena_2.onended = function() { audio_ended_action(); }; vid_capitulo01_scena_3.onended = function() { audio_ended_action(); }; vid_capitulo01_scena_4.onended = function() { audio_ended_action(); };	vid_capitulo01_scena_5.onended = function() { audio_ended_action(); };	vid_capitulo01_scena_6.onended = function() { audio_ended_action(); };	
	vid_capitulo02_scena_1.onended = function() { audio_ended_action(); }; vid_capitulo02_scena_2.onended = function() { audio_ended_action(); }; vid_capitulo02_scena_3.onended = function() { audio_ended_action(); }; vid_capitulo02_scena_4.onended = function() { audio_ended_action(); };	
	vid_capitulo03_scena_1.onended = function() { audio_ended_action(); }; vid_capitulo03_scena_2.onended = function() { audio_ended_action(); }; vid_capitulo03_scena_3.onended = function() { audio_ended_action(); }; vid_capitulo03_scena_4.onended = function() { audio_ended_action(); };
	vid_capitulo04_scena_1.onended = function() { audio_ended_action(); }; vid_capitulo04_scena_2.onended = function() { audio_ended_action(); }; vid_capitulo04_scena_3.onended = function() { audio_ended_action(); }; vid_capitulo04_scena_4.onended = function() { audio_ended_action(); }; vid_capitulo04_scena_5.onended = function() { audio_ended_action(); }; vid_capitulo04_scena_6.onended = function() { audio_ended_action(); };
	vid_capitulo05_scena_1.onended = function() { audio_ended_action(); }; vid_capitulo05_scena_2.onended = function() { audio_ended_action(); }; vid_capitulo05_scena_3.onended = function() { audio_ended_action(); }; vid_capitulo05_scena_4.onended = function() { audio_ended_action(); }; vid_capitulo05_scena_5.onended = function() { audio_ended_action(); }; vid_capitulo05_scena_6.onended = function() { audio_ended_action(); };
	vid_capitulo06_scena_1.onended = function() { audio_ended_action(); }; vid_capitulo06_scena_2.onended = function() { audio_ended_action(); }; vid_capitulo06_scena_3.onended = function() { audio_ended_action(); }; vid_capitulo06_scena_4.onended = function() { audio_ended_action(); }; vid_capitulo06_scena_5.onended = function() { audio_ended_action(); }; vid_capitulo06_scena_6.onended = function() { audio_ended_action(); };
	
	function audio_ended_action(){
		$("#sequence-"+current_chapter+"-scena-"+current_scena_number+" > a").removeClass("current-scene");
		$("#sequence-"+current_chapter+"-scena-"+current_scena_number+" > a").addClass("enable-scene");
		$("#sequence-"+current_chapter+"-scena-"+current_scena_number+" > a").attr("href", "javascript:void(0)"); //enable link mouse option
		
		if(progress_bar<100){
			progress_bar += eval(current_chapter+"_escena_"+current_scena_number); //add progress value
		    $(".barra-marcador").css("width", progress_bar+"%");
		    eval(current_chapter+"_escena_"+current_scena_number+"=0"); //reset scena progress value to cero, already listened
	   	}
	   
		//console.log("PREV NEXT AUDIO: SCENA: "+current_scena_number+ " CHAPTER:"+current_chapter+" Progress Bar: "+progress_bar);		
		//$(".background-section > img").hide();
		if(current_scena_number < eval("total_scenas_"+current_chapter)){
			
	   		current_scena_number ++;
	   		$("#imgbg-"+current_chapter).attr("src", "images/"+current_chapter+"/escena-"+current_scena_number+"/buscando-el-norte-"+current_chapter+"-escena-"+current_scena_number+"-"+current_image_counter+".jpg");
	   		//$("#imgbg-"+current_chapter+"-scena-"+current_scena_number).show();//shows new background image
	   		
	   		//---------- stop write text threat
	   		pausePhrases = true; //pause translated text
			//clear all text runing
			var total_timer_lines = timer.length;
			for(j=0; j<=total_timer_lines; j++){ clearTimeout(timer[j]);  }
			//clearTimeout(timer);
			delayCounter = 1;			
			//---------- end - stop write text threat
	   		
	   		autoplay_audios(current_chapter);
	   			   
	   		$("#sequence-"+current_chapter+"-scena-"+current_scena_number+" > a").addClass("current-scene");
	   		
	  }else{	  		  	
	  	
	  	$("#imgbg-"+current_chapter+"-scena-0").show();	//shows scena after all images passed
	  	
	  	$("#nav-next-"+current_chapter+"-inactive").hide();
	  	$("#nav-next-"+current_chapter+"-active").show();
	  	
	  	$("#nav-next-"+current_chapter+"-active").trigger("click");	  	
	  }
	  
	}
	
	//allows to listed an audio already played
	$(".sequence-thumb > a").click(function(){
		var href = $(this).attr( "href" );
		
		if(href=="javascript:void(0)"){	
			
			var total_timer_lines = timer.length;
			for(j=0; j<=total_timer_lines; j++){ clearTimeout(timer[j]); }
			pausePhrases = false;
			current_chapter_total_lines = 0;			
			delayCounter = 1;			
				
			var id_info = $(this).parent(0).attr('id').split('-'); //chapter: 1 scena: 3
			$("#sequence-"+current_chapter+"-scena-"+current_scena_number+" > a").removeClass("current-scene");
			
			$("#audio-"+current_chapter+"-scena-"+current_scena_number).prop("currentTime",0);//sets the current scena at the begining
									
			pause_audio(current_chapter); //pause current audio					
			
			current_scena_number = id_info[3];//sets current scena to the cliked one
			current_image_counter = 1;
			$("#audio-"+id_info[1]+"-scena-"+current_scena_number).prop("currentTime",0);//sets the new scena at the begining
			
			text_current_line = eval("textini_"+current_chapter+"["+(current_scena_number-1)+"];");
			
			//console.log("Jump scena current scena number:"+current_scena_number+" text line: "+text_current_line);
								
			autoplay_audios(id_info[1]);  //play new audio scena							
				
			$("#sequence-"+current_chapter+"-scena-"+current_scena_number+" > a").addClass("current-scene");		
						
		}
		
	});
	
	//click over play audio icon
	$(document).on('click', '.playAudio', function(){
		var id_info = $(this).attr('id').split('-');
		eval("vid_"+id_info[1]+"_scena_"+current_scena_number).play();
		if(text_current_line==0){
			$("#txt_"+id_info[1]).html(text_current_chapter[0]);
			text_current_line++;
		}
		pausePhrases = false;
		delayCounter = 1;
		writesentences(id_info[1], pausePhrases); //translated text		
		$("#pauseAudio-"+id_info[1]).show();
		$(this).hide();	
	});	
	//click over pause audio icon
	$(document).on('click', '.pauseAudio', function(){
		var id_info = $(this).attr('id').split('-');
		
		pause_audio(id_info[1]);				
	});	
	
	//puases audio scena
	function pause_audio(capitulo){
		eval("vid_"+capitulo+"_scena_"+current_scena_number).pause();
		
		//---------- stop write text threat
		pausePhrases = true; //pause translated text
		console.log("PAUSE: "+text_current_line);		
		//clear all text runing
		var total_timer_lines = timer.length;
		for(j=0; j<=total_timer_lines; j++){ clearTimeout(timer[j]);  }
		//clearTimeout(timer);
		delayCounter = 1;
		//---------- end - stop write text threat
		
		text_current_line++;
		
		$("#playAudio-"+capitulo).show();
		$("#pauseAudio-"+capitulo).hide();
	}
	
	//start the audio when the chapter is displayed
	function autoplay_audios(capitulo){
		text_current_chapter = eval("text_"+capitulo);
		current_chapter_total_lines = text_current_chapter.length;
		
		eval("vid_"+capitulo+"_scena_"+current_scena_number).load();
		eval("vid_"+capitulo+"_scena_"+current_scena_number).play();
		text_current_line = eval("textini_"+current_chapter+"["+(current_scena_number-1)+"];");
		$("#txt_"+capitulo).html(text_current_chapter[text_current_line]);
		
		//text_current_line++;
		pausePhrases = false;
		delayCounter = 1;
		writesentences(capitulo, pausePhrases);	//translated text //if(eval(current_scena_number+"==total_scenas_"+capitulo)) 
		//console.log("autoplay: text line: "+text_current_line);
		
		$("#playAudio-"+capitulo).hide();
		$("#pauseAudio-"+capitulo).show();
		
		stop_last_image = false;//allows move images again 
		//$(".background-section > img").hide();		
		//$("#imgbg-"+current_chapter+"-scena-"+current_scena_number+"-1").show();//shows first bg image fot this audio		
		$("#imgbg-"+current_chapter).attr("src", "images/"+current_chapter+"/escena-"+current_scena_number+"/buscando-el-norte-"+current_chapter+"-escena-"+current_scena_number+"-"+current_image_counter+".jpg");				
		console.log("play next audio: "+capitulo + "scena: "+current_scena_number);
				
	}
	//when back or forward restart audios and texts
	function let_audios_text_begins(){
		vid_capitulo01_scena_1.pause();vid_capitulo01_scena_2.pause();vid_capitulo01_scena_3.pause();vid_capitulo01_scena_4.pause();vid_capitulo01_scena_5.pause();vid_capitulo01_scena_6.pause();
		vid_capitulo02_scena_1.pause();vid_capitulo02_scena_2.pause();vid_capitulo02_scena_3.pause();vid_capitulo02_scena_4.pause();
		vid_capitulo03_scena_1.pause();vid_capitulo03_scena_2.pause();vid_capitulo03_scena_3.pause();vid_capitulo03_scena_4.pause();
		vid_capitulo04_scena_1.pause();vid_capitulo04_scena_2.pause();vid_capitulo04_scena_3.pause();vid_capitulo04_scena_4.pause();vid_capitulo04_scena_5.pause();vid_capitulo04_scena_6.pause();
		vid_capitulo05_scena_1.pause();vid_capitulo05_scena_2.pause();vid_capitulo05_scena_3.pause();vid_capitulo05_scena_4.pause();vid_capitulo05_scena_5.pause();vid_capitulo05_scena_6.pause();
		vid_capitulo06_scena_1.pause();vid_capitulo06_scena_2.pause();vid_capitulo06_scena_3.pause();vid_capitulo06_scena_4.pause();vid_capitulo06_scena_5.pause();vid_capitulo06_scena_6.pause();
				
		var total_timer_lines = timer.length;
		for(j=0; j<=total_timer_lines; j++){ clearTimeout(timer[j]); }		
		pausePhrases = false;
		current_chapter_total_lines = 0;
		text_current_line = 0;
		delayCounter = 1;
		current_scena_number = 1;		
		current_image_counter = 1;
	} 
		
	
//********** end - Audios	

//********** texts
	//write texts acording the chapter
	
	async function writesentences(capitulo, pause){//		
		for(i=text_current_line; i<=current_chapter_total_lines; i++, delayCounter++){
			 (function (i, delayCounter) {
			    timer[i] = setTimeout(function () {
			    	if(!pause){
				      	$('#txt_'+capitulo).removeData();
						$("#txt_"+capitulo).html(text_current_chapter[i]);
						//$(".txt_sc1").textillate('start');
						text_current_line = i;						
						console.log(capitulo + " THIS IS: "+text_current_line+" -- "+delayCounter);
					}			
			    }, 5500*delayCounter);			    
			  })(i, delayCounter);			  			 
		}
	}
	

//********** end - texts	
	var text_capitulo01 = new Array();
	text_capitulo01[0]="Tic tac, tic tac... Amalia was never afraid, or so I thought every time I saw her, strong and confident."; 
    text_capitulo01[1]="Tic tac, tic tac... she would go quiet when sensing danger, picking up the pace. Faster, you can’t miss the train, ";	    
    text_capitulo01[2]="whispered the honey-eyed girl. And she would laugh. Tic tac, tic tac... ";
    text_capitulo01[3]="her heart about to jump out of her chest. Adrenaline, the thrill of the journey.";
    text_capitulo01[4]="Tic tac, tic tac, a rush of thoughts and ideas, her inner dialogues always ended well,";
    text_capitulo01[5]="because everything would be ok. I don’t travel alone, God is by my side.";     
    text_capitulo01[6]="";
    text_capitulo01[7]="Tic tac, tic tac... Staying home is just too risky. Leaving is just too risky.";
    text_capitulo01[8]="To make it all the way is... to save oneself. She will see her mom and, ";
	text_capitulo01[9]="if she’s lucky she’ll see her dad too -if he gets released from jail- Innocence and hope push her to keep going.";    
    text_capitulo01[10]="Tic tac, tic tac... She was three years old when they left San Pedro Sula."; 
    text_capitulo01[11]="She can’t remember their voices or laughter, but she doesn’t mind that. There will be plenty of time to recover the time they have lost."; 
    text_capitulo01[12]="She would hug them first and then tell them about her life, school and girlfriends, Pachito -her best friend-"; 
    text_capitulo01[13]="she would tell them about her quinceañera, her grandparents and their day-to-day struggles,";	
	text_capitulo01[14]="how tough life is in Honduras, her plans of becoming a lawyer, and just how happy she is to see them again.";
	text_capitulo01[15]="Happiness!";
	text_capitulo01[16]="How long is forever? She heard somewhere it can be just a second, and now she gets it."; 
	//text_capitulo01[17]="";
	text_capitulo01[17]="Tic tac, tic tac... It’s been a long time coming, but the day is here, at last!";
	text_capitulo01[18]="She’ll start her journey heading north, where life is better, or so everybody says. Tic tac, tic tac...";
	text_capitulo01[19]="";
	/*text_capitulo01[20]="She’ll leave at 4:00 a.m. The sky is really dark, there are no stars to light the way";
	text_capitulo01[21]="but the birdsongs announce that dawn is coming.";*/ 
	text_capitulo01[21]="Her grandparents wish her a safe trip by the door. With tears and blessings they say goodbye to their little girl,";
	text_capitulo01[22]="accepting the inevitable. They are afraid. It doesn’t matter she’s dressed ‘like a boy’,";
	text_capitulo01[23]="that attire is an armour as fragile as she can seem.";
	/*text_capitulo01[23]=" black hat, denim trousers, an oversized stripe shirt, and a pocket knife.";*/
	//text_capitulo01[22]="";
	text_capitulo01[24]="They have lost their own children: one died in the gang war, and another one awaits sentence in a US cell.";
	text_capitulo01[25]="Hope and sustenance to their lives, gone. Are you ready? Asks grandma. Yes, answers the granddaughter.";
	text_capitulo01[26]="Her heart is a tight knot in her chest and tears swell up in her eyes. ";
	text_capitulo01[27]="She hesitates for an instance. What if she could stay and study and look after her old folks?";
	text_capitulo01[27]="They hug each other, don’t want to let go. They’ve been together all her life.";
	text_capitulo01[28]="She’s all they have left. But they can’t hold her back.";
	text_capitulo01[29]="Life in La Rivera, their neighbourhood, is increasingly difficult, the fighting and shootouts are getting worse.";
	text_capitulo01[30]="The nights are riddled with bullets and there is blood on the streets,";
	text_capitulo01[31]="bodies strewn around the floor haunt the residents. Anyone can be the next victim. ";
	text_capitulo01[32]="Teenage girls definitely are.";
	text_capitulo01[33]="Amalia is growing, her shape and way of walking are gracious. The mareros need women.";
	text_capitulo01[34]="She has to leave and reach her destination guided by the angels of the road. Tic tac, tic tac ...";
	text_capitulo01[35]="She separates tenderly from her grandma. A kiss in the forehead, a caress, -I’ll make sure you come too- she says with a smile.";
	text_capitulo01[36]="she carries a picture of her family in her pocket, along with an old letter to her father.";
	text_capitulo01[37]="She turns back and starts walking. Her grandmother makes crosses in the air, she has her blessings against all danger and evil.";	

	var text_capitulo02 = new Array();
	text_capitulo02[0]="I met Amalia in Chiapas. When crossing borders, people get together to support each other,"; 
    text_capitulo02[1]="the bigger ones carry the lighter ones, the healthy look after the sick ones and that way we all keep going.";	
    text_capitulo02[2]="In that particular group there were people from far away, who spoke different languages. From Haiti and Africa, I believe. "; 
    text_capitulo02[3]="They came in rafts by the sea, walking through hills and secret paths, ";
    text_capitulo02[4]="hiding in cargo containers, with little girls and babies. Just like us!  But on a much longer journey. ";
    text_capitulo02[5]="Multicoloured bodies, beautiful and fragile, drinking water and showering in the river. ";
    text_capitulo02[6]="Some Cubans were sharing stories from their journey: They climbed a massive mountain in the Darién jungle, ";     
    text_capitulo02[7]="they crossed a river that overflowed, a woman and two kids didn’t make it to the other side, and there are other bodies scattered around... ";
    text_capitulo02[8]="";
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
    
    var text_capitulo03 = new Array();
	text_capitulo03[0]="We travelled together for two weeks but for me it felt like a lifetime. At night we would look at the stars, "; 
    text_capitulo03[1]="while she told me her story and the details of her trip since she left home.";
    text_capitulo03[2]="She left with a group of friends. Honduras wasn’t that tough, until they got a ride to Guatemala. ";
    text_capitulo03[3]="That’s when the hard part begun. Walking for hours and hours, some days they would eat, some others they wouldn’t.";
    text_capitulo03[4]="Hiding from the police, the thugs, scouting for safe places. You need to set up guard shifts ";
    text_capitulo03[5]="because there are people who start following you. They’re always on the prowl, ";
    text_capitulo03[6]="like hyenas checking on their chosen prey, waiting for you to lower your guard. People in plain clothes.";
    text_capitulo03[7]="Human traffickers and organ traffickers, gang members and thieves. The minute you fall asleep, Boom! You’re done.";
    text_capitulo03[8]="That’s what happened to Tita, the youngest girl in Amalia’s group. ";
    text_capitulo03[9]="She was 13, just like me! After days of too little food and sleep, ";
    text_capitulo03[10]="the group was anxiously debating the route to follow.";
    text_capitulo03[11]="-	Best if we stick to the train tracks, The Beast-, was an idea shared by some. -	But there’s always patrolling-, said another one. ";
    text_capitulo03[12]="-  What if one of us doesn’t make it up the train and gets stuck on the wheels?-. - We could also follow the river-. Said another one. ";
    text_capitulo03[13]="-There are also cops down there. I’m not going back, no matter what, the migra is not putting their hands on me!- said the oldest guy.";
    text_capitulo03[14]="-	I’m tired of you all, of these unforgiving paths, of eating worse than a dog, of sleeping outside every night, ";
    text_capitulo03[15]="of being afraid all the time, of every sound or movement as a lowlife thief; tired of being on the run,";
    text_capitulo03[16]="watch out for the migra! Watch out for the thugs! I’m done! I’m out of here!-.";
    text_capitulo03[17]="And Tita parted ways with the group. ";
    text_capitulo03[18]="The prettiest one, with blond hair and pink cheeks. She didn’t make it too far. ";
    text_capitulo03[19]="The group was being closely followed, every step of the way. The thugs caught her on her own. ";
    text_capitulo03[20]="Her oversized denim pants and the pocket knife weren’t enough to deflect the attackers. ";
    text_capitulo03[21]="Nobody even heard her scream. Poor Tita, the youngest. ";    
    text_capitulo03[22]="They found her lying naked in the shrubs. It was impossible to lift her spirits afterwards.";
    text_capitulo03[23]="The gang members, the polleros, anyone can rape you. Amalia remembered that before leaving someone told her to take contraceptives"; 
    text_capitulo03[24]="because those things do happen all the time. It was the ‘Z’ gang, somebody saw their tattoos. The group split. ";
    text_capitulo03[25]="She stopped talking, and would only cry and cry, while being dressed or fed she’d cry, unstoppably, without control.";
    text_capitulo03[26]="She ran to the highway, looking for the migra patrol. They noticed her and started coming closer.";
    text_capitulo03[27]="- We gotta go!-, one o guys yelled, and they all started running back. The girls stayed with Tita.";
    text_capitulo03[28]="Tic tac, tic tac... Amalia was never afraid, or so it seemed. It’s the thrill of the journey, she’d say.";
    text_capitulo03[29]="Tic tac, tic tac... How long does forever last? Sometimes, it’s just a second. ";
    text_capitulo03[30]="She put her hand in her pocket and felt the picture of her family and the letter for her dad.";
    text_capitulo03[31]="She mustered some energy and ran as fast as she could to reach the group, ";
    text_capitulo03[32]="she got entangled in the brush but kept running; she got cuts in her arms and legs but kept running. ";
    text_capitulo03[33]="She would soon see her mom and maybe even her dad -if he got released from jail-. She ran and ran, and fell! Tic tac...";
    text_capitulo03[34]="When she woke up she was alone. She didn’t know how long she was out. She missed the guys, ";
    text_capitulo03[35]="maybe they’re already on The beast. She cried her heart out. There are some really dark and painful moments in life,";
    text_capitulo03[36]=" that continuing without a grandmother’s prayer would be impossible. ";
    text_capitulo03[37]="After she told me these stories, like she was trying to get rid of them,";
    text_capitulo03[38]="Amalia asked me to close my eyes and imagine our lives after we’d reach the north.";
    text_capitulo03[39]="She had very nice things to imagine of her own making. ";    
    
    
    var text_capitulo04 = new Array();
	text_capitulo04[0]="The pollero is coming. -We’ll travel by night, it’s safer. They just cannot catch us we all know what we’re doing is illegal. "; 
    text_capitulo04[1]="So everybody hush up and stay still until I say otherwise. Oh! And don’t go anywhere, haha!-, he said with a laugh before leaving.";
    text_capitulo04[2]="That laughter still echoes in my head. His voice is rough and his eyes penetrating.";
    text_capitulo04[3]=" A killer’s look, mom would say -you can’t trust him-. ";
    text_capitulo04[4]="His presence frightens me: leather boots, steel point, ";
    text_capitulo04[5]="gun showing on his waist. How much did we pay him? It was a lot of money. How long since he left?";
    //scena 2
    text_capitulo04[6]="One on top of the other, all crumpled up inside the van: mom, brother, Amalia, another four people and me trying to get some sleep and take the least space possible. But we simply can’t; it’s just too tight.";    
    //scena 3
    text_capitulo04[7]="From my tiny corner I keep thinking about Tita, the African babies, our own destiny. My back is really killing me. ";    
    text_capitulo04[8]="It’s been two days already in the desert, no water, no food, 	getting to the end of our rope.";
    text_capitulo04[9]="The road has been tough but as Amalia says: what matters is to make it.";
    text_capitulo04[10]="-Don’t think about the way-, mom keeps telling us, -think about your grandpa’s hug-.";
    text_capitulo04[11]="Her strength has helped us cross El Salvador, Guatemala, Mexico.";
    text_capitulo04[12]="We’re getting closer to the border but the fear hasn’t gone away. I’m fully aware I’m a coward. ";
    text_capitulo04[13]="It’s just wedged in my mind and I feel it deep in my bones. I ache all over. I’m not like my mom or Amalia,";
    text_capitulo04[14]="this journey northbound without a passport is harder than I expected.";
    text_capitulo04[15]="More like a suspense or horror film. You really don’t know what’s happening next.";
    //scena 4
    text_capitulo04[16]="Tic tac, tic tac... Dawn is coming and I can’t sleep. Minutes turn into hours. I can feel the strong desert winds hit the sides of the van. ";
    text_capitulo04[17]="The coyote howls seem quite close. And from the darkness, footsteps, getting closer.";
    text_capitulo04[18]="Tic tac, tic tac... The pollero is coming, that’s gotta be him. Crack! Crack! It’s been a loooong time since he left.";
    text_capitulo04[19]="Each second feels like an eternity. Crack! Dry twigs breaking under a heavy body that lumbers around in the sand.";
    text_capitulo04[20]="Dry twigs breaking under a heavy body that lumbers around in the sand. Crack! It’s 4:00 AM and he hasn’t returned. ";
    text_capitulo04[21]="Crack! We lost an entire night. It’s actually more than one person walking around. The pollero is not alone...";
    text_capitulo04[22]="Between the deafening echo of the wind, the unbearable cold and the crack crack around us, I feel desperate.";
    text_capitulo04[23]="My teeth are clattering loudly. I’m shaking, out of control. I want to scream at him, make him realise how irresponsible he is!";
    text_capitulo04[24]="Our lives are in his hands and he seems not to care, actually he doesn’t care at all!";
    text_capitulo04[25]="My eyes avoided him since the beginning and now beg to find his. I’m crying! Even though I’m afraid of him, ";
    text_capitulo04[26]="knowing he’s here to guide us through the desert makes me feel safer. Crack! Crack! ";
    //scena 5
    text_capitulo04[27]="What is it now? Multiple ideas overloading my head, similar to what I experienced when we started getting blackmailed at my mom’s restaurant. ";
    text_capitulo04[28]="That’s when my family’s ordeal began. Week after week for over two years, paying to stay alive. ";
    text_capitulo04[29]="Coming back from school became a torture. There was always bad news.";
	text_capitulo04[30]="I barely finished third grade. -Mom, what if we die?-, I asked her once.";
	text_capitulo04[31]="She broke down. It was really hard to leave that place but we did it.";
	text_capitulo04[32]="This is the road to our family’s freedom. Tic tac, tic tac… Why did he leave us here?! - I yell. -Shush, Gabriela!-.";
	text_capitulo04[33]="My mom scolds me. -Hush and duck, kid-.";
	text_capitulo04[34]="-Some men are coming- Says Amalia quietly. My head spins and I feel fainting, out of breath. I have a bad feeling. Crack! Crack!";
	text_capitulo04[35]="Flash lights blinding our sight. It is not the pollero . It’s the Border Police. -We’re done!-, my brother says. -This is the end of the road!-.";
	text_capitulo04[36]="After the pollero left us, got drunk somewhere and mentioned us to someone, flashing lights blinding us: -Hands up! Border Police!- it all happened in seconds. -You’re under arrest!-, ";
	//scena 6
	text_capitulo04[37]="banging on the van. -All right, move it! We don’t have all day! Men on one side, women on the other, shoes out, belts,";
	text_capitulo04[38]="we’re doing a body search-... they broke down our group. My fear became a reality. Mom went to the women’s area, my brother to the men’s area and I was sent to the kids’ one.";
	text_capitulo04[39]="I didn’t see Amalia again. The lies one hears when preparing were her demise: ";
	text_capitulo04[40]="Don’t carry your documents because if they catch you they’ll know where you’re from .";
	text_capitulo04[41]="The worst thing you can do is losing your documents, and she did. ";
	text_capitulo04[42]="I heard she was taken to a detention center while they identified her. I don’t know what will happen to her. ";
	text_capitulo04[43]="There are people there who have been waiting for months. Poor, dear Amalia, is she afraid now?";
    
    
    var text_capitulo05 = new Array();
	text_capitulo05[0]="There is a planet on which its dominant inhabitants call themselves humans. These beings have a tendency to differentiate themselves from others, based on the concept of evolution."; 
    text_capitulo05[1]="First from other species, compared to which they believe to have a higher consciousness.";
    text_capitulo05[2]="But also amongst themselves, to determine who is the strongest. They divide themselves along ideas of body types, languages, skin tone,";
    text_capitulo05[3]="the kind of foods they prepare... And thus, among self-imposed categories, they created their countries. ";
    text_capitulo05[4]="Imaginary lines mark what they call borders. According to the side of the border on which you find yourself you will be more or less fortunate.";
    text_capitulo05[5]="They have guards, checkpoints and weapons to protect them,";
    text_capitulo05[6]="the idea being that no one should cross a border without being invited to do so. ";
    text_capitulo05[7]="But many try... some of them manage to cross them, ";
    text_capitulo05[8]="and a lot of them don’t.";
    //scena 2
    text_capitulo05[9]="We are staying here. We lost our north… for now. That’s how I met Luis, telling stories in a shelter in Reynosa.";
    text_capitulo05[10]="He can barely read or write but is a skilled narrator of beautiful stories.";
    text_capitulo05[11]="The wordsmith uses his whole tall and skinny body to convey the tale while moving through the room,";
    text_capitulo05[12]="saying his grandpa taught him his art. His big, open smile is a sort of beacon these days.";
    text_capitulo05[13]="Luis is a boy from Quiché who crossed the border with Guatemala via Tapachula.";
    //scena 3
    text_capitulo05[14]="Tired of the poverty of his community, of struggling to put some bread on the table, but mostly of the abusive way in which his stepfather treated his mother.";
    text_capitulo05[15]="He made a plan, borrowed money, got into a huge debt, $10,000 at 10% interest.";
    text_capitulo05[16]="He would cross the borders, up to the U.S., and start working with his uncle.";
    text_capitulo05[17]="Life is easier there, you can work and get paid in dollars, he would then send for his mom and pay what he owed.";
    text_capitulo05[18]="A master plan! Everything was going accordingly, he almost made it to McAllen. ";
    text_capitulo05[19]="Almost, but not quite. Something didn’t work: ";
    text_capitulo05[20]="flashing lights in his face, blinding his sight. And he stayed on this side. ";
    text_capitulo05[21]="We’re together for now. Luis is my new friend on the journey. ";
    text_capitulo05[22]="I was sad and lonely, and his stories made me think, I can dream and smile again.";
    //scena 4
    text_capitulo05[23]="There are other creatures on that same planet where humans live: birds that roam the skies at their will and ";
    text_capitulo05[24]="migrate when it gets too hot or too cold where they are, when the foliage starts dwindling or the snow covers the fields.";
    text_capitulo05[25]="here are new trees and new friends of different colours where they’re heading, and they’ll be able to nest.";
    text_capitulo05[26]="It is a natural order, and animals don’t have too much difficulty finding harmony.";
    text_capitulo05[27]="Fish can also travel around, following the sea currents...";
    //scena 5
    text_capitulo05[28]="Can you imagine some fish telling the others ‘Hey you, with the blue stripes! ou cannot cross past that sign there’? Haha.";
    text_capitulo05[29]="We share a laugh, Luis and me. For a moment I dream am not a human ";
    text_capitulo05[30]="and I can leave behind all those imaginary lines called borders, ";
    text_capitulo05[31]="turn into a bird and fly wherever I please with mom and my brother, with Luis and Amalia.";
    text_capitulo05[32]="Luis helps me forget my fears...";
    //scena 6
    text_capitulo05[33]="- All right! Listen everybody! Quit it with the storytelling and get ready because you’re being picked up now-, yelled the Sergeant, cutting short Luis’ tale ";
    text_capitulo05[34]="of planets and migrating fish, and went through the list: López, Lemus, Flores, Cruz… Luis Cruz. ";
    text_capitulo05[35]="It was the last time I saw him, I gave him a big, long hug.";
    text_capitulo05[36]="And I cried. -Another friend I lose-, I told him. -No-, he said. -Just another friend- and smiled.";
    
    
    var text_capitulo06 = new Array();
	text_capitulo06[0]="The way there: 40 days of fear and vertigo. The way back: a 40-hour ride on an air conditioned bus with its own bathroom."; 
    text_capitulo06[1]="With all that comfort, I couldn’t peel my face from the big window. ";
    text_capitulo06[2]="I wanted to see the other route, the one those allowed to cross the line that way make.";
    //scena 2
    text_capitulo06[3]="On the way I thought about Amalia, Luis and Tita; about the Africans and the Cubans’ stories.";
    text_capitulo06[4]="How many people would make it through and how many wouldn’t?";
    text_capitulo06[5]="My grandpa, when would I be able to see him? I felt frustrated, fancy bus ride notwithstanding.";
    text_capitulo06[6]="Mom was also very upset, I caught her sight on the window and noticed it.";
    text_capitulo06[7]="I embraced her. We stayed like that for a while... until I fell asleep in her arms.";
    //scena 3
    text_capitulo06[8]="Mom asked for political refugee status in Mexico but they denied it to us: -We cannot live in San Salvador-, she told the agent at the station ";
    text_capitulo06[9]="before we got in the bus. -I can’t do anything, ma’am-, the officer replied drily.";
    text_capitulo06[10]="- We have a death mark on our backs, we tried to escape extortion,";
    text_capitulo06[11]="and you know you pay for that with your life, please sir-, ";
    text_capitulo06[12]="mom continued, almost begging. - I am sorry, but it’s the law-. ";
    text_capitulo06[13]="Thus sealing our destiny to return to El Salvador. ";
    text_capitulo06[14]="It takes so long to reach a border and so little to go back! It seems like a joke.";
    text_capitulo06[15]="After such a journey you are at the starting point";
    text_capitulo06[16]="but just more vulnerable. At this point, who could help us?";
    //scena 4
    text_capitulo06[17]="We looked for an answer in a government program for the returned. Mom registered us hoping to get us some kind of protection.";
    text_capitulo06[18]="They listened to us there, we talked to a psychologist and I told him all my stories.";
    text_capitulo06[19]="We also received training and advice on where to live and how to proceed.";
    text_capitulo06[20]="The main thing was changing cities. Now we’re going to Usulután.";
    //scena 5
    text_capitulo06[21]="Before leaving I contacted Luis to tell him our good news: - I’m working as a farmhand to pay back the loan-, he told me.";
    text_capitulo06[22]="No chance to study with such a debt! I have to pay $230 a month, but I’m hanging in here,";
    text_capitulo06[23]="working hard and steady I think I can make it. I’m still young and have the time-, he said.";
    text_capitulo06[24]="I haven’t heard anything about Amalia. I don’t know if she was deported to Honduras or she’s still in the shelter,";
    text_capitulo06[25]="waiting to be identified and registered in the system. I do remember her smile, her tender voice,";
    text_capitulo06[26]="her harrowing journey and how she would soothe me with her visions for our life in the north.";
    //scena 6
    text_capitulo06[27]="I see her when I look at the stars. The fearless girl, facing her journey with a confident stride;";
    text_capitulo06[28]="she made it through and like a free migrating bird, is nesting now with her mom and dad.";
    text_capitulo06[29]="Life is not easy upon return. The future is still uncertain for us. We risked everything and we lost.";
    text_capitulo06[30]="There are so many things you love but had to leave ‘behind’, and so many others that hurt";
    text_capitulo06[31]="you every time they come back to your present, that it is hard to reconnect with an idea of normalcy."; 
    text_capitulo06[32]="We keep trying, anyway. In our new home I’ll go back to school,";
    text_capitulo06[33]="I’ll have to redo the year I left unfinished, but I like school.";
    text_capitulo06[34]="Mom will stay in the job placement program until she finds something, ";
    text_capitulo06[35]="my brother already has. He’s working at a restaurant.";
    text_capitulo06[36]="We choose to believe it is possible to build a future for us in our own country,";
    text_capitulo06[37]="that God has not forgotten about us. Hopefully!";
    text_capitulo06[38]="Because if nothing comes up in the next few months -mom has already said-, we’ll go back to the North.";    
    
    
    //waits 5 seconds after all is available to show story   
   	setTimeout(function() {
    	$("#cargando-historia").hide();
    	$(".wrapper").show();
  	}, 5000);	    
});