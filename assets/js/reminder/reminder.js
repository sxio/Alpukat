$(document).ready(function(){
	var monthNames = [
		"January", "February", "March",
		"April", "May", "June", "July",
		"August", "September", "October",
		"November", "December"
	];

	$('[data-toggle="tooltip"]').tooltip();

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

	$('.remind').click(function(){
		var del_date      = $(this).children('.r_dt').val();
		var del_date_desc = $(this).children('.r_desc').val();
		var del_picker    = new Date(del_date);
		$('#mirror_field').val(del_date);
		$('#remind_desc').val(del_date_desc);
		$('#dt_picker').val(del_picker.getDate() + ' ' + monthNames[del_picker.getMonth()] + ' ' + del_picker.getFullYear() + ' - ' + del_picker.getHours() + ' : ' + del_picker.getMinutes());
	});
});