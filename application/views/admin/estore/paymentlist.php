<!DOCTYPE html>
<html>
<head>
	<title>Admin | Payment List</title>
	<?php echo $admin_header; ?>
	<style type="text/css">
		table th{
			background-color: #eee;
			text-align: center;
		}
		table tr td{
			vertical-align: middle!important;
		}
		table tr td:last-child{
			width: 110px;
		}
	</style>
</head>
<body>
	<?php echo $admin_nav; ?>

	<div class="container-fluid margintop">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin/home'); ?>">Home</a></li>
			<li><a href="<?php echo base_url('admin/manage-estore'); ?>">Manage E-Store</a></li>
			<li class="active">Payment List</li>
		</ol>
	</div>

	<div class="container">
		<div class="row">
			<table class="table table-condensed table-bordered table-responsive">
				<tr>
					<th>Order ID</th>
					<th>Delivery Address</th>
					<th>Bank</th>
					<th>Bank Acc Name</th>
					<th>Bank Acc Num</th>
					<th>Delivery</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
				<?php foreach($elist as $list): ?>
				<tr>
					<td><?php echo $list['ORDER_ID']; ?></td>
					<td><?php echo $list['ORDER_ADDRESS']; ?></td>
					<td><?php echo $list['BANK_TYPE']; ?></td>
					<td><?php echo $list['BANK_ACC_NAME']; ?></td>
					<td><?php echo $list['BANK_ACC_NUM']; ?></td>
					<td><?php echo $list['TRANSPORT']; ?></td>
					<?php
						if    ($list['STATUS'] == 'PENDING')    $label = 'warning';
						elseif($list['STATUS'] == 'ACCEPTED')   $label = 'success';
						elseif($list['STATUS'] == 'REJECTED')   $label = 'danger';
						elseif($list['STATUS'] == 'ON THE WAY') $label = 'info';
					?>
					<td><span class="label label-<?php echo $label; ?>"><?php echo $list['STATUS']; ?></span></td>
					<td>
						<button class="btn btn-info"><i class="fa fa-list fa-fw"></i></button>
						<button class="btn btn-success"><i class="fa fa-pencil fa-fw"></i></button>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</body>
</html>