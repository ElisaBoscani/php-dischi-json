<?php
if (isset($_GET["index"])) {
  $index = $_GET["index"];
}


$selectCard = $discs["index"];


echo json_encode($selectCard);
