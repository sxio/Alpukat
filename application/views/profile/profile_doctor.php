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
							<!-- <button type="button" class="btn btn-fb btn-info"><i class="fa fa-facebook center"></i> Facebook</button> -->
							<!--Google +-->
							<!-- <button type="button" class="btn btn-gplus btn-danger"><i class="fa fa-google-plus center"></i> Google +</button> -->
							<!--Instagram-->
							<!-- <button type="button" class="btn btn-ins btn-primary"><i class="fa fa-instagram center"></i> Instagram</button> -->
							<hr>
							<div class="row">
								<div class="panel panel-warning visits">
									<div class="panel panel-heading">
										<h3>Overview</h3>
									</div>
									<div class="panel panel-body text-left">
										<ul class="list-unstyled">
											<!-- <li><h4>Overall Visits</h4></li>
											<li>
												<ul>
													<li>Last Week    : 999 users</li>
													<li>Last Month   :12393 users</li>
												</ul>
											</li> -->
											<li>Rating</li>
											<li>
												<label class="col-md-4 control-label">Friendliness </label>
												<div class="col-md-8">
													<p>2.5/10</p>
												</div>
											</li>
											<li>
												<label class="col-md-4 control-label">Expertise </label>
												<div class="col-md-8">
													<p>2.5/10</p>
												</div>
											</li>
											<li>
												<label class="col-md-4 control-label">On Time </label>
												<div class="col-md-8">
													<p>2.5/10</p>
												</div>
											</li>
											<li>
												<label class="col-md-4 control-label">Professionalism </label>
												<div class="col-md-8">
													<p>2.5/10</p>
												</div>
											</li>
											<h4>NOTE : 2.5 -> RATA2 PENILAIAN
											; 10  -> NILAI MAKSIMAL YANG MUNGKIN DIDAPATKAN</h4>
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
					<?php
						$level = $me['USER_LEVEL'];
						if($level != 2) {
					?>
					<div class="col-xs-12 col-sm-12">
						<div class="widget-area no-padding blank">
							<div class="status-upload">
								<?php echo form_open('profile/doctor/comment/'. $this->uri->segment(3)); ?>
									<textarea placeholder="Please comments politely" name="comment" required></textarea>
									<button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Share</button>
								<?php echo form_close(); ?>
							</div><!-- Status Upload  -->
						</div><!-- Widget Area -->
					</div>
					<?php foreach($comments as $comment): ?>
						<div class="wrapper">
							<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
								<img class="img-responsive user-photo" src="<?php echo base_url('assets/img/user/'. $comment['USER_IMG']); ?>">
							</div>
							<div class="col-xs-9 col-sm-9 col-md-10 col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading panel-heading-comments">
										<strong><a href="<?php echo base_url('profile/view/'.$comment['USER_ID']); ?>"><?php echo $comment['USER_ID']; ?></a></strong> <span class="text-muted"><?php echo timespan(mysql_to_unix($comment['USER_DT']), now(), 1) ?> ago</span>
									</div>
									<div class="panel-body">
										<?php echo $comment['COMMENT_CONTENT']; ?>
									</div>
								</div>
							</div>
						</div>
				<?php endforeach; ?>
				<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<br>
	<br>
	<br>
	<br>
</body>
</html>
