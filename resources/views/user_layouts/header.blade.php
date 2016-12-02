<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from shapebootstrap.net/demo/html/corlate/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2016 11:38:20 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Home | rtsoftbd</title>
 
<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{ asset('css/animate.min.css')}}" rel="stylesheet">
<link href="{{ asset('css/prettyPhoto.css')}}" rel="stylesheet">
<link href="{{ asset('css/main.css')}}" rel="stylesheet">
<link href="{{ asset('css/responsive.css')}}" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

</head> 
<body class="homepage">
<header id="header">
<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-sm-6 col-xs-4">
<div class="top-number"><p><i class="fa fa-phone-square"></i> (+880) {{$Title_logo->mobile}}</p></div>
</div>
<div class="col-sm-6 col-xs-8">
<div class="social">
<ul class="social-share">
<li><a href="https://{{$socialData->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
<li><a href="https://{{$socialData->twitter}}" target="_blank""><i class="fa fa-twitter"></i></a></li>
<li><a href="https://{{$socialData->linkedin}}" target="_blank""><i class="fa fa-linkedin"></i></a></li>
<li><a href="https://{{$socialData->googleplus}}" target="_blank""><i class="fa fa-dribbble"></i></a></li>
<li><a href="https://{{$socialData->skype}}" target="_blank""><i class="fa fa-skype"></i></a></li>
</ul>
<div class="search">
<form role="form">
<input type="text" class="search-form" autocomplete="off" placeholder="Search">
<i class="fa fa-search"></i>
</form>
</div>
</div>
</div>
</div>
</div> 
</div> 
<nav class="navbar navbar-inverse" role="banner">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index-2.html"><img src='{{ asset("$Title_logo->logo")}}' alt="logo" width="140px" height="50px"></a>
</div>
<div class="collapse navbar-collapse navbar-right">
<ul class="nav navbar-nav">
<li class="active"><a href="/">Home</a></li>
<li><a href="/about-us">About Us</a></li>
<li><a href="/services">Services</a></li>
<li><a href="/portfolio">Portfolio</a></li>
<li><a href="/contact-us">Contact</a></li>
</ul>
</div>
</div> 
</nav> 
</header> 