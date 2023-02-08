<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_controller extends CI_Controller {

	public function index()
	{
        $nom=$_POST['name'];
		$email=$_POST['email'];
        $mdp=$_POST['mdp'];
		$this->frontoffice_model->inscription($nom,$mdp,$email);
		$this->load->view('Login');

        // if ($ok=='true') {
		// $this->load->view('welcome_message');
        // // redirect('welcome_message.php');
        // }else{
		// $this->load->view('Login');
        // }
		
	}		
}
?>