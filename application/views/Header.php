<?php
    $us=$this->session->userdata('user');
    $user=$us['idUser'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo site_url("image/core-img/favicon.ico");?>">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?php echo site_url("css/core-style.css");?>">
    <link rel="stylesheet" href="<?php echo site_url("style1.css");?>">
    <title>Document</title>
</head>
<body>
<div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="<?php echo site_url("image/core-img/search.png");?>" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="<?php echo base_url("Accueil_controller/index/".$user);?>"><img src="<?php echo site_url("image/takalounow.png");?>" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="<?php echo base_url("Accueil_controller/index/".$user);?>".$user><img src="<?php echo site_url("image/takalounow.png");?>" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="active"><a href="<?php echo base_url("Home_controller/index/".$user);?>">Home</a></li>
                    <li><a href="<?php echo base_url("Accueil_controller/index/".$user);?>">Other</a></li>
                    <li><a href="">Troquer</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                <a href="#" class="btn amado-btn mb-15">Log out</a>
                <?php
                    $user=$this->session->userdata('user');
                    if ($user['admin']==1) {    ?>
                        <a href="#" class="btn amado-btn active" style="margin-top:15px;">Gestion categorie</a>
                <?php } ?>
            </div>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="cart.html" class="cart-nav"><img src="<?php echo site_url("image/core-img/cart.png");?>" alt=""> Troquer <span>(0)</span></a>
                <a href="#" class="search-nav"><img src="<?php echo site_url("image/core-img/search.png");?>" alt=""> Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->
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