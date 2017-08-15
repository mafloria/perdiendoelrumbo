<?php 
header("Content-disposition: attachment; filename=el-salvador_tomadores_decisiones-es.pdf");
header("Content-type: application/pdf");
readfile("pdf/el-salvador_tomadores_decisiones-es.pdf");
?>