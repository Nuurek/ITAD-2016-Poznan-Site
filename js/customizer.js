( function( $ ) {

	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( newval ) {
			$( 'section h1' ).css( 'color', newval );
		} );
	} );

    var sections = ['news', 'talks', 'sponsors', 'location', 'contact'];

    function customize_section_text(id) {
        wp.customize( id + '_text', function( value ) {
    		value.bind( function( newval ) {
    			$( '#' + id + ' h2' ).html( newval );
    		} );
    	} );
    };

    sections.forEach(customize_section_text);

    //customize_section_text('news');

} )( jQuery );
