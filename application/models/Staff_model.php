<?php   
class Staff_model extends CI_Model{

    function __consturct(){

    parent::__construct();

    

    }

    public function getAllEnseignant(){
        $sql = "SELECT * FROM `enseignants` ORDER BY 'id' DESC";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    
}

?>