﻿<!DOCTYPE html>
<?php
include 'constants.php';
?>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo @$title; ?></title>


    <!-- [ FONT-AWESOME ICON ] 
        
=========================================================================================================================-->

    <link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">


    <!-- [ PLUGIN STYLESHEET ]
        
=========================================================================================================================-->

    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png">

    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">

    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">


    <!-- [ Boot STYLESHEET ]
        
=========================================================================================================================-->

    <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">

    <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/s.css">

    <!-- [ DEFAULT STYLESHEET ] 
        
=========================================================================================================================-->

    

    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link rel="stylesheet" type="text/css" href="css/color/themecolor.css">
  

</head>

<body>

    <!-- [ LOADERs ]

================================================================================================================================-->

    <div class="preloader">

        <div class="loader theme_background_color">

            <span></span>


        </div>
    </div>
    <!-- [ /PRELOADER ]

=============================================================================================================================-->

    <!-- [WRAPPER ]

=============================================================================================================================-->

    <div class="wrapper">

        <!-- [NAV]
 
============================================================================================================================-->

        <!-- Navigation
    ==========================================-->

        <nav class=" nim-menu navbar navbar-default navbar-fixed-top">

            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand" href="index.php"><?php echo $title[0]; ?><span class="themecolor">
                            <?php echo $title[1]; ?></span><?php for ($i = 2; $i < strlen($title); $i++) echo $title[$i]; ?></a>

                </div>


                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="#home" class="page-scroll">
                                <h3>Home</h3>
                            </a></li>

                        <li><a href="#two" class="page-scroll">
                                <h3>About</h3>
                            </a></li>

                        <li><a href="library/sample.pdf" class="page-scroll">
                                <h3>Map</h3>
                            </a></li>

                        <li><a href="pro/signin.php" class="page-scroll">
                                <h3>Reviewer</h3>
                            </a></li>

                        <li><a href="pro/adminsignin.php" class="page-scroll">
                                <h3>Admin</h3>
                            </a></li>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->

            </div><!-- /.container-fluid -->

        </nav>



        <!-- [/NAV]
 
============================================================================================================================-->


        <!-- [/MAIN-HEADING]
 
============================================================================================================================-->

        <section class="main-heading" id="home">

            <div class="overlay">

                <div class="container">

                    <div class="row">

                        <div class="main-heading-content col-md-12 col-sm-12 text-center">

                            <h1 class="main-heading-title"><span class="main-element themecolor"
                                    data-elements=" Online Grievance, Online Grievance, Online Grievance"></span></h1>

                            <h1 class="main-heading-title"><span class="main-element themecolor"
                                    data-elements=" Handling System, Handling System, Handling System"></span>
                            </h1>

                            <p class="main-heading-text">WELCOME TO,<br />E - Grievance Handling System</p>

                            <div class="btn-bar">

                                <a href="pro/signin.php" class="btn btn-custom theme_background_color"> Suggestions</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


        </section>

      


        <!-- [ABOUT US]
 
============================================================================================================================-->

        <section class="aboutus white-background black" id="two">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center black">

                        <h3 class="title">ABOUT <span class="themecolor">US</span></h3>

                        <p class="a-slog">Developed By <?php echo $developer_name; ?> </p>

                    </div>

                </div>

                <div class="gap">


                </div>


                <div class="row about-box">

                    <div class="col-sm-4 text-center">

                        <div class="margin-bottom">

                            <i class="fa fa-newspaper-o"></i>

                            <h4>Give Suggestions</h4>

                            <p class="black">Give suggestions for the improvement of our work culture</p>

                        </div> <!-- / margin -->

                    </div> <!-- /col -->

                    <div class="col-sm-4 about-line text-center">

                        <div class="margin-bottom">

                            <i class="fa fa-diamond"></i>

                            <h4>Share your Problems </h4>

                            <p class="black">Share your problems so no one face that problem afterwards</p>

                        </div> <!-- / margin -->

                    </div><!-- /col -->

                    <div class="col-sm-4 text-center">

                        <div class="margin-bottom">

                            <i class="fa fa-dollar"></i>

                            <h4>Growth</h4>

                            <p class="black"> Promote personal and professional growth</p>

                        </div> <!-- / margin -->

                    </div><!-- /col -->

                </div> <!-- /row -->





            </div>
        </section>



        <footer class="site-footer section-spacing text-center " id="eight">


            <div class="container">

                <div class="row">

                    <div class="col-md-4">

                        <p class="footer-links"><a href="#">Terms of Use</a> <a href="#">Privacy Policy</a></p>

                    </div>

                    <div class="col-md-4"> <small>&copy; <?php echo date('Y'); ?>, Developed By <?php echo $developer_name; ?> </small></div>

                    <div class="col-md-4">

                        <!--social-->

                       
            <ul class="social">

              <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter "></i></a></li>

              <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>

              <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>

            </ul> 


                        <!--social end-->


                    </div>

                </div>

            </div>

        </footer>




        <!-- [/FOOTER]
 
============================================================================================================================-->




    </div>


    <!-- [ /WRAPPER ]

=============================================================================================================================-->


    <!-- [ DEFAULT SCRIPT ] -->

    <script src="library/modernizr.custom.97074.js"></script>

    <script src="library/jquery-1.11.3.min.js"></script>

    <script src="library/bootstrap/js/bootstrap.js"></script>

    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

    <!-- [ PLUGIN SCRIPT ] -->

    <script src="library/vegas/vegas.min.js"></script>

    <script src="js/plugins.js"></script>

    <!-- [ TYPING SCRIPT ] -->

    <script src="js/typed.js"></script>

    <!-- [ COUNT SCRIPT ] -->

    <script src="js/fappear.js"></script>

    <script src="js/jquery.countTo.js"></script>

    <!-- [ SLIDER SCRIPT ] -->

    <script src="js/owl.carousel.js"></script>

    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="js/SmoothScroll.js"></script>


    <!-- [ COMMON SCRIPT ] -->
    <script src="js/common.js"></script>

</body>


</html>