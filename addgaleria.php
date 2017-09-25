<?php

include("App/config/database.php");
$conn = new Conexion();
//$conn->conectar();
//$query="SELECT * FROM users WHERE email='$usuario' AND pass='$contrasena'";
//$resp=$conn->query($query);
//$conn->desconectar();
session_start();

if(isset($_POST['subir'])){

    $target_path = "class/img/galeria/";
    $target_path = $target_path . basename( $_FILES['imagen']['name']); 
    
    if(move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path)) { 
       $conn->conectar();
       $img2 = $_FILES['imagen']['name'];
       $titulo = $_POST['titulo'];
       $descripcion = $_POST['descripcion'];
       $fecha_actual = date("Y-m-d");
       $categorias="";
       if(isset($_POST['categoria1'])){
            $categorias=$_POST['categoria1'];
       }
       if(isset($_POST['categoria2'])){
            $categorias=$categorias." ".$_POST['categoria2'];
       }
       if(isset($_POST['categoria3'])){
            $categorias=$categorias." ".$_POST['categoria3'];
       }
       if(isset($_POST['categoria4'])){
            $categorias=$categorias." ".$_POST['categoria4'];
       }
       if(isset($_POST['categoria5'])){
            $categorias=$categorias." ".$_POST['categoria5'];
       }
       if(isset($_POST['categoria6'])){
            $categorias=$categorias." ".$_POST['categoria6'];
       }
       echo $categorias;
       $sqlimg = "INSERT INTO galeria(titulo,descripcion,imagen,categoria) VALUES ('".$titulo."','".$descripcion."','".$img2."','".$categorias."')";
       $rsimg = $conn->insert_delete_update($sqlimg);
       $conn->desconectar();
       if($rsimg==1){
            header("Location:addgaleria.php?reg=1");
       }
       else{
            header("Location:addgaleria.php?error=1");
       }
    } else{

        echo "Ha ocurrido un error, trate de nuevo!";
    }         
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <!-- <link href="../../assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
     <link href="../../assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />-->
    <link href="class/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!--<link href="../../assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />-->
    <link href="class/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->

    <link href="class/css/home/carousel/style.min.css" rel="stylesheet" type="text/css" />
    <link href="class/css/home/carousel/style-responsive.min.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/home/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/home/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/home/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/home/slider-bootstrap/slider.css" rel="stylesheet" type="text/css" />
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN THEME STYLES -->
    <link href="class/css/home/plugins.css" rel="stylesheet" type="text/css" />
    <link href="class/css/home/components.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="class/css/home/themes_default.css" rel="stylesheet" id="style_theme" type="text/css" />
    <link href="class/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />

</head>

<body id="body" class="c-layout-header-fixed c-layout-header-mobile-fixed">
    <div class="">
        <div id="">
            <div class="">
                <!-- BEGIN: LAYOUT/HEADERS/HEADER-ONEPAGE -->
                <!-- BEGIN: HEADER -->
                <header class="c-layout-header c-layout-header-3 c-layout-header-dark-mobile" id="home" data-minimize-offset="40">

                    <div class="c-navbar">
                        <div class="container">
                            <!-- BEGIN: BRAND -->
                            <div class="c-navbar-wrapper clearfix">
                                <div class="c-brand c-pull-left">
                                    <a href="home.php" class="c-logo">
                                        <img src="class/img/logo2_opt.png" alt="MERAKI" class="c-desktop-logo">
                                        <img src="class/img/logo2_opt.png" alt="MERAKI" class="c-desktop-logo-inverse">
                                        <img src="class/img/logo2_opt.png" alt="MERAKI" class="c-mobile-logo">
                                    </a>
                                    <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                                        <span class="c-line"></span>
                                        <span class="c-line"></span>
                                        <span class="c-line"></span>
                                    </button>
                                    <button class="c-search-toggler" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                                <!-- END: BRAND -->
                                <!-- BEGIN: QUICK SEARCH -->
                                <form class="c-quick-search" action="#">
                                    <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                                    <span class="c-theme-link">&times;</span>
                                </form>
                                <!-- END: QUICK SEARCH -->
                                <!-- BEGIN: HOR NAV -->
                                <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU-ONEPAGE -->
                                <!-- BEGIN: MEGA MENU -->
                                <?php include("menu.php") ?>
                                <!-- END: MEGA MENU -->
                                <!-- END: LAYOUT/HEADERS/MEGA-MENU-ONEPAGE -->
                                <!-- END: HOR NAV -->
                            </div>
                        </div>
                    </div>
                </header>
                <!-- END: HEADER -->
                <!-- END: LAYOUT/HEADERS/HEADER-ONEPAGE -->
                <!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
                <?php  include("menuadmin.php") ?>
                <!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
                
                <div class="c-layout-page">
                <!-- BEGIN: PAGE CONTENT -->
                <div class="c-content-box c-size-md c-bg-white">
                    <div class="container">
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">Subir Imagen</h3>
                            <div class="c-line-center c-theme-bg"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="c-body">
                                <div class="form-group m-b-20 alert alert-success" style="display: none" id="exito">
                                    <p class="">Imagen subida correctamente.</p>
                                </div>
                                <div class="form-group m-b-20 alert alert-danger" style="display: none" id="error">
                                    <p class="">Error al Subir Imagen!.</p>
                                </div>
                                    <form class="form-horizontal" action="addgaleria.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Titulo</label>
                                            <div class="col-md-6">
                                                <input class="form-control  c-square c-theme" name="titulo" placeholder="Titulo" type="text" required="" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Descripción</label>
                                            <div class="col-md-6">
                                                <input class="form-control  c-square c-theme" name="descripcion" placeholder="Descripción" type="text" value="" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile" class="col-md-4 control-label">Seleccione el archivo de imagen</label>
                                            <div class="col-md-6">
                                                <input type="file" id="imagen" name="imagen" class="c-font-14" required="">
                                                <p class="help-block">
                                                    JPG, GIF, PNG
                                                </p>
                                            </div>
                                        </div>      
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Checkbox</label>
                                            <div class="col-md-6">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="lugares_turisticos" name="categoria1">
                                                        lugares turisticos
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="emprendedurismo" name="categoria2">
                                                        Emprenderurismo
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="entrevistas" name="categoria3">
                                                        Entrevistas a empresarios
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="tecnologia" name="categoria4">
                                                        Tecnologia
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="innovacion" name="categoria5">
                                                        innovacion
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="restaurantes" name="categoria6">
                                                        Restaurantes 
                                                    </label>
                                                </div>
                                            </div>
                                        </div>                                                
                                        <div class="form-group c-margin-t-40">
                                            <div class="col-sm-offset-4 col-md-8">
                                                <button type="submit" name="subir" id="subir" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Subir Imagen</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
                <!-- BEGIN: LAYOUT/FOOTERS/FOOTER-2 -->
                <footer class="c-layout-footer c-layout-footer-1">
                    <div class="c-postfooter">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <p class="c-copyright c-font-oswald c-font-14">
                                    Copyright &copy; SAES.
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <ul class="c-socials">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer><!-- END: LAYOUT/FOOTERS/FOOTER-2 -->
                
                <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
                <div class="c-layout-go2top">
                    <i class="fa fa-arrow-up"></i>
                </div>
                <!-- END: LAYOUT/FOOTERS/GO2TOP -->
                
            </div>
            <!-- END: PAGE CONTAINER -->
            
        </div><!-- end wrapper -->
    </div>
    <!-- BEGIN: LAYOUT/BASE/BOTTOM -->
    <!-- BEGIN: CORE PLUGINS -->
    <script src="class/plugins/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="class/plugins/jquery/jquery-migrate-1.1.0.min.js" type="text/javascript"></script>
    <script src="class/plugins/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="class/plugins/jquery/jquery.easing.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/revelar-animate/wow.js" type="text/javascript"></script>
    <script src="class/plugins/home/revelar-animate/reveal-animate.js" type="text/javascript"></script>
    <!-- END: CORE PLUGINS -->
    <!-- BEGIN: LAYOUT PLUGINS -->
    <script src="class/plugins/home/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="class/plugins/home/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
    <script src="class/plugins/home/typed/typed.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/slider-bootstrap/bootstrap-slider.js" type="text/javascript"></script>
    <!-- END: LAYOUT PLUGINS -->
    <!-- BEGIN: THEME SCRIPTS -->
    <script src="class/js/home/components.js" type="text/javascript"></script>
    <script src="class/js/home/components-shop.js" type="text/javascript"></script>
    <script src="class/js/home/app.js" type="text/javascript"></script>

    <script>
        $(document).ready(function () {
            App.init(); // init core
        });
    </script>
    <script src="class/js/home/masonry-gallery.js" type="text/javascript"></script>
    <?php if(isset($_GET['reg'])){
    if($_GET['reg']==1){
    ?>
    <script>
        $('#exito').show();
    </script>

    <?php
    }
    }
    ?>
    <?php if(isset($_GET['error'])){
    if($_GET['error']==1){
    ?>
    <script>
        $('#error').show();
    </script>

    <?php
    }
    }
    ?>
 

</body>
</html>