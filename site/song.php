<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

$data = file_get_contents('http://ftpd:8024/data/latest.txt');
echo $data;
?>
