<!DOCTYPE html>
<html>
<head>
	<title>Doctors List</title>
	<?php require_once __DIR__.'/templates/header.php'; ?>

	<?php echo link_tag('assets/css/list.css') ?>
	<?php echo link_tag('assets/css/rating.css') ?>

	<script type="text/javascript" src="<?php echo base_url()?>assets/js/list.js"></script>
	<script src="<?php echo base_url() ?>assets/js/main.js"></script>
</head>
<body>
	<?php require_once __DIR__."/templates/nav.php"; ?>

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
		</br>
		</br>
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
						<div class="row">
							<div class="col-sm-2 text-left">
					        	<div class="profile_image">
								<img src="<?php echo base_url() ?>assets/img/doctor.jpg">
								</div>
							</div>
							<div class="col-sm-4 profile_singkat">
								<h2 class="name"><a href="#">dr. Dokter 1</a></h2>
								<h3 class="specialist">Specialist : Ahli Bedah</h3>
								<h4 class="experience">Experience :30 Tahun</h4>
								<!-- rating system -->
								<div class="stars">
								  	<form action="">
								    	<input class="star star-5" id="star-52" type="radio" name="star"/>
									    <label class="star star-5" for="star-52"></label>
									    <input class="star star-4" id="star-42" type="radio" name="star"/>
									    <label class="star star-4" for="star-42"></label>
									    <input class="star star-3" id="star-32" type="radio" name="star"/>
									    <label class="star star-3" for="star-32"></label>
									    <input class="star star-2" id="star-22" type="radio" name="star"/>
									    <label class="star star-2" for="star-22"></label>
									    <input class="star star-1" id="star-12" type="radio" name="star"/>
									    <label class="star star-1" for="star-12"></label>
									 </form>
								</div>
								<!-- end of rating system -->
								<div class="hargadanwaktu">
									<div class="harga">
										<i class="fa fa-money fa-fw"></i> <span class="nilai"><strong>Rp 100.000,-</strong></span>
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
										<img class="location" src="<?php base_url() ?>assets/img/location.png">
									</div>
									<div class="col-sm-2">
										<img class="location" src="<?php base_url() ?>assets/img/location.png">
									</div>
									<div class="col-sm-2">
										<img class="location" src="<?php base_url() ?>assets/img/location.png">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-1">

			</div>
		</div>
	</section>
	<footer>
		<?php require_once __DIR__.'/templates/chat.php'; ?>
	</footer>
</body>
</html>