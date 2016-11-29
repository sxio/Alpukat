<span class="fa-stack fa-lg chat_open" id="chatIcon">
	<div class="fa fa-circle fa-stack-2x"></div>
	<div class="fa fa-comments fa-stack-1x fa-inverse"></div>
</span>

<!-- Chat Feature -->
<div id="chat_popup">
	<div id="wrapper">
		<div id="menu">
			<p class="welcome">Welcome, <b id="userid"></b>
				, Chat with
				<select id="contact">
					<option value=""></option>
				</select>
				<button id="refresh">refresh</button>
			</p>
			<button class="chat_close btn btn-link"><i class="fa fa-remove fa-fw"></i></button>
			<div style="clear:both"></div>
		</div>
		<div id="chatbox"></div>

		<form name="message" action="">
			<input name="usermsg" type="text" id="usermsg" size="63" />
			<input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
		</form>
	</div>
</div>