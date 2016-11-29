<div class="fa fa-comments fa-fw my_popup_open" id="chatIcon"></div>

<!-- Chat Feature -->
<div id="my_popup">
	<div id="wrapper">
		<div id="menu">
			<p class="welcome">Welcome, <b id="userid"></b>
				, Chat with
				<select id="contact">
					<option value=""></option>
				</select>
				<button id="refresh">refresh</button>
			</p>
			<p class="logout"><a id="exit" href="#">Exit Chat</a></p>
			<div style="clear:both"></div>
		</div>
		<div id="chatbox"></div>

		<form name="message" action="">
			<input name="usermsg" type="text" id="usermsg" size="63" />
			<input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
		</form>
	</div>

	<!-- Add an optional button to close the popup -->
	<button class="my_popup_close">Close</button>
</div>