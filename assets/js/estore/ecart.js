$(document).ready(function(c) {
	$('.close').on('click', function(c){
		$(this).parent().fadeOut('slow', function(c){
			$(this).remove();
		});
	});
});