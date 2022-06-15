
  
    $(function(){
		try {
      SyntaxHighlighter.all();
		} catch (e) {
		}
    });
    $(window).load(function(){
		try {
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 95,
        itemMargin: 5,
        smoothHeight: true,
        asNavFor: '#slider'
      });

		} catch (e) {}
		
		try {
      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        // direction: "fade", 
        smoothHeight: true,
        slideshow: true,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
		} catch (e) {}
    });
    
