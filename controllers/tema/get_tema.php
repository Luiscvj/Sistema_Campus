<?php

include_once '../../app.php';
use Models\Temas;
$objTemas = new Temas();
if($_SERVER["REQUEST_METHOD"] == "GET"){


    $id= $_GET['id'];
    $Temas= $objTemas->getTemasByCapitulos($id);
    header('Content-Type : application/json');

    echo json_encode($Temas);

}else{

    echo 'No se logro relizar la consulta';
}


?>