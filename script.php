<?php
$mysqli = new mysqli('localhost','root','','images') or die($mysqli->connect_error);
$table = 'upload';

$extentions = array('jpg','png','gif','jpeg');

$file_ext = end($file_ext);


$file_ext = end($file_ext);

header('Access-Control-Allow-Origin: *');

var_dump($_FILES);