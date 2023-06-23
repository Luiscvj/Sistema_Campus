
<?php
include_once '../../app.php';

  use Models\Unidades_Tematicas;


$objTematica = new Unidades_Tematicas();

if ($_SERVER["REQUEST_METHOD"] == 'POST'){

     $data= json_decode(file_get_contents('php://input'),true);
    echo var_dump($data);
 

}?>


<section id="content" >

    <div class="container">

        <div class="row align-items-center">
                <?php
                
                foreach($data as $key){

                
                
                ?>
                <div class="col listElements d-flex  justify-content-around">
                    <div class="card stackCard" style="width: 18rem;" >
                        <div class="card-header">

                            <img class="imgTematica rounded float-start" src="../images/tematica.jpg" width="250px" id="<?php echo $key['id_unidad_tematica']?>" class="card-img-top" alt="<?php echo $key['nombre_stack']?>">
                        </div>
                        <div class="card-body bg-light">
                            <h5 class="card-title text-center fw-bold fs-3 "><?php echo $key['nombre_unidad_tematica']?></h5>

                        </div>
                    </div>
                </div>

                <?php
                }
                ?>
           
        </div>

    </div>


</section>