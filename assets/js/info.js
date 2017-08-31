/*
 * Buscando el Norte - Transmedia
 *
 * Copyright (c) 2017 
 * Date: May 22 - 2017
 * Author: Margaret Florian (mafloria - UXDevco)
 */
	var current_scena_number = 1;
	var current_chapter = "capitulo01";
	var current_image_counter = 1;
	var stop_last_image = false;
	var last_image_displayed = "";
	
	//initialice global vars 
	windowHeight = $(window).innerHeight();
	windowWidth = $(window).innerWidth();	  
	

//document ready	
$(document).ready(function(){	
	$(".main-header > h1").hide();	
	
//*********** window size to fix content	   
	setHeight();	
		  
	$(window).resize(function() {
		windowHeight = $(window).innerHeight();
		windowWidth = $(window).innerWidth();
		setHeight();
	});
	//adjust sections to the browser height
	function setHeight() {		
		
		//general containers
		$('#content-section').css('height', windowHeight);
		$('#content-section .section-site').css('height', windowHeight);		
		$('#content-section .section-site').css('width', windowWidth);		
		
		//background images
		$('.background-section img').css('height', windowHeight);
		//$('.background-section img').css('width', windowWidth);
		
		$(".portrait-intro").css('width', windowWidth);
		$(".main-header").css('width', windowWidth);
	};
	
	//for movile change orientation

	$(window).on("orientationchange",function(){
		setTimeout(function () {
	  		//alert("orientacion");
	  		windowHeight = $(window).innerHeight();
			windowWidth = $(window).innerWidth();
	  		setHeight();
		}, 200);
	});
	
	var isMobile = window.matchMedia("only screen and (max-width: 760px)"); 
//*********** end - window size to fix content
	 
//*********** scrolls to an href section exactly - just for biggest navegation
    $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      $(".submenu").hide();
	      
	      var target = $(this.hash);		      
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');	     
	      let_audios_text_begins(); //restart audios and text if the user returns start all again
	      //if(this.hash.slice(1)=="introduccion" || this.hash.slice(1)=="firmapeticion" || this.hash.slice(1)=="creditos" || this.hash.slice(1)=="sobrenosotros" || this.hash.slice(1)=="historias") {
		  	
		  		history_page_animate = 0;
		  		if(this.hash.slice(1)=="firmapeticion")history_page_animate = 1000; 			    			    	
		    	if(progress_bar>=100){
		    		$(".intro-chapter-menu").show(); $(".intro-chapter-startbtn").hide();
		    		$(".section-content-wrap").css("width", "92%");
			  		$(".section-content-wrap").css("float", "right");
			  		$(".side-nav-section").show();
			  		$(".chapter-nav").show(); 
			  		$("body").attr('style', 'background-image: none !important');
			  		$("body").css({ 'background-color': 'black' });			  		
     				$("#back-to-capitulo06").hide(); //hide back arrow because there are all the direct access to each chpater     				
		    	}
		    	else{ /*$(".intro-chapter-menu").hide();*/ $(".intro-chapter-startbtn").show(); }
		    	
		    	$(".main-header > h1").hide();//hide image page title
		    	$(".chapter-title").hide(); //hide chpaters title
		    	$("#nav-menu").show();//show main menu
				$("#imgbg-"+this.hash.slice(1)).show();
		  }
	    
	});
//*********** end - scrolls to an href section exactly	

//********** actions
	$("#ben-main-menu").click(function(){
		$(".submenu").toggle('slow');
	});			
	
//********** end - actions


	    
});