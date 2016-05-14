		<div class="callout fixed title-callout" style="background: #f7f9fb;">
			<div class="row expanded">
				<div class="large-8 small-12 columns">
					<div class="row">
							<div class="medium-12 columns">
									<h4 class="app-customer-name"><strong><?php echo $dentists->title.' '.$dentists->firstname.' '.$dentists->lastname;?></strong></h4>
							</div>
					</div>
					<div class="row">
						<div class="small-12 columns">
							<p class="subheader" id="customer-company-display"><?php echo $dentists->company;?></p>
						</div>
			            <div class="small-12 columns">
			            	  <p class="subheader"><?php echo $dentists->bstreet.', '.$dentists->bbrgy.', '.$dentists->bcity;?></p>
						</div>
			        </div>
				</div>
				<div class="large-4 small-12 columns">
				<!--Edit Info-->
					<div class="row">
						<div class="small-6 columns">
							<a data-open="edit-info" class="button secondary">Edit Information</a>
						</div>
						<div class="small-6 columns">
							<a class="button hvr-icon-hang" data-open="transaction-modal">New Transaction</a>
						</div>
						<!--Transaction Modal-->
						<div class="reveal" id="transaction-modal" data-reveal>
							<ul class="menu vertical">
									<h3><strong>New Transaction</strong></h3>
							  <li id="new-case"><a href="#" data-open="order-modal"><i class="fa fa-pencil-square-o fa-2x" ></i>New Case</a></li>
							  <hr>
							  <li id="new-invoice"><a href="#"><i class="fa fa-clipboard fa-2x"></i>Make Invoice</a></li>
							  <hr>
							  <li id="new-inactive"><a href="#" data-open="inactive-modal" ><i class="fa fa-ban fa-2x"></i>Make Account Inactive</a></li>
							</ul>
								  <button class="close-button" data-close aria-label="Close modal" type="button">
									<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<!--Inactive Modal-->
						<div class="reveal" id="inactive-modal" data-reveal>
						 <i class="fa fa-exclamation-triangle fa-3x" style="color: red; margin: 0 auto;"></i><p>Are you sure you want to make Welvin Olamit Medina inactive?</p>
						  <hr>
						  <button data-close class="button float-left hvr-icon-back success" >No</button>
						  <button class="button float-right hvr-icon-forward alert" type="submit">Yes</button>
						  <button class="close-button" data-close aria-label="Close reveal" type="button">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
						<!--New Case Modal -->
						<div class="small reveal" id="order-modal" data-reveal>
								<h3><i class="fa fa-pencil-square-o"></i><strong>New Case</strong></h3>
								<hr>
								<?php echo form_open_multipart('Order/AddOrder');?>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Patient:</strong></label>
										</div>
										<div class="medium-4 small-12 columns end">
										    <input type="text" name="patient">
										</div>
										<?php echo form_hidden('DentistID',$this->uri->segment(3));?>
									</div>
									<div class="row">
										 <div class="medium-2 small-3 columns">
										  <label for="right-label" class="text-right middle"><strong>Due Date:</strong></label>
										</div>
										<div class="medium-4 small-12 columns end">
										    <input type="date" name="due-date" required>
										</div>
									</div>
									<div class="row">
										 <div class="medium-2 small-3 columns">
										  <label for="right-label" class="text-right middle"><strong>Due Time:</strong></label>
										</div>
										<div class="medium-4 small-12 columns end">
										    <input type="time" name="due-time" required>
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Gender:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
										    <select id="select" name='gender' required>
									  			<option value="Male">Male</option>
									  			<option value="Female">Female</option>
									  		</select>
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Age:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
										    <input type="text" name="age">
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Shade:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
										    <input type="text" name="shade">
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Crown:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
										    <a href="#">[+] Add a crown or bridge</a>
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Notes:</strong></label>
										</div>
										<div class="medium-9 small-12 columns end">
										  <textarea name="notes" id="" cols="30" rows="5"required></textarea>
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Attachment:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
									    <label for="exampleFileUpload" class="button">Upload File</label>
										    <input type="file" id="exampleFileUpload" class="show-for-sr" name="filename" required/>
										</div>
									</div>
									<hr>
									<div class="row">
										<fieldset class="float-left">
										  <button class="button alert hvr-icon-back" data-close aria-label="Close modal" type="button"> Cancel</button>
										</fieldset>
										<fieldset class="float-right">
										  <?php echo form_submit('submit', 'Submit','class="button success hvr-icon-forward"');?>
										</fieldset>
									</div>
								
									<button class="close-button" data-close aria-label="Close modal" type="button">
									<span aria-hidden="true">&times;</span>
								  	</button>
								</form>
							</div>
					</div>
				</div>
			</div>
			<!--Modal-->
			<div class="row">
				<div class="large reveal" id="edit-info" data-reveal data-animation-in="slide-in-down" data-animation-out="slide-out-up">
				  <h3 id="add-modal"><i class="fa fa-user"></i><strong>Dentist Information</strong></h3>
				  <!--Form-->
					<?php echo form_open('Customer/EditDentist'); ?>
					
						<hr>
						<div class="row">
							<div class="large-6 medium-12 columns">
							 <div class="row">
								<div class="large-2 medium-3 small-3 xsmall-2 columns">
								  <label>Title
									<select id="select" name='title' required>
									  <option value="<?php echo $dentists->title;?>">
									  <?php echo $dentists->title;?></option>
									  <option value="Mr.">Mr.</option>
									  <option value="Ms.">Ms.</option>
									  <option value="Mrs.">Mrs.</option>
									  <option value="Dr.">Dr.</option>
									  <option value="Dra.">Dra.</option>
									</select>
								  </label>
								</div>
							<?php echo form_hidden('DentistID', $this->uri->segment(3));?>
							<div class="large-3 medium-12 small-12 columns">
							  <label>First Name
								<input type="text" name="firstname" aria-describedby="exampleHelpText" value="<?php echo $dentists->firstname;?>">
							  </label>
							</div>
							<div class="large-4 medium-12 small-12 columns">
							  <label>Middle Name
								<input type="text" name="middlename" aria-describedby="exampleHelpText" value="<?php echo $dentists->middlename;?>">
							  </label>
							</div>
							<div class="large-3 medium-12 small-12 columns">
							  <label>Last Name
								<input type="text" name="lastname" aria-describedby="exampleHelpText" value="<?php echo $dentists->lastname;?>">
							  </label>
							</div>
							 </div>
							 <div class="row">
								<div class="large-12 medium-12 small-12 columns">
									  <label>Company
										<input type="text" name="company" placeholder="i.e. HJM Dental Laboratory" aria-describedby="exampleHelpText" value="<?php echo $dentists->company;?>" required>
									  </label>
									</div>
							 </div>
							 <div class="row">
								<div class="large-12 medium-12 small-12 columns">
									  <label>Display Name As
										<input type="text" aria-describedby="exampleHelpText">
									  </label>
									</div>
							 </div>
							</div>
							<div class="large-6 medium-12 columns">
								<div class="row">
									<div class="large-12 medium-12 small-12 columns">
									  <label>E-Mail
										<input type="text" name="email" placeholder="i.e. hjmdentallaboratory@gmail.com" aria-describedby="exampleHelpText" value="<?php echo $dentists->email;?>" required>
									  </label>
									</div>
								</div>
								<div class="row">
									<div class="large-6 medium-6 small-12 columns">
										 <label>Telephone
										<input type="text" name="telephone" aria-describedby="exampleHelpText" value="<?php echo $dentists->telephone;?>">
									  </label>
									</div>
									<div class="large-6 medium-6 small-12 columns columns">
											 <label>Mobile
										<input type="text" name="mobile" aria-describedby="exampleHelpText" required value="<?php echo $dentists->mobile;?>">
									  </label>
									</div>
								</div>
								<div class="row">
									<div class="large-12 medium-12 small-12 columns">
									  <label>Website
										<input type="text" name="website" placeholder="i.e. www.hjmdentallaboratory.com" aria-describedby="exampleHelpText" value="<?php echo $dentists->website;?>">
									  </label>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<ul class="tabs" data-tabs id="example-tabs">
								  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Address</a></li>
								  <li class="tabs-title"><a href="#panel2">Notes</a></li>
								</ul>
								<div class="tabs-content" data-tabs-content="example-tabs">
								  <div class="tabs-panel is-active" id="panel1">
									<div class="row">
										<div class="large-6 columns">
											<div class="row">
												<div class="large-12 medium-12 small-12 columns">
												  <label><strong>Billing Address</strong>
													 <textarea name="bstreet" rows="2" cols="50" placeholder="Street"><?php echo $dentists->bstreet;?></textarea>
												  </label>
											   </div>
											</div>
											<div class="row">
												<div class="large-6 columns">
												 <label>City / Province
												<input name="bcity" type="text" aria-describedby="exampleHelpText" required value="<?php echo $dentists->bcity;?>">
												 </label>

												</div>
												<div class="large-6 columns">
												<label>Brgy.
												<input name="bbrgy" type="text" aria-describedby="exampleHelpText" required value="<?php echo $dentists->bbrgy;?>">
												 </label>
												</div>
											</div>
										 </div>
										<div class="large-6 columns">
											<div class="row">
												<div class="large-12 medium-12 small-12 columns">
												  <label><strong>Shipping Address </strong>
													 <textarea name="shipstreet" rows="2" cols="50" placeholder="Street" id="ship-street"><?php echo $dentists->shipstreet;?></textarea>
												  </label>
											   </div>
											</div>
											<div class="row">
												<div class="large-6 columns">
												 <label>City / Province
												<input type="text" name="shipcity" aria-describedby="exampleHelpText" class="ship-info" id="ship-city" value="<?php echo $dentists->shipcity;?>">
												 </label>

												</div>
												<div class="large-6 columns">
												<label>Brgy.
												<input type="text" name="shipbrgy" aria-describedby="exampleHelpText" class="ship-info" id="ship-baranggay" value="<?php echo $dentists->shipbrgy;?>">
												 </label>
												</div>
											</div>
											<input id="same-as" type="checkbox" name="same" value="true"><label for="checkbox1">Same as Billing Address
										</div>
									</div>
								  </div>
								  <div class="tabs-panel" id="panel2">
									<label for="notes"><strong>Notes</strong>
									<textarea name="notes" id="" cols="30" rows="3" ><?php echo $dentists->notes;?></textarea></label>
								  </div>
								</div>
							</div>
						</div>
						<br>
						<hr>
						<div class="row">
							<fieldset class="float-left">
							  <button class="button alert hvr-icon-back" data-close aria-label="Close modal" type="button">Cancel</button>
							</fieldset>
							<fieldset class="float-right">
							    <?php echo form_submit('submit', 'Submit', 'class="button success hvr-icon-forward"');?>
							</fieldset>
						</div>
					</form>
				  <!--End Form-->
					<button class="close-button" data-close aria-label="Close modal" type="button">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
			</div>
			<!--End Modal-->
		</div>
		<!--Body Content-->
		<div class="app-body-content">
			<ul class="tabs" data-tabs id="customer-info">
			  <li class="tabs-title <?php if($this->uri->segment(4) == null){ echo "is-active";}?>"><a href="#customer-details" ><strong>Case History</strong></a></li>
			  <li class="tabs-title"><a href="#customer-inCases"><strong>Customer Details</strong></a></li>
			 
			<?php
			if($this->uri->segment(4) != null)
			{
			  echo
			  '<li class="tabs-title is-active"><a href="#customer-edit-case"><strong>Edit Case</strong></a></li>';
			}
			?>
			</ul>
			 <div class="tabs-content" data-tabs-content="customer-info">
			 <?php 
			 if($this->uri->segment(4) == null)
			 {
			 	echo ' <div class="tabs-panel is-active" id="customer-details">';
			 }
			 else
				echo ' <div class="tabs-panel" id="customer-details">';
			 ?>
				<!-- -->
			
			<div class="row expanded">
				<div class="column medium-12 medium-order-2 large-10 large-order-1">
					<table id="j-table" class="display responsive" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th></th>
							<th>Invoice</th>
							<th>Patient</th>
							<th><center>Ordered Date</center></th>
							<th><center>Due Date</center></th>
							<th><center>Status</center></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					<?php
					$ctr=1;
					foreach($cases as $case)
					{
						echo
						'<tr>
							<td></td>
							<td>'.$ctr.'</td>
							<td>'.$case->patient.'</td>
							<td>'.date('l F d, Y h:i A', strtotime($case->orderdatetime)).'</td>
							<td>'.date('l F d, Y ', strtotime($case->duedate)).date('h:i A', strtotime($case->duetime)).'</td>
							<td>
							'.form_open('Order/UpdateOrderStatus').form_hidden('CaseID',$case->CaseID).'

							<select name="status" class="status-box">
								<option selected="'.$case->status.'">'.$case->status.'</option>
								<option value="New">New</option>
								<option value="In Production">In Production</option>
								<option value="Complete">Complete</option>
								<option value="On Hold">On Hold</option>
							</select>
							<br>
							'.form_submit('submit','Submit','class="button success "').'
							</form>
							</td>
							<td><a href="#">Lab Slip</a></td>
							<td><a href="'.base_url().'Customer/CustomerInfo/'.$dentists->DentistID.'/'.$case->CaseID.'">Edit</a></td>
						</tr>';
						$ctr++;
					}
					?>
					</tbody>
				</table>
				</div>
				<div class="column medium-12 medium-order-2 large-2 large-order-1">
					<div class="row">
						<div class="callout order-callout">
							<label for="">Search
								<input type="text" id="custom-searchbox">
							</label>
							<a href="#">Advanced Search</a>
						</div>
					</div>
					<div class="row">
						<div class="callout order-callout">
							<h6><strong>Orders</strong></h6>
							<ul class="menu">
								<li><a href="#">Active Orders</a></li>
								<hr>
								<li><a href="#">New Orders</a></li>
								<hr>
								<li><a href="#">Order History</a></li>
								<hr>
								<li><a href="#">Hold Orders</a></li>
								<hr>
								<li><a id="notes">Filter</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			  </div>
			  <div class="tabs-panel" id="customer-inCases">
			  	<div class="tabs-content" data-tabs-content="customer-info">
			  
				<div class="row expanded">
					<div class="large-6 columns">
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Customer Name :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->title.' '.$dentists->firstname.' '.$dentists->lastname;?></p>
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Email Address :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->email;?></p>
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Telephone :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->telephone;?></p>
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Mobile :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->mobile;?></p>
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Website :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->website;?></p>
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Notes:</strong></p></label>
							</div>
							<div class="large-8 columns">
								<textarea name="" id="" cols="30" rows="2" readonly="true"><?php echo $dentists->notes;?></textarea>
							</div>
							<hr>
						</div>
					</div>
					<div class="large-6 columns">
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Billing Address :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->bstreet.', '.$dentists->bbrgy.', '.$dentists->bcity;?></p>
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Shipping Address :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->shipstreet.', '.$dentists->shipbrgy.', '.$dentists->shipcity;?>
							</div>
							<hr>
						</div>
					</div>
				</div>
			</div>
		</div>
			
			 <?php
			 if($this->uri->segment(4) != null)
			 {
			 	echo '<div class="tabs-panel is-active" id="customer-edit-case">';
			 }
			 else
				echo ' <div class="tabs-panel" id="customer-edit-case">';
			 ?>
			   
			  	<h3 style="text-align: center;"><i class="fa fa-pencil-square-o"></i><strong>In Case</strong></h3>
								<hr>
								<?php echo form_open_multipart('Order/EditOrder');
								foreach ($cases as $case) 
								{
								if($case->CaseID == $this->uri->segment(4))
								{
									echo
								'<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Ordered Date:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
										    
										    <input type="text" value="'.date('l F d, Y h:i A', strtotime($case->orderdatetime)).'" readonly>
										</div>
									</div>
									  '.form_hidden('DentistID',$this->uri->segment(3)).
									  									  form_hidden('CaseID',$this->uri->segment(4)).'
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Patient:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
										    <input type="text" name="patient" value="'.$case->patient.'">
										</div>
									</div>
									<div class="row">
										 <div class="medium-2 small-3 columns">
										  <label for="right-label" class="text-right middle"><strong>Due Date:</strong></label>
										</div>
										<div class="medium-2 small-12 columns end">
										    <input type="date" name="due-date" value="'.$case->duedate.'">
										</div>
									</div>
									<div class="row">
										 <div class="medium-2 small-3 columns">
										  <label for="right-label" class="text-right middle"><strong>Due Time:</strong></label>
										</div>
										<div class="medium-2 small-12 columns end">
										    <input type="time" name="due-time" value="'.$case->duetime.'">
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Gender:</strong></label>
										</div>
										<div class="medium-2 small-12 columns end">
										    <select id="select" name="gender">
										    	<option value="' .$case->gender.'">'.$case->gender.'</option>
									  			<option value="Male">Male</option>
									  			<option value="Female">Female</option>
									  		</select>
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Age:</strong></label>
										</div>
										<div class="medium-1 small-12 columns end">
										    <input type="text" name="age" value="'.$case->age.'">
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Shade:</strong></label>
										</div>
										<div class="medium-2 small-12 columns end">
										    <input type="text" name="shade">
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Crown:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
										    <a href="#">[+] Add a crown or bridge</a>
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Notes:</strong></label>
										</div>
										<div class="medium-5 small-12 columns end">
										  <textarea name="notes" id="" cols="30" rows="5">'.$case->notes.'</textarea>
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Attachment:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
									    <label for="exampleFileUpload" class="button">Upload File</label>
										    <input name="filename" type="file" id="exampleFileUpload" class="show-for-sr" value="'.$case->file.'">
										</div>
									</div>
									<hr>
									<div class="row">
										<fieldset class="float-left">
										  <a  href="'.base_url('Customer/CustomerInfo/'.$dentists->DentistID).'"class="button alert hvr-icon-back" data-close aria-label="Close modal" type="button">Cancel</a>
										</fieldset>
										<fieldset class="float-right">
											'.form_submit('submit', 'Update Order', 'class="button success hvr-icon-forward"').'
										
										</fieldset>
									</div>';
								}
								}?>
								</form>
			  </div>
			  <!-- End-Edit-Case-->
		</div>
		</div>
			  
		
	<!--End Of Body Content -->
	</div>
</div>
</div>

