<!DOCTYPE html>
<html>
<head>
	<title>Doctor Profile</title>
	<?php echo $header; ?>

	<?php echo link_tag('assets/css/profile/profile.css') ?>
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body>
	<?php echo $nav; ?>

	<section id="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 text-center">
					<div class="panel panel-success psi">
						<div class="panel panel-heading">
							<div class="row">
								<section>
									<?php
										if($data_doctor['USER_IMG'] == NULL){
											$img = 'noimage.png';
										} else {
											$img = $data_doctor['USER_IMG'];
										}
									?>
									<img src="<?php echo base_url('assets/img/doctor/certificate/'. $img); ?>" class="img-circle" id="foto">
									<h2>Personal Information</h2>
								</section>
							</div>
						</div>
						<div class="panel-body">
							<ul class="list-unstyled info text-left">
								<li>ID : <?php echo $data_doctor['USER_ID']; ?></li>
								<li>Name : <?php echo $data_doctor['USER_NAME']; ?></li>
								<li>Date of Birth : <?php echo nice_date($data_doctor['USER_BIRTH'], 'd F Y'); ?></li>
								<li>Address : <?php echo $data_doctor['USER_ADDRESS']; ?></li>
							</ul>
							<!--Facebook-->
							<button type="button" class="btn btn-fb btn-info"><i class="fa fa-facebook center"></i> Facebook</button>
							<!--Google +-->
							<button type="button" class="btn btn-gplus btn-danger"><i class="fa fa-google-plus center"></i> Google +</button>
							<!--Instagram-->
							<button type="button" class="btn btn-ins btn-primary"><i class="fa fa-instagram center"></i> Instagram</button>
							<hr>
							<div class="row">
								<div class="panel panel-warning visits">
									<div class="panel panel-heading">
										<h3>Overview</h3>
									</div>
									<div class="panel panel-body text-left">
										<ul class="list-unstyled">
											<li><h4>Overall Visits</h4></li>
											<li>
												<ul>
													<li>Last Week    : 999 users</li>
													<li>Last Month   :12393 users</li>
												</ul>
											</li>
											<li>Rating</li>
											<li class="progress">
												<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%">
												70%
												</div>
												<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%">
												20%
												</div>
												<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:7%">
												7%
												</div>
												<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:3%">
												3%
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="panel panel-info">
						<div class="panel-heading text-center">
							<h2>About Doctor</h2>
						</div>
						<div class="panel-body">
							<p><?php echo $data_doctor['DCT_ABOUT']; ?></p>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-info">
								<div class="panel-heading text-center">
									<h3>Education &amp; Experience</h3>
								</div>
								<div class="panel-body">
									<ul class="list-unstyled">
										<li>Education </li>
										<li><ul>
												<?php
													if($data_doctor['DCT_EDUC'] == NULL){
														$data_doctor['DCT_EDUC'] = ';;;;;';
													}
													$educ = explode(';', $data_doctor['DCT_EDUC']);
												?>
												<li>SD : <?php echo $educ[0]; ?></li>
												<li>SMP : <?php echo $educ[1]; ?></li>
												<li>SMA : <?php echo $educ[2]; ?></li>
												<li>S1 : <?php echo $educ[3]; ?></li>
												<li>S2 : <?php echo $educ[4]; ?></li>
												<li>DR : <?php echo $educ[5]; ?></li>
											</ul>
										</li>
										<li>Experience : <?php echo $data_doctor['DCT_EXP']; ?></li>
										<li>Speciality : <?php echo $data_doctor['DCT_SPECIALTY']; ?></li>
										<li>Certification : <?php echo $data_doctor['DCT_CERTIFICATE']; ?></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
