<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Parroquia Santa María Madre de la Iglesia</title>
        
        <!-- Bootstrap 3.0 -->
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.css" />
        <!-- Normalización para Web -->
        <link rel="stylesheet" type="text/css" href="./css/normalize.css" />
        <!-- Css Web -->
        <link rel="stylesheet" type="text/css" href="./css/init.css" />
        <!-- Menú -->
        <link rel="stylesheet" type="text/css" href="./css/scrolling-nav.css" />
        <!-- slider -->
        <link rel="stylesheet" type="text/css" href="./css/jquery.bxslider.css" />
        <!-- hover -->
        <link rel="stylesheet" type="text/css" href="./css/hover.css" />
        <!-- Jquery -->
        <script type="text/javascript" src="./js/jquery.js"></script>
    </head>
    <body>
        
        <header>         
           <!-- Navigation -->
            <nav id="menu-principal" class="navbar navbar-default navbar-fixed-top" role="navigation">
                
                <div id="menu-auxiliar" class="container-fluid hidden-xs">
                    <div class="row">
                        <div class="col-lg-12" style="height: 50px; background-color: #eaeaea; margin-bottom: 40px;">
                            <div class="navbar-collapse bs-js-navbar-collapse collapse"> 
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="http://www.obispadodevalparaiso.cl/">Obispado</a></li>
                                    <li><a href="http://www.santuariolovasquez.cl/">Santuario Lo Vasquez</a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                </ul>                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="" class="navbar-brand">  <p style="margin-top: -25px;"><img style="vertical-align: middle;" src="./images/logo.jpg"/></p></a>

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="menu nav navbar-nav navbar-right">
                            <li>
                                <a class="hvr-underline-reveal" href="#">PARROQUIA</a>
                            </li>
                            <li>
                                <a class="hvr-underline-reveal" href="#">HISTORIA</a>
                            </li>
                            <li>
                                <a class="hvr-underline-reveal" href="#">COMUNIDADES</a>
                            </li>
                            <li>
                                <a class="hvr-underline-reveal" href="#">GALERIA</a>
                            </li>
                            <li>
                                <a class="hvr-underline-reveal" href="#">CONTACTO</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        </header>
        
        <div class="container-fluid">
            <div class="row">
                <ul class="bxslider">
                    <li><a href="#"><img src="./images/portada2.jpg" /></a></li>
                    <li><a href="#"><img src="./images/portada.jpg" /></a></li>
                </ul>
            </div>
        </div>
        
        
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 contenido_uno"></div>
                <div class="col-lg-4 contenido_uno"></div>
                <div class="col-lg-4 contenido_uno"></div>
            </div>
        </div>
        
        
        
        
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Scrolling Nav</h1>
                    <p><strong>Usage Instructions:</strong> Make sure to include the <code>scrolling-nav.js</code>, <code>jquery.easing.min.js</code>, and <code>scrolling-nav.css</code> files. To make a link smooth scroll to another section on the page, give the link the <code>.page-scroll</code> class and set the link target to a corresponding ID on the page.</p>
                    <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>
                </div>
            </div>
        </div>
    </section>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Section</h1>
                </div>
            </div>
        </div>
    </section>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Services Section</h1>
                </div>
            </div>
        </div>
    </section>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1>
                </div>
            </div>
        </div>
    </section>
        
        
        
        
        
        <script type="text/javascript" src="./js/bootstrap.js"></script>
        <script type="text/javascript" src="./js/scrolling-nav.js"></script>
        <script type="text/javascript" src="./js/jquery.bxslider.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.bxslider').bxSlider();
            });
        </script>
    </body>
</html>
