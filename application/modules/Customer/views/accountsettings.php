   <!-- Main jumbotron for a primary marketing message or call to action -->
    <br><br><br>
    <br><br><br>
      <div class="container main blu-con">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <center><h1>Account Settings</h1></center>
          </div>
          <div class="col-md-4"></div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <center>
              <h3>Change Password</h3>
              <?php echo form_open('Customer/AccountSettings');?>
                <div class="form-group">
                  <label for="email">Current Password</label>
                  <input type="password" class="form-control" id="cPass" name="password">
                </div>
                <div class="form-group">
                  <label for="email">New Password</label>
                  <input type="password" class="form-control" id="Np" name="newpassword">
                </div>
                <div class="form-group">
                  <label for="email">Re-type New Password</label>
                  <input type="password" class="form-control" id="rtNp" name="newpasswordconf">
                </div>
                <input type="submit" class="btn btn-warning" name="submit" value="Update Password"/>
              </form>
               <span><?php echo validation_errors();?></span>
            </center>
          </div>
          <div class="col-md-4"></div>
        </div>
        <br><br>
      </div>
      <br><br>
      <br><br><br><br>
      <br><br><br><br>