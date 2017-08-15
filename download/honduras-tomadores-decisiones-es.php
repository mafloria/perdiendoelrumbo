<?php 
header("Content-disposition: attachment; filename=honduras_tomadores_decisiones-es.pdf");
header("Content-type: application/pdf");
readfile("pdf/honduras_tomadores_decisiones-es.pdf");
?>