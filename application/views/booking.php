<!DOCTYPE html>
<html>
<head>
	<title>Doctors List</title>
	<?php require_once __DIR__.'/templates/header.php'; ?>

	<?php echo link_tag('assets/css/list.css') ?>
	<?php echo link_tag('assets/css/rating.css') ?>

	<script src="<?php echo base_url() ?>assets/js/main.js"></script>
</head>
<body>
	<?php require_once __DIR__."/templates/nav.php"; ?>

	<section id="content">
		<div class="container-fluid">
			<form id="frmBooking">
				<div class="row">
					<div class="panel panel-info">
						<div class="panel-heading text-center">
							<h4>Booking Transaction</h4>
						</div>
						<div class="panel-body">
							<div class="booking-header">
								<form>
									<div class="form-group row">
										<label for="dspBookingNo" class="col-sm-2">
											Booking No
										</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" id="dspBookingNo">	
										</div>
										<label for="BookingDate" class="col-sm-2">
											Booking Date
										</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" id="BookingDate">	
										</div>
									</div>
									<div class="booking-detail">
										<div class="panel panel-info">
											<div class="panel-heading">
												<form>
													<div class="form-group row">
														<label for="DoctorsName" class="col-sm-3"> Doctors Name</label>
														<label for="ServiceName" class="col-sm-3"> Service Name</label>
														<label for="BookCount" class="col-sm-2"> Book Count</label>
														<label for="TotalAmount" class="col-sm-3"> Total Amount</label>
													</div>
													<div class="form-group row">
														<div class="col-sm-3">
															<input type="text" class="form-control" id="DoctorsName">	
														</div>
														<div class="col-sm-3">
															<input type="text" class="form-control" id="ServiceName">	
														</div>
														<div class="col-sm-2">
															<input type="text" class="form-control" id="BookCount">	
														</div>
														<div class="col-sm-3">
															<input type="text" class="form-control" id="TotalAmount">	
														</div>
														<div class="col-sm-1">
															<button type="submit" class="btn btn-primary btnSubmit">Submit</button>
														</div>
													</div>
												</form>
											</div>
											<div class="panel-body">
												<h3>Views</h3>
												<form id = "viewBooking">
													<div class="form-group row">
														<div class="col-sm-3">
															<input type="text" class="form-control" id="DoctorsName" placeholder ="Doctor1" disabled>	
														</div>
														<div class="col-sm-3">
															<input type="text" class="form-control" id="ServiceName" placeholder ="Service1" disabled>
														</div>
														<div class="col-sm-2">
															<input type="text" class="form-control" id="BookCount" placeholder ="BookCount1" disabled>	
														</div>
														<div class="col-sm-3">
															<input type="text" class="form-control" id="TotalAmount" placeholder ="TotalAmount1" disabled>	
														</div>
														<div class="col-sm-1">
															<button type="submit" class="btn btn-primary btnRem">Remove</button>
														</div>
													</div>
													<div class="form-group row">
														<div class="col-sm-3">
															<input type="text" class="form-control" id="DoctorsName" placeholder ="Doctor2" disabled>	
														</div>
														<div class="col-sm-3">
															<input type="text" class="form-control" id="ServiceName" placeholder ="Service2" disabled>
														</div>
														<div class="col-sm-2">
															<input type="text" class="form-control" id="BookCount" placeholder ="BookCount2" disabled>	
														</div>
														<div class="col-sm-3">
															<input type="text" class="form-control" id="TotalAmount" placeholder ="TotalAmount2" disabled>	
														</div>
														<div class="col-sm-1">
															<button type="submit" class="btn btn-primary btnRem">Remove</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="form-group row text-left">
										<div class="col-sm-6"></div>
										<label for="otherPayment" class="col-sm-2">
											Other Payment
										</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" id="otherPayment" disabled>	
										</div>
									</div>
									<div class="form-group row text-left">
										<div class="col-sm-6"></div>
										<label for="totalPayment" class="col-sm-2">
											Total Payment
										</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" id="totalPayment" disabled>	
										</div>
									</div>
								</form>
							</div>
						<div class="panel-footer">
							
						</div>
					</div>
				</div>
			</form>
		</div>
		</div>
	</section>
	<footer>
		<?php require_once __DIR__.'/templates/chat.php'; ?>
	</footer>
</body>
</html>