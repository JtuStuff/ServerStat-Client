<?php 

$date = new DateTime($data['TimeStamp']);

$status = $data['Status'];
if ($status == "Online"){
$color = 'color:#39ff14';}
else if ($status == "Offline"){
$color = 'color:#ff0000';}
else{
$color = 'color:#000000';}

$dt = $date->format('m/d/Y, g:i:s A');

?>
