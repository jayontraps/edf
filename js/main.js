(function($) {  
    // init headroom.js
    // grab an element
    // var myElement = document.querySelector("header");
    // // construct an instance of Headroom, passing the element
    // var headroom  = new Headroom(myElement);
    // // initialise
    // headroom.init();   


    $(document).ready( function () {


    // directory cat menu
    $('#outArrow').click(function(event){

        $this = $(this);                

        if ($this.hasClass('opened')) {

            $this.removeClass('opened');

            $this.animate({
                left: '10'
            }, 400);

            $("#directory-cat").animate({
                width: '10'
                // opacity: '0'
            }, 400).removeClass("opened-nav");   

            $("#directoryNav").animate({
                opacity: '0',
                marginLeft: "-280px"
            }, 400); 


        } else {

            $this.addClass('opened');

            $this.animate({
                left: '280'
            }, 400);

            $("#directory-cat").animate({
                width: '280',
                opacity: '.95'
            }, 400).addClass("opened-nav");

            $("#directoryNav").animate({
                opacity: '1',
                marginLeft: "0"
            }, 400);                

        }
    });        




    // directory .teaser
    $('.dir_tease').hover( 
        function () {
            $(this).find('.teaser').animate({
                height: "100%"
            }, 200);
        }, 
        function () {
            $(this).find('.teaser').animate({
                height: "0"
            }, 200);
        }
    );



        // masonry.js

        var container = document.querySelector('#dir_content');
        var msnry = new Masonry( container, {
          // options
          // columnWidth: container.querySelector('.directory_item'),
          // columnWidth: 250,
          itemSelector: '.directory_item'
          // "gutter": 20
        });  

         // var container = document.querySelector('#container');
         //    var msnry = new Masonry( container, {
         //      columnWidth: 200,
         //      itemSelector: '.item'
         //    });





        // init slick.js
        $('.slides').slick({
            dots: true,
            arrows: false,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            customPaging: function(slider, i) {
            return '<div>&#9632;</div>'
            },          
            responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true,
                arrows: false,
                customPaging: function(slider, i) {
            return '<div>&#9632;</div>'
            },
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false,
                customPaging: function(slider, i) {
            return '<div>&#9632;</div>'
            },
                
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                customPaging: function(slider, i) {
            return '<div>&#9632;</div>'
            },
                
              }
            }
          ]
        });
    




        $(window).on("load resize",function(e){
            $('.arrow').each(function(){
                
                var topCoord = $(this).outerHeight() -20;
                var leftCoord = ($(this).width() / 2) -20;
                var rightCoord = ($(this).width() / 2) +20;
                
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

        $('.home #menu').on('click', 'a', function(e) {
            if (this.id.length) {                    
                e.preventDefault();

                var $target = $("#" + this.id + "_sec");
                var targetOffset = $target.offset().top - 50;



                $('html,body').animate({
                    // scrollTop: $("#" + target + "_sec").offset().top
                    scrollTop: targetOffset
                }, 600);
            };
        });
        


        // forms
        $('input[name=cat]:first').attr('checked', true);

        $(".form_content").hide(); //Hide all content                
        
        $(".form_content:first").show(); //Show first tab content
        
        $('input[name=cat]').click( function() {
            $(".form_content").hide(); //Hide all tab content
            var activeTab = $(this).attr("id");
            $(activeTab).show();
        }) ;        


        $(".page-template-page-contact-php .home-chunks").first().css('padding-top', '6em');



    });

})(jQuery);