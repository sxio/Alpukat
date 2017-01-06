<!DOCTYPE html>
<html>
<head>
	<title>Doctors List</title>
	<?php echo $header; ?>

	<?php echo link_tag('assets/css/list.css') ?>

	<script src="<?php echo base_url('assets/js/list.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body>
	<?php echo $nav; ?>

	<section id="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10 text-left">
					<div class="row">
	                	<legend>FIND DIRECTLY</legend>
	                	<div class="row">
	                		<form id="profile_search">
								<div class="col-sm-12">
				                    <input type="text" class="form-control"  placeholder="Find Doctor Directly" id="findDoctor"><button class="btn btn-default" id="icon-search"><i class="fa fa-search"></i></button>
								</div>
                			</form>
						</div>
					</div>
					<div class="row">
						<legend>LOCATION</legend>
						<input class="form-control filter" type="text" placeholder="Input your Location" name="location"><i class="fa fa-map-marker fa-fw" id="icon-map"></i>
						<!-- dropdown list -->
						<div class="dropdown" id="drop">
							<form>
								<legend>DETAIL DOCTOR</legend>
							    <div class="radio">
									<label><input type="radio" name="optradio">Male</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="optradio">Female</label>
								</div>
							</form>
						</div>
					</div>
					<!-- collapse list -->
					<div class="row">
				    	<a id="expcoll" data-toggle="collapse" data-target="#thelist" href="#"> Type Doctor <i class="fa fa-plus fa-fw exp"></i>
					    </a>
					  	<div id="thelist" class="collapse">
						    <div class="checkbox">
								<label><input type="checkbox" value="">Dokter Umum</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="">Dokter Gigi</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="">Ahli Saraf</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="">Ahli Penyakit Dalam</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="">Ahli Jantung</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="">Dokter Mata</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="">Dokter Kandungan</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="">Dokter THT</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="">Psikiater</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="">Ahli Bedah</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="">Ahli Nutrisi</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="">Dokter Penyakit Anak</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="">Ahli Akupuntur</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="">Fisioterapis</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="">Dokter Tulang</label>
							</div>
				  		</div>
				  	</div>
				</div>
		        <div class="col-sm-1"></div>
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-sm-1">
			</div>
			<div class="col-sm-10">
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
									<img src="<?php echo base_url('assets/img/doctor/certificate/'. $dct['USER_IMG']); ?>">
									</div>
								</div>
								<div class="row text-center">
									<br>
									<a href="<?php echo base_url('booking'); ?>" type="button" class="btn btn-primary btnBooking">Booking</a>
									<a href="<?php echo base_url('profile/doctor/'. $dct['USER_ID']); ?>" type="button" class="btn btn-danger btnProfile">Profile</a>
								</div>
							</div>
							<div class="col-sm-4 profile_singkat">
								<h2 class="name"><a href="#"><?php echo $dct['USER_NAME']; ?></a></h2>
								<h3 class="specialist">Specialist : <?php echo $dct['DCT_SPECIALTY']; ?></h3>
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