$(document).ready(function(){       
		$(".services-btn").click(function(){
	        $(".services-section-slide").slideToggle("slow");
	    });
	    $(".services-btn").click(function() {
	    $('html,body').animate({
	        scrollTop: $(".services-section-slide").offset().top},
	        "slow");
		});
});
