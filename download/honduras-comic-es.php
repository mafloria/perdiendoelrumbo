<?php 
header("Content-disposition: attachment; filename=honduras_comic-es.pdf");
header("Content-type: application/pdf");
readfile("pdf/honduras_comic-es.pdf");
?>