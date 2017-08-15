<?php 
header("Content-disposition: attachment; filename=buscando-el-norte.pdf");
header("Content-type: application/pdf");
readfile("pdf/buscando-el-norte.pdf");
?>