$(document).ready(function(){
	$("#accordion").hide();

	$("#thelist").on("hide.bs.collapse", function(){
		$("#expcoll").html('Doctor`s Specialty <i class="fa fa-plus fa-fw exp"></i>');
	});

	$("#thelist").on("show.bs.collapse", function(){
		$("#expcoll").html('Doctor`s Specialty <i class="fa fa-minus fa-fw exp"></i>');
	});
});
