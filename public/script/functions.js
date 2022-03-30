jQuery(document).ready(function($) {

	'use strict';
    //***************************
    // Sticky Header Function
    //***************************
	  jQuery(window).scroll(function() {
	      if (jQuery(this).scrollTop() > 170){  
	          jQuery('body').addClass("st-sticky");
	      }
	      else{
	          jQuery('body').removeClass("st-sticky");
	      }
	  });

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// image popup lightbox
$('[data-magnify]').magnify({
      headToolbar: [
        'close'
      ],
      initMaximized: true
    });

// End
});
