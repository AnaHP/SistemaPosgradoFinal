<?php

class Alumno extends Controller{
  
    function __construct() {
        parent::__construct();
    }
    
    public function index(){
      $this->view->documentos = $this->getDocumentos();
      $this->view->usuario = $this->getUsuario('256865');//variable de sesion
      $this->view->render($this,'index');
      
    }

    private function getDocumentos(){
      $documentos = $this->model->getDocumentos();
      if(is_array($documentos)){
        $opcionDoc = '';
        foreach ($documentos as $registro => $columna) {
          $idDocumento     = $columna['idDocumento'];
          $nombreDocumento = $columna['nombreDocumento'];
          $idPlan          = $columna['idPlan'];
          $opcionDoc  .= "<option value='{$idDocumento}'>{$idDocumento} | {$nombreDocumento}</option>";
        }
        return $opcionDoc;
      } else {
        return '<option>No hay Opciones</option>';
      }
    }

    public function getUsuario($expediente){
      $usuario = $this->model->getUsuario($expediente);
      return $usuario;
    }
  }
?>

