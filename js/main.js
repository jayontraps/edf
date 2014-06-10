(function($) {  

    // grab an element
    var myElement = document.querySelector("header");
    // construct an instance of Headroom, passing the element
    var headroom  = new Headroom(myElement);
    // initialise
    headroom.init();      

    $(document).ready( function () {


        // init slick.js
        $('.slides').slick({
          dots: true,
          infinite: false,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 4,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        });
    




        $(window).on("load resize",function(e){
            $('.arrow').each(function(){
                
                var topCoord = $(this).outerHeight() -30;
                var leftCoord = ($(this).width() / 2) -45;
                var rightCoord = ($(this).width() / 2) +45;
                
                $(this).css('-webkit-clip-path', 'polygon(0 0, 100% 0, 100% ' + topCoord + 'px, ' + rightCoord + 'px ' + topCoord + 'px, 50% 100%, ' + leftCoord + 'px ' + topCoord + 'px, 0 ' + topCoord + 'px)');
            });
        });


        // sticky nav  

        // var navEll = $("#site-navigation"),
        //     contEll = $("#content"),
        //     menuOffset = $('#site-navigation')[0].offsetTop;


        // $(document).bind('ready scroll', function() {

        //     var docScroll = $(document).scrollTop();

        //     if (docScroll >= menuOffset) {
        //         navEll.addClass('fixed');
        //         contEll.addClass('fixed-state');
        //     } else {
        //         navEll.removeClass('fixed');  
        //         contEll.removeClass('fixed-state');          
        //     }

        // });



        // backToTop link

        // $("#backToTop").hide();

        // $(function () {
        //     $(window).scroll(function () {
        //         if ($(this).scrollTop() > 100) {
        //             $('#backToTop').fadeIn();
        //         } else {
        //             $('#backToTop').fadeOut();
        //         }
        //     });

        //     // scroll body to 0px on click
        //     $('#backToTop a').click(function () {
        //         $('body,html').animate({
        //             scrollTop: 0
        //         }, 800);
        //         return false;
        //     });
        // }); 


        // animate scroll to positon
        
        $('#events').click(function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: $("#events_sec").offset().top
            }, 600);
        });


        $('#about').click(function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: $("#about_sec").offset().top
            }, 600);
        });


        $('#products').click(function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: $("#products_sec").offset().top
            }, 600);
        });


    });

})(jQuery);