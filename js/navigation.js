/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	var container, button, menu;

	container = document.getElementById( 'site-navigation' );
	if ( ! container )
		return;

	button = container.getElementsByTagName( 'h4' )[0];
	if ( 'undefined' === typeof button )
		return;

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( -1 === menu.className.indexOf( 'nav-menu' ) )
		menu.className += ' nav-menu';




	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) )
			container.className = container.className.replace( ' toggled', '' );
		else
			container.className += ' toggled';
	};


	// $(button).on('click', function () {
	// 	$(menu).slideToggle('fast');
	// });

	// var anchors = menu.getElementsByTagName( 'a' );

	// if ($(button).css("display") == "block") {

	// 	console.log("true");
	// 	// $(menu).on('click', anchors, function (e) {
	// 	// 	$(menu).slideToggle('fast');
	// 	// });

	// };



    // foundation reveal widths
    var mq_menu = window.matchMedia("(max-width: 900px)");
    mq_menu.addListener(hideMenuOnClick);
    hideMenuOnClick(mq_menu);

    function hideMenuOnClick(mq_menu) {

      if (mq_menu.matches) {

		$(menu).on('click', "a", function (e) {
			$(container).removeClass('toggled');
		});

      } 
    }	





} )();
