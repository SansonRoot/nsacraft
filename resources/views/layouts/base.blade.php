<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>


    <title>NsaCraft | @yield('title')</title>



    <!-- Meta -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,800&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/shop.style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">


    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="{{asset('assets/css/headers/header-v5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footers/footer-v4.css')}}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('assets/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/line-icons/line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/revolution-slider/rs-plugin/css/settings.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pages/profile.css')}}">


    <!-- CSS Theme -->
    <link rel="stylesheet" href="{{asset('assets/css/theme-colors/default.css')}}" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
</head>

<body class="header-fixed">

<div class="wrapper">
    <!--=== Header v5 ===-->
    <div class="header-v5 header-static">
        <!-- Topbar v3 -->
        <div class="topbar-v3">
            <div class="search-open">
                <div class="container">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="search-close"><i class="icon-close"></i></div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Topbar Navigation -->
                        <ul class="left-topbar">
                            <li>
                                <a>Currency (USD)</a>
                                <ul class="currency">
                                    <li class="active">
                                        <a href="#">USD <i class="fa fa-check"></i></a>
                                    </li>
                                    <li><a href="#">Euro</a></li>
                                    <li><a href="#">Pound</a></li>
                                </ul>
                            </li>
                            <li>
                                <a>Language (EN)</a>
                                <ul class="language">
                                    <li class="active">
                                        <a href="#">English (EN)<i class="fa fa-check"></i></a>
                                    </li>
                                    <li><a href="#">Spanish (SPN)</a></li>
                                    <li><a href="#">Russian (RUS)</a></li>
                                    <li><a href="#">German (GRM)</a></li>
                                </ul>
                            </li>
                        </ul><!--/end left-topbar-->
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline right-topbar pull-right">
                            <li><a href="{{url('/shop/dashboard')}}">Account</a></li>
                            <li><a href="{{url('/wishlist')}}">Wishlist (0)</a></li>
                            <li><a href="{{route('shop.login')}}">Login</a> | <a href="{{route('shop.register')}}">Register</a></li>
                            <li><i class="search fa fa-search search-button"></i></li>
                        </ul>
                    </div>
                </div>
            </div><!--/container-->
        </div>
        <!-- End Topbar v3 -->

        <!-- Navbar -->
        <div class="navbar navbar-default mega-menu" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img id="logo-header" src="{{asset('assets/img/logo.png')}}" alt="Logo">
                    </a>
                </div>

                <!-- Shopping Cart -->
                <div class="shop-badge badge-icons pull-right">
                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                    <span class="badge badge-sea rounded-x">3</span>
                    <div class="badge-open">
                        <ul class="list-unstyled mCustomScrollbar" data-mcs-theme="minimal-dark">
                            <li>
                                <img src="{{asset('assets/img/thumb/05.jpg')}}" alt="">
                                <button type="button" class="close">×</button>
                                <div class="overflow-h">
                                    <span>Black Glasses</span>
                                    <small>1 x $400.00</small>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('assets/img/thumb/02.jpg')}}" alt="">
                                <button type="button" class="close">×</button>
                                <div class="overflow-h">
                                    <span>Black Glasses</span>
                                    <small>1 x $400.00</small>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('assets/img/thumb/03.jpg')}}" alt="">
                                <button type="button" class="close">×</button>
                                <div class="overflow-h">
                                    <span>Black Glasses</span>
                                    <small>1 x $400.00</small>
                                </div>
                            </li>
                        </ul>
                        <div class="subtotal">
                            <div class="overflow-h margin-bottom-10">
                                <span>Subtotal</span>
                                <span class="pull-right subtotal-cost">$1200.00</span>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="{{url('cart')}}" class="btn-u btn-brd btn-brd-hover btn-u-sea-shop btn-block">View Cart</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="{{url('checkout')}}" class="btn-u btn-u-sea-shop btn-block">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Shopping Cart -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <!-- Nav Menu -->
                    <ul class="nav navbar-nav">
                        <!-- Pages -->
                        <li class="dropdown active">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">

                                Art
                            </a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="#">Painting</a></li>
                                <li><a href="#">Drawings</a></li>
                                <li><a href="#">Sculpture</a></li>




                            </ul>
                        </li>
                        <!-- End Pages -->

                        <!-- Promotion -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">

                                Fashion
                            </a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="#">Clothing</a></li>
                                <li><a href="#">Bags</a></li>
                                <li><a href="#">Jewelry</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Accessories (Belt, Cuff links)</a></li>




                            </ul>
                        </li>
                        <!-- End Promotion -->

                        <!-- Gifts -->

                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                                Furniture & Furnishing
                            </a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="#">Living Room</a></li>
                                <li><a href="#">Bedroom</a></li>
                                <li><a href="#">Outdoor</a></li>
                                <li><a href="#">Office</a></li>




                            </ul><!--/end dropdown-menu-->
                        </li>
                        <!-- End Gifts -->

                        <!-- Main Demo -->
                        <li><a href="{{url('/')}}">NsaCraft</a></li>
                        <!-- Main Demo -->
                    </ul>
                    <!-- End Nav Menu -->
                </div>
            </div>
        </div>
        <!-- End Navbar -->
    </div>
    <!--=== End Header v5 ===-->



    @yield('content')



    <!--=== Shop Suvbscribe ===-->
    <div class="shop-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-8 md-margin-bottom-20">
                    <h2>subscribe to our weekly <strong>newsletter</strong></h2>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email your email...">
						<span class="input-group-btn">
							<button class="btn" type="button"><i class="fa fa-envelope-o"></i></button>
						</span>
                    </div>
                </div>
            </div>
        </div><!--/end container-->
    </div>
    <!--=== End Shop Suvbscribe ===-->

    <!--=== Footer v4 ===-->
    <div class="footer-v4">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-4 md-margin-bottom-40">
                        <a href="{{url('/')}}"><img class="footer-logo" src="{{asset('assets/img/logo-2.png')}}" alt=""></a>
                        <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
                        <br>
                        <ul class="list-unstyled address-list margin-bottom-20">
                            <li><i class="fa fa-angle-right"></i>Morning Star Hostel - Rm C24, Ayeduase</li>
                            <li><i class="fa fa-angle-right"></i>Phone: 0249506726</li>
                            <li><i class="fa fa-angle-right"></i>Tel: 0322089762</li>
                            <li><i class="fa fa-angle-right"></i>Email: whitehatroot@gm.com</li>
                        </ul>

                        <ul class="list-inline shop-social">
                            <li><a href="#"><i class="fb rounded-md fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="tw rounded-md fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="gp rounded-md fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="yt rounded-md fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <!-- End About -->

                    <!-- Simple List -->
                    <div class="col-md-2 col-sm-3">
                        <div class="row">
                            <div class="col-sm-12 col-xs-6">
                                <h2 class="thumb-headline">Secciones</h2>
                                <ul class="list-unstyled simple-list margin-bottom-20">
                                    <li><a href="#">Ultima Hora</a></li>
                                    <li><a href="#">Exclusiva</a></li>
                                    <li><a href="#">Documentos </a></li>
                                    <li><a href="#">Francisco papa</a></li>
                                    <li>...</li>
                                </ul>
                            </div>

                            <div class="col-sm-12 col-xs-6">
                                <h2 class="thumb-headline">Temas</h2>
                                <ul class="list-unstyled simple-list">
                                    <li><a href="#">Ultima Hora</a></li>
                                    <li><a href="#">Exclusiva</a></li>
                                    <li><a href="#">Documentos </a></li>
                                    <li><a href="#">Francisco papa</a></li>
                                    <li>...</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-3">
                        <div class="row">
                            <div class="col-sm-12 col-xs-6">
                                <h2 class="thumb-headline">Utilidades</h2>
                                <ul class="list-unstyled simple-list margin-bottom-20">
                                    <li><a href="#">Ultima Hora</a></li>
                                    <li><a href="#">Exclusiva</a></li>
                                    <li><a href="#">Documentos </a></li>
                                    <li>...</li>
                                </ul>
                            </div>

                            <div class="col-sm-12 col-xs-6">
                                <h2 class="thumb-headline">Documentos</h2>
                                <ul class="list-unstyled simple-list">
                                    <li><a href="#">Ultima Hora</a></li>
                                    <li><a href="#">Exclusiva</a></li>
                                    <li><a href="#">Documentos </a></li>
                                    <li><a href="#">Francisco papa</a></li>
                                    <li>...</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-3">
                        <div class="row">
                            <div class="col-sm-12 col-xs-6">
                                <h2 class="thumb-headline">Publicidad</h2>
                                <ul class="list-unstyled simple-list margin-bottom-20">
                                    <li><a href="#">Ultima Hora</a></li>
                                    <li><a href="#">Exclusiva</a></li>
                                    <li><a href="#">Documentos </a></li>
                                    <li><a href="#">Francisco papa</a></li>
                                    <li>...</li>
                                </ul>
                            </div>

                            <div class="col-sm-12 col-xs-6">
                                <h2 class="thumb-headline">Contacto</h2>
                                <ul class="list-unstyled simple-list">
                                    <li><a href="#">Ultima Hora</a></li>
                                    <li><a href="#">Exclusiva</a></li>
                                    <li><a href="#">Documentos </a></li>
                                    <li><a href="#">Francisco papa</a></li>
                                    <li>...</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-3">
                        <div class="row">
                            <div class="col-sm-12 col-xs-6">
                                <h2 class="thumb-headline">Utilidades</h2>
                                <ul class="list-unstyled simple-list margin-bottom-20">
                                    <li><a href="#">Ultima Hora</a></li>
                                    <li><a href="#">Exclusiva</a></li>
                                    <li>...</li>
                                </ul>
                            </div>

                            <div class="col-sm-12 col-xs-6">
                                <h2 class="thumb-headline">Documentos</h2>
                                <ul class="list-unstyled simple-list">
                                    <li><a href="#">Ultima Hora</a></li>
                                    <li><a href="#">Exclusiva</a></li>
                                    <li>...</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Simple List -->
                </div><!--/end row-->
            </div><!--/end continer-->
        </div><!--/footer-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            2017 &copy; Nsacraft. ALL Rights Reserved.
                            <a target="_blank" href="https://twitter.com/htmlstream">Htmlstream</a> | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-inline sponsors-icons pull-right">
                            <li><i class="fa fa-cc-paypal"></i></li>
                            <li><i class="fa fa-cc-visa"></i></li>
                            <li><i class="fa fa-cc-mastercard"></i></li>
                            <li><i class="fa fa-cc-discover"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--/copyright-->
    </div>
    <!--=== End Footer v4 ===-->
</div><!--/wrapper-->

<!-- Wait Block -->
<div class="g-popup-wrapper">
    <div class="g-popup g-popup--discount2">
        <div class="g-popup--discount2-message">
            <h3>Want 10% Off?</h3>
            <h4>You Are Fabulous!</h4>
            <p>Get 10% Off Your Next Purchase! Just Type Email Below!</p>

            <form action="#" class="sky-form">
                <label class="input">
                    <input type="email" placeholder="Email" class="form-control">
                </label>
                <label class="input">
                    <button class="btn btn-default" type="button">Subscribe</button>
                </label>
            </form>
        </div>
        <img src="{{asset('assets/img/blog/26.jpg')}}" alt="ALT" width="270">
        <a href="javascript:void(0);" class="g-popup__close g-popup--discount2__close"><span class="icon-close" aria-hidden="true"></span></a>
    </div>
</div>
<!-- End Wait Block -->

<!-- JS Global Compulsory -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- JS Implementing Plugins -->
<script src="{{asset('assets/plugins/back-to-top.js')}}"></script>
<script src="{{asset('assets/plugins/smoothScroll.js')}}"></script>
<script src="{{asset('assets/plugins/jquery.parallax.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/plugins/counter/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/counter/jquery.counterup.min.js')}}"></script>

<script src="{{asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- JS Customization -->
<script src="{{asset('assets/js/custom.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/plugins/datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/style-switcher.js')}}"></script>
<!-- JS Page Level -->
<script src="{{asset('assets/js/shop.app.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/plugins/owl-carousel.js')}}"></script>
<script src="{{asset('assets/js/plugins/revolution-slider.js')}}"></script>
<script src="{{asset('assets/js/plugins/style-switcher.js')}}"></script>
<script src="{{asset('assets/js/plugins/ladda-buttons.js')}}"></script>

<!-- JS Page Level -->
<script src="{{asset('assets/js/shop.app.js')}}"></script>
<script src="{{asset('assets/js/plugins/owl-carousel.js')}}"></script>
<script src="{{asset('assets/js/plugins/revolution-slider.js')}}"></script>
<script src="{{asset('assets/js/plugins/style-switcher.js')}}"></script>

<script>
    jQuery(document).ready(function() {
        App.init();
        App.initScrollBar();
        App.initParallaxBg();
        OwlCarousel.initOwlCarousel();
        RevolutionSlider.initRSfullWidth();
        StyleSwitcher.initStyleSwitcher();
    });
</script>
<!--[if lt IE 9]>
<script src="{{asset('assets/plugins/respond.js')}}"></script>
<script src="{{asset('assets/plugins/html5shiv.js')}}"></script>
<script src="{{asset('assets/js/plugins/placeholder-IE-fixes.js')}}"></script>
<![endif]-->

</body>
</html>
