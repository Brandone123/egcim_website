<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etudiants extends CI_Controller {

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
	public function admission()
	{
		$this->load->view('header');
		$this->load->view('side_bar_left');
        $this->load->view('admission');
        $this->load->view('side_bar_right');
        $this->load->view('footer');
	}


	public function ae_egcim()
	{
		$this->load->view('header');
		$this->load->view('side_bar_left');
        $this->load->view('ae_egcim');
        $this->load->view('side_bar_right');
        $this->load->view('footer');
	}
	
	public function statistique()
	{
		$this->load->view('header');
		$this->load->view('side_bar_left');
        $this->load->view('statistique');
        $this->load->view('side_bar_right');
        $this->load->view('footer');
	}
	

	public function emploi_temps()
	{
		$this->load->view('header');
		$this->load->view('side_bar_left');
        $this->load->view('emploi_temps');
        $this->load->view('side_bar_right');
        $this->load->view('footer');
	}
	public function club_gm()
	{
		$this->load->view('header');
		$this->load->view('side_bar_left');
        $this->load->view('club_gm');
        $this->load->view('side_bar_right');
        $this->load->view('footer');
	}
	
}
