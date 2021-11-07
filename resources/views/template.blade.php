<!DOCTYPE html>
<html lang="PT">


<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title> Telconsultores, Lda</title>

    <!-- Icon fonts -->
    <link href="{{url("assets/css/font-awesome.min.css")}}" rel="stylesheet">
    <link href="{{url("assets/css/flaticon.css")}}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{url("assets/css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="{{url("assets/css/animate.css")}}" rel="stylesheet">
    <link href="{{url("assets/css/owl.carousel.css")}}" rel="stylesheet">
    <link href="{{url("assets/css/owl.theme.css")}}" rel="stylesheet">
    <link href="{{url("assets/css/slick.css")}}" rel="stylesheet">
    <link href="{{url("assets/css/slick-theme.css")}}" rel="stylesheet">
    <link href="{{url("assets/css/owl.transitions.css")}}" rel="stylesheet">
    <link href="{{url("assets/css/jquery.fancybox.css")}}" rel="stylesheet">
    <link href="{{url("assets/css/jquery.mCustomScrollbar.min.css")}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url("assets/css/style.css")}}" rel="stylesheet">
    @yield('style')
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="preloader-inner">
                <img src="{{url("assets/images/preloader.gif")}}" alt>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header id="header" class="site-header header-style-2">
            <div class="topbar topbar-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-12">
                            <div class="topbar-contact-info-wrapper">
                                <div class="topbar-contact-info">
                                    <div>
                                        <i class="fa fa-location-arrow"></i>
                                        <div class="details">
                                            <p>Bairro, Muahivire-Expansao, U/C Namiteca</p>
                                            <span>Nampula: Av. FPLM</span>
                                        </div>
                                    </div>
                                    <div>
                                        <i class="fa fa-phone"></i>
                                        <div class="details">
                                            <p>+258 (84) 525 5563</p>
                                            <span>info@telconsultores.co.mz</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div> <!-- end topbar -->

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="site-logo">
                            <a href="index-2.html"><img src="{{url("assets/images/logo.jpg")}}" alt style="width: 100px !important;"></a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li><a href="{{route("home")}}">Pagina inicial</a></li>
                            {{--<li><a href="{{route("shop")}}">Loja</a></li>--}}
                            <li><a href="{{route("about")}}">Sobre</a></li>
                            <li><a href="{{route("portfolio")}}">Portifolio</a></li>
							<li><a href="{{route("blog")}}">Blog</a></li>
                            <li><a href="{{route("contact")}}">Contato</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                    <div class="cart-contact">
                        <div class="mini-cart">
                            <button class="cart-toggle-btn" disabled> <i class="fi flaticon-shopping-cart"></i> Meu carinho (0) </button>

                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <p>Carinho de compra</p>
                                </div>
                                <div class="top-cart-items">
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="{{url("assets/images/shop/img-11.jpg")}}" alt="Blue Round-Neck Tshirt"></a>
                                        </div>
                                        <div class="top-cart-item-des">
                                            <a href="#">Painel Solar 300W</a>
                                            <span class="top-cart-item-price">MZN 16 000.00</span>
                                            <span class="top-cart-item-quantity">x 1</span>
                                        </div>
                                    </div>
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="assets/images/shop/img-6.jpg" alt="Contactor CJX2-1210"></a>
                                        </div>
                                        <div class="top-cart-item-des">
                                            <a href="#">Contactor CJX2-1210</a>
                                            <span class="top-cart-item-price">MZN 2 500.00</span>
                                            <span class="top-cart-item-quantity">x 1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-cart-action clearfix">
                                    <span class="fleft top-checkout-price">MZN 18 500.00</span>
                                    <a href="{{--route("cart")--}}" class="theme-btn">Ver carinho de compra</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end of container -->
            </nav> <!-- end navigation -->
        </header>
        <!-- end of header -->


        @yield('content')


        <!-- start site-footer -->
        <footer class="site-footer">
            <div class="upper-footer">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-xs-6" style="margin-top: 15px;">
                            <div class="widget service-links-widget">
                                <h3 class="mt-2">Serviços</h3>
                                <ul>
                                    <li><a>Energia</a></li>
                                    <li><a>Automacao</a></li>
                                    <li><a>Auditoria</a></li>
                                    <li><a>Treinamentos</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6" style="margin-top: 15px;">
                            <div class="widget quick-links-widget">
                                <h3 class="my-2">Navegação</h3>
                                <ul>
                                    <li><a href="{{route("home")}}">Pagina inicial</a></li>
                                    <li><a href="{{--route("shop")--}}">Loja</a></li>
                                    <li><a href="{{route("about")}}">Sobre</a></li>
                                    <li><a href="{{route("portfolio")}}">Portifolio</a></li>
                                    <li><a href="{{route("blog")}}">Blog</a></li>
                                    <li><a href="{{route("contact")}}">Contato</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-5 col-xs-12" style="margin-top: 15px;">
                            <div class="widget twitter-feed-widget">
                                <h3>Localização google maps</h3>
                                <div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3851.335014200926!2d39.26646511448202!3d-15.139935311230266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18c635bec192f3a9%3A0xea69d4a8fe5e7fd3!2sRaul%20Jr%20Developer!5e0!3m2!1spt-PT!2smz!4v1635355677857!5m2!1spt-PT!2smz" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end upper-footer -->
            <div class="copyright-info">
                <div class="container">
                    <p><a target="_blank" href="#">&copy; Cophyright Sebastiao</a></p>
                </div>
            </div>
        </footer>
        <!-- end site-footer -->
    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="{{url("assets/js/jquery.min.js")}}"></script>
    <script src="{{url("assets/js/bootstrap.min.js")}}"></script>
    <script src="{{url("assets/js/cart.js")}}"></script>

    <!-- Plugins for this template -->
    <script src="{{url("assets/js/jquery-plugin-collection.js")}}"></script>
    <script src="{{url("assets/js/jquery.mCustomScrollbar.js")}}"></script>

    <!-- Custom script for this template -->
    <script src="{{url("assets/js/script.js")}}"></script>

    @yield('scripts')
</body>


</html>
