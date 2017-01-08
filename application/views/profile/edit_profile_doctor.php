<!DOCTYPE html>
<html>
<head>
	<title>Edit Doctor`s Profile </title>
	<?php echo $header; ?>
	<?php echo link_tag('assets/css/profile/edit_profile_doctor.css') ?>
	<?php echo link_tag('assets/css/bootstrap-datetimepicker.min.css') ?>

	<script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body>
	<?php echo $nav; ?>
	<div class="container">
		<?php echo form_open_multipart('profile/doctor/edit/'. $data_doctor['USER_ID']); ?>
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
						<label class="col-xs-12 col-sm-12 col-md-6 col-lg-6 control-label" for="docpp">Profile Picture </label>
                    </div>
                    <div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
							<label for="_photo">
								<img src="<?php echo base_url('assets/img/doctor/certificate/'.$data_doctor['USER_IMG']); ?>" class="img-responsive img-thumbnail foto" alt="noimage">
							</label>
							<div class="col-xs-12">
								<input type="file" name="_photo" id="_photo" class="form-control input-img">
							</div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
							<label class="col-xs-12 col-sm-12 col-md-3 col-lg-3 control-label" for="docname">Name </label>
							<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
								<input class="form-control" type="text" name="docname" value="<?php echo $data_doctor['USER_NAME']; ?>" required>
							<br>
							</div>
							<label class="col-xs-12 col-sm-12 col-md-3 col-lg-3 control-label" for="docbirth">Date of Birth </label>
							<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
								<input size="16" type="text" name="docbirth" class="form-control form_datetime" value="<?php echo nice_date($data_doctor['USER_BIRTH'],'Y-m-d'); ?>" readonly required>
							<br>
							</div>
							<label class="col-xs-12 col-sm-12 col-md-3 col-lg-3 control-label" for="docaddr">Address </label>
							<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
								<textarea class="form-control" rows="4" name="docaddr" placeholder="Enter Your Address" required><?php echo $data_doctor['USER_ADDRESS']; ?></textarea>
							<br>
							</div>
                            <label class="col-xs-12 col-sm-12 col-md-3 col-lg-3 control-label" for="docemail">Phone Number </label>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                <input class="form-control" type="text" name="docHP" value="<?php echo $data_doctor['HANDPHONE']; ?>">
                            <br>
                            </div>
                            <label class="col-xs-12 col-sm-12 col-md-3 col-lg-3 control-label" for="docemail">Email </label>
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                <input class="form-control" type="email" name="docemail" value="<?php echo $data_doctor['EMAIL']; ?>">
                            </div>
							<!-- </div> -->
						</div>
                        <!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        </div> -->
					</div>
					<br>
					<legend>About</legend>
					<div class="row">
						<label class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label" for="docabout">About Me </label>
						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
							<textarea class="form-control" rows="5" name="docabout" placeholder="Please Enter Your Description Formally"><?php echo $data_doctor['DCT_ABOUT']; ?></textarea>
						</div>
					</div>
					<br>
					<?php $educ = explode(';', $data_doctor['DCT_EDUC']); ?>
					<legend>Education &amp; Experience</legend>
					<div class="row">
						<label class="col-xs-4 col-sm-4 col-md-2 col-lg-2 control-label" for="docSD">SD </label>
						<div class="col-md-2">
							<input class="form-control" type="text" name="docSD" value="<?php echo $educ[0]; ?>">
						</div>
						<label class="col-xs-4 col-sm-4 col-md-2 col-lg-2 control-label" for="docSMP">SMP </label>
						<div class="col-md-2">
							<input class="form-control" type="text" name="docSMP" value="<?php echo $educ[1]; ?>">
						</div>
						<label class="col-xs-4 col-sm-4 col-md-2 col-lg-2 control-label" for="docSMA">SMA </label>
						<div class="col-md-2">
							<input class="form-control" type="text" name="docSMA" value="<?php echo $educ[2]; ?>">
						</div>
					</div>
					<br>
					<div class="row">
						<label class="col-xs-2 control-label" for="docS1">S1 </label>
						<div class="col-md-2">
							<input class="form-control" type="text" name="docS1" value="<?php echo $educ[3]; ?>">
						</div>
						<label class="col-xs-2 control-label" for="docS2">S2 </label>
						<div class="col-md-2">
							<input class="form-control" type="text" name="docS2" value="<?php echo $educ[4]; ?>">
						</div>
						<label class="col-xs-2 control-label" for="docDR">DR </label>
						<div class="col-md-2">
							<input class="form-control" type="text" name="docDR" value="<?php echo $educ[5]; ?>">
						</div>
					</div>
					<br>
					<div class="row">
						<label class="col-xs-2 control-label" for="docExp">Experience </label>
						<div class="col-md-2">
							<input class="form-control" type="text" name="docExp" value="<?php echo $data_doctor['DCT_EXP']; ?>">
						</div>
						<label class="col-xs-2 control-label" for="docSpec">Speciality </label>
						<div class="col-md-2">
							<input class="form-control" type="text" name="docSpec" value="<?php echo $data_doctor['DCT_SPECIALTY']; ?>">
						</div>
						<label class="col-xs-2 control-label" for="docCert">Certification </label>
						<div class="col-md-2">
							<input class="form-control" type="text" name="docCert" value="<?php echo $data_doctor['DCT_CERTIFICATE']; ?>">
						</div>
					</div>
					<br>
					<button class="btn btn-primary" name="btn_edit" value="1"><i class="fa fa-pencil fa-fw"></i> Edit</button>
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
