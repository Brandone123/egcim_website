<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
        $this->load->view('accueil');
        $this->load->view('footer');
	}

	public function mot_directeur()
	{
		$this->load->view('header');
		$this->load->view('side_bar_left');
        $this->load->view('mot_directeur');
        $this->load->view('side_bar_right');
        $this->load->view('footer');
	}

	public function organisation_admin()
	{
		$directeur = $this->db->where('fonction', 'Directeur et Chef de Département de Génie Chimique')->get('enseignants')->result()[0];
		$directeur_adjoint = $this->db->where('fonction', 'Directeur Adjoint')->get('enseignants')->result()[0];
		$qltNr = $this->db->where('fonction', 'Chef de Service de la Qualité et des Normes')->get('enseignants')->result()[0];
		$darcs = $this->db->where('fonction', 'Chef de Division des Affaires Académiques, de la Recherche et de la Coopération')->get('enseignants')->result()[0];
		$cspeaa = $this->db->where('fonction', 'Chef de Service du Personnel Enseignant et des Activités Académiques')->get('enseignants')->result()[0];
		$csfad = $this->db->where('fonction', 'Chef de Service de la Formation à Distance')->get('enseignants')->result()[0];
		$cssip = $this->db->where('fonction', 'Chef de Service des Stages et de Insertion Professionnelle')->get('enseignants')->result()[0];
		$this->load->view('header');
		$this->load->view('side_bar_left');
        $this->load->view('organisation_admin', array('directeur'=>$directeur, 'directeur_adjoint'=>$directeur_adjoint, 'qltNr'=>$qltNr, 'darcs'=>$darcs, 'csfad'=>$csfad, 'cssip'=>$cssip, 'cspeaa'=>$cspeaa));
        $this->load->view('side_bar_right');
        $this->load->view('footer');

	}

	public function contact()
	{
		$this->load->view('header');
		$this->load->view('side_bar_left');
        $this->load->view('contact');
        $this->load->view('side_bar_right');
        $this->load->view('footer');
	}

	
	public function formation_distance()
	{
		$this->load->view('header');
		$this->load->view('side_bar_left');
        $this->load->view('formation_distance');
        $this->load->view('side_bar_right');
        $this->load->view('footer');
	}
	public function page_en_construction()
	{
		$this->load->view('header');
		$this->load->view('side_bar_left');
        $this->load->view('page_en_construction');
        $this->load->view('side_bar_right');
        $this->load->view('footer');
	}
	public function communiquee()
	{
		$this->load->view('header');
		$this->load->view('side_bar_left');
        $this->load->view('communiquee');
        $this->load->view('side_bar_right');
        $this->load->view('footer');
	}
	public function fiches()
	{
		$this->load->view('header');
		$this->load->view('side_bar_left');
        $this->load->view('fiches');
        $this->load->view('side_bar_right');
        $this->load->view('footer');
	}
	public function centre()
	{
		$this->load->view('header');
		$this->load->view('side_bar_left');
        $this->load->view('centre');
        $this->load->view('side_bar_right');
        $this->load->view('footer');
	}
	public function deroulement()
	{
		$this->load->view('header');
		$this->load->view('side_bar_left');
        $this->load->view('deroulement');
        $this->load->view('side_bar_right');
        $this->load->view('footer');
	}
	

}
