$(document).ready(function(){
	$('#catID').change(function(){
		$('#prodID').empty();
		var catid = $(this).val();
		var urlCat = $('#baseURL').val() + "admin/estore/getproductbycategory";
		$.ajax({
			url: urlCat,
			dataType: 'json',
			data: {catID: catid},
			type: "POST",
			success: function (result) {
				$.each(result, function(i, val){
					$('#prodID').append('<option value="'+ result[i].PROD_ID +'">'+ '( ' + result[i].PROD_ID + ' ) ' + result[i].PROD_NAME +'</option>');
				});
				// search & print current Quantity
				var prodid = $('#prodID').val();
				var urlProd = $('#baseURL').val() + "admin/estore/getproductbyid";
				$.ajax({
					url: urlProd,
					dataType: 'json',
					data: {prodID: prodid},
					type: "POST",
					success: function (result) {
						$('#curr_quan').text('Current Quantity: ' + result[0].PROD_QTY_OS);
					}
				})
			}
		});
	});

	// search & print current Quantity
	$('#prodID').change(function(){
		var prodid = $(this).val();
		var urlProd = $('#baseURL').val() + "admin/estore/getproductbyid";
		$.ajax({
			url: urlProd,
			dataType: 'json',
			data: {prodID: prodid},
			type: "POST",
			success: function (result) {
				$('#curr_quan').text('Current Quantity: ' + result[0].PROD_QTY_OS);
			}
		})
	});
});