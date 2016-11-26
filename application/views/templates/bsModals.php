<!-- Modal -->
<div id="signIn_signUp" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
				<ul class="nav nav-pills">
					<li class="active"><a  href="#signIn" data-toggle="tab"><i class="fa fa-sign-in fa-fw"></i> Sign In</a></li>
					<li><a href="#signUp" data-toggle="tab"><i class="fa fa-sign-out fa-fw"></i> Sign Up</a></li>
				</ul>
			</div>
			<div class="modal-body">
				<div id="sign" class="container">
					<div class="tab-content clearfix">
						<div class="tab-pane active" id="signIn">
							<form id="formSignIn">
								<div class="form-group">
									<label for="usernameIn">Username:</label>
									<input type="username" class="form-control" id="usernameIn" placeholder="Username">
								</div>
								<div class="form-group">
									<label for="pwdIn">Password:</label>
									<input type="password" class="form-control" id="pwdIn" placeholder="Password">
								</div>
								<div class="checkbox">
									<label><input type="checkbox"> Remember me</label>
									<a href="#forgotpassword" id="forgotPwd">forgot password <i class="fa fa-question fa-fw"></i></a>
								</div>
								<button type="submit" class="btn btn-info form-control"><i class="fa fa-paper-plane fa-fw"></i> Sign In</button>
							</form>
						</div>
						<div class="tab-pane" id="signUp">
							<form id="formSignUp">
								<div class="form-group">
									<label for="email">Email:</label>
									<input type="email" class="form-control" id="email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="usernameUp">Username:</label>
									<input type="username" class="form-control" id="usernameUp" placeholder="Username">
								</div>
								<div class="form-group">
									<label for="pwdUp">Password:</label>
									<input type="password" class="form-control" id="pwdUp" placeholder="Password">
								</div>
								<div class="form-group">
									<label for="pwdUpConf">Confirm Password:</label>
									<input type="password" class="form-control" id="pwdUpConf" placeholder="Confirm Password">
								</div>
								<button type="submit" class="btn btn-info form-control"><i class="fa fa-paper-plane fa-fw"></i> Submit</button>
							</form>
						</div>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>