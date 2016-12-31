<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<?php echo $header; ?>
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
	<?php echo link_tag('assets/css/profile/dashboard.css'); ?>
</head>
<body>
	<?php echo $nav; ?>
	<div id="dashboard" class="container">
		<div id="page-wrapper">
			<h3>Profile</h3>
			<div class="row">
				<div class="col-sm-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-sm-3">
									<i class="fa fa-comments fa-5x"></i>
								</div>
								<div class="col-sm-9 text-right">
									<div class="huge">26</div>
									<div>Discussion Forum!</div>
								</div>
							</div>
						</div>
						<a href="#">
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-sm-3">
									<i class="fa fa-user fa-5x"></i>
								</div>
								<div class="col-sm-9 text-right">
									<div class="huge">13</div>
									<div>Doctor Profile!</div>
								</div>
							</div>
						</div>
						<a href="#">
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-sm-3">
									<i class="fa fa-tasks fa-5x"></i>
								</div>
								<div class="col-sm-9 text-right">
									<div class="huge">12</div>
									<div>Bookings!</div>
								</div>
							</div>
						</div>
						<a href="#">
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-sm-3">
									<i class="fa fa-shopping-cart fa-5x"></i>
								</div>
								<div class="col-sm-9 text-right">
									<div class="huge"><?php echo count($estore); ?></div>
									<div>Orders!</div>
								</div>
							</div>
						</div>
						<a href="#">
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
								<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<i class="fa fa-bell fa-fw"></i> Notifications Panel
						</div>
						<div class="panel-body">
							<div class="list-group">
								<a href="#" class="list-group-item">
									<i class="fa fa-comment fa-fw"></i> New Comment
									<span class="pull-right text-muted small"><em>4 minutes ago</em>
									</span>
								</a>
								<a href="#" class="list-group-item">
									<i class="fa fa-envelope fa-fw"></i> Message Sent
									<span class="pull-right text-muted small"><em>27 minutes ago</em>
									</span>
								</a>
								<a href="#" class="list-group-item">
									<i class="fa fa-tasks fa-fw"></i> New Task
									<span class="pull-right text-muted small"><em>43 minutes ago</em>
									</span>
								</a>
								<a href="#" class="list-group-item">
									<i class="fa fa-warning fa-fw"></i> Server Not Responding
									<span class="pull-right text-muted small"><em>10:57 AM</em>
									</span>
								</a>
								<a href="#" class="list-group-item">
									<i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
									<span class="pull-right text-muted small"><em>9:49 AM</em>
									</span>
								</a>
								<a href="#" class="list-group-item">
									<i class="fa fa-money fa-fw"></i> Payment Received
									<span class="pull-right text-muted small"><em>Yesterday</em>
									</span>
								</a>
							</div>
							<a href="#" class="btn btn-default btn-block">View All Alerts</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="chat-panel panel panel-default">
						<div class="panel-heading">
							<i class="fa fa-inbox fa-fw"></i> Message
							<div class="btn-group pull-right">
								<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-chevron-down"></i>
								</button>
								<ul class="dropdown-menu slidedown">
									<li>
										<a href="#">
											<i class="fa fa-refresh fa-fw"></i> Refresh
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-inbox fa-fw"></i> Reply
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-times fa-fw"></i> Busy
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<ul class="chat">
								<div class="form-group">
									<label>
										<li class="left clearfix checkbox">
											<span class="chat-img pull-left">
											<img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
											</span>
											<div class="chat-body clearfix">
												<div class="header">
													<strong class="primary-font">Jack Sparrow</strong>
													<small class="pull-right text-muted">
														<i class="fa fa-clock-o fa-fw"></i> 12 mins ago
													</small>
												</div>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
												</p>
											</div>
										</li>
									</label>
									<label>
										<li class="right clearfix checkbox">
											<span class="chat-img pull-right">
											<img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
											</span>
											<div class="chat-body clearfix">
												<div class="header">
													<small class=" text-muted">
														<i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
													<strong class="pull-right primary-font">Bhaumik Patel</strong>
												</div>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
												</p>
											</div>
										</li>
									</label>
								</div>
							</ul>
						</div>
						<!-- /.panel-body -->
						<div class="panel-footer">
							<div class="input-group">
								<input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
								<span class="input-group-btn">
									<button class="btn btn-warning btn-sm" id="btn-reply">
										Reply
									</button>
								</span>
							</div>
							<!-- /.panel-footer -->
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row" id="paymentHistory">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h2 class="text-center"><i class="fa fa-history fa-fw"></i> Payment History</h2>
					</div>
					<div class="panel-body">
						<!-- TABLE ESTORE -->
						<table class="table table-condensed table-responsive table-bordered">
							<caption>AvoStore History</caption>
							<tr>
								<th>Payment ID</th>
								<th>Delivery Address</th>
								<th>Bank</th>
								<th>Account Number</th>
								<th>Delivery Type</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
							<?php foreach($estore as $elist) { ?>
							<tr>
								<td><?php echo $elist->ORDER_ID; ?></td>
								<td><?php echo $elist->ORDER_ADDRESS; ?></td>
								<td><?php echo $elist->BANK_TYPE; ?></td>
								<td><?php echo $elist->BANK_ACC_NUM; ?></td>
								<td><?php echo $elist->TRANSPORT; ?></td>
								<?php
									if($elist->STATUS == 'PENDING') $label = 'warning';
									elseif($elist->STATUS == 'ACCEPTED') $label = 'success';
									elseif($elist->STATUS == 'REJECTED') $label = 'danger';
									elseif($elist->STATUS == 'ON THE WAY') $label = 'info';
								?>
								<td><span class="label label-<?php echo $label; ?>"><?php echo $elist->STATUS; ?></span></td>
								<td><a href="#" class="btn btn-info"><i class="fa fa-list fa-fw"></i></a></td>
							</tr>
							<?php } ?>
						</table>

						<!-- TABLE BOOKING -->
						<table class="table table-bordered booking-history">
							<caption>Booking History</caption>
							<tr>
								<th>Booking No</th>
								<th>Total Other Payment</th>
								<th>Total Amount</th>
								<th>Booking Date</th>
							</tr>
							<?php foreach($hist as $hist){ ?>
							<tr>
								<td><?php echo $hist->BOOKING_ID;?></td>
								<td><?php echo $hist->OTHER_PAYMENT;?></td>
								<td><?php echo $hist->TOTAL_PAYMENT;?></td>
								<td><?php echo $hist->BOOKING_DT;?></td>
							</tr>
							<?php } ?>
						</table>

						<!-- TABLE DONATE -->
						<table class="table table-condensed table-responsive table-bordered">
							<caption>Donate History</caption>
							<tr>
								<th>Donate ID</th>
								<th>Bank</th>
								<th>Account Number</th>
								<th>Amount</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
							<tr>
								<td>Avo-d-1</td>
								<td>BCA</td>
								<td>123</td>
								<td>IDR 1.000.000,00</td>
								<td><span class="label label-success">Accepted</span></td>
								<td class="text-center"><a href="#" class="btn btn-info"><i class="fa fa-list fa-fw"></i></a></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo $chat; ?>
</body>
</html>
