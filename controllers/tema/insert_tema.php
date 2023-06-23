<?php
include_once '../../app.php';

use Models\Temas;
$objTemas = new Temas();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $DATA = json_decode(file_get_contents('php://input'),true);
    $objTemas->postDataTema($DATA);

}


?>