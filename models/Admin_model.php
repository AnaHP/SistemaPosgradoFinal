<?php
class Admin_model extends Model{
    function __construct(){
      parent::__construct();
    }
    public function getDocumentos()
    {
      return $this->db->selectStrict('*','documentos');
    }

    public function getPlanes()
    {
      return $this->db->selectStrict('*', 'planposgrado');
    }
    
    public function getUsuario($expediente)
    {
      return $this->db->select('A.nombre, A.idPlan,A.apellidoPat, A.apellidoMat,A.semestre,P.nombrePlan','usuario A, planposgrado P', 'A.idPlan = P.idPlan'.' AND A.expediente='.$expediente);
    } 
  }

?>