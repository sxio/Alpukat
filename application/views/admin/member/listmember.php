<!DOCTYPE html>
<html>
<head>
	<title>Admin | List Member</title>
	<?php echo $admin_header; ?>
	<?php echo link_tag('assets/css/nav.css'); ?>
	<?php echo link_tag('assets/css/admin/admin-main.css'); ?>
	<?php echo link_tag('assets/css/admin/member/member.css'); ?>

</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li><a href="<?php echo base_url('admin/manage-member'); ?>">Manage Member</a></li>
			<li class="active">Member List</li>
		</ol>
	</div>

	<div class="container">
		<div class="row">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#usr">User</a></li>
				<li><a data-toggle="tab" href="#doctor">Doctor</a></li>
				<li><a data-toggle="tab" href="#staff">Staff</a></li>
			</ul>
			<div class="tab-content">
				<div id="usr" class="tab-pane fade in active">
					<table class="table table-responsive table-condensed table-bordered">
						<caption>Current User ( <?php echo $user['num_rows']; ?> )</caption>
						<tr>
							<th>USER ID</th>
							<th>USER NAME</th>
							<th>BIRTH DATE</th>
							<th>EMAIL</th>
							<th>HANDPHONE</th>
							<th>TELEPHONE</th>
						</tr>
						<?php foreach($user['data'] as $usr){ ?>
						<tr>
							<td><?php echo $usr['USER_ID']; ?></td>
							<td><?php echo $usr['USER_NAME']; ?></td>
							<td><?php echo nice_date($usr['USER_BIRTH'], 'd M Y'); ?></td>
							<td><?php echo $usr['EMAIL']; ?></td>
							<td><?php echo $usr['HANDPHONE']; ?></td>
							<td><?php echo $usr['TELEPHONE']; ?></td>
						</tr>
						<?php } ?>
					</table>
				</div>
				<div id="doctor" class="tab-pane fade">
					<table class="table table-responsive table-condensed table-bordered">
						<caption>Current Doctor ( <?php echo $doctor['num_rows']; ?> )</caption>
						<tr>
							<th>USER ID</th>
							<th>USER NAME</th>
							<th>BIRTH DATE</th>
							<th>EMAIL</th>
							<th>HANDPHONE</th>
							<th>TELEPHONE</th>
						</tr>
						<?php foreach($doctor['data'] as $dct){ ?>
						<tr>
							<td><?php echo $dct['USER_ID']; ?></td>
							<td><?php echo $dct['USER_NAME']; ?></td>
							<td><?php echo nice_date($dct['USER_BIRTH'], 'd M Y'); ?></td>
							<td><?php echo $dct['EMAIL']; ?></td>
							<td><?php echo $dct['HANDPHONE']; ?></td>
							<td><?php echo $dct['TELEPHONE']; ?></td>
						</tr>
						<?php } ?>
					</table>
				</div>
				<div id="staff" class="tab-pane fade">
					<table class="table table-responsive table-condensed table-bordered">
						<caption>Current Staff ( <?php echo $staff['num_rows']; ?> )</caption>
						<tr>
							<th>USER ID</th>
							<th>USER NAME</th>
							<th>BIRTH DATE</th>
							<th>EMAIL</th>
							<th>HANDPHONE</th>
							<th>TELEPHONE</th>
						</tr>
						<?php foreach($staff['data'] as $stff){ ?>
						<tr>
							<td><?php echo $stff['USER_ID']; ?></td>
							<td><?php echo $stff['USER_NAME']; ?></td>
							<td><?php echo nice_date($stff['USER_BIRTH'], 'd M Y'); ?></td>
							<td><?php echo $stff['EMAIL']; ?></td>
							<td><?php echo $stff['HANDPHONE']; ?></td>
							<td><?php echo $stff['TELEPHONE']; ?></td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>