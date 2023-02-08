<?php
    // function getList(){
    //     // $db->query("select * from categorie");
    //     $result=$db->select('*')->get('categorie');
    //     foreach ($result->result_array() as $categ) {
    //         $categorie['libelle']=$categ['libelle'];
    //         $categorie['id']=$categ['idCategorie'];
    //         echo $categorie['id'];
    //         # code...
    //     }

    // }

    function loginAdmin($email,$password){
        // $user=array();
        $result=$db->select('*')->where('admin',1)->get('user');
        foreach ($result->result_array() as $user) {
            if ($user['email']==$email && $user['password']==$password) {
                return 'true';
            }
        }
        return 'false';
    }

    function upload($name,$tmp_name){
        $dossier = 'image/'; 
        $fichier = basename($name); 
        $taille_maxi = 100000; 
        $taille = filesize($tmp_name); 
        $extensions = array('.png', '.gif', '.jpg', '.jpeg'); 
        $extension = strrchr($name, '.'); 
            if(!in_array($extension, $extensions)) 
        {    
            $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc';
        } 
        if($taille>$taille_maxi) 
        {     
            $erreur = 'Le fichier est trop gros...'; 
        } 
        if(!isset($erreur))
    {        
            $fichier = strtr($fichier,'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ','AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');     
            $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);     
            if(move_uploaded_file($tmp_name, $dossier . $fichier))  
        {          
            // echo 'Upload effectué avec succès !';     
            return $dossier . $fichier;
        }     
            else
        {          
        return null;  
        } 
    } else {     
        return null; 
    }
    }

?>