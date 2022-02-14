<?php 
/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function index()
	{
		# code...
         if($this->session->userdata('id')){
            return redirect("profile");
        }
        else
		    $this->load->view('login');
	}

    public function register(){
        if($this->session->userdata('id')){
            $session = $this->session->userdata();
            $user = $this->db->where('id', $session['id'])->get('users')->result();
            if($user[0]->is_superuser){
                $this->load->view('register');
            }
            else
                return redirect("login");
        }
        else{
            return redirect("login");
        }
    }

    function post(){
        $login = $this->input->post('login');
        $password = sha1($this->input->post('password'));
        $user = $this->db->where('login', $login)->where('password', $password)->get('users')->result();
        if(sizeof($user) != 0){
            $this->session->set_userdata('id', $user[0]->id);
            $this->session->set_userdata('password', $user[0]->password);
            $this->session->set_userdata('login', $user[0]->login);
            // echo '<script>alert("Bienvenu")</script>';
            return redirect('profile/index/', $user[0]->id);
            $message = "Bienvenu";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else
            $message1 = "Veillez vérifier vos informations";
            echo "<script type='text/javascript'>alert('$message1');</script>";
            return redirect('login');
    }

    function logout(){
        $this->session->sess_destroy();
        return redirect("login");
    }


    // function mdp(){

    //     if(isset($_SESSION['login']) AND isset($_POST['pass']) AND isset($_POST['NewPass']) AND isset($_POST['NewPassVerif']))
    //     {
    //         $pass_hache=sha1($_POST['pass']);

    //         $req = $this->db->prepare('login', $login)->where('password', $password)->get('users')->result();
    //         $req->execute(array($_SESSION['login'],$pass_hache));
    //         $resultat=$req->fetch();

    //         if(!$resultat)
    //         {
    //             echo 'mauvais mot de passe';
    //         }
    //         elseif (empty($_POST['NewPass']))
    //         {
    //             echo 'Le nouveau mot de passe n\'a pas été renseigné.';
    //         }
    //         elseif ($_POST['NewPass'] != $_POST['NewPassVerif'])
    //         {
    //             echo 'Les mots de passe ne coresspondent pas.';
    //         }
    //         else
    //         {
    //             $new_pass_hache=sha1($_POST['NewPass']);
    //             $id = $this->db->insert_id();
    //             $this->db->insert('users', ['password'=>$_POST['NewPass'], 'enseignant'=>$id]);
    //             // $req=$bdd->prepare('UPDATE membres SET mdp=? WHERE id=?');
    //             $req->execute(array($new_pass_hache,$_SESSION['id']));
    //             $req->closeCursor();
    //             echo 'Le mot de passe a été changé';
    //         }
    //     }
    // }

    function register_post(){
        $login = $this->input->post('noms_prenoms');
        $tel = $this->input->post('tel');
        $enseignant = $this->input->post('enseignant');
        $password = sha1($this->input->post('password'));
        if ($enseignant == "Oui"){
            $this->db->insert('enseignants', ['noms_prenoms'=>$login, 'tel'=>$tel, 'fonction'=>$_POST['fonction'], 'email'=>$_POST['email']]);
            $id = $this->db->insert_id();
            $this->db->insert('users', ['status'=>"Enseignant",'login'=>$tel, 'password'=>$password, 'enseignant'=>$id]);
        }
        else{
            $this->db->insert('personnels', ['noms_prenoms'=>$login, 'tel'=>$tel, 'fonction'=>$_POST['fonction'], 'email'=>$_POST['email']]);
            $id = $this->db->insert_id();
            $this->db->insert('users', ['status'=>"Personnel", 'login'=>$tel, 'password'=>$password, 'enseignant'=>$id]);
        }
        echo "Vos Cordonnées ont été bien prises en compte";
        return redirect('login/register');
    }

}


 ?>