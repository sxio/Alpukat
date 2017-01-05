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
				echo form_open_multipart('register/verify-doctor/'.$hash, $attrib);
			?>
				<h1>Document Submit</h1>
				<?php
					if($this->session->flashdata('msg') != NULL){
						echo $this->session->flashdata('msg');
					}
					if(isset($form_error) && $form_error != NULL){
						$validError = "<div class='alert alert-danger text-center'>". $form_error. "</div>";
						echo $validError;
					}
				?>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
								<label class="control-label" for="image">Photo (a px x b px)</label>
								<?php
									if(!isset($upload_data['_photo']['file_name'])){
										$src = '';
									} else{
										$src = base_url('assets/img/doctor/certificate/'. $upload_data['_photo']['file_name']);
									}
								?>
								<img src="<?php echo $src; ?>" class="img-responsive img-thumbnail form-control foto" alt="noimage">
								<input type="file" name="_photo" class="form-control input-img" required>
							</div>
							<div class="form-group">
								<label class="control-label" for="image">Certificate of Competence</label>
								<?php
									if(!isset($upload_data['_cc']['file_name'])){
										$src = '';
									} else{
										$src = base_url('assets/img/doctor/certificate/'. $upload_data['_cc']['file_name']);
									}
								?>
								<img src="<?php echo $src; ?>" class="img-responsive img-thumbnail form-control foto" alt="noimage">
								<input type="file" name="_cc" class="form-control input-img" required>
							</div>
							<div class="form-group">
								<label class="control-label" for="image">Practice License</label>
								<?php
									if(!isset($upload_data['_pl']['file_name'])){
										$src = '';
									} else{
										$src = base_url('assets/img/doctor/certificate/'. $upload_data['_pl']['file_name']);
									}
								?>
								<img src="<?php echo $src; ?>" class="img-responsive img-thumbnail form-control foto" alt="noimage">
								<input type="file" name="_pl" class="form-control input-img" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
								<label class="control-label" for="image">Proof of Registration</label>
								<?php
									if(!isset($upload_data['_pr']['file_name'])){
										$src = '';
									} else{
										$src = base_url('assets/img/doctor/certificate/'. $upload_data['_pr']['file_name']);
									}
								?>
								<img src="<?php echo $src; ?>" class="img-responsive img-thumbnail form-control foto" alt="noimage">
								<input type="file" name="_pr" class="form-control input-img" required>
							</div>
							<div class="form-group">
								<label class="control-label" for="image">Consultation Fee</label>
								<input type="number" name="_cfee" min="50000" step="5000" value="<?php echo set_value('_cfee'); ?>">
							</div>
							<div class="form-group">
								<label class="control-label" for="image">Booking Fee</label>
								<input type="number" name="_bfee" min="100000" step="5000" value="<?php echo set_value('_bfee'); ?>">
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
