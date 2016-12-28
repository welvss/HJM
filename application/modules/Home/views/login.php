
    <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="container-fluid">
          <div class="row">
            <div class="login-header">
              <h1 class="animated fadeIn">
                  <span class="fa-stack fa-lg">
                  <i class="fa fa-square-o fa-stack-2x"></i>
                  <i class="fa fa-user-md fa-stack-1x"></i>
                  </span>
                  <strong>Dentist <span>Access</span></strong></h1>
            </div>
          </div>
          <div class="row signin">

            <div class="col-md-offset-3 col-md-6 col-md-offset-3">
              <h1>Sign In</h1>
              <hr>
              <br>
              <p>Sign In to <strong>HJM Dental Laboratory</strong></p>
            </div>
            <?php echo form_open('Home/login_validation');?>
            <div class="col-md-offset-4 col-md-4 col-md-offset-4">
              <div class="form-group">
                <label for="usr">Username</label>
                <input type="text" class="form-control" id="usr" name="username" required>
              </div>
            </div>
            <div class="col-md-offset-4 col-md-4 col-md-offset-4">
              <div class="form-group">
                <label for="usr">Password</label>
                <input type="password" class="form-control" id="pss" name="password" required>
              </div>
            </div>
            <div class="col-md-offset-4 col-md-4 col-md-offset-4">

              <button type="submit" class="btn btn-primary" name="submit">Sign In</button>
              <br>
              <a href="forgetpass.html">Forget Password?</a>
              <br>
              <span><?php echo validation_errors();?></span>
            </div>
            </form>
          </div>
      </div>
    
   