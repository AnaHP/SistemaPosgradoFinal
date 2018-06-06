<?php

class Index extends Controller{
    function __construct() {
        parent::__construct();
    }

    public function index(){
      $this->view->render($this,'index');
    }
    
    public function usuario(){
        $expediente = $_POST ["expediente"]; 
        $contra=$_POST ["contra"];

        $datos = $this->model->usuario($expediente, $contra);
        //variable de session
         //echo ($datos["tipoUsuario"]);
         //echo $datos;

         if ($datos=="No se encontró ningún registro"){
             echo "Datos incorrectos";
         } else {
            echo ($datos["tipoUsuario"]);
         }
    } 
}
?>
