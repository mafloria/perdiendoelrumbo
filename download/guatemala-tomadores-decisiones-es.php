<?php 
header("Content-disposition: attachment; filename=guatemala_tomadores_decisiones-es.pdf");
header("Content-type: application/pdf");
readfile("pdf/guatemala_tomadores_decisiones-es.pdf");
?>