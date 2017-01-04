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
	<div class="container">
		<h3>Forums</h3>
    	<div class="panel">
            <div class="row">
            	<div class="col-sm-3">
            		<h4>Title Topic</h4>
            	</div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <?php echo form_open('C_Forum/saveData',array('name'=>'create-forum'));
                    ?>
                    <textarea class="form-control" rows="2" name="title"></textarea>
                    <br>
            		<textarea class="form-control" rows="8" name="content"></textarea>
            		<br>
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-sm pull-right" id="btn-submit">
                            Submit
                        </button>
                    </span>
                    <?php 
                    echo form_close();
                    ?>
                </div>
            </div>
        </div>
	</div>
</body>
</html>