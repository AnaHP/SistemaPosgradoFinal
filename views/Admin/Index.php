<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administrador</title>
    <link rel="stylesheet" href="<?=CSS?>styles.min.css">
    <link rel="stylesheet" href="<?=CSS?>bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script type="text/javascript" src="<?=JS?>funciones.js"></script>
    <script type="text/javascript" src="<?=JS?>funcionesDatos.js"></script>
  </head>
  <body>
    <div class="container-fluid" id="contenedorG">
      <div class="osc col-xs-12 col-sm-12 col-md-12 col-lg-12" id="fondo">
        <div class="ventanaOk col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" id="confir">
          <div class="cerrar">
            <!-- <div class="equis">
              <i class="fas fa-times"></i>
            </div> -->
          </div>
          <div class="datosMo col-xs-12 col-sm-12 col-md-12 col-lg-12" style="border:none;">
            <h1>¿Ésta seguro que desea confirmar?</h1>
          </div>
          <div class="botonesModal col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <button type="button" name="button" onclick="cerrarModal('confir')">Cancelar</button>
          <button type="button" name="button">Aceptar</button>
        </div>
        </div>
          <div class="ventanaNo col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" id="equisR">
          <div class="cerrar col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <!-- <div class="equis">
            <i class="fas fa-times"></i>
            </div> -->
          </div>
            <div class="datosMo col-xs-12 col-sm-12 col-md-12 col-lg-12" style="border:none;">
              <h1>¿Ésta seguro que desea rechazar?</h1>
            </div>
            <div class="botonesModal col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <button type="button" name="button" onclick="cerrarModal('equisR')">Cancelar</button>
              <button type="button" name="button">Aceptar</button>
            </div>
          </div>
         <div class="ventanaMas col-xs-12 col-sm-12 col-md-8 col-md-offset-10 col-lg-8 col-lg-offset-2" id="ventanaVM">
          <div class="datosMoV">
            <div class="datosMo2">
              <h1>Sharol Rubí González Serrano</h1>
              <h2>Maestría en sistemas computacionales</h2>
            </div>
            <div class="cerrar">
              <div class="equis" onclick="cerrarModal('ventanaVM')">
              <i class="fas fa-times"></i>
              </div>
            </div>
          </div>
          <div class="informacionModal col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="resumenModal col-xs-8 col-sm-8 col-md-8 col-lg-8">
              <h2>Resumen capitulo 29</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="comentariosModal col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <h2>Comentarios:</h2>
              <textarea placeholder="Escribe aquí tu comentario..." name="name" rows="8" cols="80"></textarea>
              <button type="" name="button">Enviar comentario</button>
            </div>
          </div>
        </div>
  </div>
  <div class="fichaMayor col-xs-12 col-sm-12 col-md-8  col-md-offset-2 col-lg-8 col-lg-offset-2">
    <div class="header col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
      <div class="imas">
        <div class="perfil">
          <div class="foto"></div>
        </div>
        <div class="logOut">
          <i class="fas fa-sign-out-alt"></i>
        </div>
      </div>
      <div class="datosA">
        <h1><?=$this->usuario['nombre']." ".$this->usuario['apellidoPat']." ".$this->usuario['apellidoMat']?><h1>
        <p>Administrador</p>
      </div>
      <div class="menu col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="opcion">
          <p>Plan de estudios</p>
        </div>
        <div class="down">
          <i class="fas fa-angle-down" id="dw" onclick="despliega()"></i>
        </div>
      </div>
      <div class="menuCO" id="menuCO">
        <div class="opciones" id="opciones" onclick="cambia()">
        Maestria en innovacion de entornos virtuales de enseñanza-aprendizaje
        </div>
        <div class="opciones" id="opciones">
        Maestría en ciencias de la computación
        </div>
        <div class="opciones" id="opciones">
        Maestria en sistemas de informacion
        </div>
        <div class="opciones" id="opciones">
        Maestria en sistemas computacionales
        </div>
      </div>
    </div>
    <div class="contenido col-xs-12 col-sm-12 col-md-8  col-md-offset-2 col-lg-8 col-lg-offset-2">
      <details>
        <summary>
          <div class="alumnosN" id="alumnosN">
            <div class="nombreA col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?=$this->usuario['nombre']." ".$this->usuario['apellidoPat']." ".$this->usuario['apellidoMat']?></p>
            </div>
            <div class="sem col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <p><?=$this->usuario['semestre']?></p>
            </div>
            <div class="flec col-xs-2 col-sm-2 col-md-2 col-lg-2">
              <i class="fas fa-angle-down" id="bop" ></i>
            </div>
          </div>
        </summary>
        <div class="menuCO2">
          <div class="opciones2 col-xs-9 col-sm-9 col-md-9 col-lg-10">
            <p>Resumen ahora no se que podria ir aqui pero deberia ser un texto largo , esto no esta resultando , deberia ser un texto mas largo</p>
          </div>
          <div class="apro col-xs-3 col-sm-3 col-md-3 col-lg-2">
            <i class="fas fa-check" id="verde" onclick="ok('confir')"></i>
            <i class="fas fa-times" id="rojo" onclick="ok('equisR')"></i>
            <i class="fas fa-eye" id="gris" onclick="ok('ventanaVM')"></i>
          </div>
        </div>
      </details>
      </div>
      </div>
      </div>
      <footer>
        <p>Centro de Desarrollo | Facultad de Informática | UAQ <br> ©2018</p>
      </footer>
    </div>
    </div>
  </body>
</html>