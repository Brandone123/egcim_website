<?php   
class Departements extends CI_Controller{

    function index(){
        $dept = $this->db->get('departements')->result();
        $this->load->view('header');
        $this->load->view('side_bar_left');
        $this->load->view('departements', ['departements'=>$dept]);
        $this->load->view('side_bar_right');
        $this->load->view('footer');   
    }

    function details($id){
        $dept = $this->db->where('id_depart', $id)->get('departements')->result();
        $enseignants = $this->db->select('enseignants.*')
                        ->from('enseignants')
                        ->join('departements', 'departements.id_depart=enseignants.departement')->where('id_depart', $id)->get()->result();
        $this->load->view('header');
        $this->load->view('side_bar_left');
        $this->load->view('details_departements', ['enseignants'=>$enseignants, 'departement'=>$dept[0]]);
        $this->load->view('side_bar_right');
        $this->load->view('footer');   
    }
}

?>