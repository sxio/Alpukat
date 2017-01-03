<!DOCTYPE html>
<html>
<head>
	<title>Avocado | Reminder</title>
	<?php echo $header; ?>
	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/profile/reminder.css'); ?>

	<?php echo link_tag('assets/css/bootstrap-datetimepicker.min.css'); ?>

	<script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/reminder/reminder.js'); ?>"></script>
</head>
<body>
	<?php echo $nav; ?>

	<div class="container-fluid margintop">
		<div class="row">
			<div class="col-sm-4">
				<div class="row">
					<div class="col-sm-12">
						<h3>Set a Reminder</h3>
						<?php
							$attrib = array('class' => 'form-horizontal');
							echo form_open('profile/reminder', $attrib);
						?>
						<div class="form-group">
							<label class="control-label col-sm-2" for="date">Date:</label>
							<div class="col-sm-10">
								<div class="input-group">
									<input size="16" type="text" name="reminder_date" class="form-control form_datetime" readonly>
									<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
								</div>
								<br>
								<input type="text" id="mirror_field" name="reminder_dt" class="form-control" value="" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Desc:</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="reminder_desc"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12 clearfix">
								<?php echo form_hidden('userid', $this->session->userdata('username')); ?>
								<button class="btn btn-success pull-right"><i class="fa fa-save fa-fw"></i> Save</button>
								<?php if(isset($form_error) && $form_error != null) { ?>
								<div class="alert alert-danger msg"><?php echo $form_error; ?></div>
								<?php } ?>
								<?php if(isset($msg) && $msg != null) echo $msg; ?>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h4 class="text-center">Reminder</h4>
							</div>
							<div class="panel-body">
								<?php foreach($r_notif as $notif) { ?>
								<div class="well well-sm">
									<h4><?php echo nice_date($notif['REMINDER_DT'], 'd F Y | H : i'); ?></h4>
									<span><?php echo $notif['REMINDER_DESC']; ?></span>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-8 calendar">
				<?php
					$month   = date('m');
					$year    = date('Y');
					$day     = date('d');
					$endDate = date('t',mktime(0,0,0,$month,$day,$year));
				?>
				<h2 class='text-center'><?php echo date('F Y'); ?></h2>
				<table class="table table-responsive table-bordered table-condensed">
					<tr>
						<th>Sun</th>
						<th>Mon</th>
						<th>Tue</th>
						<th>Wed</th>
						<th>Thur</th>
						<th>Fri</th>
						<th>Sat</th>
					</tr>
					<?php
						$s = date ("w", mktime (0,0,0,$month,1,$year));
						for($ds = 1; $ds <= $s; $ds++){
							if($ds == 1){ ?>
								<tr><?php
							} ?>
							<td></td><?php
						}
					?>
					<?php
						for($d = 1; $d <= $endDate; $d++){
							if($d == $day){
								$today = 'today';
							} else{
								$today = '';
							}
							if (date("w",mktime (0,0,0,$month,$d,$year)) == 0) { ?>
								<tr><?php
							}
							?><td class="<?php echo $today; ?> clearfix">
								<div class="row">
									<div class="col-sm-6">
										<?php echo $d; ?>
									</div>
									<div class="col-sm-6">
								<?php
									// apply reminder to calender
									foreach($r_calendar as $rdata) {
										$tgl = nice_date($rdata['REMINDER_DT'], 'd');
										$bln = nice_date($rdata['REMINDER_DT'], 'm');
										$thn = nice_date($rdata['REMINDER_DT'], 'Y');
										if($thn == $year && $bln == $month && $tgl == $d) { ?>
											<span class="badge badge-default pull-right remind" data-toggle="tooltip" data-placement="top" title="<?php echo $rdata['REMINDER_DESC']; ?>"><?php echo nice_date($rdata['REMINDER_DT'], 'H : i'); ?></span>
								<?php
										}
									}
								?>
									</div>
								</div>
							</td><?php
							if (date("w",mktime (0,0,0,$month,$d,$year)) == 6) { ?>
								</tr><?php
							}
						}
						$leftover = date("w",mktime (0,0,0,$month,$endDate,$year));
						for($ld = $leftover; $ld < 6; $ld++){ ?>
							<td></td><?php
						}
					?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>