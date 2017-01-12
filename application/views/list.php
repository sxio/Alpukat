<!DOCTYPE html>
<html>
<head>
	<title>Doctors List</title>
	<?php echo $header; ?>

	<?php echo link_tag('assets/css/list.css') ?>

	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body>
	<?php echo $nav; ?>

	<section id="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<legend>Search</legend>
					<form action="listc" id="profile_search" method="get">
						<div class="row">
							<div class="col-sm-12">
									<input type="text" class="form-control" size="50" name="src" placeholder="Search Your Doctor" id="findDoctor" value="<?php echo $this->input->get('src'); ?>"><button class="btn btn-default" id="icon-search"><i class="fa fa-search"></i></button>
									<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<h4 id="expcoll" href="#"> Doctor's Specialty</h4>
								<div id="thelist">
									<?php foreach($doc_cat as $cat):
										if($this->input->get('doc_cat') == $cat['CAT_ID']) $checked = 'checked';
										else $checked = '';
									?>
										<div class="radio">
											<label><input type="radio" value="<?php echo $cat['CAT_ID']; ?>" name="doc_cat" <?php echo $checked; ?>><?php echo $cat['CAT_NAME']; ?></label>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-sm-9">
					<div class="panel panel-info">
						<div class="panel panel-heading">
							<div class="row">
								<div class="col-sm-2 text-left">
									<h4>Picture</h4>
								</div>
								<div class="col-sm-4 text-left">
									<h4>Data</h4>
								</div>
								<div class="col-sm-6 text-left">
									<h4>Location</h4>
								</div>
							</div>
						</div>
						<div class="panel panel-body">
							<?php foreach($doctor_search as $dct): ?>
							<div class="row">
								<div class="col-sm-2 text-left">
									<div class="row">
										<div class="profile_image">
										<?php
											$img = $dct['USER_IMG'];
											if($img == NULL){
												$img = 'noimage.png';
											}
										?>
										<img src="<?php echo base_url('assets/img/doctor/'. $img); ?>">
										</div>
									</div>
									<div class="row text-center">
										<br>
										<a href="<?php echo base_url('booking'); ?>" type="button" class="btn btn-primary btnBooking">Booking</a>
										<a href="<?php echo base_url('profile/doctor/'. $dct['USER_ID']); ?>" type="button" class="btn btn-danger btnProfile">Profile</a>
									</div>
								</div>
								<div class="col-sm-4 profile_singkat">
									<h2 class="name"><a href="<?php echo base_url('profile/doctor/'. $dct['USER_ID']); ?>"><?php echo $dct['USER_NAME']; ?></a></h2>
									<h3 class="specialist">Specialist : <?php echo $dct['CAT_NAME']; ?></h3>
									<h4 class="experience">Experience : <?php echo $dct['DCT_EXP']; ?></h4>
									<div class="hargadanwaktu">
										<div class="harga">
											<i class="fa fa-money fa-fw"></i> <span class="nilai"><strong>Rp <?php echo $dct['CONSULT_FEE']; ?></strong></span>
										</div>
										<div class="waktu">
											<i class="fa fa-clock-o fa-fw"></i>
											<div class="jadwal nilai">Senin - Jumat</div>
											<div class="waktu_kerja">08.00 - 22.00</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6" id="lokasi">
									<div class="row">
										<div class="col-sm-6">
											<h4>Location</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-2">
											<img class="location" src="<?php echo base_url('assets/img/location.png'); ?>">
										</div>
										<div class="col-sm-2">
											<img class="location" src="<?php echo base_url('assets/img/location.png'); ?>">
										</div>
										<div class="col-sm-2">
											<img class="location" src="<?php echo base_url('assets/img/location.png'); ?>">
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						</div>
					</div>
				</div>
			<div class="col-sm-1">

			</div>
		</div>
	</section>
</body>
</html>
