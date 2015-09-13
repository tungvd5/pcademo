(function($) {
"use strict";

/* ==============================================
ANIMATION -->
=============================================== */

    new WOW({
	    boxClass:     'wow',      // default
	    animateClass: 'animated', // default
	    offset:       0,          // default
	    mobile:       true,       // default
	    live:         true        // default
    }).init();

/* ==============================================
LOADER -->
=============================================== */
		
	$(window).load(function() {
		$('#loader').delay(300).fadeOut('slow');
		$('#loader-container').delay(200).fadeOut('slow');
		$('body').delay(300).css({'overflow':'visible'});
	})


/* ==============================================
MENU HOVER -->
=============================================== */

	$('.dropdown').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
		}, function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
	});

/* ==============================================
FLEXSLIDER -->
=============================================== */

	$(window).load(function() {
	  $('.flexslider').flexslider({
	    animation: "slide",
	    controlNav: "thumbnails"
	  });
	});

/* ==============================================
ACCORDION -->
=============================================== */

    function toggleChevron(e) {
        $(e.target)
            .prev('.panel-heading')
            .find("i.indicator")
            .toggleClass('fa-minus fa-plus');
    }
    $('.accordion').bind('hidden.bs.collapse', toggleChevron);
    $('.accordion').bind('shown.bs.collapse', toggleChevron);

/* ==============================================
FUN -->
=============================================== */

	function count($this){
		var current = parseInt($this.html(), 10);
		current = current + 10;
			$this.html(++current);
			if(current > $this.data('count')){
			$this.html($this.data('count'));
			} 
			else {    
			setTimeout(function(){count($this)}, 80);
			}
			}        
			$(".stat-count").each(function() {
			$(this).data('count', parseInt($(this).html(), 10));
			$(this).html('0');
		count($(this));
	});

})(jQuery);