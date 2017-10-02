<?php
session_start();
include("App/login/validarlogin.php");
include("App/config/database.php");
$conn = new Conexion();
//$conn->conectar();
//$query="SELECT * FROM users WHERE email='$usuario' AND pass='$contrasena'";
//$resp=$conn->query($query);
//$conn->desconectar();
$conn -> conectar();
$sqlcategorias = "SELECT * FROM Categorias";
$rscategorias = $conn->query($sqlcategorias);


if(isset($_POST['crear'])){

    $target_path = "class/img/blog/";
    $target_path = $target_path . basename( $_FILES['inputImage']['name']);
    if(move_uploaded_file($_FILES['inputImage']['tmp_name'], $target_path)) {
       $conn->conectar();
       $img2 = $_FILES['inputImage']['name'];
       $titulo = $_POST['titulo'];
       $descripcion = $_POST['descripcion'];
       $fecha_actual = date("Y-m-d");
       $editor = $_POST['editor1'];
       $id_categoria = $_POST['categorias'];

       $sqlentrada = "INSERT INTO entradas(titulo,descripcion,texto,img,categoria) VALUES ('".$titulo."','".$descripcion."','".$editor."','".$img2."','".$id_categoria."')";
       $rsentrada = $conn->insert_delete_update($sqlentrada);
       $conn->desconectar();
       if($rsentrada==1){
            header("Location:addentrada.php?reg=1");
       }
       else{
            header("Location:addentrada.php?error=1");
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
    <link href="class/css/home/custom.css" rel="stylesheet" type="text/css" />
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
                                <h3 class="c-center c-font-uppercase c-font-bold">Agregar Entrada BLOG</h3>
                                <div class="c-line-center c-theme-bg"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="c-body">
                                        <div class="form-group m-b-20 alert alert-success" style="display: none" id="exito">
                                            <p class="">Entrada publicada correctamente.</p>
                                        </div>
                                        <div class="form-group m-b-20 alert alert-danger" style="display: none" id="error">
                                            <p class="">Error al publicar entrada!.</p>
                                        </div>
                                        <form class="form-horizontal" action="addentrada.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Titulo</label>
                                                <div class="col-md-8">
                                                    <input class="form-control  c-square c-theme" name="titulo" placeholder="Titulo" type="text" required="" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Descripción</label>
                                                <div class="col-md-8">
                                                    <input class="form-control  c-square c-theme" name="descripcion" placeholder="Descripción" type="text" value="" required="" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <textarea class="ckeditor form-control" id="editor1" name="editor1" rows="15" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile" class="col-md-2 control-label">Imagen Principal</label>
                                                <div class="col-md-4">
                                                    <input type="file" id="inputImage" name="inputImage" class="c-font-14" required="">
                                                    <p class="help-block">
                                                        JPG, GIF, PNG
                                                    </p>
                                                    <img id="imagenEvento" src="#" alt="Imagen Previa" class="c-overlay-object img-responsive" height="150" width="150" />
                                                    <div class="form-group m-b-20 alert alert-danger" style="display: none" id="errorimg">
                                                    <p class="">Error!. Tipo de archivo no aceptado</p>
                                                </div>
                                                </div>
                                                <label class="col-md-2 control-label">Categorias</label>
                                                <div class="col-md-4">
                                                    <?php
                                                    while($categorias = mysqli_fetch_array($rscategorias,MYSQLI_ASSOC)) {
                                                    ?>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" required name="categorias" id="categorias" value="<?php echo $categorias['id'] ;?>"><?php echo $categorias['nombre'] ; ?>
                                                        </label>
                                                    </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="form-group c-margin-t-40">
                                                <div class="col-sm-offset-4 col-md-8">
                                                    <button type="submit" name="crear" id="crear" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Crear Entrada</button>
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
    <script src="class/plugins/home/ckeditor/ckeditor.js"></script>
    <script src="class/plugins/home/ckeditor/config.js"></script>
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
    <script type="text/javascript">
        //Regristro una funcion de jQuery para validar el tipo de dato que alguien sube
        $.fn.checkFileType = function (options) {
            var defaults = {
                allowedExtensions: [],
                success: function (data) { },
                error: function () { }
            };
            options = $.extend(defaults, options);

            return this.each(function () {

                $(this).on('change', function () {
                    var value = $(this).val(),
                        file = value.toLowerCase(),
                        extension = file.substring(file.lastIndexOf('.') + 1);

                    if ($.inArray(extension, options.allowedExtensions) == -1) {
                        options.error();
                        $(this).focus();
                    } else {
                        options.success($(this));

                    }

                });

            });
        };

        //Registra el cambio cuando alguien sube un archivo
        $('#inputImage').checkFileType({
            allowedExtensions: ['jpg', 'png', 'jpeg'],
            success: function (data) {
                leerArchivo(data[0], "#imagenEvento");
                $('#errorimg').hide();
            },
            error: function () {
                $('#errorimg').show();
            }
        });


        //Para el input que tiene el archivo, lee la imagen y la renderiza en el selector que quiero
        function leerArchivo(input, selectorRender) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(selectorRender).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
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
