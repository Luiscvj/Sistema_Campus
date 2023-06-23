<?php

use Models\Temas;

$objTema = new Temas();

$dataTema= $objTema->getAllTema();

?>




<div class="container mt-3 text-center">
    <div class="card">
        <h5 class="card-header text-center">REGISTRO MODULO</h5>
        <div class="card-body">
            <form id="formModulo">
                <div class="container">
                    <div class="row bg-light p-1">
                                <div class="col">
                                    <label  class="form-label">Tema al que pertenece </label>
                                    <select type="text" class="form-control"  name="id_tema">
                                    <option value="" selected>Elige un modulo</option>

                                    <?php
                                        foreach($dataTema as $key)
                                           {

                                        
                                    ?>
                                 
                                     <option value="<?php echo $key['id_tema']?>"><?php echo $key['tema_nombre']?></option>
                                    <?php
                                    
                                            };
                                    ?>
                                    </select>
                                </div> 

                                <div class="col">
                                    <label  class="form-label">Nombre Modulo</label>
                                    <input type="text" class="form-control" placeholder="Nombrdel del Modulo"  name="modulo_nombre">
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
