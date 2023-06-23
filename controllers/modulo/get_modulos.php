<?php

include_once '../../app.php';
use Models\Modulos;
$objModulos = new Modulos();
if($_SERVER["REQUEST_METHOD"] == "GET"){


    $id= $_GET['id'];
    $Modulos= $objModulos->getModulosByTemas($id);
    header('Content-Type : application/json');

    echo json_encode($Modulos);

}else{

    echo 'No se logro relizar la consulta';
}


?>