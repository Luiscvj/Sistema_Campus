<?php
use Models\Modulos;

$objModulo = new Modulos();
$dataModulo = $objModulo->getAllModulo();
?>


<div class="container mt-3 text-center">
    <div class="card">
        <h5 class="card-header text-center">REGISTRO TOPICO</h5>
        <div class="card-body">
            <form id="formTopico">
                <div class="container">
                    <div class="row bg-light p-1">
                                <div class="col">
                                    <label  class="form-label">Modulo al que pertenece </label>
                                    <select type="text" class="form-control"  name="id_modulo">

                                    <option value="" selected>Elige el stack</option>
                                    <?php   
                                        foreach ($dataModulo as $key ) {
                                                                         
                                    ?>

                                    <option value="<?php echo  $key['id_modulo']?>" selected><?php echo $key['modulo_nombre']?></option>

                                   <?php
                                                                  }
                                   ?>

                                   
                                    </select>
                                </div> 

                                <div class="col">
                                    <label  class="form-label">Nombre topico</label>
                                    <input type="text" class="form-control" placeholder="Nombre topico"  name="topico_nombre">
                                </div>
                               
                    </div>
                </div>
                <div class="container text-center bg-light p-1">
                    <button type="submit" class="btn btn-success" id="btnPais">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
</div>

