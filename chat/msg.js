$(document).ready(function(){
	//If user submits the form
	$("#submitmsg").click(function(){
		var clientmsg = $("#usermsg").val();
		var cont = $("#contact").val();

		$.post("post.php", {text: clientmsg, contact: cont});
		$("#usermsg").attr("value", "");
		return false;
	});

	$("#refresh").click(function(){
		var user = $("#userid").html();
		$("#contact").empty();

		$.ajax({
		url: 'queryGetContact.php',
		type: 'GET',
		data: "userid="+user,
		contentType: false,
		cache: false,
		processData:false,
		success: function(result){
				$("#contact").append(result);
			}
		});
	});

	//Load the file containing the chat log
	function loadChat(){
		var cont = $("#contact").val();

		if(cont == ""){
			$("#chatbox").empty();
			return false;
		}

		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
		$.post("request.php", {contact: cont} ,function(result){
			$("#chatbox").html(result);
			var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
			if(newscrollHeight > oldscrollHeight){
				$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
			}
		});
	}
	setInterval (loadChat, 250);

	//If user wants to end session
	$("#exit").click(function(){
		window.location = 'logout.php';
	});
});