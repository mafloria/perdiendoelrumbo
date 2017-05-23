<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Perdiendo el Rumbo</title>
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">        
        <link href="textassets/animate.css" rel="stylesheet">
        <link href="textassets/style.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <h1>Perdiendo el Rumbo</h1>        

        <article>
            

            <p class="passage-audio">
                <audio id="passage-audio" class="passage" controls>
                    <!-- @todo WebM? -->
                    <source src="audio/test.mp3" type="audio/mp3">
                    <source src="audio/test.ogg" type="audio/ogg">
                    <source src="audio/test.wav" type="audio/wav">
                    <em class="error"><strong>Error:</strong> Your browser doesn't appear to support HTML5 Audio.</em>
                </audio>
            </p>
            <a href="javascript:void(0)" id="playAudio">Play</a>
            <a href="javascript:void(0)" id="pauseAudio">Pause</a>
            <p class="passage-audio-unavailable" hidden>
                <em class="error"><strong>Error:</strong> You will not be able to do the read-along audio because your browser is not able to play MP3, Ogg, or WAV audio formats.</em>
            </p>
            <span class="txt_sc1"></span>
            <?php /*
            <span class="tlt">
                <ul class="texts">
                    <li>In those days a decree went out from Caesar Augustus that all the world should be registered.</li> 
                    <li>This was the first registration when Quirinius was governor of Syria. </li>
                    <li>And all went to be registered, each to his own town. </li>
                    <li>And Joseph also went up from Galilee, from the town of Nazareth, to Judea, to the city of David, which is called Bethlehem, because he was of the house and lineage of David, to be registered with Mary, his betrothed, who was with child.</li> 
                    <li>And while they were there, the time came for her to give birth. </li>
                    <li>And she gave birth to her firstborn son and wrapped him in swaddling cloths and laid him in a manger, because there was no place for them in the inn.</li>

                    <li>And in the same region there were shepherds out in the field, keeping watch over their flock by night. </li>
                    <li>And an angel of the Lord appeared to them, and the glory of the Lord shone around them, and they were filled with fear.</li> 
                    <li>And the angel said to them, Fear not, for behold, I bring you good news of great joy that will be for all the people. </li>
                    <li>For unto you is born this day in the city of David a Savior, who is Christ the Lord. </li>
                    <li>And this will be a sign for you: you will find a baby wrapped in swaddling cloths and lying in a manger.</li> 
                    <li>And suddenly there was with the angel a multitude of the heavenly host praising God and saying,</li>
                
                    <li>Glory to God in the highest,</li>
                    <li>and on earth peace among those with whom he is pleased!</li>
                
                    <li>When the angels went away from them into heaven, the shepherds said to one another, Let us go over to Bethlehem and see this thing that has happened, which the Lord has made known to us.</li> 
                    <li>And they went with haste and found Mary and Joseph, and the baby lying in a manger.</li> 
                    <li>And when they saw it, they made known the saying that had been told them concerning this child. 18And all who heard it wondered at what the shepherds told them.</li> 
                    <li>But Mary treasured up all these things, pondering them in her heart.</li> 
                    <li>And the shepherds returned, glorifying and praising God for all they had heard and seen, as it had been told them.</li>
                </ul>
            </span>
            
            <h1 class="tlt">
                <ul class="texts">
                    <li data-out-effect="fadeOut" data-out-shuffle="true">Some Title</li>
                    <li data-in-effect="fadeIn">Another Title</li>
                </ul>
            </h1>   
             */ ?>             
        </article>


    </body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="textassets/jquery.fittext.js"></script>
<script src="textassets/jquery.lettering.js"></script>
<script src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script>
<script src="js/jquery.textillate.js"></script>
<script src="js/functions.js"></script>
    
    
</html>
