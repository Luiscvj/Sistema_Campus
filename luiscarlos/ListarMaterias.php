<?php

include_once __DIR__.'../../app.php';

include_once __DIR__ . '/headerLuis.php';



?>


<?php
include_once __DIR__.'../../templates/navbar.php';
include_once __DIR__.'../../templates/sidebar.php';

?>



<?php

use Models\Stack_Tecnologico;

$objStack = new Stack_Tecnologico();
$data_stack = $objStack->getAllStack();


?>
<!-- MAIN -->
<section id="content" >

    <div class="container">

        <div class="row align-items-center">
                <?php
                
                foreach($data_stack as $key){

                
                
                ?>
                <div class="col listElements d-flex  justify-content-around">
                    <div class="card stackCard" style="width: 18rem;" >
                        <div class="card-header">

                            <img  src="<?php echo  "../images/". $key['link_image']?>"  id="<?php echo $key['id_stack_tecnologico']?>" class="card-img-top" alt="<?php echo $key['nombre_stack']?>">
                        </div>
                        <div class="card-body bg-light">
                            <h5 class="card-title text-center fw-bold fs-3 "><?php echo $key['nombre_stack']?></h5>
                            <p class="card-text text-center  fw-medium fs-5"><?php echo $key['descripcion_stack']?></p>
                        </div>
                    </div>
                </div>

                <?php
                }
                ?>
           
        </div>

    </div>


</section>

<?php

    include_once __DIR__ . '../../templates/footer.php';

    
?>