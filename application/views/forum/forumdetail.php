<!-- Meikelwis 18-12-16 Untuk forum detail -->
<!DOCTYPE html>
<html>
<head>
	<title>Doctors List</title>
	<?php echo $header; ?>
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
	<?php echo link_tag('assets/css/forum/forum.css'); ?>
</head>
<body>
	<?php echo $nav; ?>
		<?php echo $forumnav; ?>
		<div id="forum-detail" class="container">
			<h3>Forums</h3>
			<div class="row">
				<div class="col-sm-12">
	             	<div class="chat-panel panel panel-default">
	                    <div class="panel-heading">
	                        <div class="row">
	                        	<div class="col-sm-3">
	                        		<h4>Topic 1</h4>
	                        	</div>
	                        	<div class="col-sm-9">
	                        		<div class="btn-group pull-right">
			                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Topic Description
			                                <i class="fa fa-chevron-down"></i>
			                            </button>
			                            <ul class="dropdown-menu">
					                        <div class="col-sm-12">
						                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
						                    </div>
				                        </ul>
				                    </div>
	                        	</div>
	                        </div>
	                    </div>
	                    <!-- /.panel-heading -->
	                    <div class="panel-body">
	                        <ul class="chat">
	                            <div class="form-group">
	                                <label>
		                                <li class="left clearfix checkbox">
		                                    <span class="chat-img pull-left">
		                                    <img src="" alt="User Avatar" class="img-circle" />
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
	                    </div>
	                    <!-- /.panel-footer -->
	                </div>
	            </div>
			</div>
		</div>
	</div>
	<?php echo $chat; ?>
</body>
</html>