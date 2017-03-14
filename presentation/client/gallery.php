<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>jQuery lightGallery demo</title>
        <link href="../../css/lightgallery.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Tu Empresa</title>

        <!-- Bootstrap Core CSS -->
        <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

        <!-- Theme CSS -->
        <link href="../../css/agency.min.css" rel="stylesheet">

        <!-- Para imagenes -->
        <link rel="stylesheet" type="text/css" href="../../css/StyleGallery.css">

    </head>
    <body id="page-top" class="home">

        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top" style="background-color: #333;">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">Empresa</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="./home.php">Inicio</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>


        <section id="portfolio">

            <div class="demo-gallery">
                <ul id="lightgallery" class="list-unstyled row">
                    <li class="col-xs-6 col-sm-4 col-md-3" data-src="../../img/Gallery/01.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                        <a href="">
                            <img class="img-responsive" src="../../img/Gallery/01.jpg" alt="Thumb-1">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-3" data-src="../../img/Gallery/02.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                        <a href="">
                            <img class="img-responsive" src="../../img/Gallery/02.jpg" alt="Thumb-2">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-3" data-src="../../img/Gallery/03.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                        <a href="">
                            <img class="img-responsive" src="../../img/Gallery/03.jpg" alt="Thumb-3">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-3" data-src="../../img/Gallery/04.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                        <a href="">
                            <img class="img-responsive" src="../../img/Gallery/04.jpg" alt="Thumb-4">
                        </a>
                    </li>
                </ul>
            </div>

        </section>

        <script src="../../js/picturefill.min.js"></script>
        <script src="../../js/lightgallery.js"></script>
        <script src="../../js/lg-pager.js"></script>
        <script src="../../js/lg-autoplay.js"></script>
        <script src="../../js/lg-fullscreen.js"></script>
        <script src="../../js/lg-zoom.js"></script>
        <script src="../../js/lg-hash.js"></script>
        <script>
            lightGallery(document.getElementById('lightgallery'));
        </script>
        <!-- jQuery -->
        <script src="../../vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Theme JavaScript -->
        <script src="../../js/agency.min.js"></script>

    </body>
</html>
