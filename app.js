	// Smooth scroll to specific button on click
	$(".semi-transparent-button").click(function() {
		$('html,body').animate({
			scrollTop: $("#posts").offset().top},
			'slow');
	});
