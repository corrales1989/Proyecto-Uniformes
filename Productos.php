<?php
require_once 'inc/header.php';

?>


 <section id="InicioSecion">

      <div class="modal fade" id="IniciarSecion"  role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <form class="form-horizontal">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 align="center">Iniciar Sesión</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="SecionUsuario" class="col-lg-3  col-sm-3 hidden-sm-down control-label">Usuario:</label>
                <div class="col-lg-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="SecionUsuario" placeholder="Usuario" name="">
                </div>
            </div>
            <div class="form-group">
              <label for="SecionContraseña" class="col-lg-3 col-sm-3 hidden-sm-down control-label">Contraseña:</label>
                <div class="col-lg-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="SecionContraseña" placeholder="Contraseña" name="">
                </div>
                <div class="pull-right">
                   <div class="col-lg-3 col-sm-3 col-xs-12">
                  <button type="button" id="BotonRegistrar"  class="btn btn-primary" data-toggle="modal" data-target="#RegistroUsuario"  data-dismiss="modal">Registrar</button>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                  <button type="button" id="BotonOlvidar"  class="btn btn-primary" data-toggle="modal" data-target="#OlvideContraseña"  data-dismiss="modal">¿Olvido su contraseña?</button>
                </div>
                </div>

            </div>
          </div>


          <div class="modal-footer" align="center" id="BotonesInicio">
            <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
              <button type="button"  class="btn btn-primary"  data-dismiss="modal">Iniciar</button>
              <button type="button" class="btn btn-danger"  data-dismiss="modal">Cerrar</button>

            </div>


          </div>
          </form>
      </div>
    </div>
  </div>
</section>
<section id="OlvidastesContraseña">

  <div class="modal fade" id="OlvideContraseña"  role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <form class="form-horizontal">
            <div class="modal-header">
            <button type="button" class="close " data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 align="center">Olvidastes la Contraseña</h3>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="SecionUsuario" class="col-lg-3  col-sm-3 hidden-sm-down control-label">Usuario:</label>
                <div class="col-lg-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="SecionOlvideUsuario" placeholder="Usuario" name="">
                </div>
            </div>
            <div>
              <h4 align="center">Ó</h4>
            </div>
            <div class="form-group">
              <label for="SecionContraseña" class="col-lg-3 col-sm-3 hidden-sm-down control-label">E-Mail:</label>
                <div class="col-lg-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="SesionOlvideEmail" placeholder="Correo" name="">
                </div>

            </div>
          </div>


          <div class="modal-footer" align="center" id="BotonesInicio">
            <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
              <button type="button"  class="btn btn-primary"  data-dismiss="modal">Enviar Contraseña</button>
              <button type="button" class="btn btn-danger"  data-dismiss="modal">Cerrar</button>

            </div>


          </div>
          </form>
      </div>
    </div>
  </div>

</section>

  <section id="RegistrarUsuario">

    <div class="modal fade" id="RegistroUsuario"  role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <form class="form-horizontal">
            <br>
            <br>
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 align="center">Registrar Cuenta</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="SesionNombre" class="col-lg-3 col-md-3 col-sm-3 hidden-sm-down control-label">Nombre:</label>
                <div class=" col-md-9 col-lg-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="SesionNombre" placeholder="Nombre" name="">
                </div>
            </div>
            <div class="form-group">
              <label for="SesionApellido" class="col-lg-3 col-md-3 col-sm-3 hidden-sm-down control-label">Apellido (s):</label>
                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="sesionApellido" placeholder="Apellido(s)" name="">
                </div>
            </div>
            <div class="form-group">
              <label for="SesionTelefono" class="col-lg-3 col-md-3 col-sm-3 hidden-sm-down control-label">Telefono:</label>
                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="SesionTelefono" placeholder="Numero Telefonico" name="">
                </div>
            </div>
            <div class="form-group">
              <label for="SesionCorreo" class="col-lg-3 col-md-3 col-sm-3 hidden-sm-down control-label">Correo:</label>
                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="SesionCorreo" placeholder="Correo electrónico" name="">
                </div>
            </div>
              <div class="form-group">
              <label for="SesionContraseña" class="col-lg-3 col-md-3 col-sm-3 hidden-sm-down control-label">Contraseña:</label>
                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="SesionContraseña" placeholder="Contraseña" name="">
                </div>
            </div>

             <div class="form-group">

                <div class="col-lg-4 col-sm-4 col-xs-4">
                  <input type="checkbox" class="form-control" id="CheckBoxCondiciones">
                </div>
                <label for="CheckBoxCondiciones" class="col-lg-8 col-sm-8 col-xs-8" > Acepto las condicones del servicio de Dropbox</label>
            </div>


       <div class="modal-footer" id="BotonesInicio">
            <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
              <button type="button"  class="btn btn-primary"  data-dismiss="modal">Iniciar</button>
              <button type="button" class="btn btn-danger"  data-dismiss="modal">Cerrar</button>

            </div>


          </div>
          </form>
        </div>
    </div>
  </div>
</section>
<section id="RegistrarDomicilio">

    <div class="modal fade" id="RegistroDomicilio"  role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <form class="form-horizontal">
            <br>
            <br>
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 align="center">Registrar Domicilio</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="SesionCalle" class="col-lg-2 control-label" >Calle:</label>
                <div class="col-lg-12">
                  <input type="text" class="form-control" id="SesionCalle" placeholder="Calle" name="">
                </div>
            </div>
            <div class="form-group">
              <div class="pull-left col-sm-6 col-lg-6 col-xs-6">
                 <label for="SesionNoExt" class="control-label">No. Ext</label>
              </div>
              <div class="pull-left col-sm-6 col-lg-6 col-xs-6">
                 <label for="SesionCp" class="control-label">C.P</label>
              </div>
                <div class="col-lg-6 col-sm-6 col-xs-6 ">
                  <input type="text" class="form-control" id="SesionNoExt" placeholder="Numero Exterior" name="">
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-6">
                  <input type="text" class="form-control" id="SesionCp" placeholder="Codigo Postal" name="">
                </div>
            </div>
            <div class="form-group">
              <label for="SesionColonia" class="col-lg-2 control-label" >Colonia:</label>
                <div class="col-lg-12">
                  <input type="text" class="form-control" id="SesionColonia" placeholder="Colonia" name="">
                </div>
            </div>
            <div class="form-group">
              <label for="SesionLocalidad" class="col-lg-2 control-label" >Localidad:</label>
                <div class="col-lg-12">
                  <input type="text" class="form-control" id="SesionLocalidad" placeholder="Localidad" name="">
                </div>
            </div>
            <div class="form-group">
              <div class="pull-left">
                <label for="SesionCiudad" class="col-lg-12 control-label" >Ciudad:</label>
              </div>

              <div class="col-sm-12">
            <SELECT NAME="ComboCiudad" SIZE=1 class="form-control">
                <OPTION VALUE="link pagina 1">Ciudad</OPTION>
                <OPTION VALUE="link pagina 2">opcion2</OPTION>
                <OPTION VALUE="link pagina 3">opcion3</OPTION>
                <OPTION VALUE="link pagina 4">opcion4</OPTION>
            </SELECT>
              </div>

            </div>
            <div class="form-group">
              <div class="pull-left">
                <label for="SesionMunicipio" class="col-lg-12 control-label" >Municipio:</label>
              </div>

              <div class="col-sm-12">
            <SELECT NAME="ComboMunicipio" SIZE=1 class="form-control">
                <OPTION VALUE="link pagina 1">Municipio</OPTION>
                <OPTION VALUE="link pagina 2">opcion2</OPTION>
                <OPTION VALUE="link pagina 3">opcion3</OPTION>
                <OPTION VALUE="link pagina 4">opcion4</OPTION>
            </SELECT>
              </div>

            </div>
            <div class="form-group">
              <div class="pull-left">
                <label for="SesionEstado" class="col-lg-12 control-label" >Estado:</label>
              </div>

              <div class="col-sm-12">
            <SELECT NAME="ComboEstado" SIZE=1 class="form-control">
                <OPTION VALUE="link pagina 1">Estado</OPTION>
                <OPTION VALUE="link pagina 2">opcion2</OPTION>
                <OPTION VALUE="link pagina 3">opcion3</OPTION>
                <OPTION VALUE="link pagina 4">opcion4</OPTION>
            </SELECT>
              </div>
              <br>
              <br>

            </div>


          <div class="modal-footer" id="BotonesInicio">
            <div class="pull-left">
              <button type="button"  class="btn btn-primary"  data-dismiss="modal">Enviar Registro</button>
            </div>
            <button type="button" class="btn btn-primary"  data-dismiss="modal">Cerrar</button>
          </div>
          </form>
        </div>
    </div>
  </div>
</section>

<section id="RegistrarProductos">
    <div class="modal fade" id="RegistroProducto"  role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <form class="form-horizontal">
            <br>
            <br>
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 align="center">Registrar Productos</h4>
          </div>
          <div class="modal-body">
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
            <div class="pull-left">
              <button type="button"  class="btn btn-primary"  data-dismiss="modal">Enviar Registro</button>
            </div>
            <button type="button" class="btn btn-primary"  data-dismiss="modal">Cancelar</button>
          </div>
          </form>
        </div>
    </div>
  </div>

  <section class="MainProductos">

<article class="post clearfix col-md-6">
  <a href="" class="thumb pull-left">
    <img class="img-thumbnail" src="img/Panst.png" alt="">
  </a>
  <h2 class="post-title"><a href="#">PANTS</a></h2>
  <p><span class="post-fecha">1 de Noviembre de 2017</span></p>
  <p class="post-contenido text-justufy">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <div class="contenedor-botones">
    <a href="#" class="btn btn-primary"> Entrar</a>
    <a href="#" class="btn btn-success">Comentario <span class="badge">10</span></a>
  </div>
</article>
<article class="post clearfix col-md-6">
  <a href="" class="thumb pull-left">
    <img class="img-thumbnail" src="img/Panst.png" alt="">
  </a>
  <h2 class="post-title"><a href="#">PANTS</a></h2>
  <p><span class="post-fecha">1 de Noviembre de 2017</span></p>
  <p class="post-contenido text-justufy">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <div class="contenedor-botones col-md-6">
    <a href="#" class="btn btn-primary"> Entrar</a>
    <a href="#" class="btn btn-success">Comentario <span class="badge">10</span></a>
  </div>
</article>
<nav>
  <div class="center-block">
    <ul class="pagination">
      <li class="disable"><a href="#">&laquo;<span class="sr-only">Anterior</span></a></li>
      <li class="active"><a href="#">1</a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">&raquo;<span class="sr-only">Siguiente</span></a></li>
    </ul>
  </div>
</nav>
  </section>

<?php
require_once 'inc/footer.php'
?>