<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Meraki Magazine</title>
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lily+Script+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- CSS -->
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Font Awesome CSS -->
    <link href="assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <!-- Animate css -->
    <link href="assets/css/animate.css" rel="stylesheet" media="screen">
    <!-- Custom styles CSS -->
    <link href="assets/css/style.css" rel="stylesheet" media="screen">
</head>
<body>
    <div class="wrapper">

        <div id="loader-wrapper">
            <div id="loader">
                <img src="assets/img/logo.png" alt="" class="mirakilogo">
                <div class="line-up"></div><div class="line-down"></div>
            </div>
            <div class="loader-section section-left"></div>
        </div>

        <div id="content">
            <div class="layout">
                <div class="container">
                    <div class="main">
                        <div class="overlay">

                            <div class="col-md-12">
                                <div class="title">
                                    <img src="assets/img/logo2_opt.png" alt="">
                                    <h1>Proximamente!</h1>
                                </div>
                            </div>
                            <div class="slogan">
                                Algo grande se Aproxima...<br />
                            </div>
                            <!-- Your date here -->

                            <?php

                            //22 en G
                            if(date("j")>=2 && date("G")>=3 && date("i")>=43){
                                header("Location:../home.php");
                            }
                            ?>
                            <!--<script type="text/javascript">
                                var d = new Date();
                                document.write(d.getDate()+"/"+d.getMonth()+"/"+d.getHours()+"/"+d.getMinutes());
                                if(d.getHours()==19 && d.getMinutes()==36){
                                    location.href = "../home.php";
                                }
                            </script>--> 

                            <div class="countdown-time animated bounceIn" data-date="2017-10-02 14:00:00" data-timer="900"></div>
                            <br><br>
                            <div class="slogan">¡Siguenos en nuestras redes sociales!</div>
                            <div class="social">
                                <ul class="list-inline">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>

                        </div><!-- /.overlay -->
                    </div><!-- /.main -->
                </div><!-- /.container -->
            </div>
        </div>
    </div>
    <!-- Preloader -->
    <!-- Javascript files -->
    <!-- jQuery -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Count Down - Time Circles  -->
    <script type="text/javascript" src="assets/js/TimeCircles.js"></script>
    <!-- Vegas - Fullscreen Backgrounds and Slideshows -->
    <script src="assets/js/jquery.vegas.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.wrapper').addClass('loaded');

            }, 2000);
        });

        jQuery(function () {
            $(window).load(function () {
                $('.wrapper').removeClass('preload');
            });
        });
    </script>
</body>
</html>