<?php


$file='Lesem Laureano.pdf';

$file_url = dirname(__FILE__)."\\archivos\\$file";
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
readfile($file_url);

?>