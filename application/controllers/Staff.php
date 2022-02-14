<?php   
class Staff extends CI_Controller{

    function __construct() {

        parent::__construct();
        $this->load->model('staff_model');
    }
    
    public function index(){
        $this->load->view('header');
        $this->load->view('side_bar_left');
       
       $id=$this->db->get('enseignants');
       $data['enseignants']=$this->staff_model->getAllEnseignant($id);
       
       $this->load->view('staff',$data);
       $this->load->view('side_bar_right');
       $this->load->view('footer'); 
    }
}

?>