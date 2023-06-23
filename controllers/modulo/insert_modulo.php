<?php
include_once("../../app.php");
use Models\Modulos;
$objModulo = new Modulos();

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $DATA = json_decode(file_get_contents("php://input"),true);
    $objModulo->postDataModulo($DATA);

}
?>