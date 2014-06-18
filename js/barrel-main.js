
//*-----GLOBAL VARIABLES-----*//

var infoView = 1;
var listView = 1;


//*-----AJAX VARIABLES-----*//

var path = window.location.href;
var hash = strrpos(path, '#');
var init = (hash != false) ? path.substr(hash + 1) : '';


//*-----GLOBAL FUNCTIONS-----*//

function strrpos(haystack, needle, offset){
	var i = -1;
	if (offset){
		i = (haystack+'').slice(offset).lastIndexOf(needle);
		if (i !== -1){
			i += offset;
		}
	}else{
			i = (haystack+'').lastIndexOf(needle);
	}
	return i >= 0 ? i : false;
}


//*-----JQUERY FUNCTIONS-----*//

$(document).ready(function(){
	
	var hash = window.location.hash;

	var newWidth = $('#supersized li').size();
	var marginNew = newWidth * -5;
	$('#slide-list').css('margin-left', marginNew);

	$('#pageNavigation').css('opacity', '0');
	
	$('#Content h1').click(function() {
		window.location = "/recap/2012";
	})
	//*-----IMPORTANT VARIABLES-----*//
	
	var boxHeight = $('#Info .overview').height();
	var idxHeight = $('#List .overview').height();
	
	
	//*-----WINDOW HEIGHT-----*//
	
	function maxHeight(){
		winHeight = $(window).height() - 75;
		$('#Info .viewport')
			.css({ height: boxHeight, maxHeight: winHeight });

		$('#List .viewport')
			.css({ height: idxHeight, maxHeight: idxHeight });
		$('#List')
			.css({ maxHeight: idxHeight })
			.tinyscrollbar_update();

	}
	
	$('#Info').tinyscrollbar();
	$('#List').tinyscrollbar();
	
	$(window).resize(function(){
		maxHeight();
	}).trigger('resize');
	
	
	//*-----PAGE FUNCTIONS-----*//
	
	function pageEnter(){
		$('#Info').stop().animate({ height: boxHeight }, 'fast');
		infoView = 0;
	}
	
	function pageExit(href){
		if (infoView == 0){
			$('#supersized').stop().animate({ opacity: 0 }, 'fast');
			$('#Info').stop().animate({ height: 0 }, 'fast', function(){
				window.location = href;	
			});
			infoView = 1;
		}else{
			$('#supersized').animate({ opacity: 0 }, 'fast', function(){
				window.location = href;	
			});
		}
	}
	
	
	//*-----SUPERSIZED ACTIONS-----*//
	
	$('.btn_prev').click(function(event){
		if ($('#supersized li').size()){
			if (!$('#supersized .activeslide').hasClass('slide-0')){
				event.preventDefault();
				api.prevSlide();
			}else{
				var href = $(this).attr('href');
				event.preventDefault();	
				pageExit(href);
			}
		}
	});
	
	$('.btn_next').click(function(event){
		var last = $('#supersized li').size() - 1;
		if ($('#supersized li').size()){
			if (!$('#supersized .activeslide').hasClass('slide-'+ last)){
				event.preventDefault();
				api.nextSlide();
			}else{
				var href = $(this).attr('href');
				event.preventDefault();	
				pageExit(href);
			}

		}
	});



	$('#pageNavigation .btn_next').click(function(){
		if ($(window).width() > 480 ) {
			$("#Main").delay(1200).animate({
				width: '38'
			}, 600);
			$("#outArrow").delay(1200).animate({
				left: '38'
			}, 600);


			$("#Content").delay(1100).animate({ opacity: '0'}, 400);
			$(".list").delay(700).animate({
				opacity: '0'
			}, 400);
			if ($(window).width() < 1024 ) {
					$("#pageNavigation .btn_prev").delay(1400).animate({left: '30px'}, 400);
				} else {
					$("#pageNavigation .btn_prev").delay(1400).animate({left: '100px'}, 400);
				}
			$("#outArrow .toggleSlide").css('display', 'none');
			$("#outArrow .mini").css('display', 'block');
		}
	});


	$('body').hover(function() {
		$('#pageNavigation').delay(600).animate({
			opacity: '.95'
		}, 600);
		$('#Main').hover(function() {
			$('#pageNavigation').animate({
				opacity: '0'
			}, 600);
		},
		function() {
			$('#pageNavigation').animate({
				opacity: '.95'
			}, 600);
		});
	},
	function() {
		$('#pageNavigation').animate({
			opacity: '0'
		}, 600);
	});
	

	$('#indexOnly .btn_next').click(function(event){
		
		$("#pageNavigation").css("opacity", "0");
		$("#indexOnly").animate({
	        	opacity: '0',
	        	display: 'none'
	        }, 1000);
		$("#Main").delay(1200).animate({
			width: '300',
			opacity: '.95'
		}, 600);
		$("#outArrow").delay(1200).animate({
			left: '300px',
			opacity: '.95'
		}, 600);
		$("#pageNavigation").delay(1200).css("display", "block");
		$("#pageNavigation").delay(1200).animate({
			opacity: '1'
		}, 600);

		$("#indexOnly").delay(100).css("display", "none");
		$("#indexOnly").addClass('hidden');
	});

	$('#outArrow .toggleSlide').click(function(event){
			$("#Main").delay(100).animate({
				width: '38',
				opacity: '.95'
			}, 600);
			$("#outArrow").delay(100).animate({
				left: '38'
			}, 600);


			$("#Content").animate({ opacity: '0'}, 400);
			$(".list").animate({
				opacity: '0'
			}, 400);
			if ($(window).width() < 1024 ) {
				$("#pageNavigation .btn_prev").delay(300).animate({left: '30px'}, 400);
			} else {
				$("#pageNavigation .btn_prev").delay(300).animate({left: '100px'}, 400);
			}
			$("#outArrow .toggleSlide").css('display', 'none');
			$("#outArrow .mini").css('display', 'block');
	});
	$('#outArrow .mini').click(function(event){
			$("#Content").delay(300).animate({ opacity: '1'}, 400);
			$(".list").delay(300).animate({
				opacity: '1'
			}, 400);
			$("#Main").delay(100).animate({
				width: '300',
				opacity: '.95'
			}, 600);
			$("#outArrow").delay(100).animate({
				left: '300px',
				opacity: '.95'
			}, 600);
			if ($(window).width() < 1024 ) {
				$("#pageNavigation .btn_prev").delay(200).animate({left: '300px'}, 400);
			} else {
				$("#pageNavigation .btn_prev").delay(300).animate({left: '320px'}, 400);
			}
			$("#outArrow .toggleSlide").css('display', 'block');
			$("#outArrow .mini").css('display', 'none');
	});
	$('#Title li img').click(function(event){
		if ($('#outArrow div').hasClass('mini')) {
			$("#Content").delay(300).animate({ opacity: '1'}, 400);
			$(".list").delay(300).animate({
				opacity: '1'
			}, 400);
			$("#Main").delay(100).animate({
				width: '300',
				opacity: '.95'
			}, 600);
			$("#outArrow").delay(100).animate({
				left: '300px',
				opacity: '.95'
			}, 600);
			$("#pageNavigation .btn_prev").delay(100).animate({left: '320px'}, 400);
			$("#outArrow .toggleSlide").css('display', 'block');
			$("#outArrow .mini").css('display', 'none');
		}
	});



	
	$(document.documentElement).keyup(function(event){
		if ((event.keyCode == 37) || (event.keyCode == 40)){
			if ($('#supersized .activeslide').hasClass('slide-0')){
				var href = $('.btn_prev').attr('href');
				pageExit(href);
			}else{
				api.prevSlide();
									$("#Main").delay(1200).animate({
						width: '38'
					}, 600);
					$("#outArrow").delay(1200).animate({
						left: '38'
					}, 600);


					$("#Content").delay(1100).animate({ opacity: '0'}, 400);
					$(".list").delay(700).animate({
						opacity: '0'
					}, 400);
					$("#pageNavigation .btn_prev").delay(1300).animate({left: '100px'}, 400);
					$("#outArrow .toggleSlide").css('display', 'none');
					$("#outArrow .mini").css('display', 'block');
			}

		}else if ((event.keyCode == 39) || (event.keyCode == 38)){
			var last = $('#supersized li').size() - 1;
			if ($('#supersized .activeslide').hasClass('slide-'+ last)){
				var href = $('.btn_next').attr('href');
				pageExit(href);
			}else{
				api.nextSlide();
					$("#Main").delay(1200).animate({
						width: '38'
					}, 600);
					$("#outArrow").delay(1200).animate({
						left: '38'
					}, 600);


					$("#Content").delay(1100).animate({ opacity: '0'}, 400);
					$(".list").delay(700).animate({
						opacity: '0'
					}, 400);
					$("#pageNavigation .btn_prev").delay(1300).animate({left: '100px'}, 400);
					$("#outArrow .toggleSlide").css('display', 'none');
					$("#outArrow .mini").css('display', 'block');
			}

		}
	});
	
	$('#supersized').touchwipe({
		wipeRight: function(){
		if ($('#supersized li').size()){
			if (!$('#supersized .activeslide').hasClass('slide-0')){
				event.preventDefault();
				api.prevSlide();
			}else{
				var href = $('.btn_prev').attr('href');
				event.preventDefault();	
				pageExit(href);
			}
		}

		},
     	wipeLeft: function(){
			var last = $('#supersized li').size() - 1;
			if ($('#supersized .activeslide').hasClass('slide-'+ last)){
				var href = $('.btn_next').attr('href');
				pageExit(href);
			}else{
				api.nextSlide();
						if ($(window).width() > 480 ) {
			$("#Main").delay(1200).animate({
				width: '38'
			}, 600);
			$("#outArrow").delay(1200).animate({
				left: '38'
			}, 600);


			$("#Content").delay(1100).animate({ opacity: '0'}, 400);
			$(".list").delay(700).animate({
				opacity: '0'
			}, 400);
			if ($(window).width() < 1024 ) {
					$("#pageNavigation .btn_prev").delay(1400).animate({left: '30px'}, 400);
				} else {
					$("#pageNavigation .btn_prev").delay(1400).animate({left: '100px'}, 400);
				}
			$("#outArrow .toggleSlide").css('display', 'none');
			$("#outArrow .mini").css('display', 'block');
		}
			}
		},
		min_move_x: 150,
     	min_move_y: 150,
		preventDefaultEvents: true
	});
	$('body').touchwipe({
		wipeRight: function(){
		if ($('#supersized li').size()){
			if (!$('#supersized .activeslide').hasClass('slide-0')){
				event.preventDefault();
				api.prevSlide();
			}else{
				var href = $('.btn_prev').attr('href');
				event.preventDefault();	
				pageExit(href);
			}
		}

		},
     	wipeLeft: function(){
			var last = $('#supersized li').size() - 1;
			if ($('#supersized .activeslide').hasClass('slide-'+ last)){
				var href = $('.btn_next').attr('href');
				pageExit(href);
			}else{
				api.nextSlide();
				
			}
		},
		min_move_x: 150,
     	min_move_y: 150,
		preventDefaultEvents: true
	});
	
	
	//*-----BUTTON ACTIONS-----*//
	

	
	$('.btn_list').click(function(){
		$('.list').toggleClass('active');
		

		if (listView == 0){
			$('#List').stop().animate({ height: 0 }, 'fast');
			listView = 1;
		}else{
			maxHeight();
			if (infoView == 0){
				$('#Info').stop().animate({ height: 0 }, 'fast', function(){
					$('#List').stop().animate({ height: idxHeight }, 'fast');
					listView = 0;
					infoView = 1;
				});
			}else{
				$('#List').stop().animate({ height: idxHeight }, 'fast');
				listView = 0;
			}
		}
	});
	
});
