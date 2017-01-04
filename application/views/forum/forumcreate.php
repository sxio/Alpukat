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
	<div id="forum-create" class="container">
		<h3>Forums</h3>
    	<div class="panel">
            <div class="row">
            	<div class="col-sm-3">
            		<h4>Title Topic</h4>
            	</div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                	<div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" id="forum-create-title" placeholder="Type your title forum here..." />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-submit">
                                Submit
                            </button>
                        </span>
                	</div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12"><br></div>
            </div>
            <div class="row">
                <div class="col-sm-8">
            		<textarea class="form-control" rows="8" id="forum-create-content"></textarea>
            		<br>
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-sm pull-right" id="btn-submit">
                            Submit
                        </button>
                    </span>
                </div>
            </div>
        </div>
	</div>
</body>
</html>