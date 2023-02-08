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
    <title>Document</title>
    <link rel="icon" href="<?php echo site_url("image/core-img/favicon.ico");?>">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?php echo site_url("css/core-style.css");?>">
    <link rel="stylesheet" href="<?php echo site_url("style1.css");?>">
<body>
<footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.html"><img src="<?php echo site_url("image/logonoir.png");?>" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"></a><a href="https://themewagon.com/" target="_blank">Tatiana-1814 Tiavina-1868 Danny-1770</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="<?php echo base_url("Categorie_controller/index/".$categorie[0]['idCategorie']);?>"><?php echo $categorie[0]['libelle'];?></a>
                                        </li>
                                        <?php for ($j=1; $j < count($categorie) ; $j++) { ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url("Categorie_controller/index/".$categorie[$j]['idCategorie']);?>"><?php echo $categorie[$j]['libelle'];?></a>
                                        </li>
                                    <?php } ?> 

                                        
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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