
    <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="container-fluid main">
        <div class="row">
          <div class="col-md-4"><h1>Case Details</h1></div>
          <div class="col-md-8">
           <div class="btn-group btn-view-case">
            <a type="button" class="btn btn-primary" href="<?php echo base_url('Order/RX/'.$case->CaseID);?>">Print Lab Slip</a>
            <?php 
              if($case->status_id==1)
                echo '<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Edit</button>';
            ?>
            <a href="<?php echo base_url('Dashboard');?>" type="button" class="btn btn-success" >Back To Dashboard</a>
          </div>
          </div>
        </div>
        <hr><br>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-4 blu-con">
            <center>
            <h4><strong>Case Information</strong></h4>
            <div class="row">
              <div class="col-md-6">
                <h4>Doctor: <?php echo $dentist->firstname.' '.$dentist->lastname;?></h4>
              </div>
              <div class="col-md-6">
                <h4>Company: <?php echo $dentist->company;?></h4>
              </div>
            </div>
            <h4>Created on: <?php echo (strtotime($case->createdon)!=0 ? date('m/d/Y', strtotime($case->createdon)) : "--/--/----");?></h4>
            <h4>Completed on: <?php echo (strtotime($case->completedon)!=0 ? date('m/d/Y', strtotime($case->completedon)) : "--/--/----");?></h4>
            <br><hr>
            <h4>Case Number</h4>
            <h2><?php echo $case->CaseTypeID.'-'.$case->CaseID;?></h2>
            </center>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-4 or-con">
            <center>
            <h4><strong><?php echo $case->patientlastname.', '.$case->patientfirstname;?></strong></h4>
            <h4>Date Sent on: <?php echo date('m/d/Y',strtotime($case->orderdatetime));?></h4>
            <h4>Due Date on: <?php echo date('m/d/Y',strtotime($case->duedate));?></h4>
            <br><hr>
            <h4>Status</h4>
            <h2><i class="fa fa-file-o" aria-hidden="true"></i>&nbsp;<?php echo $status->status;?></h2>
            </center>
          </div>
          <div class="col-md-1"></div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <center>
              <h3>Tooth Selection</h3>
              <img src="<?php echo base_url('appclient');?>/img/teeth-structure.png" class="hidden-xs"alt="">
              <img src="<?php echo base_url('appclient');?>/img/teeth-structure.png" class="visible-xs"alt="" style="height: 400px;">
            </center>
          </div>
          <div class="col-md-8">
            <center><h3>Selected Tooth</h3></center>
            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th>Type</th>
                    <th>Tooth #</th>
                    <th>Item</th>
                    <th>Shade</th>
                    <!--<th>Design</th>
                    <th>Additional Features</th>-->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $case->Type;?></td>
                    <td><?php echo $case->teeth;?></td>
                    <td><?php echo $case->items;?></td>
                    <td><?php echo $case->shade1.' '.$case->shade2;?></td>
                    <!--<td>Su 06/10/2016 10 Am</td>
                    <td>New</td>-->
                  </tr>
                </tbody>
              
              </table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <center>
              <h3>Special Instruction</h3>
              <hr>
              <p><?php echo $case->notes;?></p>
            </center>
          </div>
          <div class="col-md-6">
            <center>
              <h3>Attachment</h3>
              <hr>
            </center>
          </div>
        </div>
      </div>
      <br><br>
      <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                
                  <!-- Modal content-->
                  <?php echo form_open_multipart('Order/EditOrder').form_hidden('CaseID',$this->uri->segment(3));?>
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h2 class="modal-title">New Case</h2>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-2">
                          <h6>Case Number:</h6>
                          <h3 id="CaseID"><?php echo $case->CaseTypeID.'-'.$case->CaseID;?></h3>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <h6>Patient First Name:</h6>
                            <input type="text" class="form-control" id="pFname" name="patientfirstname" value="<?php echo $case->patientfirstname;?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <h6>Patient Last Name:</h6>
                            <input type="text" class="form-control" id="pFname" name="patientlastname" value="<?php echo $case->patientlastname;?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                              <h6>Gender</h6>
                              <select class="form-control" id="sel1" name="gender">
                                <option value=""></option>
                                <option value="1" <?php if($case->gender==1) echo 'selected';?>>Male</option>
                                <option value="0" <?php if($case->gender==0) echo 'selected';?>>Female</option>
                              </select>
                            </div>
                        </div>
                    <!--End of Row-->  
                      </div>
                      <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                        <h6>Select Teeth</h6>
                          <center>
                          <div class="teeth-img">
                          <img src="<?php echo base_url('appclient');?>/img/teeth-structure.png" class="hidden-xs" alt="">
                          <img src="<?php echo base_url('appclient');?>/img/teeth-structure.png" class="visible-xs" alt="" style="height: 450px;">
                          </div>
                          </center>
                          <br>
                          <center>
                            <select class="selectpicker" multiple name="teeth[]" required>
                              <?php 
                            $teeth = explode(',', $case->teeth);
                            $i =1;
                            $ctr= count($teeth);
                            $j=1;
                            $bool=false;
                   
                            while($i<=32)
                            { 

                              foreach ($teeth as $tooth) 
                              {
                                
                              if($tooth == $i)
                              {
                                  echo '<option value="'.$i.'" selected>'.$i.'</option>';

                                  $i++;
                                  $j++;

                                      
                              }
                              else
                              {
                                  $bool=true;
                              }
                              

                             
                              }
                                
                                
                                
                                if($bool)
                                { 
                                  echo '<option value="'.$j.'">'.$j.'</option>';
                                  $i++;
                                  $j++;

                                  $bool=false;
                                }
                              
                              
                          }
                          
                          ?>
                          </select>
                          </center>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                                <h6>Type</h6>
                                <select class="form-control" name="Type" onchange="getCaseType(this.value);" required>
                                    <option value=""></option>
                                    <option value="FIXED" <?php if($case->Type=="FIXED") echo 'selected';?>>Fixed</option>
                                    <option value="RPD" <?php if($case->Type=="RPD") echo 'selected';?>>RPD</option>
                                    <option value="Others" <?php if($case->Type=="Others") echo 'selected';?>>Others</option>
                                </select>
                          </div>
                          <div class="form-group">
                                <h6>Product</h6>
                                <select class="form-control" name="CaseTypeID" id="CaseTypeID" onchange="getID(this.value);" required="">
                                <?php 
                                  echo '<option value=""></option>';
                                  foreach ($casetype as $ct) {
                                    if($ct->CaseTypeID==$case->CaseTypeID)
                                      echo '<option value="'.$ct->CaseTypeID.'" selected>'.$ct->CaseTypeDesc.'</option>';
                                    else
                                      echo '<option value="'.$ct->CaseTypeID.'">'.$ct->CaseTypeDesc.'</option>';
                                  } 
                                ?>
                                </select>
                          </div>
                          <div class="form-group">
                                <h6>Item</h6>
                                <select class="selectpicker" multiple name="items[]" required="">
                                <?php 
                    $caseitems = explode(',',$case->items);
                     $bool=false;
                     $positive=false;
                     
                     
                    foreach ($items as $item) 
                    {
            
                        foreach ($caseitems as $ci) 
                        {
                          if($ci==$item->ItemID)
                            $positive=true;
                          
                          
                        }
                        if($positive)
                        {
                          echo '<option value="'.$item->ItemID.'" selected>'.$item->ItemDesc.'</option>';
                           $positive=false;
                        }
                        else
                        {
                        echo '<option value="'.$item->ItemID.'">'.$item->ItemDesc.'</option>';
                        
                      }
                    
                    if($caseitems==null)
                      echo '<option value="'.$item->ItemID.'">'.$item->ItemDesc.'</option>';

                    
                  }
                ?>
                                </select>
                          </div>
                          <h3>Shade Guide</h3>
                          <div class="form-group">
                          <label class="radio-inline"><input type="radio" name="shade1" required value="1"<?php if($case->shade1==1) echo ' checked=""';?>>1 Shade</label>
                          <label class="radio-inline"><input type="radio" name="shade1" value="2" <?php if($case->shade1==2) echo ' checked=""';?>>2 Shades</label>
                          <label class="radio-inline"><input type="radio" name="shade1" value="3" <?php if($case->shade1==3) echo ' checked=""';?>>3 Shades</label>
                          <br>
                          <label class="radio-inline"><input type="radio" name="shade1" value="4" <?php if($case->shade1==4) echo ' checked=""';?>>No Shade</label>
                          <label class="radio-inline"><input type="radio" name="shade1" value="5" <?php if($case->shade1==5) echo ' checked=""';?>>Provide Shade Later</label>
                          </div>
                          <br>
                           <div class="form-group">
                                <select class="form-control" id="sel1" name="shade2" required>
                                  <option value=""></option>
                                  <option value="A1"<?php if($case->shade2=="A1") echo ' selected';?>>A1</option>
                                  <option value="A2.5"<?php if($case->shade2=="A2.5") echo ' selected';?>>A2.5</option>
                                  <option value="A3"<?php if($case->shade2=="A3") echo ' selected';?>>A3</option>
                                  <option value="A3.5"<?php if($case->shade2=="A3.5") echo ' selected';?>>A3.5</option>
                                </select>
                          </div>
                          </div>
                      </div>
                    <div class="row">
                      <div class="col-md-12"><h2>Optional</h2></div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <h4>Return:</h4>
                        <hr>
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" tabindex="0"  id="Tray1">
                              <input type="hidden" id="Tray" name="Tray" value="<?php echo $case->Tray;?>">
                              Tray
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" tabindex="0"  id="SG1">
                              <input type="hidden" id="SG" name="SG" value="<?php echo $case->SG;?>">
                              Shade Guide
                        </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" tabindex="0"  id="BW1">
                              <input type="hidden" id="BW" name="BW" value="<?php echo $case->BW;?>">
                              Bite Wax
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" tabindex="0"  id="MC1">
                              <input type="hidden" id="MC" name="MC" value="<?php echo $case->MC;?>">
                            Model Cast
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" tabindex="0"  id="OC1">
                              <input type="hidden" id="OC" name="OC" value="<?php echo $case->OC;?>">
                            Opposing Cast
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" tabindex="0"  id="Photos1" >
                              <input type="hidden" id="Photos" name="Photos" value="<?php echo $case->Photos;?>">
                            Photos
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" tabindex="0"  id="Articulator1" >
                              <input type="hidden" id="Articulator" name="Articulator" value="<?php echo $case->Articulator;?>">
                            Articulator
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" tabindex="0" id="OD1" >
                              <input type="hidden" id="OD" name="OD" value="<?php echo $case->OD;?>">
                            Old Denture
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <h4>Doctor's Special Instruction</h4>
                        <hr>
                        <div class="form-group">
                          <label for="comment">Comment:</label>
                          <textarea class="form-control" rows="5" id="comment" name="notes"><?php echo $case->notes;?></textarea>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <h4>Attachment</h4>
                        <hr>
                        <input type="file" id="file" name="file" accept="image/*">
                        <h5>Due</h5>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                            <h6>Due Date</h6>
                            <input type="date" class="form-control" id="date" name="duedate" required value="<?php echo date($case->duedate);?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                            <h6>Due Time</h6>
                            <input type="time" class="form-control" id="time" name="duetime" required value="<?php echo date($case->duetime);?>">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                      
                      <input type="submit" name="submit"  type="submit" class="btn btn-success"  value="Submit">
                    </div>
                  </div>
                  </form>
                </div>
              </div>
    

