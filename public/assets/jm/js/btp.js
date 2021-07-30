// Check distance to top and display back-to-top.
$( window ).scroll( function() {
	var body = document.body;
	 html = document.documentElement; 
	 var height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );
	
	if ( $( this ).scrollTop() > height/2 ) {
		$( '.back-to-top' ).addClass( 'show-back-to-top' );
	} else {
		$( '.back-to-top' ).removeClass( 'show-back-to-top' );
	}
});

// Click event to scroll to top.
$( '.back-to-top' ).click( function() {
	$( 'html, body' ).animate( { scrollTop : 0 }, 800 );
	return false;
});