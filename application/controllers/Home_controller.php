<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	public function index($user)
	{
                // echo $user;
                $produit=$this->frontoffice_model->getAllMyProduit($user);
                $categorie=$this->frontoffice_model->getAllCategorie();
                $data=array();
                // echo $produit[0]['nom'];
                $data['categorie']=$categorie;
                $data['produit']=$produit;
                $data['user']=$user;
                $this->load->view('Header',$data);
                $this->load->view('Home',$data);
                $this->load->view('Footer',$data);
		
	}		
}
?>