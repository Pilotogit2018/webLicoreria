
<div class="right_col" role="main">
    <div class="">
        <div class="row">
        <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de Marcas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?php echo base_url();?>index.php/marca/agregarMarcaLte">Agregar Marca</a>
                            <a class="dropdown-item" href="<?php echo base_url();?>index.php/marca/deshabilitados">deshabilitados</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nombre</th>
                            <th>FechaRegistro</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php
                            $indice=1;
                                foreach($marca->result() as $row)//la variable categoria tiene que se igual al controlador categoria linea 9
                                {
                            ?>
                            <tr>
                                <td><?php echo $indice?></td>
                                <td><?php echo $row->nombre; ?></td>
                                <td><?php echo $row->fechaRegistro; ?></td>
                                <!--COLUMNA MODIFICAR-->
                                <td class="text-center">
                                        <?php
                                            echo form_open_multipart('marca/modificar');//manda al controlador categoria metoodo eliminarbd
                                        ?>
                                            <input type="hidden" name="idmarca" value="<?php echo $row->idMarca;?>">
                                            <button type="submit" class="btn btn-outline-warning">modificar</button>
                                        <?php
                                            echo form_close();
                                        ?>
                                </td>
                                <!--COLUMNA ELIMINAR SOFTDELETE-->
                                <td class="text-center">
                                        <?php
                                            echo form_open_multipart('marca/deshabilitarbd');//manda al controlador categoria metoodo deshabilitarbd
                                        ?>
                                            <input type="hidden" name="idmarca" value="<?php echo $row->idMarca;?>">
                                            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                        <?php
                                            echo form_close();
                                        ?>
                                </td>
                            </tr>
                            
                            <?php
                                    $indice++;
                                }
                            ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
        </div>
    </div>
</div>