jQuery(document).ready(function(){		

if (jQuery(window).width() > 1199) {
        jQuery(window).bind("scroll", function() {
            if (jQuery(window).scrollTop() >= 80) {
                jQuery(".site-header").addClass("fixed-bar");
            } else {
                jQuery(".site-header").removeClass("fixed-bar");
            }
        })
}	


jQuery(".toggle-icon").click(function() {
  jQuery(".responsive-toggle").toggleClass("close-toggle");
  jQuery("body").toggleClass("menu-visible");
   jQuery(".bottom-header").slideToggle("slow");
    jQuery(".dropdown-toggle").removeClass("toggled-on");
     jQuery(".sub-menu").removeClass("toggled-on"), jQuery(".sub-menu").removeAttr("style");
});
jQuery(".main-navigation .menu-item-has-children > a").after('<button class="dropdown-toggle"></button>');

jQuery(".dropdown-toggle").click(function() {
  jQuery(this).next(".sub-menu").slideToggle("slow"); 
  jQuery(this).toggleClass("toggle-on");
});

jQuery('.menu-header-menu-container a').filter(function() {
  return jQuery(this).attr('href') == undefined;
  }).parent().addClass('dead-link-anchor'); 

jQuery('.testimonial-slider ').slick({
  slidesToShow:1,
  slidesToScroll: 1,
   dots: false,
   autoplay: true,
   autoplaySpeed: 4000,
   arrows: true
});
jQuery('.review-slider ').slick({
  slidesToShow:1,
  slidesToScroll: 1,
   dots: true,
   arrows: false,
});

jQuery('.read-more-text').hide();
	jQuery('.sm-show').click(function (event) {
		event.preventDefault();
		jQuerythis = jQuery(this);
		jQuerythis.prev().slideToggle('slow');
		jQuerythis.text(jQuerythis.text() == 'Read Less -' ? 'Read More +' : 'Read Less -');
	});

  jQuery('.gform_wrapper select').selectric({
	  onChange: function(element) {
		  jQuery(element).parents(".ginput_container").siblings(".validation_message").hide();
		}
	});

  addlabeleffect('.gform_wrapper input:not([type=hidden]),.gform_wrapper textarea');

  function addlabeleffect(elemnt) {
      jQuery(elemnt).on({
          focus: function() {
            jQuery(this).parent(".ginput_container").siblings(".validation_message").hide();
              jQuery(this).closest("li").addClass('transition-label');
          },
          blur: function() {
              if (!jQuery(this).val())
                  jQuery(this).closest("li").removeClass('transition-label');
          }
      });
  }

  jQuery('.calendar-icon').click(function(){
    jQuery(this).parent(".calendar-button").toggleClass("calendar-show");
  });

  if ( jQuery(window).width() < 1199 ) {
    jQuery("a.button-mobile").on("click touchend", function(e) {
      var el = jQuery(this);
      var link = el.attr("href");
      e.preventDefault();
      jQuery(el).addClass('button-active');
      setTimeout(function(){ 
      window.location = link;
      }, 600);	  
    });
  
  }

});		
		
  
onResize = function() {
  if (jQuery(window).width() < 1199) {
    jQuery('.dead-link-anchor a').click(function(){
        jQuery(this).next(".submenu-expand").trigger("click");
      });
    }
    
  }
  jQuery(document).ready(onResize);
  jQuery(window).resize(onResize);