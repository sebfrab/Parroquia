<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Parroquia Santa María Madre de la Iglesia</title>
        
        <!-- Bootstrap 3.0 -->
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.css" />
        <!-- Normalización para Web -->
        <link rel="stylesheet" type="text/css" href="./css/normalize.css" />
        <!-- Hover -->
        <link rel="stylesheet" type="text/css" href="./css/hover.css" />
        <!-- Owl Carousel Assets -->
        <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="owl-carousel/owl.theme.css" rel="stylesheet">
        <!-- Css Web -->
        <link rel="stylesheet" type="text/css" href="./css/init.css" />
        <!-- Jquery -->
        <script type="text/javascript" src="./js/jquery.js"></script>
    </head>
    <body>
        
        <header>
            <nav id="menu-principal" class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="" class="navbar-brand" style="margin-top: -15px;"><img src="./images/logo.png"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="menu nav navbar-nav navbar-right">
                            <li>
                                <a class="hvr-underline-from-center" href="#">PARROQUIA</a>
                            </li>
                            <li>
                                <a class="hvr-underline-from-center" href="#">HISTORIA</a>
                            </li>
                            <li>
                                <a class="hvr-underline-from-center" href="#">COMUNIDADES</a>
                            </li>
                            <li>
                                <a class="hvr-underline-from-center" href="#">GALERIA</a>
                            </li>
                            <li>
                                <a class="hvr-underline-from-center" href="#">CONTACTO</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        

        <div class="container-fluid" id="slider">
            <div class="row">
                <div class="col-lg-12" style="padding-left:0px; padding-right: 0px;">
                    <div id="owl-demo-slider" class="owl-carousel owl-theme">
                        <div><a><img alt="slider" id="slider1" src="./images/slider-3.jpg" /></a></div>
                        <div><a><img alt="slider" id="slider1" src="./images/slider-4.jpg" /></a></div>
                        <div><a><img alt="slider" id="slider1" src="./images/slider-5.jpg" /></a></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid" id="noticias">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#">
                        <h3 style="text-align: center;">NOTICIAS</h3>
                        <p style="text-align: center;">Galerias recientes</p>
                    </a>
                </div>
            </div>  
            <div class="row">
                <div class="col-lg-4" style="background-color: #666; height: 150px;"></div>
                <div class="col-lg-4" style="background-color: #666; height: 150px;"></div>
                <div class="col-lg-4" style="background-color: #666; height: 150px;"></div>
            </div>
                
                
        </div>
        
        
        
        
        <div class="container-fluid" id="galeria">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#">
                        <h3 style="text-align: center;">GALERIA</h3>
                        <p style="text-align: center;">Galerias recientes</p>
                    </a>
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="owl-item"><div class="thumbnail"><a href="#"><img class="galeria-imagen" src="./images/galeria1.jpg" /></a></div></div>
                        <div class="owl-item"><div class="thumbnail"><a href="#"><img class="galeria-imagen" src="./images/galeria5.jpg" /></a></div></div>
                        <div class="owl-item"><div class="thumbnail"><a href="#"><img class="galeria-imagen" src="./images/galeria2.jpg" /></a></div></div>
                        <div class="owl-item"><div class="thumbnail"><a href="#"><img class="galeria-imagen" src="./images/galeria4.jpg" /></a></div></div>
                        <div class="owl-item"><div class="thumbnail"><a href="#"><img class="galeria-imagen" src="./images/galeria3.jpg" /></a></div></div>
                    </div> 
                </div>
            </div>  
        </div>
        
        
        
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        
        
        
        <script type="text/javascript" src="./js/bootstrap.js"></script>
        <script type="text/javascript" src="./js/scrolling-nav.js"></script>
        <script src="./owl-carousel/owl.carousel.min.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                
                $('#owl-demo-slider').owlCarousel({
                    autoPlay : 3000,
                    stopOnHover : true,
                    navigation:false,
                    paginationSpeed : 1000,
                    goToFirstSpeed : 2000,
                    singleItem : true,
                    autoHeight : true,
                    transitionStyle:"fade"
                });
                
                $('#owl-demo').owlCarousel({
                    autoPlay : 7000,
                    items: 4,
                    itemsDesktop: [119,3],
                    itemsDesktopSmall: [979,3]
                });
            });

        </script>
    </body>
</html>
