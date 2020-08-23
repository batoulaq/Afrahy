var linkClicked = document.getElementsByClassName('nav-link');
var numClass = linkClicked.length;

for (var i = 0; i < numClass; i++) {
		linkClicked[i].addEventListener('click', function(){
      var onTheMoment = document.getElementsByClassName('active');
			onTheMoment[0].className = onTheMoment[0].className.replace(' active', '');
			this.className += ' active';
    }, false);
	}

	// Smooth scroll to specific button on click
	$(".semi-transparent-button").click(function() {
		$('html,body').animate({
			scrollTop: $("#posts").offset().top},
			'slow');
	});
	