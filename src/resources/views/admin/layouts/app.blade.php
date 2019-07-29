<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Light Layout - Stack Responsive Bootstrap 4 Admin Template</title>
    <link rel="apple-touch-icon" href="{{url('vendor/inmoweb')}}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('vendor/inmoweb')}}/app-assets/images/ico/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('vendor/inmoweb')}}/app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href=".{{url('vendor/inmoweb')}}/app-assets/vendors/js/gallery/photo-swipe/photoswipe.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('vendor/inmoweb')}}/app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="{{url('vendor/inmoweb')}}/assets/css/style.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{url('vendor/inmoweb')}}/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="{{url('vendor/inmoweb')}}/app-assets/css/pages/gallery.css">
    @yield('stylePage')
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('vendor/inmoweb')}}/assets/css/style.css">
    <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-overlay-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
      data-menu="vertical-overlay-menu" data-col="2-columns">

<!-- fixed-top-->
<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-border navbar-shadow navbar-brand-center">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand" href="{{ url('admin') }}"><img class="brand-logo"
                                                                                            alt="stack admin logo"
                                                                                            src="{{url('vendor/inmoweb')}}/app-assets/images/logo/stack-logo.png">
                        <h2 class="brand-text">inmoweb</h2></a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                                                  data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="navbar-toggleable-sm" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                                                                   href="#" data-toggle="dropdown"><span
                                class="avatar avatar-online"><img
                                    src="{{url('vendor/inmoweb')}}/app-assets/images/portrait/small/avatar-s-1.png"
                                    alt="avatar"><i></i></span><span class="user-name">John Doe</span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            {{-- <a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
                             <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>
                             <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                             <a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>--}}
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="ft-power"></i> Salir</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<!-- main menu-->
<div class="main-menu menu-fixed menu-light menu-accordion">
    <!-- main menu header-->
    <div class="main-menu-header">
        <input class="menu-search form-control round" type="text" placeholder="Buscar"/>
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a
                    href="{{url('admin/inicio')}}/html/ltr/vertical-overlay-menu-template/index.html"><i
                        class="ft-stop-circle"></i><span class="menu-title" data-i18n="nav.dash.main">INMO</span></a>
            </li>
            <li class=" nav-item"><a
                    href="{{url('admin/contactos')}}/html/ltr/vertical-overlay-menu-template/index.html"><i
                        class="ft-users"></i><span class="menu-title" data-i18n="nav.dash.main">CONTACTOS</span><span class="badge badge badge-primary badge-pill float-right mr-2">1</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-home"></i><span class="menu-title"
                                                                          data-i18n="nav.starter_kit.main">PROPIEDADES</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ url('admin/propiedades/create') }}" data-i18n="nav.starter_kit.1_column">Crear nuevo</a>
                    </li>
                    <li><a class="menu-item" href="{{ url('admin/propiedades') }}" data-i18n="nav.starter_kit.1_column">Todos <i class="ft-list"></i></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-zap"></i><span class="menu-title"
                                                                          data-i18n="nav.starter_kit.main">DESARROLLOS</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ url('admin/desarrollos/create') }}" data-i18n="nav.starter_kit.1_column">Crear nuevo</a>
                    </li>
                    <li><a class="menu-item" href="{{ url('admin/desarrollos') }}" data-i18n="nav.starter_kit.1_column">Todos</a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="ft-server"></i><span class="menu-title"
                                                                          data-i18n="nav.starter_kit.main">Opciones</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ url('admin/tipos') }}" data-i18n="nav.starter_kit.1_column">Tipos</a></li>
                    <li><a class="menu-item" href="{{ url('admin/estados') }}" data-i18n="nav.starter_kit.1_column">Estados</a></li>
                    <li><a class="menu-item" href="{{ url('admin/monedas') }}" data-i18n="nav.starter_kit.1_column">Monedas</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="ft-file"></i><span class="menu-title"
                                                                          data-i18n="nav.starter_kit.main">Config</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ url('admin/medios') }}" data-i18n="nav.starter_kit.1_column">Medios</a></li>
                    <li><a class="menu-item" href="{{ url('admin/Slider') }}" data-i18n="nav.starter_kit.1_column">Slider</a></li>
                    <li><a class="menu-item" href="{{ url('admin/Slider') }}" data-i18n="nav.starter_kit.1_column">Datos contacto</a></li>
                    {{--
                    <li><a class="menu-item" href="{{ url('admin/estados') }}" data-i18n="nav.starter_kit.1_column">Estados</a></li>
                    <li><a class="menu-item" href="{{ url('admin/monedas') }}" data-i18n="nav.starter_kit.1_column">Monedas</a>
                    </li>--}}
                </ul>
            </li>
            {{--
            <li class=" navigation-header"><span>Soporte</span><i class="icon-ellipsis ft-minus" data-toggle="tooltip"
                                                                  data-placement="right"
                                                                  data-original-title="Support"></i>
            </li>
            <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="ft-life-buoy"></i><span
                        class="menu-title" data-i18n="">Raise Support</span></a>
            </li>
            <li class=" nav-item"><a href="https://pixinvent.com/stack-bootstrap-admin-template/documentation"><i
                        class="ft-folder"></i><span class="menu-title" data-i18n="">Documentation</span></a>
            </li>--}}
        </ul>
    </div>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->
</div>
<!-- / main menu-->

<div class="app-content content">
    <div class="content-wrapper">

            @yield('content')

    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->


<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <span class="float-md-left d-block d-md-inline-block"> <a class="text-bold-800 grey darken-2"
                                                                  href="{{ url('admin') }}">INMOWEB </a>. </span><span
            class="float-md-right d-block d-md-inline-block d-none d-lg-block"> <i
                class="ft-align-left pink"></i></span></p>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="{{url('vendor/inmoweb')}}/app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
<script src="{{url('vendor/inmoweb')}}/app-assets/vendors/js/ui/popper.min.js" type="text/javascript"></script>
<script src="{{url('vendor/inmoweb')}}/app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
<script src="{{url('vendor/inmoweb')}}/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js"
        type="text/javascript"></script>
<script src="{{url('vendor/inmoweb')}}/app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
<script src="{{url('vendor/inmoweb')}}/app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
<script src="{{url('vendor/inmoweb')}}/app-assets/vendors/js/ui/jquery-sliding-menu.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{url('vendor/inmoweb')}}/app-assets/vendors/js/gallery/masonry/masonry.pkgd.min.js"
        type="text/javascript"></script>
<script src="{{url('vendor/inmoweb')}}/app-assets/vendors/js/gallery/photo-swipe/photoswipe.min.js"
        type="text/javascript"></script>
<script src="{{url('vendor/inmoweb')}}/app-assets/vendors/js/gallery/photo-swipe/photoswipe-ui-default.min.js"
        type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN STACK JS-->
<script src="{{url('vendor/inmoweb')}}/app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="{{url('vendor/inmoweb')}}/app-assets/js/core/app.js" type="text/javascript"></script>
<!-- END STACK JS-->
<!-- BEGIN PAGE LEVEL JS-->
@yield('javascript')
<!-- END PAGE LEVEL JS-->
</body>
</html>
