(function($) {
  $(document).ready(function() {
 
  //carousel
  $("#owl-demo").owlCarousel({
 
     loop: true,
     items: 1,
     dots: true,
     // autoplay: true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
});

}(jQuery) )