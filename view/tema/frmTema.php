
<?php
    use Models\Capitulos;

    $objCa = new Capitulos();

    $dataCapitulos = $objCa->getAllCapitulo();

 



?>




<div class="container mt-3 text-center">
    <div class="card">
        <h5 class="card-header text-center">REGISTRO TEMA</h5>
        <div class="card-body">
            <form id="formTema">
                <div class="container">
                    <div class="row bg-light p-1">
                                <div class="col">
                                    <label  class="form-label">Capitulo al que pertenece </label>
                                    <select type="text" class="form-control"  name="id_capitulo">

                                    <option value="" selected>Elige el capitulo</option>
                                    <?php   
                                        foreach ($dataCapitulos as $key ) {

                                                                         
                                    ?>

                                    <option value="<?php echo  $key['id_capitulo']?>" selected><?php echo $key['capitulo_name']?></option>

                                   <?php
                                                                  }
                                   ?>

                                   
                                    </select>
                                </div> 

                                <div class="col">
                                    <label  class="form-label">Nombre Tema</label>
                                    <input type="text" class="form-control" placeholder="Nombrdel del Tema"  name="tema_nombre">
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
