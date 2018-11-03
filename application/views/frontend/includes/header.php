<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?= $title?></title>

        <!-- Animate.css -->
        <link href="<?= base_url()?>assets/frontend/css/animate.css" rel="stylesheet"/>

        <!-- Bootstrap -->
        <link href="<?= base_url()?>assets/frontend/css/bootstrap.min.css" rel="stylesheet"/>

        <!-- Custom Fonts -->
        <link href="<?= base_url()?>assets/frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- owl.carousel Stylesheet -->
        <link href="<?= base_url()?>assets/frontend/css/owl.carousel.css" rel="stylesheet" />
        <link href="<?= base_url()?>assets/frontend/css/style_crowj.css" rel="stylesheet" />


        <!-- Custom Stylesheet -->
        <link href="<?= base_url()?>assets/frontend/css/stylesheet.css" rel="stylesheet" />

        <link rel="icon" href="<?= base_url()?>assets/images/fav.png" type="image/png" sizes="48x48">

    </head>
    <body>    
        <header class="header">
            <div class="headerwrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 logo">
                            <div class="mainlogo">
                                <a href="<?= base_url()?>"><img src="<?= base_url()?>assets/images/logo.png" alt=" " class="img-responsive"></a>
                            </div><!-- mainlogo -->            
                        </div><!-- logo --> 
                        <div class="col-md-9 mainnav">
                            <nav class="navbar navbar-default headnav">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div><!-- navbar-header -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">    
                                    <ul class="nav navbar-nav navbar-right">              
                                        <li class="active"><a href="<?= base_url()?>">Home</a></li>
                                        <li><a href="<?= base_url()?>about-us">About</a></li>             
                                        <li class="dropdown">
                                            <a href="#." class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">product</a>
                                            <ul class="dropdown-menu dropdownmenu">
                                                <li><a href="<?= base_url()?>product/product-list">Mens</a></li>
                                                <li><a href="<?= base_url()?>product/product-list">Womens</a></li>
                                                <li><a href="<?= base_url()?>product/product-list">kids</a></li>
                                            </ul>
                                        </li>           
<!--                                        <li><a href="<?= base_url()?>product/product-list">Shop</a></li>-->
                                        <li><a href="<?= base_url()?>blog">blog</a></li>
                                        <li><a href="<?= base_url()?>invest-with-us">Invest with us</a></li>
                                        <li><a href="<?= base_url()?>contact-us">contact</a></li>                   
                                    </ul>
                                </div><!-- .navbar-collapse --> 
                            </nav> 
                            <div class="mobilemodenav">
                                <span class="mob"  onclick="openNav()"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </span>
                                <div id="mySidenav" class="sidenav" >
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> <span class="sr-only"></span><span class="icon-bar-close left"></span> <span class="icon-bar-close rt"></span>  </a>
                                    <a href="#."><img src="images/logo.png" alt="" class="img-responsive"></a>    
                                    <ul id="main-menu" class="mob-nav">
                                        <li><a href="<?= base_url()?>">Home</a></li>
                                        <li><a href="<?= base_url()?>about-us">About</a></li>             
                                        <li class="dropdown">
                                            <a href="#." class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">product</a>
                                            <ul class="dropdown-menu dropdownmenu">
                                                <li><a href="<?= base_url()?>product/product-list">Mens</a></li>
                                                <li><a href="<?= base_url()?>product/product-list">Womens</a></li>
                                                <li><a href="<?= base_url()?>product/product-list">kids</a></li>
                                            </ul>
                                        </li>              
                                        <!--                                        <li><a href="<?= base_url()?>product/product-list">Shop</a></li>-->
                                        <li><a href="<?= base_url()?>blog">Blog</a></li>
                                        <li><a href="<?= base_url()?>invest-with-us">Invest with us</a></li>
                                        <li><a href="<?= base_url()?>contact-us">contact</a></li>                   

                                    </ul>
                                </div><!-- sidenav -->
                            </div><!-- mobilemodenav -->
                        </div><!-- mainnav --> 

                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- headerwrap -->    
        </header> 


