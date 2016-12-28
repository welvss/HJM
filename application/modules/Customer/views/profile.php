
    <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="container main blu-con">
      <br>
      <center><h1>Dentist Profile</h1></center>
      <br>
      <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-4">
          <div class="profile">
              <img src="<?php echo base_url('appclient');?>/img/dp2.jpg" alt="">
              <br>
              <br>
              <input type="file">
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-2"></div>
        <?php echo form_open('Customer/EditDentist');?>
          <div class="col-md-4">
              <div class="form-group">
                <label for="email">First Name</label>
                <input type="text" class="form-control" id="fName" name="firstname" value="<?php echo $dentist->firstname;?>">
              </div>
              <div class="form-group">
                <label for="pwd">Middle Name</label>
                <input type="text" class="form-control" id="Mname" name="middlename" value="<?php echo $dentist->middlename;?>">
              </div>
              <div class="form-group">
                <label for="pwd">Last Name</label>
                <input type="text" class="form-control" id="Lname" name="lastname" value="<?php echo $dentist->lastname;?>">
              </div>
              <div class="form-group">
                <label for="pwd">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $dentist->email;?>">
              </div>
              <div class="form-group">
                <label for="pwd">Mobile Number</label>
                <input type="text" class="form-control" id="Mnum" name="mobile" value="<?php echo $dentist->mobile;?>">
              </div>
              <div class="form-group">
                <label for="pwd">Landline Number</label>
                <input type="text" class="form-control" id="Lnum" name="telephone" value="<?php echo $dentist->telephone;?>">
              </div>
              <div class="form-group">
                <label for="pwd">Company</label>
                <input type="text" class="form-control" id="company" name="company" value="<?php echo $dentist->company;?>">
              </div>
          </div>
          <div class="col-md-4">
              <div class="form-group">
                <label for="pwd">Website</label>
                <input type="text" class="form-control" id="pwd" name="Website" value="<?php echo $dentist->website;?>">
              </div>
              <div class="form-group">
                <label for="comment">Billing Address:</label>
                <textarea class="form-control" rows="3" id="bAddress" name="bstreet"> <?php echo $dentist->bstreet;?></textarea>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="pwd">City</label>
                    <input type="text" class="form-control" id="bCity" name="bcity" value="<?php echo $dentist->bcity;?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="pwd">Baranggay</label>
                    <input type="text" class="form-control" id="bBaranggay" name="bbrgy" value="<?php echo $dentist->bbrgy;?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="comment">Shipping Address:</label>
                <textarea class="form-control" rows="3" id="comment" name="shipstreet"><?php echo $dentist->shipstreet;?></textarea>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="pwd">City</label>
                    <input type="text" class="form-control" id="pwd" name="shipcity" value="<?php echo $dentist->shipcity;?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="pwd">Baranggay</label>
                    <input type="text" class="form-control" id="pwd" name="shipbrgy" value="<?php echo $dentist->shipbrgy;?>">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-warning" name="submit">Update Info</button>
          </div>
        </form>      
        <div class="col-md-2"></div>
      </div>
      <br>
      </div>
      <br><br>
