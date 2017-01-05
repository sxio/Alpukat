<!DOCTYPE html>
<html>
<head>
	<title>Avocado | Doc</title>
	<?php echo $header; ?>

	<?php echo link_tag('assets/css/nav.css') ?>
	<?php echo link_tag('assets/css/register.css') ?>
	<?php echo link_tag('assets/css/doctor/verify-doctor.css') ?>

	<script src="<?php echo base_url('assets/js/user.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body id="bckimg">
	<?php echo $nav; ?>
	<div id="account" class="container margintop">
		<div id="register">
			<!-- Meikelwis 27 Nov 16 -->
			<?php
				$attrib = array('class' => 'register');
				echo form_open_multipart('register/verify-doctor/1', $attrib);
			?>
				<h1>Document Submit</h1>
				<?php
					if($this->session->flashdata('msgRegis') != NULL){
						echo $this->session->flashdata('msgRegis');
					}
					if(isset($err_regis) && $err_regis != NULL){
						$validError = "<div class='alert alert-danger text-center'>". $err_regis. "</div>";
						echo $validError;
					}
				?>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
								<label class="control-label" for="image">Photo (a px x b px)</label>
								<img src="" class="img-responsive img-thumbnail form-control foto" alt="noimage">
								<input type="file" name="userfile" class="form-control input-img">
							</div>
							<div class="form-group">
								<label class="control-label" for="image">Certificate of Competence</label>
								<img src="" class="img-responsive img-thumbnail form-control foto" alt="noimage">
								<input type="file" name="userfile2" class="form-control input-img">
							</div>
							<div class="form-group">
								<label class="control-label" for="image">Practice License</label>
								<img src="" class="img-responsive img-thumbnail form-control foto" alt="noimage">
								<input type="file" name="userfile3" class="form-control input-img">
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
								<label class="control-label" for="image">Proof of Registration</label>
								<img src="" class="img-responsive img-thumbnail form-control foto" alt="noimage">
								<input type="file" name="userfile4" class="form-control input-img">
							</div>
							<div class="form-group">
								<label class="control-label" for="image">Consultation Fee</label>
								<input type="number" name="" min="50000" step="5000">
							</div>
							<div class="form-group">
								<label class="control-label" for="image">Booking Fee</label>
								<input type="number" name="" min="100000" step="5000">
							</div>
						</div>
						<button type="submit" id="docsubmit">Sign Up</button>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
	<script type="text/javascript">
		$('.input-img').change(function(event){
			$(this).siblings('.foto').attr('src', URL.createObjectURL(event.target.files[0]));
		});
	</script>
</body>
</html>
