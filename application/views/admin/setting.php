           <div class="row user">
        <div class="col-md-12">
          <div class="profile">
            <div class="cover-image">
            <div class="info">
            	<img class="user-img" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg">
              	<h4>Administrator</h4>
             	 <p>Anshor University</p>
            </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile p-0">
            <ul class="nav flex-column nav-tabs user-tabs">
              <li class="nav-item"><a class="nav-link active" href="#change-password" data-toggle="tab">Change Password</a></li>
              <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Settings</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane active" id="change-password">
              <div class="tile user-settings">
                <h4 class="line-head">Change Password</h4>
                <form method="post" id="formPassword">
                  <div class="row">
                    <div class="col-md-8 mb-4">
                      <label>Old Password</label>
                       <div class="input-group">
                        <input class="form-control password" type="password" name="oldPass" required>
                      </div>
                    </div>
                    <div class="col-md-8 mb-4">
                      <label>New Password</label>
                       <div class="input-group">
                        <input class="form-control" type="password" name="newPass" required=>
                      </div>
                    </div>
                    <div class="col-md-8 mb-4">
                      <label>Confirm Password</label>
                       <div class="input-group">
                        <input class="form-control" type="password" name="confirmPass" required>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-10">
                    <div class="col-md-12">
                      <button class="btn btn-primary" type="button" id="btnUpdate"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="user-settings">
              <div class="tile user-settings">
                <h4 class="line-head">Settings</h4>
                <form>
                  <div class="row mb-4">
                    <div class="col-md-4">
                      <label>First Name</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-md-4">
                      <label>Last Name</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8 mb-4">
                      <label>Email</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 mb-4">
                      <label>Mobile No</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 mb-4">
                      <label>Office Phone</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 mb-4">
                      <label>Home Phone</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="row mb-10">
                    <div class="col-md-12">
                      <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>