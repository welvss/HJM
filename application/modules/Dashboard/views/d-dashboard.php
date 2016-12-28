
    <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="container-fluid main">
        <div class="row">
          <div class="col-md-12">
            <div class="profile">
              <center><img src="<?php echo base_url('appclient');?>/img/dp2.jpg" alt="">
              <h1>Hello, <?php echo $dentist->title.' '.$dentist->firstname.' '.$dentist->lastname;?></h1></center>
            </div>
          </div>
        </div>
        <br><br>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-3">
                <center><h3><i class="fa fa-file-o" style="color: #21ba45;" aria-hidden="true"></i>&nbsp; <strong><?php echo $New;?></strong> <br><h4>New Cases</h4></h3></center>
              </div>
              <div class="col-md-3">
                <center><h3><i class="fa fa-flask" style="color: #a333c8;" aria-hidden="true"></i>&nbsp; <strong><?php echo $IP;?></strong> <br><h4>In Production</h4></h3></center>
              </div>
              <div class="col-md-3">
                <center><h3><i class="fa fa-check-square-o" style="color: #2185d0;" aria-hidden="true"></i>&nbsp; <strong><?php echo $Completed;?></strong> <br><h4>Completed Cases</h4></h3></center>
              </div>
              <div class="col-md-3">
                <center><h3><i class="fa fa-exclamation-triangle" style="color: #db2828;" aria-hidden="true"></i>&nbsp; <strong><?php echo $Hold;?></strong> <br><h4>On Hold</h4></h3></center>
              </div>
            </div>     
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <center><h3><i class="fa fa-circle" style="color: #f2711c;" aria-hidden="true"></i>&nbsp; <strong>PHP <?php echo $sum;?></strong> <br><h4>Open Balance</h4></h3></center>
              </div>
              <div class="col-md-4 col-sm-6">
                 <center><h3><i class="fa fa-circle" style="color: #2185d0;" aria-hidden="true"></i>&nbsp; <strong>PHP <?php echo $Partial;?></strong><br><h4>Partial</h4></h3></center>
              </div>
              <div class="col-md-4 col-sm-6">
                 <center><h3><i class="fa fa-circle" style="color: #db2828;" aria-hidden="true"></i>&nbsp; <strong>PHP <?php echo $overdue;?></strong><br><h4>Overdue</h4></h3></center>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <br>
        <div class="row">
          <div class="col-md-9"></div>
          <div class="col-md-3">
            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">New Case Entry</button>
            <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                
                  <!-- Modal content-->
                  <?php echo form_open_multipart('Order/AddOrder');?>
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h2 class="modal-title">New Case</h2>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-2">
                          <h6>Case Number:</h6>
                          <h3 id="CaseID"></h3>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <h6>Patient First Name:</h6>
                            <input type="text" class="form-control" id="pFname" name="patientfirstname">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <h6>Patient Last Name:</h6>
                            <input type="text" class="form-control" id="pFname" name="patientlastname">
                          </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                              <h6>Gender</h6>
                              <select class="form-control" id="sel1" name="gender">
                                <option value=""></option>
                                <option value="1">Male</option>
                                <option value="0">Female</option>
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
			 					$x=1; 
			 					while ($x <= 32) 
			 					{
			 						
			 						echo '<option value="'.$x.'">'.$x.'</option>';
			 						$x++;
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
							      	<option value="FIXED">Fixed</option>
							      	<option value="RPD">RPD</option>
							    	<option value="Others">Others</option>
                                </select>
                          </div>
                          <div class="form-group">
                                <h6>Product</h6>
                                <select class="form-control" name="CaseTypeID" id="CaseTypeID" onchange="getID(this.value);" required="">
                                  
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
                          <label class="radio-inline"><input type="radio" name="shade1" required>1 Shade</label>
                          <label class="radio-inline"><input type="radio" name="shade1">2 Shades</label>
                          <label class="radio-inline"><input type="radio" name="shade1">3 Shades</label>
                          <br>
                          <label class="radio-inline"><input type="radio" name="shade1">No Shade</label>
                          <label class="radio-inline"><input type="radio" name="shade1">Provide Shade Later</label>
                          </div>
                          <br>
                           <div class="form-group">
                                <select class="form-control" id="sel1" name="shade2" required>
                                  <option></option>
                                  <option value="A1">A1</option>
                                  <option value="A2.5">A2.5</option>
                                  <option value="A3">A3</option>
                                  <option value="A3.5">A3.5</option>
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
								<input type="hidden" id="Tray" name="Tray" value="0">
								Tray
							</label>
                        </div>
                        <div class="checkbox">
                          	<label>
                          		<input type="checkbox" tabindex="0"  id="SG1">
								<input type="hidden" id="SG" name="SG" value="0">
								Shade Guide
							</label>
                        </div>
                        <div class="checkbox">
                        	<label>
                        		<input type="checkbox" tabindex="0"  id="BW1">
								<input type="hidden" id="BW" name="BW" value="0">
								Bite Wax
                        	</label>
                        </div>
                        <div class="checkbox">
                        	<label>
                        		<input type="checkbox" tabindex="0"  id="MC1">
								<input type="hidden" id="MC" name="MC" value="0">
                        		Model Cast
                        	</label>
                        </div>
                        <div class="checkbox">
                        	<label>
                        		<input type="checkbox" tabindex="0"  id="OC1">
								<input type="hidden" id="OC" name="OC" value="0">
                        		Opposing Cast
                        	</label>
                        </div>
                        <div class="checkbox">
                        	<label>
                        		<input type="checkbox" tabindex="0"  id="Photos1" >
								<input type="hidden" id="Photos" name="Photos" value="0">
                        		Photos
                        	</label>
                        </div>
                        <div class="checkbox">
                        	<label>
                        		<input type="checkbox" tabindex="0"  id="Articulator1" >
								<input type="hidden" id="Articulator" name="Articulator" value="0">
                        		Articulator
                        	</label>
                        </div>
                        <div class="checkbox">
                        	<label>
                        		<input type="checkbox" tabindex="0" id="OD1" >
								<input type="hidden" id="OD" name="OD" value="0">
                        		Old Denture
                        	</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <h4>Doctor's Special Instruction</h4>
                        <hr>
                        <div class="form-group">
                          <label for="comment">Comment:</label>
                          <textarea class="form-control" rows="5" id="comment" name="notes"></textarea>
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
                            <input type="date" class="form-control" id="date" name="duedate" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                            <h6>Due Time</h6>
                            <input type="time" class="form-control" id="time" name="duetime" required>
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
          </div>
        </div>
        <br>
        <hr>
        <div class="row">
          <div class="col-md-6">
          <h1><strong>Schedules</strong></h1>
            <div id='calendar'></div>
          </div>
          <div class="col-md-6">
           <h1><strong>Recent Cases</strong></h1>
            <div class="table-responsive">
              <table class="table">
	            <thead>
	                <tr>
		                <th>Case #</th>
		                <th>Invoice</th>
		                <th>Patient</th>
		                <th>Date</th>
		                <th>Due</th>
		                <th>Status</th>
		                <th>Lab Slip</th>
		                <th>Action</th>
		        	</tr>
                </thead>
				<tbody>
				<?php 
					foreach($cases as $case){
						echo
			                '<tr class="'.($case->status_id==1 ? 'new' : ($case->status_id==2 ? 'in-prod' : ($case->status_id==3 ? 'completed' : 'on-hold'))).'">
				                <td>'.$case->CaseTypeID.'-'.$case->CaseID.'</td>
				                <td>';
				                foreach ($invoice as $i) 
								{
									if ($i->CaseID==$case->CaseID) 
									{
										if($i->status==1)
											echo '<a href="'.base_url('Invoice/InvoiceSlip/'.$i->InvoiceID).'" >Invoice # '.$i->InvoiceID.'</a>';
										else
											echo '<p >Invoice # '.$i->InvoiceID.'</p>';
									}
								}

				           echo '</td>
				                <td>'.$case->patientfirstname.' '.$case->patientlastname.'</td>
				                <td>'.date('l F d, Y h:i A', strtotime($case->orderdatetime)).'</td>
				                <td>'.date('l F d, Y ', strtotime($case->duedate)).date('h:i A', strtotime($case->duetime)).'</td>
				                <td>';
				                foreach ($status as $stat){
									if($stat->status_id==$case->status_id){
									 	
									 	echo strtoupper($stat->status);
									 
									}	 	
								}		

				            echo    
				            	'</td>
				                <td><a href="'.base_url('Order/RX/'.$case->CaseID).'">View</a></td>
				                <td><a href="'.base_url('Order/Info/'.$case->CaseID).'">Edit</a></td>
			                </tr>';
		            }
	            ?>
               	</tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      