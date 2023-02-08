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
		// $this->load->database();
		// $query=$this->db->query("select * from personne");
		// foreach ($query->result_array() as $row) {
		// 	$nom= $row['prenom'];
		// 	echo $nom;
		// 	# code...
		// }

		// $result=$this->db->query("select * from categorie");
		// $login=$this->backoffice->loginAdmin('Tatiana','12345');
		// echo $login;
		// getList();
		// $this->backoffice->insertCategorie('Legume');
		// $this->frontoffice_model->getOtherProduit(1);
		$this->load->view('Login');
		
	}		
}
