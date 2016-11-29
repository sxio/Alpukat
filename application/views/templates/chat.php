<span class="fa-stack fa-lg chat_open" id="chatIcon">
	<div class="fa fa-circle fa-stack-2x"></div>
	<div class="fa fa-comments fa-stack-1x fa-inverse"></div>
</span>

<!-- Chat Feature -->
<div id="chat_popup">
	<div id="wrapper">
		<div id="menu">
			<p class="welcome">Welcome, <b id="userid"></b>
				Chat with
				<select class="form-control" id="contact">
					<option value=""></option>
				</select>
				<button class="btn btn-link" id="refresh"><i class="fa fa-refresh fa-fw"></i></button>
			</p>
			<button class="chat_close btn btn-link"><i class="fa fa-remove fa-fw"></i></button>
			<div style="clear:both"></div>
		</div>
		<div id="chatbox"></div>

		<form name="message" action="">
			<input class="form-control" name="usermsg" type="text" id="usermsg"><button class="btn btn-success" id="submitmsg"><i class="fa fa-paper-plane"></i></button>
		</form>
	</div>
</div>