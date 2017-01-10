<!DOCTYPE html>
<html>
<head>
	<title>Doctors List</title>
	<?php echo $header; ?>
	<?php echo link_tag('assets/css/booking/booking.css') ?>

	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</head>
<body>
	<?php echo $nav; ?>

	<div id="booking" class="container">
		<div class="row">
			<div class="panel panel-info">
				<div class="panel-heading text-center">
					<?php echo $title; ?>
				</div>
				<div class="panel-body">
					<!-- BOOKING HEAD -->
							<?php echo form_open('booking/create'); ?>
								<div class="booking-header">
									<div class="form-group row">
										<label for="dspBookingNo" class="col-sm-2">Booking No</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" disabled value="<?php echo $bookingid ?>">
										</div>
										<label for="BookingDate" class="col-sm-2">Booking Date</label>
										<div class="col-sm-4">
											<input type="date" class="form-control" name="bookingdt">
										</div>
									</div>
									<?php echo form_open('booking/adddetail') ?>
										<div class="booking-detail">
											<div class="panel panel-success">
												<div class="panel-heading">
													<div class="form-group row">
														<label class="col-sm-3"> Doctors Name</label>
														<label class="col-sm-2"> Consult Fee</label>
														<label class="col-sm-2"> Count</label>
														<label class="col-sm-2"> Total Amount</label>
													</div>
													<div class="form-group row">
														<div class="col-sm-3">
															<input type="text" class="form-control" name="doctorid">
														</div>
														<div class="col-sm-2">
															<input type="text" class="form-control" name="consultfee">
														</div>
														<div class="col-sm-2">
															<input type="text" class="form-control" name="count">
														</div>
														<div class="col-sm-2">
															<input type="text" class="form-control" name="totalamount">
														</div>
													</div>
												</div>
											</div>
										</div> 
									<?php echo form_close(); ?>
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6"><button type="submit" class="btn btn-primary form-control">Book Now</button>
									</div>
								<?php echo form_close(); ?>
							</div>
					<div class="col-sm-4">
		                <?php
		                	if($this->session->flashdata('msg') != NULL){
	            		?>
	                		<div class="alert alert-danger">
	                			<?php echo $this->session->flashdata('msg');?>
	                		</div>
	            		<?php
		                } ?>
		            </div>
					<!-- BOOKING DETAIL -->
					<!-- close Booking detail -->
					<!-- <div class="row">
						<div class="col-sm-6"></div>
						<div class="col-sm-6">
							<div class="form-group row text-left">
								<label for="otherPayment" class="col-sm-4">
								Other Payment
								</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="otherPayment" disabled>
								</div>
							</div>
							<div class="form-group row text-left">
								<label for="totalPayment" class="col-sm-4">
									Total Payment
								</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="totalPayment" disabled>
								</div>
							</div>
						</div>
					</div> -->
					

				</div>
				<!-- close Panel Body -->
			</div>
			<!-- close Panel Panel-info -->
		</div>
		<!-- c/ row -->
	</div>
	<!-- c/ #booking -->

	<?php echo $chat; ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#addItem").click(function(){
				
			})
		});
		// function addRow(){
		// 	 var newDiv = document.createElement("td");
		// 	 var newContent = document.createTextNode("Doctor DoctorName");
		// 	 var content = document.getElementById("DetailBooking");
		// 	 var DoctorsName = document.getElementById("DoctorsName");
		// 	 newDiv.appendChild(DoctorsName);
		// 	 content.appendChild(newDiv);
		// }
	</script>
</body>
</html>