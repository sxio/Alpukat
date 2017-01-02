<!DOCTYPE html>
<html>
<head>
	<title>Avocado | Reminder</title>
	<?php echo $header; ?>
	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/profile/reminder.css'); ?>

	<?php echo link_tag('assets/css/bootstrap-datetimepicker.min.css'); ?>

	<script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js'); ?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var d = new Date();
			var year = d.getFullYear();
			var month = d.getMonth()+1;
			var lastDayOfMonth = new Date(d.getFullYear(), d.getMonth()+1, 0).getDate();
			$(".form_datetime").datetimepicker({
				format: 'dd MM yyyy - hh : ii',
				linkField: "mirror_field",
				linkFormat: "yyyy-mm-dd hh:ii",
				todayBtn: true,
				startDate: year + '-' + month + '-01',
				endDate: year + '-' + month + '-' + lastDayOfMonth
			});
		});
	</script>
</head>
<body>
	<?php echo $nav; ?>

	<div class="container-fluid margintop">
		<div class="row">
			<div class="col-sm-5">
				<h3>Set a Reminder</h3>
				<?php
					$attrib = array('class' => 'form-horizontal');
					echo form_open('', $attrib);
				?>
				<div class="form-group">
					<label class="control-label col-sm-2" for="date">Set Date:</label>
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
					<label class="control-label col-sm-2">Description:</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="reminder_desc"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12 text-right">
						<button class="btn btn-success"><i class="fa fa-save fa-fw"></i> Save</button>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
			<div class="col-sm-7 calendar">
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
							?><td class="<?php echo $today; ?>"><?php echo $d; ?></td><?php
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