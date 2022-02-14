<?php 
/**
 * 
 */
class Concours extends CI_Controller
{
	
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

	public function index()
	{
		# code...
		$this->load->view('concours/accueil');
	}

	protected function nb_chiffre($numero){
	 	//echo $numero;
		$n = 0;
		while ($numero > 0){
			$n += 1;
			$numero = intdiv($numero, 10);
			//echo $numero.'<br>';
		}
		return $n;
	}
	protected function generer_code($centre, $cycle)
	{
		# code...
		$cycle_code = ['Premiere Annee'=>'1A', 'Troisieme Annee'=>'3A'];
		$centre_code = ['Ngaoundéré'=>'NG', 'Maroua'=>'MA', 'Douala'=>'DL', 'Yaoundé'=>'YD', 'Dschang'=>'DS', 'Bamenda'=>'BA', 'Buea'=>'BU'];
		$numero = $this->db1->count_all('candidats');
		$d = 4 - $this->nb_chiffre($numero);
		$numero = (string)($numero+1);
		for ($i=0; $i < $d; $i++) { 
			# code...
			$numero = '0'.$numero;
		}
		$annee = date('y');
		return $annee.$centre_code[$centre].$numero.$cycle_code[$cycle];

	}
	public function post()
	{
		# code...
		
		//print_r($code);
		//Array ( [noms] => werfwaef [prenoms] => asdasd [date_naissance] => 2021-04-29 [lieu_naissance] => asdfasd [sexe] => Femme [nom_pere] => sdafasdf [nom_mere] => sdfsadf [pays] => Afrique_du_sud [region_origine] => sdfsd [email] => danielprakasso@gmail.com [tel] => 691247611 [anne_entree] => Premiere Annee [centre_examen] => Ngaoundéré [annee_bacc] => 2012 [serie] => C [centre_bacc] => ASDFA [pays_bacc] => Cameroun [annee_licence] => 2012 [pays_licence] => Cameroun [domaine] => asdfasdf [langue] => Français [etab1] => dfsdfgsf [etab2] => wqrfer [etab3] => asdas [etab4] => jkl; [etab5] => ds [classe1] => ;KL [classe2] => K [classe3] => K [classe4] => KL [classe5] => K [examen1] => K [examen2] => K [examen3] => KL [examen4] => KL [examen5] => K [result1] => K [result2] => K [result3] => KL [result4] => K [result5] => K [mention1] => K [mention2] => K [mention3] => K [mention4] => K [mention5] => L [date_paiement] => 2021-05-15 [agence] => sasd [numero_recu] => 235454 )
		$infos = $_POST;
		$code = $this->generer_code($_POST['centre_examen'], $_POST['anne_entree']);
		$infos['code'] = $code;
		//print_r($infos);die();
		$this->db1->insert('candidats', $infos);
		$id_candidat = $this->db1->insert_id();
		$this->db1->insert('users', ['email'=>$infos['email'], 'password'=>sha1($code), 'candidat'=>$id_candidat]);
		$id = $this->db1->insert_id();
		$this->session->set_userdata('id', $id);
		return redirect('concours/profile');
	}

	public function profile(){
        if($this->session->userdata('id')){
            $session = $this->session->userdata();
            $user = $this->db1->where('id', $session['id'])->get('users')->result()[0];
            $candidat = $this->db1->where('id', $user->candidat)->get('candidats')->result()[0];
            //print_r($candidat);die();
            $this->load->view('concours/profile', array('user'=>$candidat));
        }
        else{
            return redirect("login");
        }
    }

    public function login(){
        if($this->session->userdata('id')){
            $session = $this->session->userdata();
            return redirect("concours/profile");
        }
        else{
            $this->load->view('concours/login');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        return redirect("concours/login");
    }

    function post_login(){
        $login = $this->input->post('login');
        $password = sha1($this->input->post('password'));
        $user = $this->db1->where('email', $login)->where('password', $password)->get('users')->result();
        if(sizeof($user) != 0){
            $this->session->set_userdata('id', $user[0]->id);
            return redirect('concours/profile/');
        }
        else
            return redirect('concours/login');
    }
}
 ?>