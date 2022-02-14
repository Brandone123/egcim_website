<?php
class Pdf_test extends CI_Controller {

	function __construct() {
		parent::__construct();
        $config['hostname'] = 'localhost';
		$config['username'] = 'smarte654_concou';
		$config['password'] = 'ct9M81?tBrEd';
		$config['database'] = 'smarte654_inscriptions_concours';
		$config['dbdriver'] = 'mysqli';
		$config['dbprefix'] = '';
		$config['pconnect'] = FALSE;
		$config['db_debug'] = TRUE;
		$config['cache_on'] = FALSE;
		$config['cachedir'] = '';
		$config['char_set'] = 'utf8';
		$config['dbcollat'] = 'utf8_general_ci';
		$this->db1 = $this->load->database($config, TRUE);

	}
	
	
	public function imprimer(){
		# code...
		
		if($this->session->userdata('id')){
            $session = $this->session->userdata();
            $user = $this->db1->where('id', $session['id'])->get('users')->result()[0];
            $candidat = $this->db1->where('id', $user->candidat)->get('candidats')->result()[0];
            //print_r($candidat);die();
            $filename = 'fiche_candidat_'.$candidat->noms;
		    $this->load->library('Pdf');
	        $this->pdf->setPaper('A4', 'portrait')
	            ->filename($filename)
	            ->zone('concours')
	            ->render_view('fiche', array('informations'=>$candidat))
	            ->generate();
        }
        else{
            return redirect("concours/login");
        }
		
	}

	public function update_id()
	{
		# code...
		$users = $this->db->select('users.*, enseignants.id_enseignant')
						->join('enseignants', 'enseignants.tel=users.login')
						->get('users')->result();
		print_r($users);
		foreach ($users as $key) {
			# code...
			$this->db->where('id', $key->id)->update('users', ['enseignant'=>$key->id_enseignant]);
		}

		$users = $this->db->select('users.*, enseignants.id_enseignant')
						->join('enseignants', 'enseignants.tel=users.login')
						->get('users')->result();
		print_r($users);

	}



	
}
//677494203
?>

