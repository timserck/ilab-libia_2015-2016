

	$(document).ready(function (){
			
            // scroll to section
		$(".scrollto").on("click", function(e){
		// Prevent a page reload when a link is pressed
		e.preventDefault();
		
		// scroll event
		var section = $(this).attr("href");
		$('html, body').animate({
       	 scrollTop: $(section).offset().top
    	}, 800);
		
	});
});
 