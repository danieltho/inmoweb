<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Property | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('vendor/inmoweb/img/favicon.ico') }}" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{ url('vendor/inmoweb/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ url('vendor/inmoweb/css/bootstrap.css') }}" rel="stylesheet">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/inmoweb/css/slick.css') }}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/inmoweb/css/nouislider.css') }}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ url('vendor/inmoweb/css/jquery.fancybox.css') }}" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="{{ url('vendor/inmoweb/css/theme-color/default-theme.css') }}" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{ url('vendor/inmoweb/css/style.css') }}" rel="stylesheet">


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="aa-price-range">

@include('InmoWeb::partials.header')

@yield('content')

@include('InmoWeb::partials.footer')
<!-- jQuery library -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<script src="{{ url('vendor/inmoweb/js/jquery.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ url('vendor/inmoweb/js/bootstrap.js') }}"></script>
<!-- slick slider -->
<script type="text/javascript" src="{{ url('vendor/inmoweb/js/slick.js') }}"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="{{ url('vendor/inmoweb/js/nouislider.js') }}"></script>
<!-- mixit slider -->
<script type="text/javascript" src="{{ url('vendor/inmoweb/js/jquery.mixitup.js') }}"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="{{ url('vendor/inmoweb/js/jquery.fancybox.pack.js') }}"></script>
<!-- Custom js -->
<script src="{{ url('vendor/inmoweb/js/custom.js') }}"></script>
w
</body>
</html>
