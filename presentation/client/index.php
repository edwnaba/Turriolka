<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>TURRIOLKA</title>
        <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../../js/jquery-1.11.0.min.js"></script>
        <!-- Custom Theme files -->
        <link href="../../css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../../css/style1.css" rel="stylesheet" type="text/css" media="all" />	
        <link href="../../css/styles.css" rel="stylesheet" type="text/css" media="all" />	
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Mr Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--Google Fonts-->
        <link href='../../fonts.googleapis.com/css?family=Hind:400,300' rel='stylesheet' type='text/css'>
        <link href='../../fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
        <!--google fonts-->
        <!-- animated-css -->
        <link href="../../css/animate.css" rel="stylesheet" type="text/css" media="all">
        <link href="../../css/agency.min.css" rel="stylesheet">

        <script src="../../js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!-- animated-css -->
        <script src="../../js/modernizr.js"></script>
        <script>
            $(document).ready(function () {
                if (Modernizr.touch) {
                    // show the close overlay button
                    $(".close-overlay").removeClass("hidden");
                    // handle the adding of hover class when clicked
                    $(".branch-gd").click(function (e) {
                        if (!$(this).hasClass("hover")) {
                            $(this).addClass("hover");
                        }
                    });
                    // handle the closing of the overlay
                    $(".close-overlay").click(function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        if ($(this).closest(".branch-gd").hasClass("hover")) {
                            $(this).closest(".branch-gd").removeClass("hover");
                        }
                    });
                } else {
                    // handle the mouseenter functionality
                    $(".branch-gd").mouseenter(function () {
                        $(this).addClass("hover");
                    })
                            // handle the mouseleave functionality
                            .mouseleave(function () {
                                $(this).removeClass("hover");
                            });
                }
            });
        </script>

        <!--gallery end here-->
        <script src="../../js/jquery.chocolat.js"></script>
        <link rel="stylesheet" href="../../css/chocolat.css" type="text/css" media="screen" charset="utf-8">
        <!--light-box-files -->
        <script type="text/javascript" charset="utf-8">
            $(function () {
                $('.gallery-grid a').Chocolat();
            });
        </script>

        <script src="../../js/bootstrap.min.js"></script>

<!--        <style type="text/css">
            .navbar-tav{
                background-color: rgba(233, 168, 32, 0.9);
            }
        </style>-->

        <style type="text/css">

            body{
                margin: 0px;
            }

            video{
                position: fixed;
                min-height: 100%;
                min-width: 100%;

                top: 50%;
                left: 50%;
                transform: translateX(-50%) translateY(-50%);

                z-index: -1;
            }

            .fond1{
                background-image: url("../../img/fondo1.jpg");
                width: 100%;
                height: 100%;
            }

            .fond2{
                background: rgba(8,8,8,0.6);
            }

            .textTav{
                background: rgba(100,100,100,0.6);
                color: #fff;
                border-radius: 15px;
            }

            /*** CSS parra dropdown del menu ***/
            .dropdown-menu{
                background-color: #567;
            }
            .btn-tav{
                background: rgba(100,100,100,0);
                /*background-color: #222;*/
                color: #fff;
                font-size: 18px;
            }

            .btn-tav:hover{
                color: #fed136;
            }

            .btn-tav:focus{
                color: #fed136;
            }

        </style>

        <style type="text/css">
            body{
                position: relative;
            }

            .seccion{
                padding-top: 60px;
            }

            .body{
                transition-duration: 3s;
            }

        </style>

        <style type="text/css">
            /*
    Full screen Modal 
            */
            .fullscreen-modal .modal-dialog {
                margin: 0;
                margin-right: auto;
                margin-left: auto;
                width: 100%;
            }
        </style>

        <?php
        include_once '../../business/Titulos/TitulosBusiness.php';
        $titulos = new TitulosBusiness();
        $arregloTitulos = null;
        if (isset($_GET['lang'])) {
            if ($_GET['lang'] == 'es') {
                $arregloTitulos = $titulos->obtenerTitulosEsBusiness();
            }else {
            $arregloTitulos = $titulos->obtenerTitulosInBusiness();
            }   
        } else {
            $arregloTitulos = $titulos->obtenerTitulosInBusiness();
        }
        ?>
    </head>
    <body>
        <!-- NAVBAR ================================================== -->
        <div class="header">
            <div class="fixed-header navbar-tav navbar-fixed-top">	
                <div class="navbar-wrapper">
                    <header id="header">
                        <div class="header-navi">
                            <div class="container">
                                <div class="row">
                                    <div class="row" >
                                        <div id="header-togglecontent">
                                            <ul class="nav navbar-nav main-nav cl-effect-16" id="cl-effect-16">
                                                <li>
                                                    <a id="navItemHome" onclick="selectActive('navItemHome')" class="active" href="#inicio" data-hover="<?php echo $arregloTitulos[7]->getNombre(); ?>"><?php echo $arregloTitulos[7]->getNombre(); ?> </a>
                                                </li>
                                                <li>
                                                    <a id="navItemGallery" onclick="selectActive('navItemGallery')" href="#gallery" data-hover="<?php echo $arregloTitulos[1]->getNombre(); ?>"><?php echo $arregloTitulos[1]->getNombre(); ?></a>
                                                </li>
                                                <li>
                                                    <a id="navItemValues" onclick="selectActive('navItemValues')" href="#nuestros-valores" data-hover="<?php echo $arregloTitulos[2]->getNombre(); ?>"><?php echo $arregloTitulos[2]->getNombre(); ?></a>
                                                </li>
                                                <li>
                                                    <a id="navItemProduct" onclick="selectActive('navItemProduct')" href="#Productos" data-hover="<?php echo $arregloTitulos[3]->getNombre(); ?>"><?php echo $arregloTitulos[3]->getNombre(); ?></a>
                                                </li>
                                                <li>
                                                    <a id="navItemAwards" onclick="selectActive('navItemAwards')" href="#Premiaciones" data-hover="<?php echo $arregloTitulos[4]->getNombre(); ?>"><?php echo $arregloTitulos[4]->getNombre(); ?></a>
                                                </li>
                                                <li>
                                                    <a id="navItemVarieties" onclick="selectActive('navItemVarieties')" href="#variedades" data-hover="<?php echo $arregloTitulos[5]->getNombre(); ?>"><?php echo $arregloTitulos[5]->getNombre(); ?></a>
                                                </li>
                                                <li>
                                                    <a id="navItemContact" onclick="selectActive('navItemContact')" href="#variedades" data-hover="<?php echo $arregloTitulos[6]->getNombre(); ?>"><?php echo $arregloTitulos[6]->getNombre(); ?></a>
                                                </li>						


                                                <li>
                                                    <a id="navItemContact" href="./index.php?lang=in" data-hover="">IN</a>
                                                </li>						
                                                <li>
                                                    <a id="navItemContact" href="./index.php?lang=es" data-hover="">ES</a>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div id="header-togglecontent">
                        <div id="header-toggle" style="background: #FF6633">
                            <?php echo $arregloTitulos[0]->getNombre(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--header end here-->
            <!--banner  start hwew-->
            <div class="banner" id="inicio" style="margin-bottom: 0px;margin-top: 0px;">
                <div class="container">
                    <div class="banner-main wow zoomIn" data-wow-delay="0.3s">
                        <h2>Finca Turriolka</h2>
                        <h6>Producción y venta de café </h6>
                        <p>
                            Nuestro café se destaca por excelente calidad gracias a proceso no tradicional que empleamos, producimos en armonía con la naturaleza.
                        </p>
                    </div>
                </div>
            </div>
            <!--BANNER END HERE-->

            <!--gallery start here-->
            <div class="gallery" id="gallery">
                <div class="container">
                    <div class="gallery-main wow zoomIn" data-wow-delay="0.3s">
                        <div class="gallery-top">
                            <h1><?php echo $arregloTitulos[1]->getNombre(); ?></h1>
                        </div>
                        <div class="gallery-bott">
                            <div class="col-md-4 col1 gallery-grid">
                                <a href="../../img/r3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
                                    <figure class="effect-bubba">
                                        <img class="img-responsive" src="../../img/r3.jpg" alt="">
                                        <figcaption>
                                            <h4 class="gal"> Nemo voluptatem</h4>
                                            <p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>	
                                        </figcaption>			
                                    </figure>
                                </a>
                            </div>
                            <div class="col-md-4 col1 gallery-grid">
                                <a href="../../img/r4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
                                    <figure class="effect-bubba">
                                        <img class="img-responsive" src="../../img/r4.jpg" alt="">
                                        <figcaption>
                                            <h4 class="gal">Nemo voluptatem</h4>
                                            <p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>	
                                        </figcaption>			
                                    </figure>
                                </a>
                            </div>
                            <div class="col-md-4 col1 gallery-grid">
                                <a href="../../img/r5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
                                    <figure class="effect-bubba">
                                        <img class="img-responsive" src="../../img/r5.jpg" alt="">
                                        <figcaption>
                                            <h4 class="gal">Nemo voluptatem</h4>
                                            <p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>	
                                        </figcaption>			
                                    </figure>
                                </a>
                            </div>
                            <div class="col-md-4 col1 gallery-grid">
                                <a href="../../img/r6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
                                    <figure class="effect-bubba">
                                        <img class="img-responsive" src="../../img/r6.jpg" alt="">
                                        <figcaption>
                                            <h4 class="gal">Nemo voluptatem</h4>
                                            <p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>	
                                        </figcaption>			
                                    </figure>
                                </a>
                            </div>
                            <div class="col-md-4 col1 gallery-grid">
                                <a href="../../img/r7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
                                    <figure class="effect-bubba">
                                        <img class="img-responsive" src="../../img/r7.jpg" alt="">
                                        <figcaption>
                                            <h4 class="gal">Nemo voluptatem</h4>
                                            <p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>	
                                        </figcaption>			
                                    </figure>
                                </a>
                            </div>
                            <div class="col-md-4 col1 gallery-grid">
                                <a href="../../img/r8.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
                                    <figure class="effect-bubba">
                                        <img class="img-responsive" src="../../img/r8.jpg" alt="">
                                        <figcaption>
                                            <h4 class="gal">Nemo voluptatem</h4>
                                            <p class="gal1">In sit amet sapien eros Integer dolore magna aliqua</p>	
                                        </figcaption>			
                                    </figure>
                                </a>
                            </div>
                            <!--<div class="clearfix"> </div>-->
                        </div>
                    </div>
                </div>
            </div>

            <!--services strip start here-->
            <div class="ser-strip" id="nuestros-valores" >
                <div class="container">
                    <div id="values" class="ser-strip-main wow rollIn" data-wow-delay="0.3s">
                        <h2><?php echo $arregloTitulos[2]->getNombre(); ?></h2>
                        <p> <strong>MISSION:</strong> La misión de Luminarias impala S.A de C.V, es la de iluminar los hogares y los centros de trabajo de nuestros clientes, en forma suficiente, económica y con productos de la mayor calidad, ajustados a los parámetros ecológicos y siempre en beneficio del menor consumo y mayor servicio de los usuarios  finales.</p>
                        <p> <strong>VISION:</strong> La visión de luminarias impala, es que la tecnología llegue a todos los clientes, ajustando nuestros productos a los avances tecnológicos y cuidando del bolsillo de nuestros clientes y a la vez de la ecología, al producir luminarias de bajo consumo y larga duración.</p>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!--services strip end here-->

            <!--services strat here-->
            <div class="services" id="Productos" >
                <div class="container">
                    <div class="services-man">
                        <div class="services-top">
                            <h1><?php echo $arregloTitulos[3]->getNombre(); ?></h1>				
                        </div>
                        <div class="services-bottom wow slideInLeft" data-wow-delay="0.3s">
                            <div class="col-md-4 services-grid">				
                                <div class="item item-type-move">
                                    <a class="item-hover" href="single.html">						
                                        <div class="item-info">
                                            <div class="headline">
                                                Our Rooms
                                                <div class="line"> </div>
                                            </div>
                                            <div class="date">February 29, 2016</div>							
                                        </div>
                                        <div class="mask"> </div>
                                    </a>
                                    <div class="item-img">
                                        <img src="../../img/s1.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                                <div class="ser-text">
                                    <h4>On the other hand</h4>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men</p>
                                </div>
                            </div>
                            <div class="col-md-4 services-grid">				
                                <div class="item item-type-move">
                                    <a class="item-hover" href="single.html">						
                                        <div class="item-info">
                                            <div class="headline">
                                                Our Rooms
                                                <div class="line"> </div>
                                            </div>
                                            <div class="date">February 29, 2016</div>							
                                        </div>
                                        <div class="mask"> </div>
                                    </a>
                                    <div class="item-img">
                                        <img src="../../img/s2.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                                <div class="ser-text">
                                    <h4>Sed  perspiciatis</h4>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men</p>
                                </div>
                            </div>
                            <div class="col-md-4 services-grid">
                                <div class="item item-type-move">
                                    <a class="item-hover" href="single.html">						
                                        <div class="item-info">
                                            <div class="headline">
                                                Our Rooms
                                                <div class="line"> </div>
                                            </div>
                                            <div class="date">February 29, 2016</div>							
                                        </div>
                                        <div class="mask"> </div>
                                    </a>
                                    <div class="item-img">
                                        <img src="../../img/s3.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                                <div class="ser-text">
                                    <h4>On the other hand</h4>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men</p>
                                </div>
                            </div>			
                            <div class="clearfix"> </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--services end here-->
            <!-- About Section -->
            <section id="Premiaciones" class="fond1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading"><?php echo $arregloTitulos[4]->getNombre(); ?></h2>
                            <h3 class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-image item2">
                                        <img class="img-circle img-responsive" src="../../img/about/1.jpg" alt="">
                                    </div>
                                    <div class="timeline-panel textTav item2">
                                        <div>
                                            <h4>2009-2011</h4>
                                            <h4 class="subheading">Feria del café</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-image item2">
                                        <img class="img-circle img-responsive" src="../../img/about/2.jpg" alt="">
                                    </div>
                                    <div class="timeline-panel textTav item2">
                                        <div>
                                            <h4>Marzo 2012</h4>
                                            <h4 class="subheading">Segunda feria internacional del café</h4>
                                        </div>

                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam!</p>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-image item2">
                                        <img class="img-circle img-responsive" src="../../img/about/3.png" alt="">
                                    </div>
                                    <div class="timeline-panel textTav item2">
                                        <div>
                                            <h4>Diciembre 2012</h4>
                                            <h4 class="subheading">Feria nacional del café</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam!</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-image item2">
                                        <img class="img-circle img-responsive" src="../../img/about/4.png" alt="">
                                    </div>
                                    <div class="timeline-panel textTav item2">
                                        <div>
                                            <h4>Julio 2014</h4>
                                            <h4 class="subheading">Feria internacional del café</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam!</p>
                                        </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-image item2">
                                        <h4>Seguimos
                                            <br>haciendo
                                            <br>Historia!</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!--information start here-->
            <div class="information" id="variedades">
                <div class="container">
                    <div class="information-main">
                        <div class="information-grid five-star wow slideInLeft" data-wow-delay="0.3s">

                            <div class="gallery-top">
                                <h1><?php echo $arregloTitulos[5]->getNombre(); ?></h1>
                            </div>

                            <div class="col-md-4 hotel-info">
                                <div class="info-left">
                                    <img src="../../img/s1.png" alt="">
                                </div>
                                <div class="info-right">
                                    <h4>Star Hotel</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="col-md-4 hotel-info">
                                <div class="info-left">
                                    <img src="../../img/s2.png" alt="">
                                </div>
                                <div class="info-right">
                                    <h4>services</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="col-md-4 hotel-info">
                                <div class="info-left">
                                    <img src="../../img/s4.png" alt="">
                                </div>
                                <div class="info-right">
                                    <h4>Secure</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="information-grid wow slideInRight" data-wow-delay="0.3s">
                            <div class="col-md-4 hotel-info">
                                <div class="info-left">
                                    <img src="../../img/s3.png" alt="">
                                </div>
                                <div class="info-right">
                                    <h4>Food</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="col-md-4 hotel-info">
                                <div class="info-left">
                                    <img src="../../img/s5.png" alt="">
                                </div>
                                <div class="info-right">
                                    <h4>Hotel</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="col-md-4 hotel-info">
                                <div class="info-left">
                                    <img src="../../img/s6.png" alt="">
                                </div>
                                <div class="info-right">
                                    <h4>Bell</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!--information end here-->


            <!--copy rights start here-->
            <div class="copy-right">
                <div class="container">
                    <div class="copy-rights-main wow zoomIn" data-wow-delay="0.3s">
                        <p>© 2017 TCU Universidad de Costa Rica</p>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fullscreen-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <?php include_once './cafe.php' ?>
                        </div>

                    </div>
                </div>
            </div>
       <!--<script src="js/scripts.js"></script>-->
            <script src="../../js/scripts.js" type="text/javascript"></script>
    </body>
    <!--para el menu-->
    <script type="text/javascript">
                                                        function selectActive(option) {
                                                            noneActive();
                                                            $('#' + option).attr('class', 'active');
                                                            if (window.innerWidth < 992) {
                                                                $('#header-toggle').click();
                                                            }
                                                        }
                                                        ;
                                                        function noneActive() {
                                                            $("#navItemHome").removeAttr("class");
                                                            $("#navItemValues").removeAttr("class");
                                                            $("#navItemProduct").removeAttr("class");
                                                            $("#navItemGallery").removeAttr("class");
                                                            $("#navItemAwards").removeAttr("class");
                                                            $("#navItemVarieties").removeAttr("class");
                                                            $("#navItemContact").removeAttr("class");
                                                        }
                                                        ;

    </script>
</html>