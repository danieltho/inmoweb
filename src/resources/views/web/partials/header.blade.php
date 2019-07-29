<!-- Pre Loader -->
<div id="aa-preloader-area">
    <div class="pulse"></div>
</div>
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header section -->
<header id="aa-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-header-area">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="aa-header-left">
                                <div class="aa-telephone-no">
                                    <span class="fa fa-phone"></span>
                                    011-5555-5555
                                </div>
                                <div class="aa-email hidden-xs">
                                    <span class="fa fa-envelope-o"></span> info@caudana-propiedades.com
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="aa-header-right">

                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header section -->

<!-- Start menu section -->
<section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- Text based logo -->
                <a class="navbar-brand aa-logo" href="{{ url('/') }}"> <img alt="img" src="{{ url('vendor/inmoweb') }}/img/logo.png"></a>
                <!-- Image based logo -->
                <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
                    <li class="active"><a href="index.html">HOME</a></li>
                    <li ><a href="{{url('propiedades')}}">PROPIEDADES</a></li>
                    <li ><a href="{{url('desarrollos')}}">NUEVOS DESARROLLOS</a></li>
                   {{-- <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">PROPIEDADES <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="properties.html">PROPIEDADES</a></li>
                            <li><a href="properties-detail.html">PROP DETALLES</a></li>
                        </ul>
                    </li>--}}

                   {{-- <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">NUEVOS DESARROLLOS <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="blog-archive.html">DESARROLLOS LISTADO</a></li>
                            <li><a href="blog-single.html">DETALLE DESARROLLO</a></li>
                        </ul>
                    </li>--}}
                    <li><a href="{{ url('empresa') }}">LA EMPRESA</a></li>
                    <li><a href="{{ url('contacto') }}">CONTACTO</a></li>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</section>
<!-- End menu section -->
