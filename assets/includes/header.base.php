<?php
require_once('config/base.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>greekcoder - web developer from greece</title>
    <link rel="shortcut icon" href="<?php echo ABSPATH ?>assets/img/favicon.png">

    <meta name="author" content="Giorgos Georgakopoulos">
    <meta name="description" content="Hello There, my name is Giorgos Georgakopoulos and I am a 16 years old Web Developer and Designer. Do you need to get online with a beautiful and functional website?, do you want to create an exlusive web application? Then I am here for you! (Known languages: HTML5, CSS3, PHP, MySQL, Javascript, jQuery)">
    <meta name="keywords" content="greekcoder, greek-coder, georgakopoulos, giorgos, george, web, developer, designer, applocations, freelancer, 16 years old, programmer, programming, website">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="revisit-after" content="3 hours">

    <link rel="stylesheet" href="<?php echo ABSPATH ?>assets/styles/main.css">
    <link rel="stylesheet" href="<?php echo ABSPATH ?>assets/fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="<?php echo ABSPATH ?>assets/js/libs/jquery-2.1.4.min.js"></script>
    <script src='//google.com/recaptcha/api.js?hl=el'></script>
</head>
<body>

    <!--Hambuger Icon-->
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <!--MOB NAV-->
    <div class="mob-header">
        <h1 class="mob-title"><a href="<?php echo ABSPATH; ?>index"><span class="thin">Greek</span><span class="thick">Coder</span></a></h1>
        <nav>
            <a href="#" class="inpage-link" data-scrollto="#section-aboutme">Aboutme</a><!--
            --><a href="#" class="inpage-link" data-scrollto="#section-projects">Projects</a><!--
            --><a href="#" class="inpage-link" data-scrollto="#section-contact">Contact</a>
<!--        <a href="http://github.com/greek-coder" target="_blank" class="github-linka" title="Visit my github profile"><i class="fa fa-github"></i></a>-->
        </nav>
    </div>

    <div class="fullpage-mobnav"></div>
    <!--CLOSE SIDE NAV-->

    <header class="site-header">
        <div class="header-text-wrap">
            <h1 class="site-title site-title_"><a href="<?php echo ABSPATH; ?>index"><span class="thin">Greek</span><span class="thick">Coder</span></a></h1>

            <nav class="normal-nav">
                <a href="#" class="inpage-link" data-scrollto="#section-aboutme">Aboutme</a><!--
                --><a href="#" class="inpage-link" data-scrollto="#section-projects">Projects</a><!--
                --><a href="#" class="inpage-link" data-scrollto="#section-contact">Contact</a>
                <a href="http://twitter.com/greekcoder1" target="_blank" class="github-link" title="Find me on twitter"><i class="fa fa-twitter"></i></a>
            </nav>
        </div>
    </header>
    <div class="_site-header" id="_site-header">
        <div class="header-text-wrap">
            <h1 class="_site-title" id="autotyping"></h1>
        </div>
    </div>

    <div class="scrolltop btn-radial btn-default btn-shadow" data-ripple-wrap-radius="50%"><i class="fa fa-angle-up"></i></div>

