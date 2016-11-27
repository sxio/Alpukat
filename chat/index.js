$(document).ready(function(){
	$("#submitLogin").submit(function(e){
		var name = $("#name").val();
		var pass = $("#pass").val();

		var dataObj = { 'name': name , 'pass': pass};

		$.ajax({
		type: "POST",
		url: "login.php",
		data: dataObj,
		cache: false,
		success: function(result){
				if(result == "berhasil"){
					window.location = "msg.php";
				}
				else{
					$("#error").html(result);
				}
			}
		});
		e.preventDefault(); //Prevent Default action.
		e.unbind();

		return false;
	});

	//If user submits the form
	$("#submit").click(function(){
		$("#submitLogin").submit();
	});
});