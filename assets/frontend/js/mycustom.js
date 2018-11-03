jQuery(document).ready(function($){


           var headerHT = Number(jQuery('.header').height());
          console.log(headerHT);
          jQuery('.banner').css("margin-top", headerHT);

           //wow initialization
           new WOW().init();   

           $("#scroller").simplyScroll();

           $("#scroller2").simplyScroll();         

           $("#scroller").simplyScroll({
              speed: 4
            });

           $("#scroller2").simplyScroll({
              speed: 4
            });

           //back-to-top script
           var amountScrolled=300;$(window).scroll(function(){if($(window).scrollTop()>amountScrolled){$('a.back-to-top').fadeIn('slow');}else{$('a.back-to-top').fadeOut('slow');}});$('a.back-to-top').click(function(){$('html, body').animate({scrollTop:0},700);return false;});

            jQuery(window).scroll(function () {
                //if you hard code, then use console
                //.log to determine when you want the 
                //nav bar to stick.  
                //console.log(jQuery(window).scrollTop())
                if (jQuery(window).scrollTop() > headerHT+100) {
                  jQuery('header').addClass('navbar-fixed');
                }
                if (jQuery(window).scrollTop() < headerHT+100) {
                  jQuery('header').removeClass('navbar-fixed');
                }
            });


            $(".navbar-nav li.dropdown").hover(function(){
              $(this).find(".dropdownmenu").stop().slideToggle(600);
            })


          /* Smooth Scrolling
            $('a[href^="#"]').on('click', function (e) {
              e.preventDefault();
              $(document).off("scroll");
              
              $('.scrollNav a').each(function () {
                  $(this).removeClass('active');
              })
              $(this).addClass('active');
            
              var target = this.hash,
                  menu = target;
              $target = $(target);
              $('html, body').stop().animate({
                  'scrollTop': $target.offset().top-100
              }, 500, 'swing', function () {
                  window.location.hash = target;
                 // $(document).on("scroll", onScroll);
              });

          });
          */

        /* Owl-Carousel Initialization
        $("#owl-demo").owlCarousel({
         
              autoPlay: 3000, //Set AutoPlay to 3 seconds
               items : 2,
              itemsDesktop : [1199,2],
              itemsDesktopSmall : [979,1],
              navigationText   : false,
            navigation      : true
         
          }); 

        //Bootstrap Carousel
         $('.carousel').carousel({
           interval: 3000
         })
        */




         var owl1 = $("#owl-slider1");

        owl1.owlCarousel({
        autoPlay: 3000,
        items : 3, //10 items above 1000px browser width
        itemsCustom : false,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsTabletSmall: [580,2],
        itemsMobile : [479,1],
        singleItem : false,
        itemsScaleUp : false,
        pagination : false,
        navigation : true,    
        });

         var owl1 = $("#owl-slider2");

        owl1.owlCarousel({
        autoPlay: 3000,
        items : 3, //10 items above 1000px browser width
        itemsCustom : false,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsTabletSmall: [580,2],
        itemsMobile : [479,1],
        singleItem : false,
        itemsScaleUp : false,
        pagination : false,
        navigation : true,    
        });


 


        
})


