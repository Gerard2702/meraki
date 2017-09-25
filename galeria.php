<?php

include("App/config/database.php");
$conn = new Conexion();
$conn->conectar();
$query="SELECT * FROM galeria";
$resp=$conn->query($query);
$conn->desconectar();
session_start();
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
                                <!-- BEGIN: HOR NAV -->
                                <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU-ONEPAGE -->
                                <!-- BEGIN: MEGA MENU -->
                                <?php  include("menu.php") ?>
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
                <div class="c-content-box c-size-md">
                    <div class="container">
                        <div class="cbp-panel">
                            <div id="filters-container" class="cbp-l-filters-alignCenter">
                                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                                    Todas <div class="cbp-filter-counter"></div>
                                </div>
                                <div data-filter=".lugares_turisticos" class="cbp-filter-item">
                                    lugares turisticos <div class="cbp-filter-counter"></div>
                                </div>
                                <div data-filter=".emprendedurismo" class="cbp-filter-item">
                                    Emprenderurismo <div class="cbp-filter-counter"></div>
                                </div>
                                <div data-filter=".entrevistas" class="cbp-filter-item">
                                    Entrevistas a empresarios <div class="cbp-filter-counter"></div>
                                </div>
                                <div data-filter=".tecnologia" class="cbp-filter-item">
                                    Tecnologia <div class="cbp-filter-counter"></div>
                                </div>
                                <div data-filter=".innovacion" class="cbp-filter-item">
                                    innovacion <div class="cbp-filter-counter"></div>
                                </div>
                                <div data-filter=".restaurantes" class="cbp-filter-item">
                                    Restaurantes <div class="cbp-filter-counter"></div>
                                </div>
                            </div>
                            <div id="grid-container" class="cbp cbp-l-grid-masonry-projects">
                            <?php if(mysqli_num_rows($resp)>0){
                                while($imagen = mysqli_fetch_array($resp,MYSQLI_ASSOC)){ ?>
                                <div class="cbp-item <?php echo $imagen['categoria'];?>">
                                    <a href="class/img/galeria/<?php echo $imagen['imagen'];?>" class="cbp-caption cbp-lightbox" data-title="<?php echo $imagen['titulo'];?>">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="class/img/galeria/<?php echo $imagen['imagen'];?>" alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title"><?php echo $imagen['titulo']?></div>
                                                    <div class="cbp-l-caption-desc"><?php echo $imagen['descripcion']?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php }} else{ ?>
                            <?php } ?>    
                            </div>

                           <!-- <div id="loadMore-container" class="cbp-l-loadMore-button c-margin-t-60">
                                <a href="" class="cbp-l-loadMore-link btn c-btn-square c-btn-border-2x c-btn-dark c-btn-bold c-btn-uppercase">
                                    <span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
                                    <span class="cbp-l-loadMore-loadingText">LOADING...</span>
                                    <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
                                </a>
                            </div>-->
                        </div>
                    </div>
                </div>
                <!-- END: PAGE CONTENT -->
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
    <script src="class/js/home/masonry-gallery.js" type="text/javascript"></script>
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