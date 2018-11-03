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
    <title>Chappalwala</title>
    
    <!-- Animate.css -->
    <link href="css/animate.css" rel="stylesheet"/>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    
    <!-- Custom Fonts -->
    <link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- owl.carousel Stylesheet -->
    <link href="css/owl.carousel.css" rel="stylesheet" />
    <link href="css/style_crowj.css" rel="stylesheet" />

    <link href="css/jquery-picZoomer.css" rel="stylesheet">  

    <!-- Custom Stylesheet -->
    <link href="css/stylesheet.css" rel="stylesheet" />

    <link rel="icon" href="images/fav.png" type="image/png" sizes="48x48">
      
  </head>
  <body>    
<header class="header">
    <div class="headerwrap">
      <div class="container">
        <div class="row">
          <div class="col-md-3 logo">
            <div class="mainlogo">
               <a href="index.html"><img src="images/logo.png" alt=" " class="img-responsive"></a>
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
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>             
                   <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">product</a>
                    <ul class="dropdown-menu dropdownmenu">
                      <li><a href="productlisting.html">Mens</a></li>
                      <li><a href="#.">Womens</a></li>
                      <li><a href="#.">kids</a></li>
                    </ul>
                  </li>                
                  <li class="active"><a href="productdetails.html">Shop</a></li>
                  <li><a href="blog.html">blog</a></li>
                  <li><a href="investwithus.html">Invest with us</a></li>
                  <li><a href="contact.html">contact</a></li>                   
                </ul>
              </div><!-- .navbar-collapse --> 
            </nav> 
            <div class="mobilemodenav">
             <span class="mob"  onclick="openNav()"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </span>
             <div id="mySidenav" class="sidenav" >
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> <span class="sr-only"></span><span class="icon-bar-close left"></span> <span class="icon-bar-close rt"></span>  </a>
              <a href="#."><img src="images/logo.png" alt="" class="img-responsive"></a>    
              <ul id="main-menu" class="mob-nav">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>             
                   <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">product</a>
                    <ul class="dropdown-menu dropdownmenu">
                      <li><a href="productlisting.html">Mens</a></li>
                      <li><a href="#.">Womens</a></li>
                      <li><a href="#.">kids</a></li>
                    </ul>
                  </li>              
                  <li><a href="productdetails.html">Shop</a></li>
                  <li><a href="blog.html">blog</a></li>
                  <li><a href="investwithus.html">Invest with us</a></li>
                  <li><a href="contact.html">contact</a></li>         
              </ul>
            </div><!-- sidenav -->
           </div><!-- mobilemodenav -->
          </div><!-- mainnav -->
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- headerwrap -->    
</header> 
<section class="banner innerbanner">
  <div class="innerbanerwrap">
  </div><!-- innerbanerwrap -->
</section>   
<section class="breadcumbs">
  <div class="container">
    <ol class="breadcrumb">
        <li><a href="#.">Home</a></li>
        <li><a href="#.">Women</a></li>        
        <li class="active">impedit quo minus</li>
      </ol>
  </div><!-- container -->
</section><!-- breadcumbs -->
<section class="productdetail">
  <div class="container">
    <div class="row">
      <div class="col-md-6 detail-leftblock">
        <div class="productview">
          <div class="picZoomer">
            <img src="images/0.jpg" alt="" class="img-responsive">
          </div> <!-- picZoomer  -->
          <ul class="piclist">
            <li><img src="images/0.jpg" alt="" class="img-responsive"></li>
            <li><img src="images/1.jpg" alt="" class="img-responsive"></li>
            <li><img src="images/2.jpg" alt="" class="img-responsive"></li>
            <li><img src="images/3.jpg" alt="" class="img-responsive"></li>
            <li><img src="images/4.jpg" alt="" class="img-responsive"></li> 
          </ul> <!-- piclist -->
        </div><!-- productview -->
      </div><!-- detail-leftblock -->
      <div class="col-md-6 detail-rightblock">
        <div class="productInfo">
          <h1 class="proTitle wow fadeInDown">Cumque nihil impedit quo minus</h1>
          <h4 class="prize">Price: 500/rs</h4>
          <hr class="productdivider">        
          <div class="checkboxwrap">
            <h5>Color</h5>
            <ul class="list-inline colorfullbox">
              <li class="red">
                <input type="checkbox" id="c1" name="cb"><label for="c1"></label>
              </li>            
              <li class="black">
                <input type="checkbox" id="c2" name="cb"><label for="c2"></label>
              </li>
              <li class="blue">
                <input type="checkbox" id="c3" name="cb"><label for="c3"></label>
              </li>
            </ul>
            <h5>Select Size</h5>
            <ul class="list-inline size">             
             <li><label class="radiowrap">
                 <input type="radio" checked="checked" name="radio"><span class="checkmark">3</span>
                </label>                   
             </li>
             <li><label class="radiowrap">
                 <input type="radio" name="radio"><span class="checkmark">4</span>
                </label>
             </li>
             <li><label class="radiowrap">
                 <input type="radio" name="radio"><span class="checkmark">5</span>
                </label>
             </li>
             <li><label class="radiowrap">
                 <input type="radio" name="radio"><span class="checkmark">6</span>
                 </label>
             </li>
             <li><label class="radiowrap">
                 <input type="radio" name="radio"><span class="checkmark">7</span>
                 </label>
             </li>
             <li><label class="radiowrap">
                 <input type="radio" name="radio"><span class="checkmark">8</span>
                 </label>
             </li>
            </ul>
            <div class="clearfix"></div>
            <!--<h5>Quantity</h5>
            <div class="quantity">
             <select class="form-control">
               <option>1</option>
               <option>2</option>
             </select>
            </div> quantity -->
            <div class="addtocartbtn">
              <button class="btn btn-default largbtn" type="submit">add to cart</button> 
            </div><!-- addtocartbtn -->
          </div><!-- checkboxwrap -->
        </div><!-- productInfo -->       
      </div><!-- detail-rightblock -->
    </div><!-- row -->    
  </div><!-- container -->
</section><!-- productdetail -->


<footer>
    <div class="footerwrap">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-6 footblock">
            <div class="footlogo">
              <a href="#."><img src="images/footlogo.png" alt="" class="img-responsive"></a>
            </div><!-- footlogo -->
            <p>Get Update Follows:</p>
            <ul class="list-inline social-icon">
              <li><a href="#."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#."><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#."><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
          </div><!-- footblock -->
         <!-- <div class="col-md-4 col-xs-6 footblock">
            <div class="foot-content"> 
              <h4 class="foottitle">Information</h4>
              <ul class="footlist">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>             
                <li><a href="productlisting.html">Product</a></li>             
                <li class="active"><a href="productdetails.html">Shop</a></li>
                <li><a href="blog.html">blog</a></li>
                <li><a href="investwithus.html">Investwithus</a></li>
                <li><a href="contact.html">contact</a></li>  
              </ul>
            </div>
          </div> footblock -->
          <div class="col-md-4 col-xs-6 footblock">
            <div class="foot-content"> 
              <h4 class="foottitle">Policies</h4>
              <ul class="footlist">
               <li ><a href="#.">Terms & Conditions </a></li> 
               <li><a href="#.">Payment Options</a></li>
               <li><a href="#.">FAQ's </a></li>
               <li><a href="#.">Privacy Policy</a></li>               
              </ul>
            </div><!-- foot-content -->
          </div><!-- footblock --> 
          <div class="col-md-4 col-xs-6 footblock">
            <div class="foot-content"> 
              <h4 class="foottitle">Contact Details</h4>
              <ul class="footlist footcontact">
               <li >Tilak Rod, pin 444904, </li> 
               <li>pune. </li>
               <li>Email: <a href="mailto:cahappalwalla@gmail.com">cahappalwalla@gmail.com</a></li>
               <li>phone: <a href="tel:0054545454">0054545454</a></li>               
              </ul>
            </div><!-- foot-content -->
          </div><!-- footblock -->
        </div><!-- row -->        
      </div><!-- container -->    
      <hr class="footdivider">
       <div class="lastText">
          <p>© Copyright 2018. All rights reserved. <a href="#.">CHAPPALWALA.COM</a></p>
        </div><!-- lastText -->
    </div><!-- footerwrap -->
   <a href="#" class="back-to-top"></a>
</footer> 

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.picZoomer.js"></script> 
  
  <!--Wow Animations-->
  <script src="js/wow.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script type="text/javascript" src="js/jquery.simplyscroll.min.js"></script>
  <script src="js/mycustom.js"></script>

  <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
</script>
<script>
  jQuery(document).ready(function($){

    $(function() {
                    $('.picZoomer').picZoomer();

                    //切换图片
                    $('.piclist li').on('click',function(event){
                        var $pic = $(this).find('img');
                        $('.picZoomer-pic').attr('src',$pic.attr('src'));
                    });
                });

  })

</script>

    
  </body>
</html>