<?php
class Profile extends CI_Controller{
    function index($id = 0){
    	if ($this->session->userdata('id')) {
    		# code...
    		$session = $this->session->userdata();
            $user = $this->db->where('id', $session['id'])->get('users')->result()[0];
            if ($user->is_superuser) {
            	# code...
            	$this->load->view('profile_admin', ["user"=>$user]);
            }
            else{
            	if ($user->status == 'Enseignant') {
            		# code...
            	
	            	$enseignant = $this->db->select('enseignants.*, users.login, users.password')
                            ->join('users', 'users.enseignant=enseignants.id_enseignant')
                            ->where("id_enseignant", $user->enseignant)
                            ->get('enseignants')
                            ->result()[0];
	                $journaux = $this->db->where("id_enseignant", $user->enseignant)->get('journaux')->result();
	                $articles = $this->db->where("id_enseignant", $user->enseignant)->get('articles')->result();
	                $conferences = $this->db->where("id_enseignant", $user->enseignant)->get('conferences')->result();
	            	//print_r($enseignant); die();
		        	$this->load->view('profile', ["user"=>$enseignant, 'journaux'=>$journaux, 'articles'=>$articles, 'conferences'=>$conferences]);
	        	}
	        	else{
	        		$enseignant = $this->db->where("id_personnel", $user->enseignant)->get('personnels')->result()[0];
	               
	            	//print_r($enseignant); die();
		        	$this->load->view('profile_perso', ["user"=>$enseignant]);
	        	}
            }
    	}
    	else{
    		$enseignant = $this->db->select('enseignants.*, users.status')
                                ->where("id_enseignant", $id)
                                ->join('users', 'users.enseignant=enseignants.id_enseignant')
                                ->get('enseignants')->result();
            //print_r($enseignant);die();
            if (sizeof($enseignant) != 0) {
                # code...
                $enseignant = $enseignant[0];
                $this->load->view('profile_internaute', ["user"=>$enseignant]);
            }
            else{
                $enseignant = $this->db->select('personnels.*, users.status')
                                ->where("id_enseignant", $id)
                                ->join('users', 'users.enseignant=personnels.id_personnel')
                                ->get('personnels')->result();
                $this->load->view('profile_internaute_perso', ["user"=>$enseignant[0]]);
            }
                //print_r($enseignant); die();
                
        }
        
    }

    public function modifier($id=0)
    {
    	# code...
    	if ($this->session->userdata('id')) {
    		# code...
    		$session = $this->session->userdata();
            $user = $this->db->where('id', $session['id'])->get('users')->result()[0];
            if ($user->is_superuser) {
            	# code...
            	$this->load->view('profile_admin', ["user"=>$user]);
            }
            else{
                $departements = $this->db->get('departements')->result();
                if ($user->status == 'Enseignant') {
                    # code...
                    $enseignant = $this->db->where("id_enseignant", $user->enseignant)->get('enseignants')->result()[0];
                    $this->load->view('modifier_profile', ["user"=>$enseignant, 'departements'=>$departements]);
                }
                else{
                    $enseignant = $this->db->where("id_personnel", $id)->get('personnels')->result()[0];
                    $this->load->view('modifier_profil_perso', ["user"=>$enseignant, 'departements'=>$departements]);
                }
            	
            	//print_r($enseignant); die();
	        	
            }
    	}
    	else
    		return redirect("login");
    }

    public function modifier_post()
    {
    	
        if ($this->session->userdata('id')) {
    		# code...
    		$session = $this->session->userdata();
            $password = sha1($this->input->post('password'));
            $user = $this->db->where('id', $session['id'])->get('users')->result()[0];
            if ($user->status == 'Enseignant') {
                # code...
                $enseig = $this->db->where('id_enseignant', $user->enseignant)->get('enseignants')->result()[0];
                $this->db->where('id_enseignant', $enseig->id_enseignant)->update('enseignants', $_POST);
            }
            else{
                $enseig = $this->db->where('id_personnel', $user->enseignant)->get('personnels')->result()[0];
                $this->db->where('id_personnel', $enseig->id_personnel)->update('personnels', $_POST);
            }
			return redirect('profile/index');
	    }
	    else
	    	return redirect('login');
    }

     public function modifier_mdp($id=0)
    {
        # code...
        if ($this->session->userdata('id')) {
            # code...
            $session = $this->session->userdata();
            $user = $this->db->where('id', $session['id'])->get('users')->result()[0];
            if ($user->is_superuser) {
                # code...
                $this->load->view('profile_admin', ["user"=>$user]);
            }
            else{
                $mdp = $this->db->get('users')->result();
                if ($user->status == 'Enseignant') {
                    # code...
                    $enseignant = $this->db->where("enseignant", $user->enseignant)->get('users')->result()[0];
                    $this->load->view('modifier_mdp', ["user"=>$enseignant, 'password'=>$mdp]);
                }
                else{
                    $enseignant = $this->db->where("enseignant", $id)->get('users')->result()[0];
                    $this->load->view('modifier_mdp', ["user"=>$enseignant, 'password'=>$mdp]);
                }
                
                //print_r($enseignant); die();
                
            }
        }
        else
            return redirect("login");
    }

    public function modifier_mdp_post()
    {
        if ($this->session->userdata('id')) {
            # code...
            $session = $this->session->userdata();
            $user = $this->db->where('id', $session['id'])->get('users')->result()[0];
            $login = $this->input->post('login');
            $password = sha1($this->input->post('npassword'));
            //print_r($password);die();
            $this->db->where('id', $user->id)->update('users', ['password'=>$password, 'login'=>$login]);
            return redirect('profile/');
        }
        else{
            return redirect('login');
        }

    // if ($this->session->userdata('id')){
    //     $login = $thi->input->post('login');
    //     $password = sha1($this->input->post('password'));
    //     $Npassword=sha1($_POST['Npassword']);
    //     $VNpassword=sha1($_POST['VNpassword']);
    //     $id = $_SESSION["id"];
    //     $pass = $_SESSION["password"];
    //     print_r($pass);
    //     print_r($id);
    //         if (($password!='')&&($Npassword!='')&&($VNpassword!='')) {
    //             if ($password==$_SESSION['password']){
    //                 if($Npassword==$VNpassword){
    //                 $sql= "UPDATE users SET password='$Npassword' WHERE id='$id'";
    //                 $result=mysql_query($sql);
    //                 echo 'Modification du mot de passe effectuee avec succes';
                    
    //                 return redirect('profile/index');
    //                 } else {
    //                     echo 'Erreur entre le nouveau mot de passe entr&eacute; et la verification';
    //                 }
    //             } else {
    //                 echo 'Le mot de passe actuel n\'est pas valide';
    //                 return redirect('profile/modifier_mdp');
    //                 }
    //         } else {
    //             echo 'Veuillez remplir tous les champs';
    //         }
            
    //     }         
}
}
?>