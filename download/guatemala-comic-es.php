<?php 
header("Content-disposition: attachment; filename=guatemala_comic-es.pdf");
header("Content-type: application/pdf");
readfile("pdf/guatemala_comic-es.pdf");
?>