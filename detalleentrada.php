<?php
session_start();
include("App/login/validarlogin.php");
include("App/config/database.php");
$conn = new Conexion();
$conn -> conectar();
$rs = "";
if(isset($_GET['titulo'])){
    $sql = "SELECT * FROM entradas WHERE titulo='".$_GET['titulo']."'";
    $rs = $conn->query($sql);
}
$sqllimit = "SELECT * FROM entradas ORDER BY id DESC LIMIT 5";
$rslimit = $conn->query($sqllimit);

$sqlcategorias = "SELECT * FROM categorias";
$rscategorias = $conn->query($sqlcategorias);
$conn -> desconectar();



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
    <div class="wrapper">
        <div id="loader-wrapper">
            <div id="loader">
                <img src="class/img/logocarga.png" alt="" class="mirakilogo">
                <div class="line-up"></div><div class="line-down"></div>
            </div>
            <div class="loader-section section-left"></div>
        </div>
        <div id="content">
            <div class="wrapper preload">
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
                <!-- BEGIN: PAGE CONTAINER -->
                <div class="c-layout-page">
                <?php
                       /* if ($paging->ejecutar()==true and $paging->numRegistrosMostrados() > 0){
    while($datos = $paging->fetchResultado()){
            echo "<div>". $datos["nombre"]." Email:" .$datos["email"]."</div><br />";
            echo "<div>Publicado el ". date("F j, Y, g:i a",$datos["pass"])."</div><br />";
 
        }
}

echo "<br />Paginas<br />".$paging->fetchNavegacion();*/
                    ?>
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: BLOG LISTING -->
                    <div class="c-content-box c-size-md">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="c-content-blog-post-1-view">
                                        <div class="c-content-blog-post-1">
                                        <?php  if(mysqli_num_rows($rs)>0) {
                                            $entrada = $rs->fetch_assoc(); 
                                            ?>
                                            <div class="c-media">
                                                <img class="c-overlay-object img-responsive" src="class/img/blog/<?php echo $entrada['img'] ?>" alt="">
                                            </div>

                                            <div class="c-title c-font-bold c-font-uppercase">
                                                <a href="#"><?php echo $entrada['titulo']; ?></a>
                                            </div>

                                            <div class="c-panel c-margin-b-30">
                                                <div class="c-date">FECHA <span class="c-font-uppercase"><?php echo $entrada['fecha-creacion']; ?></span></div>
                                                <ul class="c-tags c-theme-ul-bg">
                                                   <?php
                                                        $conn->conectar();   
                                                        $sqlcat = "SELECT * FROM categorias WHERE id='".$entrada['categoria']."'";
                                                        $rscat=$conn->query($sqlcat);
                                                        $cat=$rscat->fetch_assoc(); 
                                                    ?>
                                                        <li><?php echo $cat['nombre'];?></li>
                                                </ul>                           
                                            </div>

                                            <div class="c-desc texto">
                                                <?php echo $entrada['texto']; ?>
                                            </div>
                                            <?php } else { ?>
                                            <div class="alert alert-danger"><strong>Error!. La entrada no existe...</strong></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <!-- BEGIN: CONTENT/BLOG/BLOG-SIDEBAR-1 -->
                                    <form action="buscar.php" method="GET">
                                        <div class="input-group">
                                            <input type="text" name="buscar" id="buscar" class="form-control c-square c-theme-border" placeholder="Buscar..." required="">
                                            <span class="input-group-btn">
                                                <button class="btn c-theme-btn c-theme-border c-btn-square" type="submit">Buscar!</button>
                                            </span>
                                        </div>
                                    </form>

                                    <div class="c-content-ver-nav">
                                        <div class="c-content-title-1 c-theme c-title-md c-margin-t-40">
                                            <h3 class="c-font-bold c-font-uppercase">Categorias</h3>
                                            <div class="c-line-left c-theme-bg"></div>
                                        </div>
                                        <ul class="c-menu c-arrow-dot1 c-theme">
                                        <?php if(mysqli_num_rows($rscategorias)>0){
                                            while($categorias = mysqli_fetch_array($rscategorias,MYSQLI_ASSOC)){ ?>
                                            <li><a href="categoria.php?categoria=<?php echo $categorias['id']; ?>"><?php echo $categorias['nombre']; ?></a></li>
                                        <?php }} ?>
                                        </ul>
                                    </div>

                                    <div class="c-content-tab-1 c-theme c-margin-t-30">
                                        <div class="nav-justified">
                                            <ul class="nav nav-tabs nav-justified">
                                                <li class="active"><a href="#blog_recent_posts" data-toggle="tab">Entradas Recientes</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="blog_recent_posts">
                                                    <ul class="c-content-recent-posts-1">
                                                    <?php 
                                                        if(mysqli_num_rows($rslimit)>0){
                                                            while($entradasrecientes = mysqli_fetch_array($rslimit,MYSQLI_ASSOC)){
                                                    ?>
                                                        <li>
                                                            <div class="c-image">
                                                                <img src="class/img/blog/<?php echo $entradasrecientes['img'] ?>" alt="" class="img-responsive">
                                                            </div>
                                                            <div class="c-post">
                                                                <a href="detalleentrada.php?titulo=<?php echo $entradasrecientes['titulo']; ?>" class="c-title">
                                                                    <?php  echo $entradasrecientes['titulo']; ?>
                                                                </a>
                                                                <div class="c-date"><?php  echo $entradasrecientes['fecha-creacion']; ?></div>
                                                            </div>
                                                        </li>
                                                    <?php 
                                                            }
                                                        }
                                                    ?>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: BLOG LISTING  -->
                    <!-- END: PAGE CONTENT -->
                </div>
                <!-- END: PAGE CONTAINER -->


                
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
            setTimeout(function () {
                $('.wrapper').addClass('loaded');
                $('#body').addClass('');
            }, 2000);

            App.init(); // init core
        });

        jQuery(function () {
            $(window).load(function () {
                $('.wrapper').removeClass('preload');
            });
        });
    </script>
    <!-- END: THEME SCRIPTS -->
    <!-- BEGIN: SLIDER SCRIPTS -->
    <!-- END: SLIDER SCRIPTS -->
    <!-- BEGIN: PAGE SCRIPTS -->
    <script>

    </script>
    <!-- END: PAGE SCRIPTS -->
    <!-- END: LAYOUT/BASE/BOTTOM -->

</body>
</html>