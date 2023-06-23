<?php
include_once '../../app.php';
use Models\Topicos;
$objTopico = new Topicos();


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $DATA = json_decode(file_get_contents("php://input"),true);

    $objTopico->postDataTopico($DATA);

 }
?>