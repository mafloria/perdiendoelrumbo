<?php 
header("Content-disposition: attachment; filename=el-salvador_comic-es.pdf");
header("Content-type: application/pdf");
readfile("pdf/el-salvador_comic-es.pdf");
?>