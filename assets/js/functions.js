// Browser detection for when you get desperate. A measure of last resort.

// http://rog.ie/post/9089341529/html5boilerplatejs
// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }

// Uncomment the below to use:
// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);


function initPage(){

	// your functions go here

	console.log('page loaded');

};


/*
 * Perdiendo el Rumbo - trasmedia
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
		$('#content-section, .section-site').css('height', windowHeight);		
	};
//*********** end - window size to fix content

//*********** scroll management - used for prevent scrolling when location detail window is opened
	//$(window).disablescroll({handleWheel:false});
	
//*********** end - scroll management 
	
//*********** scrolls to an href section exactly
	    $('a[href*="#"]:not([href="#"])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html, body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
		});
//*********** end - scrolls to an href section exactly	
	
	var vid = document.getElementById("passage-audio");
	var txt_sc1_line = 0;
	var pausePhrases = false;
	var timer = new Array();
	var delayCounter = 1;
	
	$("#playAudio").click(function(){
		vid.play();
		if(txt_sc1_line==0){
			$(".txt_sc1").html(text_sc1[0]);
			$(".txt_sc1").textillate('start');
			txt_sc1_line++;
		}
		pausePhrases = false;
		writesentences();	
	});
	
	$("#pauseAudio").click(function(){
		vid.pause();
		//$('.tlt').textillate('pause');
		pausePhrases = true;
		console.log("PAUSE: "+txt_sc1_line);		
		
		for(j=1; j<=18; j++){clearTimeout(timer[j]);}
		delayCounter = 1;
		txt_sc1_line++;
	});
	
	
	
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
	text_sc1[0]="In those days a decree went out from Caesar Augustus that all the world should be registered."; 
    text_sc1[1]="This was the first registration when Quirinius was governor of Syria. ";
	text_sc1[2]="And all went to be registered, each to his own town. ";
    text_sc1[3]="And Joseph also went up from Galilee, from the town of Nazareth, to Judea, to the city of David, which is called Bethlehem, because he was of the house and lineage of David, to be registered with Mary, his betrothed, who was with child."; 
    text_sc1[4]="And while they were there, the time came for her to give birth. ";
    text_sc1[5]="And she gave birth to her firstborn son and wrapped him in swaddling cloths and laid him in a manger, because there was no place for them in the inn.";
    text_sc1[6]="And in the same region there were shepherds out in the field, keeping watch over their flock by night. ";
    text_sc1[7]="And an angel of the Lord appeared to them, and the glory of the Lord shone around them, and they were filled with fear."; 
    text_sc1[8]="And the angel said to them, Fear not, for behold, I bring you good news of great joy that will be for all the people. ";
    text_sc1[9]="For unto you is born this day in the city of David a Savior, who is Christ the Lord. ";
    text_sc1[10]="And this will be a sign for you: you will find a baby wrapped in swaddling cloths and lying in a manger."; 
    text_sc1[11]="And suddenly there was with the angel a multitude of the heavenly host praising God and saying,";               
    text_sc1[12]="Glory to God in the highest,";
	text_sc1[13]="and on earth peace among those with whom he is pleased!";                
    text_sc1[14]="When the angels went away from them into heaven, the shepherds said to one another, Let us go over to Bethlehem and see this thing that has happened, which the Lord has made known to us."; 
    text_sc1[15]="And they went with haste and found Mary and Joseph, and the baby lying in a manger."; 
    text_sc1[16]="And when they saw it, they made known the saying that had been told them concerning this child. 18And all who heard it wondered at what the shepherds told them."; 
    text_sc1[17]="But Mary treasured up all these things, pondering them in her heart."; 
    text_sc1[18]="And the shepherds returned, glorifying and praising God for all they had heard and seen, as it had been told them.";
	
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