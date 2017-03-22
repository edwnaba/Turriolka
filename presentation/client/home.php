<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Tu Empresa</title>

        <!-- Bootstrap Core CSS -->
        <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!-- Theme CSS -->
        <link href="../../css/agency.min.css" rel="stylesheet">

        <!-- Slider -->
        <script type="text/javascript" src="../../js/libJS.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../css/StyleSlider.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/coffee.css">
        <link rel="stylesheet" type="text/css" href="../../css/StyleSliderTav.css">

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

            /*background-image: url("../../img/fondo1.jpg");*/
            background-color: #aaa;
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

        <!-- Company -->
        <script src="../../vendor/jquery/jquery.min.js"></script>

        <link href="../../css/companyStyles.css" rel="stylesheet" type="text/css"/>   

        <style type="text/css">

        .item2{
        box-shadow: 1px 1px 10px rgba(0,0,0,0.7);
        transition:box-shadow 1s, transform 500ms, filter 500ms ease-in-out; 
        padding: 0px;
        margin: 0px;
        }


        .item2:hover{
        transform: scale(1.05);
        box-shadow: 0px 0px 25px rgba(0,0,0,0.8);
        } 

        .blur{
        filter: blur(3px);
        transform: scale(0.95);
        }
    </style>

    </head>

    <body id="page-top" class="index">

         <!-- Video de fondo -->
    <video src="../../video/video1.mp4" autoplay loop mute poster="imagen.jpg"></video>
    <!-- final de fondo de video -->

    <div class="portfolio-modal modal fade" id="modalVariedades" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                    </div>
                    <div>
                        <div>
                            <?php include 'cafe.php';?>
                        </div>      
                    </div>
                  
            </div>
        </div>
    </div>

        
    

        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">Turriolka</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#nosotros">Sobre Nosotros</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#portfolio">Productos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#galeria">Galería</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">Premiaciones</a>
                        </li>

                        <!--<li>
                            <a href="#modalVariedades" class="portfolio-link" data-toggle="modal">variedades</a>
                        </li>-->

                        <li>
                            <div class="dropdown portfolio-link">
                              <button class="btn dropdown-toggle btn-tav" type="button" data-toggle="dropdown">Variedades
                              <span class="caret"></span></button>
                              <ul class="dropdown-menu">
                                <li><a href="#modalVariedades"  data-toggle="modal">variedades</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">JavaScript</a></li>
                              </ul>
                            </div>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="intro-text">
                    <!--<div class="intro-lead-in">Bienvenido a su empresa de café</div> -->
                    <div class="intro-heading"><img src="../../img/Logo-turriolka.png" alt=""></div>
                    <!--<a href="#services" class="page-scroll btn btn-xl">Continuar</a>-->
                </div>
            </div>
        </header>

        <!--MISION, VISION ANTECEDENTES HISTORIA-->
        <section>
            <div id="nosotros" class="container-fluid" style="margin: 0px;" class="fond1">
                <div class="row">
                    <div class="col-sm-4">
                        <br/>
                        <span class="glyphicon glyphicon-globe logo slideanim"></span>
                    </div>
                    <div class="col-sm-8">
                        <h2 id="level2">Nuestros Valores</h2><br>
                        <h4 id="level4"><strong>MISSION:</strong> La misión de Luminarias impala S.A de C.V, es la de iluminar los hogares y los centros de trabajo de nuestros clientes, en forma suficiente, económica y con productos de la mayor calidad, ajustados a los parámetros ecológicos y siempre en beneficio del menor consumo y mayor servicio de los usuarios  finales.</h4><br>
                        <p id="vision">
                            <strong>VISION:</strong> La visión de luminarias impala, es que la tecnología llegue a todos los clientes, ajustando nuestros productos a los avances tecnológicos y cuidando del bolsillo de nuestros clientes y a la vez de la ecología, al producir luminarias de bajo consumo y larga duración.</p>
                    </div>
                </div>
            </div>
        </section>






        <!-- Services Section -->
        <section id="portfolio" class="bg-light-gray" style="margin: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Productos</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="../../img/productos/GranoExcelencia.jpg" class="img-responsive" alt="">
                            </a>
                            <div class="portfolio-caption">
                                <h4>Grano de excelencia.</h4>
                                <p class="text-muted">Grano seleccionado para su disfrute.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="../../img/productos/GranoRegular.jpg" class="img-responsive" alt="">
                            </a>
                            <div class="portfolio-caption">
                                <h4>Grano regular</h4>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 portfolio-item img-circle">
                            <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="../../img/productos/GranoEconomico.jpg" class="img-responsive" alt="">
                            </a>
                            <div class="portfolio-caption">
                                <h4>Grano económico.</h4>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <!-- Portfolio Grid Section -->
    <section id="galeria" class="fond2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="color: #fff;">
                    <h2 class="section-heading">Galería</h2>
                    <h3 class="section-subheading ">Lorem ipsum dolor sit amet consectetur.</h3>

                </div>
                <div class="row">
                    <div class="text-center">
                        <div class="contentTav">
                            <div id="jssor_1" class="content2Tav">
                                <!-- Loading Screen -->
                                <div data-u="loading" class="menuTav">
                                    <div class="menu1Tav"></div>
                                    <div class="menu2Tav"></div>
                                </div>
                                <div data-u="slides" class="contentIntroTav">
                                    <div>
                                        <img data-u="image" src="../../img/Gallery/01.jpg" />
                                        <img data-u="thumb" src="../../img/Gallery/thumb-01.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="../../img/Gallery/02.jpg" />
                                        <img data-u="thumb" src="../../img/Gallery/thumb-02.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="../../img/Gallery/03.jpg" />
                                        <img data-u="thumb" src="../../img/Gallery/thumb-03.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="../../img/Gallery/04.jpg" />
                                        <img data-u="thumb" src="../../img/Gallery/thumb-04.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="../../img/Gallery/05.jpg" />
                                        <img data-u="thumb" src="../../img/Gallery/thumb-05.jpg" />
                                    </div>

                                    <a data-u="any" href="http://www.jssor.com" style="display:none">Image Gallery</a>

                                    <div>
                                        <img data-u="image" src="../../img/Gallery/06.jpg" />
                                        <img data-u="thumb" src="../../img/Gallery/thumb-06.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="../../img/Gallery/07.jpg" />
                                        <img data-u="thumb" src="../../img/Gallery/thumb-07.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="../../img/Gallery/08.jpg" />
                                        <img data-u="thumb" src="../../img/Gallery/thumb-08.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="../../img/Gallery/09.jpg" />
                                        <img data-u="thumb" src="../../img/Gallery/thumb-09.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="../../img/Gallery/10.jpg" />
                                        <img data-u="thumb" src="../../img/Gallery/thumb-10.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="../../img/Gallery/11.jpg" />
                                        <img data-u="thumb" src="../../img/Gallery/thumb-11.jpg" />
                                    </div>
                                    <div>
                                        <img data-u="image" src="../../img/Gallery/12.jpg" />
                                        <img data-u="thumb" src="../../img/Gallery/thumb-12.jpg" />
                                    </div>
                                </div>
                                <!-- Thumbnail Navigator -->
                                <div data-u="thumbnavigator" class="jssort01 contentNavigatorTav" data-autocenter="1">
                                    <!-- Thumbnail Item Skin Begin -->
                                    <div data-u="slides" style="cursor: default;">
                                        <div data-u="prototype" class="p">
                                            <div class="w">
                                                <div data-u="thumbnailtemplate" class="t"></div>
                                            </div>
                                            <div class="c"></div>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Item Skin End -->
                                </div>
                                <!-- Arrow Navigator -->
                                <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
                                <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row" style="margin-top:20px;">
                    <div class="text-center">
                        <a href="./gallery.php" class="btn btn-primary btn-lg">Ver mas</a>
                    </div>
                </div>
            </div>
        </section>






    <!-- About Section -->
    <section id="about" class="fond1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Premiaciones</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente</h3>
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





        <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Contact Us</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        Universidad de Costa Rica. <br/>
                        Trabajo Comunitario <br/>
                        2017
                    </div>

                </div>
            </div>
        </footer>

        <!-- Portfolio Modals -->
        <!-- Use the modals below to showcase details about your portfolio projects! -->

        <!-- Portfolio Modal 1 -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2>Grano de Excelencia</h2>
                                    <p class="item-intro text-muted">222Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-responsive img-centered" src="../../img/productos/GranoExcelencia.jpg" alt="">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <p>
                                        <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                    <ul class="list-inline">
                                        <li>Date: July 2014</li>
                                        <li>Client: Round Icons</li>
                                        <li>Category: Graphic Design</li>
                                    </ul>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 2 -->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h2>Grano Regular.</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-responsive img-centered" src="../../img/productos/GranoRegular.jpg" alt="">
                                    <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                                    <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 3 -->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2>Grano Económico</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-responsive img-centered" src="../../img/productos/GranoEconomico.jpg" alt="">
                                    <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                    <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 4 -->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2>Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-responsive img-centered" src="../../img/portfolio/golden-preview.png" alt="">
                                    <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                                    <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 5 -->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2>Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-responsive img-centered" src="../../img/portfolio/escape-preview.png" alt="">
                                    <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                                    <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 6 -->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    <h2>Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-responsive img-centered" src="../../img/portfolio/dreams-preview.png" alt="">
                                    <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                                    <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../../vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

        <!-- Contact Form JavaScript -->
        <script src="../../js/jqBootstrapValidation.js"></script>
        <script src="../../js/contact_me.js"></script>

        <!-- Theme JavaScript -->
        <script src="../../js/agency.min.js"></script>

        <!-- Slider -->
        <script type="text/javascript">jssor_1_slider_init();</script>

        <script src="../../js/company.js" type="text/javascript"></script>
    </body>

</html>
