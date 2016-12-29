$(document).ready(function(){
	$('#addtocart').click(function(){
		var prod_id = $('#prod_id').val();
		var urlCart = $('#baseURL').val() + "estore/addtocart";

		$.ajax({
			url: urlCart,
			type: "POST",
			dataType: 'json',
			data: {prod_id: prod_id},
			success: function(res){
				var harga = numeral(res.total).format('0,0');
				$('#total').text('RP ' + harga + ' (' + res.total_items +' items)');
			}
		});
	});

	$('#empty_cart').click(function(){
		var urlCart = $('#baseURL').val() + "estore/emptycart";
		$.ajax({
			url: urlCart,
			success: function(){
				$('#total').text('RP 0 (0 items)');
			}
		});
	});
});