<!DOCTYPE html>
<html>
    <head>
        <title>Rate Your Doctor</title>
        <?php echo $header ?>

        <?php echo link_tag('assets/css/doctor/rating_doctor.css') ?>
        <?php echo link_tag('assets/css/nav.css') ?>

        <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
    </head>
    <body id="rating_doctor">
        <?php echo $nav ?>
        <div class="container rating_container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <img src="<?php echo base_url('assets/img/141110868.jpg') ?>" alt="" id="docrating_img">
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-12">
                        <label class="control-label" for="docname">Name </label>
                        <br>
                        <div class="col-xs-12 input_container">
                            <input class="bottom_only" type="text" name="usrname" value="" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label class="control-label" for="docfriendly">Friendliness </label>
                        <br>
                        <div class="col-xs-12 input_container">
                            <input class="bottom_only" id="docfriendly" type="number" max=10 min=0 name="docfriendly" value="" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label class="control-label" for="docexpert">Expertise </label>
                        <br>
                        <div class="col-xs-12 input_container">
                            <input class="bottom_only" id="docexpert" type="number" max=10 min=0 name="docexpert" value="" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label class="control-label" for="doctime">On Time </label>
                        <br>
                        <div class="col-xs-12 input_container">
                            <input class="bottom_only" id="doctime" type="number" max=10 min=0 name="doctime" value="" required>
                            <br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label class="control-label" for="docpro">Professionalism </label>
                        <br>
                        <div class="col-xs-12 input_container">
                            <input class="bottom_only" id="docpro" type="number" max=10 min=0 name="docpro" value="" required>
                            <br>
                        </div>
                    </div>
                    <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label class="control-label" for="docOA">Overall </label>
                        <br>
                        <div class="col-xs-12 input_container">
                            <input class="bottom_only" type="number" max=10 min=0 name="docOA" value="" disabled>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <input type="button" class="btn btn-primary" id="input_button" value="Submit">
                </div>
            </div>
        </div>
    </body>
</html>
