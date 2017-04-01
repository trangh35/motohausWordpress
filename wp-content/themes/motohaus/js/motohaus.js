//Change header image when scrolling
jQuery( document ).ready( function() {
    
  $( window ).scroll( function() {
    var distanceY = window.pageYOffset || document.documentElement.scrollTop,
        shrinkOn = 100;
      
    if ( distanceY > shrinkOn) {
      $( '.blog-masthead' ).addClass( "smaller" );
    }
    else {
      $( '.blog-masthead' ).removeClass( "smaller" );
    }
  });
});

// makes sure the whole site is loaded
jQuery( window ).load( function() {
  
  // will first fade out the loading animation
  jQuery( '.status' ).fadeOut();

  // will fade out the whole DIV that covers the website.
  jQuery( '.preloader' ).delay( 1000 ).fadeOut( "slow" );
  jQuery( '.carousel' ).carousel( 'pause' );

});