<!DOCTYPE html>
<html>
<head>
	<title>Doctors List</title>
	<?php echo $header; ?>
	<?php echo link_tag('assets/css/booking/booking.css') ?>

	<script src="<?php echo base_url() ?>assets/js/main.js"></script>
</head>
<body>
	<?php echo $nav; ?>

	<div id="booking" class="container">
		<form id="frmBooking">
			<div class="row">
				<div class="panel panel-info">
					<div class="panel-heading text-center">
						<?php echo $title; ?>
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
									<div class="panel panel-success">
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
														<button type="submit" class="btn btn-primary btnAdd">Add</button>
													</div>
												</div>
											</form>
										</div>
										<div class="panel-body">
											<form id = "booking-detail text-left">
												</br>
												<div class="form-group row">
													<table class="table booking-list table-bordered table-responsive">
													    <thead>
													      <tr>
													        <th class="col-sm-2">DoctorName</th>
													        <th class="col-sm-3">ServiceName</th>
													        <th class="col-sm-2">Count</th>
													        <th class="col-sm-3">Total Amount</th>
													        <th class="col-sm-1">Nav</th>
													      </tr>
													    </thead>
													    <tbody>
													      <tr>
													        <td class="col-sm-2">John</td>
													        <td class="col-sm-3">Doe</td>
													        <td class="col-sm-2">1</td>
													        <td class="col-sm-3">2000000</td>
													        <th class="col-sm-1"><button type="submit" class="btn btn-success btnEdit">Edit</button>
													        <th class="col-sm-1"><button type="submit" class="btn btn-danger btnDelete">Delete</button>
													      </tr>
													      <tr>
													        <td class="col-sm-2">Mary</td>
													        <td class="col-sm-3">Moe</td>
													        <td class="col-sm-2">3</td>
													        <td class="col-sm-3">35000000</td>
													        <th class="col-sm-1"><button type="submit" class="btn btn-success btnEdit">Edit</button>
													        <th class="col-sm-1"><button type="submit" class="btn btn-danger btnDelete">Delete</button>
													      </tr>
													      <tr>
													        <td class="col-sm-2">July</td>
													        <td class="col-sm-3">Dooley</td>
													        <td class="col-sm-2">4</td>
													        <td class="col-sm-3">400000000</td>
													        <th class="col-sm-1"><button type="submit" class="btn btn-success btnEdit">Edit</button>
													        <th class="col-sm-1"><button type="submit" class="btn btn-danger btnDelete">Delete</button>
													      </tr>
													    </tbody>
													</table>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="form-group row text-left">
									<div class="row">
										<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="form-group row text-left">
												<label for="otherPayment" class="col-sm-4">
												Other Payment
												</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="otherPayment" disabled>
												</div>
											</div>
											<div class="form-group row text-left">
												<label for="totalPayment" class="col-sm-4">
													Total Payment
												</label>
												<div class="col-sm-7">
													<input type="text" class="form-control" id="totalPayment" disabled>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6"></div>
									<div class="col-sm-6"><button type="submit" class="btn btn-primary btnBook">Book Now</button></div>
								</div>
							</div>
						</div>
						</br>
						</br>
						<div class="panel-footer">
							<div class="row">
								<div class="col-sm-12">
									<h4>History User</h4>
									<table class="table table-bordered booking-history">
									    <thead>
									      <tr>
									        <th>Booking No</th>
									        <th>Total Other Payment</th>
									        <th>Total Amount</th>
									        <th>Booking Date</th>
									      </tr>
									    </thead>
									    <tbody>
									      	<?php foreach($hist as $hist){?>
									      		<tr>
									      			<td><?php echo $hist->BOOKING_ID;?></td>
									      			<td><?php echo $hist->OTHER_PAYMENT;?></td>
									      			<td><?php echo $hist->TOTAL_PAYMENT;?></td>
									      			<td><?php echo $hist->BOOKING_DT;?></td>
									      		</tr>
									      	<?php }?>
									    </tbody>
									</table>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</form>
	</div>
	<?php echo $chat; ?>
</body>
</html>