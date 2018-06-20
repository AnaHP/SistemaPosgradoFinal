<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alumno</title>
    <link rel="stylesheet" href="<?=CSS?>styles.min.css">
    <link rel="stylesheet" href="<?=CSS?>bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script defer src="<?=JS?>funciones.js"></script>
    <script src="<?=JS?>funcionesDatos.js"></script>
  </head>
  <body id="db">
    <div class="container-fluid" id="contenedorG">
      <div class="osc col-xs-12 col-sm-12 col-md-12 col-lg-12" id="fondo">
        <div class="ventanaSub col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" id="ventanaSubir">
        <div class="cerrar2">
          <div class="equis2" onclick="cerrarModal('ventanaSubir')">
            <i class="fas fa-times"></i>
          </div>
        </div>
          <div class="datosMo col-xs-12 col-sm-12 col-md-12 col-lg-12" style="border:none;">
            <h1 id="nombreArchivo">Subir Archivo</h1><!--Nombre del archivo que se ha seleccionado-->
            <select id="documentos">
              <?=$this->documentos?>
            </select>

            <h2 id="msgArchivo">Seleccionar un solo archivo</h2>
          </div>
          <div class="botonesModal col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="file-input-wrapper">
              <button class="btn-file-input" id="btnArch">Seleccionar archivo</button>
              <input type="file" name="file" id="archivo" accept="application/pdf"/><!--Archivo-->
              <button class="btn-file-input hidden" id="btnSubir"  onclick="subirDoc()">Subir Archivo</button>
               <!-- Va en el boton de arriba-->
            </div>
            <!-- <button type="button" name="button">Enviar</button> -->
          </div>
        </div>

        <div class="ventanaVE col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" id="ventanaEstado">
        <div class="cerrar2 col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="equis2" onclick="cerrarModal('ventanaEstado')">
            <i class="fas fa-times"></i>
          </div>
        </div>
          <div class="datosMo col-xs-12 col-sm-12 col-md-12 col-lg-12" style="border:none;">
            <h1 id="nombreArchivo" ></h1><!--Nombre del archivo que se ha seleccionado-->
            <select></select>
            <h2>Tu archivo ha sido enviado al administrador</h2>
          </div>
          <div class="botonesModal col-xs-12 col-sm-12 col-md-12 col-lg-12">
          </div>
        </div>

      </div>
  <div class="fichaMayor col-xs-12 col-sm-12 col-md-8  col-md-offset-2 col-lg-8 col-lg-offset-2">
    <div class="header col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="imas">
        <div class="perfil">
          <div class="foto"></div>
        </div>
        <div class="logOut">
          <i class="fas fa-sign-out-alt"></i>
        </div>
      </div>
      <div class="datosA">

        <h1><?=$this->usuario['nombre']?></h1>
        <p><?=$this->usuario['idPlan']?></p>
      </div>
      <div class="menu">
        <div class="opcion">
          <p><?=$this->usuario['nombrePlan']?></p><!--Nombre del documento de acuerdo al usuario-->
        </div>
      </div>
    </div>
    <div class="contenido col-xs-12 col-sm-12 col-md-12  col-lg-12 ">
      <div class="documentosCon" id="">
          <div class="nom">
            <p><?=$this->usuario['nombre']." ".$this->usuario['apellidoPat']." ".$this->usuario['apellidoMat']?></p> <!--Checar que datos se pueden definir mejor-->
          </div>
          <div class="nom">
            <p><?=$this->usuario['semestre']?> semestre</p>
          </div>
          <div class="nom">
            <p><?=$this->usuario['nombrePlan']?></p>
          </div>
          <div class="nom">
            <p><?=$this->documentos?></p><!--Nombre del documento subido Verificar si es correcto dependera del nombre del documento que el usuario hay subido-->
          </div>
          <div class="nom" id="flechas">
            <i class="fas fa-cloud-upload-alt" id="sub" onclick="ok('ventanaSubir')"></i>
            <i class="fas fa-eye" id="grisM" onclick="ok('ventanaEstado')"></i>
          </div>
      </div>
    </div>
    </div>
    <footer>
      <p>Centro de Desarrollo | Facultad de Informática | UAQ <br> ©2018</p>
    </footer>

    </div>
  </body>
</html>