<?php
require_once ("inc/headeradministrador.php")

?>

<div class="container pull-left col-lg-2 col-md-3 col-sm-3 col-xs-12">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 " >
            <div class="panel-group" id="accordion">
            	<div class="panel1 panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Categorias</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                          
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="glyphicon glyphicon-plus">
                            </span>Reportes</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="">Diario</a> <span class="label label-success"></span>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="">Semanal</a> <span class="label label-success"></span>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="">Mensual</a> <span class="label label-success"></span>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="">Especifico</a> <span class="label label-success"></span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                 <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span class="glyphicon glyphicon-plus">
                            </span>Productos</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="">Alta</a> <span class="label label-success"></span>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="">Baja</a> <span class="label label-success"></span>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="">Modificacion/ACT</a> <span class="label label-success"></span>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="">Productos Eliminados</a> <span class="label label-success"></span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                 <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="glyphicon glyphicon-plus">
                            </span>Pedidos</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="">Abiertos</a> <span class="label label-success"></span>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="">Procesados</a> <span class="label label-success"></span>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="">Completados</a> <span class="label label-success"></span>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="">Cancelados</a> <span class="label label-success"></span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                 <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-plus">
                            </span>Ordenes</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="">Abiertas</a> <span class="label label-success"></span>
                                    </td>
                                    <td>
                                        <a href="">Completadas</a> <span class="label label-success"></span>
                                    </td>
                                    <td>
                                        <a href="">Canceladas</a> <span class="label label-success"></span>
                                    </td>
                                    <td>
                                        <a href="">Consulta Orden</a> <span class="label label-success"></span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                 <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><span class="glyphicon glyphicon-plus">
                            </span>Clientes</a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="">Mejores Clientes</a> <span class="label label-success"></span>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="">Cantidad de Visitas</a> <span class="label label-success"></span>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="">Alta Newsletter</a> <span class="label label-success"></span>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <a href="">Baja Newsletter</a> <span class="label label-success"></span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container col-lg-10 col-md-9 col-sm-9 col-xs-12">
  <h2>AQUI SE MOSTRARA TODAS LA INFORMACION DE LAS CONSULTAS</h2>
    <h2>AQUI SE MOSTRARA TODAS LA INFORMACION DE LAS CONSULTAS</h2>
      <h2>AQUI SE MOSTRARA TODAS LA INFORMACION DE LAS CONSULTAS</h2>
        <h2>AQUI SE MOSTRARA TODAS LA INFORMACION DE LAS CONSULTAS</h2>
          <h2>AQUI SE MOSTRARA TODAS LA INFORMACION DE LAS CONSULTAS</h2>
</div>
<section id="RegistrarProductos">
    <div class="modal fade" id="RegistroProducto"  role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <form class="form-horizontal">
          
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 align="center">Registrar Productos</h4>
          </div>
          <div class="modal-body">
          	 <div class="form-group">
              <div class="pull-left">
                <label for="SesionNombreProducto" class="col-lg-12 control-label" >Clave:</label>
              </div>
             
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="SesionClave" placeholder="Clave" name="">
                  <br>
                  <p ><button type="button"  class="btn btn-success"  data-dismiss="modal">Buscar</button> *La clave se usa para eliminar o modificar</p>
                  <h3></h3>
                </div>
                
            </div>
            <div class="form-group">
              <div class="pull-left">
                <label for="SesionNombreProducto" class="col-lg-12 control-label" >Nombre del Producto:</label>
              </div>
                <div class="col-lg-12">
                  <input type="text" class="form-control" id="SesionNombreProductoe" placeholder="Nombre Producto" name="">
                </div>
            </div>
            <div class="form-group">
              <div class="pull-left col-lg-6 col-sm-6 col-xs-6">
                <label for="SesionTipoPrenda" class="control-label" >Tipo Prenda:</label>
              </div>
              <div class="pull-left col-lg-6 col-sm-6 col-xs-6">
                <label for="SesionTalla" class=" control-label" >Talla:</label>
              </div>

              <div class="col-lg-6 col-sm-6 col-xs-6 pull-left">
            <SELECT NAME="ComboTipoPrenda" SIZE=1 class="form-control">
                <OPTION VALUE="link pagina 1">Seleccione...</OPTION>
                <OPTION VALUE="link pagina 2">opcion2</OPTION>
                <OPTION VALUE="link pagina 3">opcion3</OPTION>
                <OPTION VALUE="link pagina 4">opcion4</OPTION>
            </SELECT>
              </div>
                <div class="col-lg-6 col-sm-6 col-xs-6 pull-left">
            <SELECT NAME="ComboTalla" SIZE=1 class="form-control">
                <OPTION VALUE="link pagina 1">Seleccione...</OPTION>
                <OPTION VALUE="link pagina 2">opcion2</OPTION>
                <OPTION VALUE="link pagina 3">opcion3</OPTION>
                <OPTION VALUE="link pagina 4">opcion4</OPTION>
            </SELECT>
              </div>
            </div>
            <div class="form-group">
              <div class="pull-left col-lg-6 col-sm-6 col-xs-6">
                <label for="SesionSexo" class="control-label" >Sexo:</label>
              </div>
              <div class="pull-left col-lg-6 col-sm-6 col-xs-6">
                <label for="SesionColor" class=" control-label" >Color:</label>
              </div>

              <div class="col-lg-6 col-sm-6 col-xs-6 pull-left">
            <SELECT NAME="ComboSexo" SIZE=1 class="form-control">
                <OPTION VALUE="link pagina 1">Seleccione...</OPTION>
                <OPTION VALUE="link pagina 2">opcion2</OPTION>
                <OPTION VALUE="link pagina 3">opcion3</OPTION>
                <OPTION VALUE="link pagina 4">opcion4</OPTION>
            </SELECT>
              </div>
                <div class="col-lg-6 col-sm-6 col-xs-6 pull-left">
            <SELECT NAME="ComboColor" SIZE=1 class="form-control">
                <OPTION VALUE="link pagina 1">Seleccione...</OPTION>
                <OPTION VALUE="link pagina 2">opcion2</OPTION>
                <OPTION VALUE="link pagina 3">opcion3</OPTION>
                <OPTION VALUE="link pagina 4">opcion4</OPTION>
            </SELECT>
              </div>
            </div>
            <div class="form-group">

              <div class="pull-left col-lg-6 col-sm-6 col-xs-6">
                <label for="SesionPrecioCosto" class="control-label" >Precio Costo:</label>
              </div>
               <div class="pull-left col-lg-6 col-sm-6 col-xs-6">
                <label for="SesionPrecioVenta" class="control-label" >Precio Venta:</label>
              </div>

              <div class="pull-left col-lg-6 col-sm-6 col-xs-6">
                <input type="text" class="form-control" id="SesionPrecioCosto" placeholder="" name="">
              </div>
               <div class="pull-left col-lg-6 col-sm-6 col-xs-6">
                <input type="text" class="form-control" id="SesionPrecioVenta" placeholder="" name="">
              </div>
            </div>
            <div class="form-group">
              <div class="pull-left col-sm-12">
                 <label for="SesionDescripcion" class="control-label" >Descripcion:</label>
              </div>

              <div class="pull-left col-sm-12">
                <textarea rows="5" cols="60" class="form-control" id="SesionDescripcion">

              </textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="pull-left col-lg-2 col-sm-2 col-xs-2">
                 <label for="SesionProveedor" class="control-label" >Proveedor:</label>
              </div>
              <div class="pull-left col-lg-10 col-sm-10 col-xs-10">
                <input type="text" class="form-control" id="SesionProveedor" placeholder="" name="">
              </div>

            </div>

          </div>



          <div class="modal-footer" id="BotonesInicio">
            <div class="pull-center">
              <button type="button"  class="btn btn-success"  data-dismiss="modal">Enviar Registro</button>
              <button type="button"  class="btn btn-danger"  data-dismiss="modal">Eliminar Registro</button>
                    <button type="button" class="btn btn-primary"  data-dismiss="modal">Modificar Registro</button>
            </div>
      
          </div>
          </form>
        </div>
    </div>
  </div>
</section>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/toggled.js"></script>


