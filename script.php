<?php

if (isset($_GET["index"])) {
  $index = $_GET["index"];
}

if (isset($discs[$index])) {
  $selectCard = $discs["index"];

  echo json_encode($selectCard);
}

$discs = json_decode(file_get_contents('discs.json'), true);
header('Content-Type: application/json');


echo json_encode($discs);
