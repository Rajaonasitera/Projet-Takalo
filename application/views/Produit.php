<?php
    $us=$this->session->userdata('user');
    $user=$us['idUser'];
    $img=$this->frontoffice_model->getImage($produit['idProduit']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Accueil</title>

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo site_url("image/core-img/favicon.ico");?>">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?php echo site_url("css/core-style.css");?>">
    <link rel="stylesheet" href="<?php echo site_url("style1.css");?>">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    

        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
        <img src="<?php echo site_url("image/".$img[0]['path']);?>" alt="">
            <H1>Categorie : <?php echo $objCategorie['libelle'] ;?></H1>   
            <H1>Nom: <?php echo $produit['nom'] ;?></H1>   
            <H3><bold><?php echo $produit['description'] ;?></bold></H3>   
            <H2><?php echo $produit['prixEstimatif'] ;?></H2>   
                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
            <?php for ($i=0; $i < count($proposition) ; $i++) { ?>
                    <a href="shop.html">
                        <img src="<?php echo site_url("image/bg-img/1.jpg");?>" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p><?php echo $proposition[$i]['nom'];?></p>
                            <h4><?php echo $proposition[$i]['description'];?></h4>
                            <H2><?php echo $proposition[$i]['prixEstimatif'] ;?></H2>   
                        </div>
                    </a>
            <?php } ?>
                </div>
            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->

    <!-- ##### Footer Area Start ##### -->
    
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="<?php echo site_url("js/jquery/jquery-2.2.4.min.js");?>"></script>
    <!-- Popper js -->
    <script src="<?php echo site_url("js/popper.min.js");?>"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo site_url("js/bootstrap.min.js");?>"></script>
    <!-- Plugins js -->
    <script src="<?php echo site_url("js/plugins.js");?>"></script>
    <!-- Active js -->
    <script src="<?php echo site_url("js/active.js");?>"></script>

</body>

</html>