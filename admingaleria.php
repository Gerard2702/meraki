<?php
session_start();
include("App/login/validarlogin.php");
include("App/login/validaradmin.php");
include("App/config/database.php");
$conn = new Conexion();
$conn -> conectar();
$conn->query("SET NAMES 'utf8'");

$sqllimit = "SELECT * FROM galeria ";
$rslimit = $conn->query($sqllimit);
$conn -> desconectar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <title>MerakiMagazine | Agregar Entrada</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link href="class/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="class/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="class/css/home/carousel/style.min.css" rel="stylesheet" type="text/css" />
    <link href="class/css/home/carousel/style-responsive.min.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/home/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/home/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/home/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/home/slider-bootstrap/slider.css" rel="stylesheet" type="text/css" />
    <link href="class/css/home/plugins.css" rel="stylesheet" type="text/css" />
    <link href="class/css/home/components.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="class/css/home/themes_default.css" rel="stylesheet" id="style_theme" type="text/css" />
    <link href="class/css/home/custom.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="class/img/logo.png">
    <link href="class/plugins/DataTables/css/data-table.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.js"></script>
</head>

<body id="body" class="c-layout-header-fixed c-layout-header-mobile-fixed">
    <div class="">
        <div id="">
            <div class="">
                <header class="c-layout-header c-layout-header-3 c-layout-header-dark-mobile" id="home" data-minimize-offset="40">
                    <div class="c-navbar">
                        <div class="container">
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
                                </div>
                                <?php include("menu.php") ?>
                            </div>
                        </div>
                    </div>
                </header>
                <?php  include("menuadmin.php") ?>
                <div class="c-layout-page">
                    <div class="c-content-box c-size-md c-bg-white">
                        <div class="container">
                            <div class="c-content-title-1">
                                <h3 class="c-center c-font-uppercase c-font-bold">Admin Galeria</h3>
                                <div class="c-line-center c-theme-bg"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="c-body">
                                        <div class="table-responsive">
                                            <table id="mitable" class="table table-hover table-condensed display" cellspacing="0">
                                                <thead class="thead-inverse">
                                                    <tr>
                                                        <th class="col-md-1 text-center">#</th>
                                                        <th class="col-md-1">Imagen</th>
                                                        <th class="col-md-2">Titulo</th>
                                                        <th class="col-md-6">Descripción</th>
                                                        <th class="col-md-2 text-right">Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if(mysqli_num_rows($rslimit)>0){ $id=0;
                                                    while($galeria = mysqli_fetch_array($rslimit,MYSQLI_ASSOC)){
                                                    ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $id=$id+1;?></td>
                                                        <td class="text-left"><div class="c-image">
                                                                <img src="class/img/galeria/<?php echo $galeria['imagen'] ?>" alt="" class="img-responsive">
                                                            </div></td>
                                                        <td class="text-left"><?php echo $galeria['titulo'];?></td>
                                                        <td class="text-left"><?php echo $galeria['descripcion'];?></td>
                                                        <td class="text-right"><a href="editargaleria.php?post=<?php echo $galeria['id']?>" class="btn btn-info btn-xs" title="Editar"><i class="fa fa-cog"></i></a>
                                                            <a class="btn btn-danger btn-xs" title="Eliminar" onclick="eliminar('<?php echo $galeria['id']?>','<?php echo $galeria['titulo']?>')"><i class="fa fa-times"></i></a></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include("footer.php"); ?>
                <div class="c-layout-go2top">
                    <i class="fa fa-arrow-up"></i>
                </div>
            </div>
        </div>
    </div>
    <script src="class/plugins/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="class/plugins/jquery/jquery-migrate-1.1.0.min.js" type="text/javascript"></script>
    <script src="class/plugins/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="class/plugins/jquery/jquery.easing.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/revelar-animate/wow.js" type="text/javascript"></script>
    <script src="class/plugins/home/revelar-animate/reveal-animate.js" type="text/javascript"></script>
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
    <script src="class/plugins/DataTables/js/jquery.dataTables.min.js"></script>
    <script src="class/js/home/components.js" type="text/javascript"></script>
    <script src="class/js/home/components-shop.js" type="text/javascript"></script>
    <script src="class/js/home/app.js" type="text/javascript"></script>

    <script>
        $(document).ready(function () {
            $('#mitable').DataTable({
                    "pagingType": "full_numbers",
                    "paging": true,
                    "language": {
                        "lengthMenu": "Mostrar _MENU_ registros por página",
                        "zeroRecords": "No se encontraton registros",
                        "info": "Mostrando Registros: _TOTAL_ ",
                        "infoEmpty": "No se encontraton registros",
                        "infoFiltered": "(filtered from _MAX_ total records)",
                        "paginate": {
                            "first": "Primera",
                            "last": "Ultima",
                            "next": "Siguiente",
                            "previous": "Anterior"
                        },
                        "search": "Buscar: "
                    }

                });
            App.init();
        });

        function eliminar(id,nombre){
            swal({
                title: 'Quieres Eliminar La Entrada?\n'+nombre,
                text: "No puedes revertir el proceso!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!',
                cancelButtonText: 'No, Cancelar!',
                confirmButtonClass: 'btn btn-info',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function () {
                $.ajax({
                    type:"POST",
                    url: "consultas.php",
                    dataType:"text",
                    data:{
                        consulta:'eliminargaleria',
                        id:id
                    }
                }).done(function(data) {
                    if(data=="true"){
                        swal(
                        'Eliminado!',
                        'La entrada se ha eliminado.',
                        'success'
                      )
                        window.location="admingaleria.php";
                    }
                    if(data=="false"){
                        swal(
                       'Error!',
                       'Ocurrio un error al eliminar la entrada.',
                       'error'
                     )
                    }
                });
            }, function (dismiss) {
                if (dismiss === 'cancel') {
                }
            })
        }
    </script>
 
</body>
</html>

