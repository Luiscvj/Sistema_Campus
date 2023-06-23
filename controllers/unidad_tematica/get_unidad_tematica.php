<?php
include_once '../../app.php';

use Models\Unidades_Tematicas;
$objTematica = new Unidades_Tematicas();
if($_SERVER["REQUEST_METHOD"] === 'GET'){
    $id = $_GET['id'];
    $dataStacks = $objTematica->getUnidadesByStack($id);
    
   header('Content-Type: application/json');

   echo json_encode($dataStacks);



}else{
    echo 'no se realizo la solicitud';
}



?>