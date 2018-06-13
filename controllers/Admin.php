
<?php
class Admin extends Controller{
    function __construct() {
        parent::__construct();
    }

    public function index(){
      $this->view->usuario = $this->getUsuario('256910');
      $this->view->render($this,'index');
    }

    public function getUsuario($expediente){
      $usuario = $this->model->getUsuario($expediente);
      return $usuario;
    }

    private function alumnos()
    {
      $planes  = $this->model->planes();
      $documentos = $this->model->documentos();
      $this->view->planes = $planes;
      $this->view->documentos = $documentos;
      
      $this->view->render($this,'admin');
    }

    private function getPlanes(){
      $planposgrado = $this->model->getPlanes();
      if(is_array($planposgrado)){
        $opcionPlanes = '';
        foreach ($planposgrado as $registro => $columna) {
          $idPlan        = $columna['idPlan'];
          $nombrePlan    = $columna['nombrePlan'];
          $opcionPlanes   .= "<option value='{$idPlan}'>{$nombrePlan}</option>";
        }
        return $opcionPlanes;
      } else {
        return '<option>No hay Opciones</option>';
      }
    }
  }
  
 ?>