<?php 
/**
 * 
 */
class Journaux extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function index()
	{
		# code...
		if ($this->session->userdata('id')) {
    		# code...
    		$session = $this->session->userdata();
            $user = $this->db->where('id', $session['id'])->get('users')->result()[0];
            if ($user->status == 'Enseignant') {
	            $enseignant = $this->db->where("id_enseignant", $user->enseignant)->get('enseignants')->result()[0];
	            $data = $_POST;
	            $data['id_enseignant'] = $enseignant->id_enseignant;
	            $this->db->insert('journaux', $data);
	            return redirect('profile');
	        }
	        else
	        	return redirect('login');
        }
        else{
        	return redirect('login');
        }
	}
}

 ?>