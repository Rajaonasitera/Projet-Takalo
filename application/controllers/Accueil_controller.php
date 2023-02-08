<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil_controller extends CI_Controller {

	public function index($user)
	{
                // echo $user;
                $produit=$this->frontoffice_model->getOtherProduit($user);
                $categorie=$this->frontoffice_model->getAllCategorie();
                $data=array();
                // echo $produit[0]['nom'];
                $data['categorie']=$categorie;
                $data['produit']=$produit;
                $data['user']=$user;
                $this->load->view('Header',$data);
                $this->load->view('Accueil',$data);
                $this->load->view('Footer',$data);
		
	}		
}
?>