<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function index()
	{
		$email=$_POST['email'];
        $mdp=$_POST['mdp'];
		$ok=$this->backoffice_model->login($email,$mdp);
		$user=$this->frontoffice_model->getUser($email,$mdp);
		$data=array();
		$data['user']=$user['idUser'];
        if ($ok=='true') {
			$this->session->set_userdata('user',$user);
        	redirect('Accueil_controller/index/'.$data['user']);
        }else{
			$this->load->view('Login');
        }

		
	}		
}
?>