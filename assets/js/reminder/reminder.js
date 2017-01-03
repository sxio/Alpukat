$(document).ready(function(){
	var d = new Date();
	var year = d.getFullYear();
	var month = d.getMonth()+1;
	var lastDayOfMonth = new Date(d.getFullYear(), d.getMonth()+1, 0).getDate();
	$(".form_datetime").datetimepicker({
		format: 'dd MM yyyy - hh : ii',
		linkField: "mirror_field",
		linkFormat: "yyyy-mm-dd hh:ii",
		todayBtn: true,
		startDate: year + '-' + month + '-01',
		endDate: year + '-' + month + '-' + lastDayOfMonth
	});

	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
});