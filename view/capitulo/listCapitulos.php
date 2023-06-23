
<?php
include_once '../../app.php';

  use Models\Capitulos;
  $dataCap=0;

$objCapitulo = new Capitulos();

if ($_SERVER["REQUEST_METHOD"] == 'POST'){

     $dataCap = json_decode(file_get_contents('php://input'),true);

}

?>


<section id="content" >

    <div class="container">

        <div class="row align-items-center">
                <?php
                
                foreach($dataCap as $key){
                 
                
                ?>
                <div class="col listElements d-flex  justify-content-around">
                    <div class="card stackCard" style="width: 18rem;" >
                        <div class="card-header">

                            <img class="imgCapitulo rounded float-start" src="../images/capitulo.jpg" width="250px" id="<?php echo $key['id_capitulo']?>" class="card-img-top" alt="<?php echo $key['capitulo_name']?>">
                        </div>
                        <div class="card-body bg-light">
                            <h5 class="card-title text-center fw-bold fs-3 "><?php echo $key['capitulo_name']?></h5>

                        </div>
                    </div>
                </div>

                <?php
                }
                ?>
           
        </div>

    </div>


</section>