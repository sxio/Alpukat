var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
$(document).ready(function(){
	$('#transport').change(function(){
		$('#transfee').val('0');
	});

	if(w < 500){
		$('#donate_list').addClass('col-xs-12');
		$('#donate_list button').addClass('pull-right');
	}
	else{
		$('#donate_list').removeClass('col-xs-12');
		$('#donate_list').addClass('pull-right');
		$('#donate_list button').removeClass('pull-right');
	}
});
