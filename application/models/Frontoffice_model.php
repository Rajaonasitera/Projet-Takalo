<?php

class Frontoffice_model extends CI_Model{
    function inscription($pseudo,$password,$email){
        $this->db->query("insert into user values(0,'".$pseudo."','".$email."','".$password."',0,NULL)");
    }

    function insertProduit($idUser,$nom,$prix,$categorie,$description){
        $this->db->query("insert into produit values(0,".$categorie.",'".$nom."','".$desrciption."',".$prix.",".$idUser.")");
    }

    function insertImage($idProduit,$name,$tmp){
        $nom=upload($name,$tmp);
        $this->db->query("insert into user values(0,".$idProduit.",'".$nom."')");

    }

    function getOtherProduit($id){
        $prod=array();
        $result= $this->db->select('*')->where_not_in('idUser',$id)->get('produit');
        foreach ($result->result_array() as $produit) {
            $prod[]=$produit;
        }
        return $prod;
        // var_dump($result);
    }

    function getAllMyProduit($idU){
        $prod=array();
        $result= $this->db->select('*')->where('idUser',$idU)->get('produit');
        foreach ($result->result_array() as $produit) {
            $prod[]=$produit;
        }
        return $prod;
    }

    function getProduit($idP){
        $prod=array();
        $result= $this->db->select('*')->where('idProduit',$idP)->get('produit');
        foreach ($result->result_array() as $produit) {
            $prod=$produit;
        }
        return $prod;
    }

    function getUser($email,$mdp){
        $result= $this->db->select('*')->get('user');
        foreach ($result->result_array() as $users) {
            if ($users['email']==$email&&$users['password']==$mdp) {
                # code...
                return $users;
            }
        }
        return null;
    }

    // function del

    function getProposition($idP,$idU){
        $produit=$this->getProduit($idP);
        $produits=$this->getOtherProduit($idU);
        $prop=array();
        for ($i=0; $i < count($produits); $i++) { 
            if($produit['prixEstimatif']-1000 < $produits[$i]['prixEstimatif'] && $produits[$i]['prixEstimatif'] < $produit['prixEstimatif']+1000){
                $prop[]=$produits[$i];
            }
        }
        return $prop;
    }

    function getCategorie($id){
        $result= $this->db->select('*')->get('categorie');
        foreach ($result->result_array() as $cat) {
            if ($cat['idCategorie']==$id) {
                # code...
                return $cat;
                
            }
        }
        return null;
    }

    function getProduitByCategorie($id){
        $result= $this->db->select('*')->where('idCategorie',$id)->get('produit');
        $cate=array();
        foreach ($result->result_array() as $cat) {
            $cate[]=$cat;
        }
        return $cate;
    }

    function getImage($idP){
        $result= $this->db->select('*')->where('idProduit',$idP)->get('image');
        $img=array();
        foreach ($result->result_array() as $im) {
            $img[]=$im;
        }
        return $img;
    }

    function getAllCategorie(){
        $categorie=array();
        $result=$this->db->select('*')->get('categorie');
        foreach ($result->result_array() as $categ) {
            $categorie[]=$categ;
            // $categorie[]['libelle']=$categ['libelle'];
            // $categorie[]['id']=$categ['idCategorie'];
            // echo $categorie['id'];f
            # code...
        }
        return $categorie;
    }        

    


}
    
?>