<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie_controller extends CI_Controller {

	public function index($id)
	{
                // $Categorie=$this->frontoffice_model->getCategorie($id);
                // $produit=$this->frontoffice_model->getOtherProduit($user);
                $categorie=$this->frontoffice_model->getAllCategorie();
                $produit=$this->frontoffice_model->getProduitByCategorie($id);
                $data=array();
                // echo $produit[0]['nom'];
                $data['produit']=$produit;
                $data['categorie']=$categorie;
                $this->load->view('Header',$data);
                $this->load->view('Categorie',$data);
                $this->load->view('Footer',$data);
                // redirect('Categorie.php');
	}		
}
?>