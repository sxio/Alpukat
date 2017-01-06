<!DOCTYPE html>
<html>
<head>
    <title>Edit Doctor`s Profile </title>
    <?php echo $header; ?>
    <?php echo link_tag('assets/css/profile/edit_profile_doctor.css') ?>
</head>
<body>
    <?php echo $nav; ?>
    <div class="container">
        <div class="panel panel-info">
          <div class="panel-heading">Edit Your Profile</div>
          <div class="panel-body">
              <legend>Personal Information</legend>
              <ul class="list-unstyled">
                  <li class="form-group">
                      <label class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label" for="docpp">Profile Picture </label>
                      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 img-attach">
                              <img src="" class="img-responsive img-thumbnail form-control foto" alt="noimage">
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <input type="file" name="_photo" class="form-control input-img" required>
                          </div>
                      </div>
                  </li>
                  <li class="form-group">
                      <label class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label" for="docname">Name </label>
                      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                          <input class="form-control" type="text" name="docname">
                      </div>
                  </li>
                  <li class="form-group">
                      <label class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label" for="docbirth">Date of Birth </label>
                      <div class="col-md-8">
                          <input class="form-control" type="text" name="docbirth">
                      </div>
                  </li>
                  <li class="form-group">
                      <label class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label" for="docaddr">Address </label>
                      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                          <textarea class="form-control" rows="5" name="docaddr" placeholder="Enter Your Address"></textarea>
                      </div>
                  </li>
              </ul>
              <legend>About</legend>
              <ul class="list-unstyled">
                  <li class="form-group">
                      <label class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label" for="docabout">About Me </label>
                      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                          <textarea class="form-control" rows="5" name="docabout" placeholder="Please Enter Your Description Formally"></textarea>
                      </div>
                  </li>
              </ul>
              <legend>Education & Experience</legend>
              <ul class="list-unstyled">
                  <li class="form-group">
                      <label class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label" for="docSD">SD </label>
                      <div class="col-md-8">
                          <input class="form-control" type="text" name="docSD">
                      </div>
                  </li>
                  <li class="form-group">
                      <label class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label" for="docSMP">SMP </label>
                      <div class="col-md-8">
                          <input class="form-control" type="text" name="docSMP">
                      </div>
                  </li>
                  <li class="form-group">
                      <label class="col-md-4 control-label" for="docSMA">SMA </label>
                      <div class="col-md-8">
                          <input class="form-control" type="text" name="docSMA">
                      </div>
                  </li>
                  <li class="form-group">
                      <label class="col-md-4 control-label" for="docS1">S1 </label>
                      <div class="col-md-8">
                          <input class="form-control" type="text" name="docS1">
                      </div>
                  </li>
                  <li class="form-group">
                      <label class="col-md-4 control-label" for="docS2">S2 </label>
                      <div class="col-md-8">
                          <input class="form-control" type="text" name="docS2">
                      </div>
                  </li>
                  <li class="form-group">
                      <label class="col-md-4 control-label" for="docDR">DR </label>
                      <div class="col-md-8">
                          <input class="form-control" type="text" name="docDR">
                      </div>
                  </li>
                  <li class="form-group">
                      <label class="col-md-4 control-label" for="docExp">Experience </label>
                      <div class="col-md-8">
                          <input class="form-control" type="text" name="docExp">
                      </div>
                  </li>
                  <li class="form-group">
                      <label class="col-md-4 control-label" for="docSpec">Speciality </label>
                      <div class="col-md-8">
                          <input class="form-control" type="text" name="docSpec">
                      </div>
                  </li>
                  <li class="form-group">
                      <label class="col-md-4 control-label" for="docCert">Certification </label>
                      <div class="col-md-8">
                          <input class="form-control" type="text" name="docCert">
                      </div>
                  </li>
              </ul>
              <button type="button" class="btn btn-primary" name="button">Reset</button>
              <button type="button" class="btn btn-primary" name="button">Submit</button>
          </div>
        </div>
    </div>
</body>
</html>
