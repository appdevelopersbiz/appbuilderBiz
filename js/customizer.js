/**
 * customizer.js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '#site-title' ).html( to );
		} );
	} );
	wp.customize( 'WordApp_options[Color]', function( value ) {
		value.bind( function( to ) {
			$( '#site-title' ).html( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.navbar-app' ).css("background", to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				
			} else {
				
				$( '#site-title, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
} )( jQuery );
