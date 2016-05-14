
		<div class="callout fixed title-callout" style="background: #f7f9fb;">
			<div class="row column">
				<h4 class="float-left"><i class="fa fa-user fa-lg"></i><strong>Customer</strong></h4>
				<a data-open="exampleModal1" class="button hjm-secondary float-right hvr-icon-hang">Add New Customer</a>
			</div>
			<!--Modal-->
			<div class="row">
				<div class="large reveal" id="exampleModal1" data-reveal data-animation-in="slide-in-down" data-animation-out="slide-out-up">
				  <h3 id="add-modal"><i class="fa fa-user"></i><strong>Dentist Information</strong></h3>
				  <!--Form-->
					
						<?php echo form_open('Customer/AddDentist') ?>
						<hr>
						<div class="row" >
							<div class="large-6 medium-12 columns">
							 <div class="row">
								<div class="large-2 medium-3 small-3 xsmall-2 columns">
								  <label>Title
									<select id="select" name ='title' required>
									  <option value=""></option>
									  <option value="Mr.">Mr.</option>
									  <option value="Ms.">Ms.</option>
									  <option value="Mrs.">Mrs.</option>
									  <option value="Dr.">Dr.</option>
									  <option value="Dra.">Dra.</option>
									</select>
								  </label>
								</div>

							<div class="large-3 medium-12 small-12 columns">
							  <label>First Name
								<input type="text" name="firstname" aria-describedby="exampleHelpText" required >
							  </label>
							</div>
							<div class="large-4 medium-12 small-12 columns">
							  <label>Middle Name
								<input type="text" name="middlename" aria-describedby="exampleHelpText">
							  </label>
							</div>
							<div class="large-3 medium-12 small-12 columns">
							  <label>Last Name
								<input type="text" name="lastname" aria-describedby="exampleHelpText" required >
							  </label>
							</div>
							 </div>
							 <div class="row">
								<div class="large-12 medium-12 small-12 columns">
									  <label>Company
										<input type="text" name="company" placeholder="i.e. HJM Dental Laboratory" aria-describedby="exampleHelpText" required>
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
										<input type="text" name="email" placeholder="i.e. hjmdentallaboratory@gmail.com" aria-describedby="exampleHelpText" required>
									  </label>
									</div>
								</div>
								<div class="row">
									<div class="large-6 medium-6 small-12 columns">
										 <label>Telephone
										<input type="text" name="telephone" aria-describedby="exampleHelpText">
									  </label>
									</div>
									<div class="large-6 medium-6 small-12 columns columns">
											 <label>Mobile
										<input type="text" name="mobile" aria-describedby="exampleHelpText" required >
									  </label>
									</div>
								</div>
								<div class="row">
									<div class="large-12 medium-12 small-12 columns">
									  <label>Website
										<input type="text" name="website" placeholder="i.e. www.hjmdentallaboratory.com" aria-describedby="exampleHelpText">
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
													 <textarea name="bstreet" rows="2" cols="50" placeholder="Street"></textarea>
												  </label>
											   </div>
											</div>
											<div class="row">
												<div class="large-6 columns">
												 <label>City / Province
												<input name="bcity" type="text" aria-describedby="exampleHelpText" required>
												 </label>

												</div>
												<div class="large-6 columns">
												<label>Brgy.
												<input name="bbrgy" type="text" aria-describedby="exampleHelpText" required>
												 </label>
												</div>
											</div>
										 </div>
										<div class="large-6 columns">
											<div class="row">
												<div class="large-12 medium-12 small-12 columns">
												  <label><strong>Shipping Address </strong>
													 <textarea name="shipstreet" rows="2" cols="50" placeholder="Street" id="ship-street"></textarea>
												  </label>
											   </div>
											</div>
											<div class="row">
												<div class="large-6 columns">
												 <label>City / Province
												<input type="text" name="shipcity" aria-describedby="exampleHelpText" class="ship-info" id="ship-city">
												 </label>

												</div>
												<div class="large-6 columns">
												<label>Brgy.
												<input type="text" name="shipbrgy" aria-describedby="exampleHelpText" class="ship-info" id="ship-baranggay">
												 </label>
												</div>
											</div>
											<input id="same-as" type="checkbox" name='same' value='true'><label for="checkbox1">Same as Billing Address
										</div>
									</div>
								  </div>
								  <div class="tabs-panel" id="panel2">
									<label for="notes"><strong>Notes</strong>
									<textarea name="notes" id="" cols="30" rows="3"></textarea></label>
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
							
							  <?php echo form_submit('submit', 'Submit', 'class="button success hvr-icon-forward"', 'type="Submit"');?>
							</fieldset>
						</div>
					<?php form_close();?>
				  <!--End Form-->
					<button class="close-button" data-close aria-label="Close modal" type="button">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
			</div>
			<!--End Modal-->
		</div>
		<div class="datatable">
		<label for="">Search
			<input type="text" id="custom-searchbox">
		</label>
		
			<table id="j-table" class="display responsive nowrap" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th></th>
						<th style="width: 250px;"><i class="fa fa-user fa-lg table-icon"></i>Customer Name / Company
						</th>
						<th><center>Address</center></th>
						<th>Contact Number</th>
						<th style="width:50px;"><center>Action</center></th>
					</tr>
				</thead>
				<tbody>
					
										
	<?php
	$id='';
	$name='';
	
	if(isset($dentists) && is_array($dentists) && count($dentists) > 0)
    	{
      		foreach ($dentists as $dentist)
      		{	$id=$dentist->DentistID;
      			$name=$dentist->title.' '.$dentist->firstname.' '.$dentist->lastname;
				
				echo		
						'
							<tr>
									<td></td>
									<td><a href="'.base_url("Customer/CustomerInfo").'/'.$dentist->DentistID.'"><h5><strong>'.$dentist->title.' '.$dentist->firstname.' '.$dentist->lastname.'</strong></h5></a>
											<p class="subheader">'.$dentist->company.'</p>
											</td>
											<td><center>'.$dentist->bstreet.', '.$dentist->bbrgy.', '.$dentist->bcity.'</center></td>
											<td>'.$dentist->mobile.'</td>
											<td>
											<a href="Customer/deleteDentist/'.$dentist->DentistID.'"class="button float-right hvr-icon-forward alert">Make Inactive</a>
									</td>
							</tr>'
					;
			}
		}
	?>			

							
						
				</tbody>			
			</table>