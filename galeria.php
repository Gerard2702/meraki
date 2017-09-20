<?php

include("App/config/database.php");
$conn = new Conexion();
$conn->conectar();
//$query="SELECT * FROM users WHERE email='$usuario' AND pass='$contrasena'";
//$resp=$conn->query($query);
//$conn->desconectar();
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

<body id="body" class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fullscreen">
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
                <header class="c-layout-header c-layout-header-2 c-layout-header-dark-mobile c-header-transparent-dark" id="home" data-minimize-offset="40">
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
                                <nav class="c-mega-menu c-mega-menu-onepage c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold" data-onepage-animation-speed="700">
                                    <ul class="nav navbar-nav c-theme-nav">
                                        <li class="c-onepage-link c-active active">
                                            <a href="#home" class="c-link">Inicio</a>
                                        </li>
                                        <li class="c-onepage-link ">
                                            <a href="#about" class="c-link">Quienes Somos</a>
                                        </li>
                                        <li class="c-onepage-link ">
                                            <a href="#patrocinadores" class="c-link">Patrocinadores</a>
                                        </li>
                                        <li class="c-onepage-link ">
                                            <a href="#services" class="c-link">Revista</a>
                                        </li>
                                        <li class="c-onepage-link ">
                                            <a href="#team" class="c-link">Blog</a>
                                        </li>
                                        <li class="c-onepage-link ">
                                            <a href="galeria.php" class="c-link">Galeria</a>
                                        </li>
                                        <li class="c-onepage-link ">
                                            <a href="#works" class="c-link">Cupones</a>
                                        </li>
                                        <li class="c-onepage-link ">
                                            <a href="#contact" class="c-link">Contacto</a>
                                        </li>
                                        <li class="c-quick-sidebar-toggler-wrapper">    
                                            <a href="#" class="c-quick-sidebar-toggler">                    
                                                <span class="c-line"></span>
                                                <span class="c-line"></span>
                                                <span class="c-line"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

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
                <nav class="c-layout-quick-sidebar">
                    <div class="c-header">
                        <button type="button" class="c-link c-close">
                        <i class="icon-login"></i>      
                        </button>
                    </div>
                    <div class="c-content">
                        <div class="c-section">
                            <h3>GALERIA</h3>
                            <div class="c-settings">                
                              <a href="#" class="btn btn-xs c-btn-white c-btn-border-1x">Agregar</a>
                              <a href="#" class="btn btn-xs c-btn-white c-btn-border-1x">Administrar</a>
                            </div>
                        </div>      
                        <div class="c-section">
                            <h3>Header Mode</h3>
                            <div class="c-settings">            
                                <input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="fixed" value="fixed"/>
                                <input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="static" value="static"/>
                            </div>
                        </div>
                    </div>
                </nav><!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
                <!-- BEGIN: PAGE CONTENT -->
                <br><br><br><br><br>
                <!-- BEGIN: PAGE CONTENT -->
                <div class="c-content-box c-size-md">
                    <div class="container">
                        <div class="cbp-panel">
                            <div id="filters-container" class="cbp-l-filters-alignCenter">
                                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                                    Todas <div class="cbp-filter-counter"></div>
                                </div>
                                <div data-filter=".identity" class="cbp-filter-item">
                                    lugares turisticos <div class="cbp-filter-counter"></div>
                                </div>
                                <div data-filter=".web-design" class="cbp-filter-item">
                                    Emprenderurismo <div class="cbp-filter-counter"></div>
                                </div>
                                <div data-filter=".graphic" class="cbp-filter-item">
                                    Entrevistas a empresarios <div class="cbp-filter-counter"></div>
                                </div>
                                <div data-filter=".logos" class="cbp-filter-item">
                                    Tecnologia <div class="cbp-filter-counter"></div>
                                </div>
                                <div data-filter=".logos, .graphic" class="cbp-filter-item">
                                    innovacion <div class="cbp-filter-counter"></div>
                                </div>
                                <div data-filter=".logos, .graphic" class="cbp-filter-item">
                                    Restaurantes <div class="cbp-filter-counter"></div>
                                </div>
                            </div>
                            <div id="grid-container" class="cbp cbp-l-grid-masonry-projects">
                                <div class="cbp-item graphic">
                                    <div class="cbp-caption">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="class/img/home2.jpg" alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="c-masonry-border"></div>
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <a href="class/img/home2.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn c-btn-square c-btn-border-1x c-btn-white c-btn-bold c-btn-uppercase" data-title="Dashboard<br>by Paul Flavius Nechita">Zoom</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                                <div class="cbp-item web-design logos">
                                    <a href="class/img/home4.jpg" class="cbp-caption cbp-lightbox" data-title="The Gang Blue<br>by Cosmin Capitanu">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="class/img/home4.jpg" alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">The Gang Blue</div>
                                                    <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="cbp-item web-design logos">
                                    <a href="class/img/home5.jpg" class="cbp-caption cbp-lightbox" data-title="The Gang Blue<br>by Cosmin Capitanu">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="class/img/home5.jpg" alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">The Gang Blue</div>
                                                    <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="cbp-item web-design logos">
                                    <a href="class/img/home10.jpg" class="cbp-caption cbp-lightbox" data-title="The Gang Blue<br>by Cosmin Capitanu">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="class/img/home10.jpg" alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">The Gang Blue</div>
                                                    <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div id="loadMore-container" class="cbp-l-loadMore-button c-margin-t-60">
                                <a href="" class="cbp-l-loadMore-link btn c-btn-square c-btn-border-2x c-btn-dark c-btn-bold c-btn-uppercase">
                                    <span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
                                    <span class="cbp-l-loadMore-loadingText">LOADING...</span>
                                    <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: PAGE CONTENT -->

                
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