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

  }

?>