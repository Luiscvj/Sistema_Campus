<?php

include_once '../../app.php';
use Models\Capitulos;
$objCapitulos = new Capitulos();
if($_SERVER["REQUEST_METHOD"] == "GET"){


    $id= $_GET['id'];
    $capitulos= $objCapitulos->getCapitulosByUnidades($id);
    header('Content-Type : application/json');

    echo json_encode($capitulos);

}else{

    echo 'No se logro relizar la consulta';
}


?>