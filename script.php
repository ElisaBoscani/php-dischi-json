<?php 
$discs = json_decode(file_get_contents('discs.json'), true);
header('Content-Type: application/json');


echo json_encode($discs);