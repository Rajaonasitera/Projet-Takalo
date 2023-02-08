<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produit_controller extends CI_Controller {

	public function index($id,$user)
	{
                $produit=$this->frontoffice_model->getProduit($id);
                $categorie=$this->frontoffice_model->getAllCategorie();
                $objCategorie=$this->frontoffice_model->getCategorie($id);
                $proposition=$this->frontoffice_model->getProposition($id,$user);
                $data=array();
                $data['categorie']=$categorie;
                $data=array();
                $data['categorie']=$categorie;
                $data['produit']=$produit;
                $data['user']=$user;
                $data['objCategorie']=$objCategorie;
                $data['proposition']=$proposition;
                $this->load->view('Header',$data);
                $this->load->view('Produit',$data);
                $this->load->view('Footer',$data);
	}		
}
?>