// $(document).ready(function(){
// 	$('.btn-reply').click(function(){
// 		$(this).parent().siblings('.reply').css('display', 'block');
// 	});

// 	$('.btn-submit').click(function(){
// 		var f_id = $(this).siblings('.f_id').val();
// 		var content = CKEDITOR.instances.content.getData();;
// 		var urlDetail = $('#base_url').val() + "forum/reply";
// 		var parent = $(this).parent();
// 		$.ajax({
// 			url: urlDetail,
// 			dataType: 'json',
// 			data: {id: f_id, content: content},
// 			type: "POST",
// 			success: function(res){
// 				if(res.code == 0){
// 					location.reload();
// 				}
// 			}
// 		});
// 	});
// });