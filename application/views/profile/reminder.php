<!DOCTYPE html>
<html>
<head>
	<title>Avocado | Reminder</title>
	<?php echo $header; ?>
	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/profile/reminder.css'); ?>
</head>
<body>
	<?php echo $nav; ?>

	<div class="container margintop">
		<div class="calendar">
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
</body>
</html>