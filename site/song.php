<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

$data = file_get_contents('http://webftp/data/latest.txt');
echo $data;
?>
