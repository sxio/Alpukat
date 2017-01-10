<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile </title>
	<?php echo $header; ?>
	<?php echo link_tag('assets/css/profile/edit_profile_user.css') ?>
	<?php echo link_tag('assets/css/bootstrap-datetimepicker.min.css') ?>

	<script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body>
	<?php echo $nav; ?>
	<div class="container">
		<?php echo form_open_multipart('profile/edit/'. $user['USER_ID']); ?>
			<div class="panel panel-info">
				<div class="panel-heading">Edit Your Profile</div>
				<div class="panel-body">
					<legend>
						Personal Information
						<div class="pull-right">
							<?php if($this->session->flashdata('msg') != NULL) echo $this->session->flashdata('msg'); ?>
						</div>
					</legend>
					<div class="row">
						<label class="col-xs-12 col-sm-12 col-md-6 col-lg-6 control-label" for="usrpp">Profile Picture </label>
                    </div>
                    <div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
							<label for="_photo">
								<img src="<?php echo base_url('assets/img/user/'. $user['USER_IMG']); ?>" class="img-responsive img-thumbnail foto" alt="noimage">
							</label>
							<div class="col-xs-12">
								<input type="file" name="_photo" id="_photo" class="form-control input-img">
							</div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
							<label class="col-xs-12 col-sm-12 col-md-3 col-lg-3 control-label" for="docname">Name </label>
							<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
								<input class="form-control" type="text" name="usrname" value="<?php echo $user['USER_NAME']; ?>" required>
							<br>
							</div>
							<label class="col-xs-12 col-sm-12 col-md-3 col-lg-3 control-label" for="docbirth">Date of Birth </label>
							<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
								<input size="16" type="text" name="usrbirth" class="form-control form_datetime" value="<?php echo $user['USER_BIRTH']; ?>" readonly required>
							<br>
							</div>
							<label class="col-xs-12 col-sm-12 col-md-3 col-lg-3 control-label" for="docemail">Email </label>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                <input class="form-control" type="email" name="usremail" value="<?php echo $user['EMAIL']; ?>" required>
								<br>
                            </div>
                            <label class="col-xs-12 col-sm-12 col-md-3 col-lg-3 control-label" for="docemail">Phone Number </label>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                <input class="form-control" type="text" name="usrHP" value="<?php echo $user['HANDPHONE']; ?>" required>
                            <br>
                            </div>
							<label class="col-xs-12 col-sm-12 col-md-3 col-lg-3 control-label" for="docaddr">Address </label>
							<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
								<textarea class="form-control" rows="4" name="usraddr" placeholder="Enter Your Address" required><?php echo $user['USER_ADDRESS']; ?></textarea>
							</div>
						</div>
					</div>
					<br>
					<button class="btn btn-primary" name="btn_edit" value="1"><i class="fa fa-pencil fa-fw"></i> Edit</button>
					<a href="<?php echo base_url('profile/dashboard/'. $user['USER_ID']); ?>" class="btn btn-warning" value="1"><i class="fa fa-remove fa-fw"></i> Cancel</a>
				</div>
			</div>
		<?php echo form_close(); ?>
	</div>
	<script>
		$(".form_datetime").datetimepicker({
			format: 'yyyy-mm-dd',
			minView: 2,
			fontAwesome: true
		});

		$('.input-img').change(function(event){
			$('.foto').attr('src', URL.createObjectURL(event.target.files[0]));
		});
	</script>
</body>
</html>
