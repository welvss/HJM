
	  <!--App-content--> 
	  <div class="ui grid home-grid">
	  <div class="row app-content page-header header">
	  		<div class="one wide column hidden"></div>
	   		<div class="eleven wide column">
		   		<h1 class="ui header">
		   		<img src="<?php echo base_url();?>app/img/hjm-logo.png" class="ui circular image">
		   		<div class="content">
		   			<?php echo $dentist->title.' '.$dentist->firstname.' '.$dentist->lastname;?> 
		   			<div class="sub header">
		   			<span><?php echo $dentist->company;?></span>
		   			&nbsp;&nbsp; | &nbsp;&nbsp;
		   			<span><?php echo $dentist->bstreet.', '.$dentist->bbrgy.', '.$dentist->bcity;?></span>
		   			</div>
		   		</div>
		   		</h1>
	   		</div>
	   		<div class="four wide column">
	   		<button class="ui blue button mode">
					  Edit
			</button>
			<div class="ui icon top teal right labeled pointing dropdown button">
			  <i class="add icon"></i>
			  New Transaction
			  <div class="menu">
			    <div class="item case-modal">
			    <i class="large file text outline icon blue"></i>
			    Case</div>
			    
			  </div>
			</div>
			</div>
			<div class="one wide column hidden"></div>
	  </div>
	  <div class="row">
	  	<div class="one wide column hidden"></div>
	  	<div class="eight wide column">
	  	<br>
	  		<div class="ui tiny statistics">
						  <div class="green statistic">
						    <div class="value">
						      <i class="file text outline icon hvr-wobble-vertical"></i> <?php echo $New;?>
						    </div>
						    <div class="label">
						      <a href="#">New Cases</a>
						    </div>
						  </div>
						  <div class="purple statistic">
						    <div class="value">
						      <i class="lab icon hvr-buzz-out"></i> <?php echo $IP;?>
						    </div>
						    <div class="label">
						      <a href="#">In Production</a>
						    </div>
						  </div>
						  <div class="blue statistic">
						    <div class="value">
						      <i class="circle check icon hvr-float"></i> <?php echo $Completed;?>
						    </div>
						    <div class="label">
						      <a href="#">Completed Cases</a>
						    </div>
						  </div>
						  <div class="red statistic">
						    <div class="value">
						      <i class="warning circle icon hvr-buzz"></i> <?php echo $Hold;?>
						    </div>
						    <div class="label">
						    <a href="#">On Hold</a>
						    </div>
						  </div>
			</div>
	  	</div>
	  	<div class="six wide right aligned column">
	  	<br><br>
		  	<div class="ui horizontal list">
		  		<div class="item">
		  			<h2 class="ui header">
				<a class="ui orange circular label"></a>
				<div class="content">
						  PHP <?php echo number_format($sum->Total,2);?>
				  <div class="sub header">Open Balance</div>
				</div>
				</h2>
		  		</div>
		  		<div class="item">
		  			<h2 class="ui header">
				<a class="ui red circular label"></a>
				<div class="content">
						  PHP 0.00
				  <div class="sub header">Overdue</div>
				</div>
				</h2>
		  		</div>
		  	</div>
	  	</div>
	  </div>    
	  </div>
	  <!--Tab-->
	  <div class="ui grid">
	  	<div class="row">
	  		<div class="fourteen wide column centered grid">
	  		<div class="ui stacked inverted teal segment">
	  			<div class="ui top attached inverted teal tabular menu">
					  <a class="item" data-tab="first">Transaction List</a>
					  <a class="item <?php if($this->uri->segment(4)!="?") {echo "active";}?>" data-tab="second">Customer Details</a>
					  <a class="item <?php if($this->uri->segment(4)=="?") {echo "active";}?>" data-tab="third">Case History</a>
					</div>
					<div class="ui bottom attached tab segment" data-tab="first">
					  	<div class="row">
				  			<div class="ui grid">
				  				<div class="two column row">
							    <div class="left floated column eight wide column">
							    	<div class="ui search">
									  <div class="ui icon input">
									    <input class="prompt" type="text" placeholder="Find Customers..." id="search-transaction">
									    <i class="search icon"></i>
									  </div>
									  <div class="results"></div>
									</div>
							    </div>
							    <div class="right floated right aligned eight wide column">
							    	<a href="#" data-content="Print Customer List" class="popup"><i class="print big icon"></i></a>
							    	<a href="#" data-content="Export Customer List " class="popup"><i class="file excel outline big icon"></i></a>
							    	<a class="ui icon top left pointing dropdown">
									  <i class="setting big icon"></i>
									  <div class="menu">
									    <div class="header">Columns</div>
									    <div class="ui checkbox input">
										  <input type="checkbox" class="toggle-vis" data-column="2" name="example">
										  <label>Email</label>
										</div>
										<div class="ui checkbox input">
										  <input type="checkbox" name="example">
										  <label>Phone</label>
										</div>
										<div class="ui checkbox input">
										  <input type="checkbox" name="example">
										  <label>Email</label>
										</div>
										<div class="ui divider"></div>
										<div class="item">
											Close
										</div>
									  </div>
									</a>
							    </div>
							    </div>
				  			</div>
				  		</div>
	  					<br>
			  			<table id="transaction-history" class="display ui blue table" cellspacing="0" width="100%">
			  				<thead>
			  					<tr>
			  						<th>DATE</th>
			  						<th>TYPE</th>
			  						<th>No.</th>
			  						<th>DUE DATE</th>
			  						<th>BALANCE</th>
			  						<th>TOTAL</th>
			  						<th>STATUS</th>
			  						<th>ACTION</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			  					<tr>
			  						<td>Fr 05/20/2016 10 Am</td>
			  						<td>Invoice</td>
			  						<td>420</td>
			  						<td>Su 06/20/2016 10 Am</td>
			  						<td>PHP 500.00</td>
			  						<td>PHP 500.00</td>
			  						<td>Open</td>
			  						<td></td>
			  					</tr>
			  					<tr>
			  						<td>Fr 05/20/2016 10 Am</td>
			  						<td>Payment</td>
			  						<td>420</td>
			  						<td>Su 06/20/2016 10 Am</td>
			  						<td>PHP 0.00</td>
			  						<td>PHP -500.00</td>
			  						<td>Closed</td>
			  						<td></td>
			  					</tr>
			  					<tr>
			  						<td>Fr 05/20/2016 10 Am</td>
			  						<td>Invoice</td>
			  						<td>420</td>
			  						<td>Su 06/20/2016 10 Am</td>
			  						<td>PHP 500.00</td>
			  						<td>PHP 1000.00</td>
			  						<td>Partial</td>
			  						<td></td>
			  					</tr>
			  				</tbody>
			  			</table>
					</div>
					<div class="ui bottom attached tab segment active" data-tab="second">
					<br>
					  <div class="ui grid">
					  	<div class="two column row">
					  		<div class="eight wide column">
					  			<div class="ui grid">
					  				<div class="row">
					  				<div class="two wide column hidden"></div>
					  					<div class="four wide column">
					  						<h4>Customer Name</h4>
					  					</div>
					  					<div class="ten wide column">
					  						<p><?php echo $dentist->title.' '.$dentist->firstname.' '.$dentist->lastname;?> </p>
					  					</div>
					  				</div>
					  				<div class="row">
					  				<div class="two wide column hidden"></div>
					  					<div class="four wide column">
					  						<h4>Email</h4>
					  					</div>
					  					<div class="ten wide column">
					  						<a href="#"><?php echo $dentist->email;?></a>
					  					</div>
					  				</div>
					  				<div class="row">
					  				<div class="two wide column hidden"></div>
					  					<div class="four wide column">
					  						<h4>Phone</h4>
					  					</div>
					  					<div class="ten wide column">
					  						<p><?php echo $dentist->telephone;?> </p>
					  					</div>
					  				</div>
					  				<div class="row">
					  				<div class="two wide column hidden"></div>
					  					<div class="four wide column">
					  						<h4>Mobile</h4>
					  					</div>
					  					<div class="ten wide column">
					  						<p><?php echo $dentist->mobile;?> </p>
					  					</div>
					  				</div>
					  				<div class="row">
					  				<div class="two wide column hidden"></div>
					  					<div class="four wide column">
					  						<h4>Website</h4>
					  					</div>
					  					<div class="ten wide column">
					  						<a href="#"><?php echo $dentist->website;?> </a>
					  					</div>
					  				</div>
					  				<div class="row">
					  				<div class="two wide column hidden"></div>
					  					<div class="four wide column">
					  						<h4>Notes</h4>
					  					</div>
					  					<div class="ten wide column">
					  						<div class="ui form">
											  <div class="field">
											    <textarea rows="2" readonly><?php echo $dentist->notes;?></textarea>
											  </div>
											</div>
					  					</div>
					  				</div>
					  			</div>
					  		</div>
					  		<div class="eight wide column">
					  			<div class="ui grid">
					  			<div class="row">
					  				<div class="two wide column hidden"></div>
					  					<div class="four wide column">
					  						<h4>Fax</h4>
					  					</div>
					  					<div class="ten wide column">
					  						<p><?php echo $dentist->fax;?> </p>
					  					</div>
					  				</div>
					  				<div class="row">
					  				<div class="two wide column hidden"></div>
					  					<div class="four wide column">
					  						<h4>Billing Address</h4>
					  					</div>
					  					<div class="ten wide column">
					  						<p><?php echo $dentist->bstreet.', '.$dentist->bbrgy.', '.$dentist->bcity;?></p>
					  					</div>
					  				</div>
					  				<div class="row">
					  				<div class="two wide column hidden"></div>
					  					<div class="four wide column">
					  						<h4>Shipping Address</h4>
					  					</div>
					  					<div class="ten wide column">
					  						<p><?php echo $dentist->shipstreet.', '.$dentist->shipbrgy.', '.$dentist->shipcity;?></p>
					  					</div>
					  				</div>
					  			</div>
					  		</div>
					  	</div>
					  </div>
					</div>
					<div class="ui bottom attached tab segment" data-tab="third" id="tabs">
					<!--Case History-->
					  <div class="row">
				  			<div class="ui grid">
				  				<div class="two column row">
							    <div class="left floated column eight wide column">
							    	<div class="ui search">
									  <div class="ui icon input">
									    <input class="prompt" type="text" placeholder="Find Customers..." id="search-case">
									    <i class="search icon"></i>
									  </div>
									  <div class="results"></div>
									</div>
							    </div>
							    <div class="right floated right aligned eight wide column">
							    	<a href="#" data-content="Print Customer List" class="popup"><i class="print big icon"></i></a>
							    	<a href="#" data-content="Export Customer List " class="popup"><i class="file excel outline big icon"></i></a>
							    	<a class="ui icon top left pointing dropdown">
									  <i class="setting big icon"></i>
									  <div class="menu">
									    <div class="header">Columns</div>
									    <div class="ui checkbox input">
										  <input type="checkbox" class="toggle-vis" data-column="2" name="example">
										  <label>Email</label>
										</div>
										<div class="ui checkbox input">
										  <input type="checkbox" name="example">
										  <label>Phone</label>
										</div>
										<div class="ui checkbox input">
										  <input type="checkbox" name="example">
										  <label>Email</label>
										</div>
										<div class="ui divider"></div>
										<div class="item">
											Close
										</div>
									  </div>
									</a>
							    </div>
							    </div>
				  			</div>
				  		</div>
	  					<br>
			  			<table id="case-history" class="display ui blue table" cellspacing="0" width="100%">
			  				<thead>
			  					<tr>
			  						<th>Case#</th>
			  						<th>INVOICE</th>
			  						<th>PATIENT</th>
			  						<th>DATE</th>
			  						<th>DUE</th>
			  						<th>STATUS</th>
			  						<th>LAB SLIP</th>
			  					
			  					</tr>
			  				</thead>
			  				<tbody>
			  				<?php 
								foreach ($cases as $case ) 
								{
									
											echo
										'<tr>
											<td><a href="'.base_url().'Order/Info/'.$case->CaseID.'">'.$case->CaseTypeID.'-'.$case->CaseID.'</a></td>
											<td>'; 
											foreach ($invoice as $i) 
											{
												if ($i->CaseID==$case->CaseID) 
												{
													if($i->datecreated!=null)
														echo '<a href="'.base_url().'/Invoice/InvoiceSlip/'.$i->InvoiceID.'">Invoice # '.$i->InvoiceID.'</a>';
													else
														echo '<p>Invoice # '.$i->InvoiceID.'</p>';
												}
											}
											echo
											'</td>
											<td>'.$case->patientfirstname.' '.$case->patientlastname.'</td>
											<td>'.date('l F d, Y h:i A', strtotime($case->orderdatetime)).'</td>
											<td>'.date('l F d, Y ', strtotime($case->duedate)).date('h:i A', strtotime($case->duetime)).'</td>';
											echo
											
											'<td>
												'.form_open('Order/UpdateOrderStatus').form_hidden('CaseID',$case->CaseID).form_hidden('DentistID',$this->uri->segment(3)).'
						 						<div class="ui form">
													<div class="ten wide field">
													 <select name="status_id">';
														foreach($status as $s)
														{

														   echo '<option value="'.$s->status_id.'"';  if($case->status_id==$s->status_id)echo 'selected'; else echo ' '; echo '>'.$s->status.'</option>';
														
														}
												
													echo
													 '</select>
													</div>
											    </div>	
											    <button type="submit" class="ui blue button" value="submit">
									  			<i class="green check icon"></i>
									  			Update
									  			</button>
									  			</form>				
											</td>
											<td>
												<button class="ui blue button" onClick="printRX(this.value);" value="'.base_url('index.php/Order/RX/'.$case->CaseID).'">
									  			<i class="file icon"></i>
									  			View
									  			</button>				
											</td>
											
											

										</tr>';
								}
								?>
			  				</tbody>
			  			</table>
				</div>
	  		</div>
	  		</div>
	  	</div>
	  </div>
</div>
<!--New Customer Modal-->
	<div class="ui modal fullscreen edit-customer">
		  <div class="header" id="header-modal">
		   <i class="large doctor icon"></i>
		    Dentist Information
		  </div>
		  <?php echo form_open('Customer/EditDentist', 'class="ui form"').form_hidden('DentistID',$this->uri->segment(3));?>
			<div class="ui grid" id="add-dentist-modal">
			<div class="row">
				<div class="one wide column hidden"></div>
				<div class="fourteen wide column">
					<div id="error"></div>
				</div>
				<div class="one wide column hidden"></div>
			</div>
				<div class="row">
					<div class="one wide column hidden"></div>
						<div class="fourteen wide column">
								  <div class="fields">
								  <div class="two wide field">
								  	<label>Title</label>
								  	<select name="title" class="ui fluid dropdown">
									  	<option value="Dr."<?php if($dentist->title=="Dr."){echo 'selected';}?>>Dr.</option>
									  	<option value="Dra."<?php if($dentist->title=="Dra."){echo 'selected';}?>>Dra.</option>
								  		<option value="Mr."<?php if($dentist->title=="Mr."){echo 'selected';}?>>Mr.</option>
								  		<option value="Mrs."<?php if($dentist->title=="Mrs."){echo 'selected';}?>>Mrs.</option>
								  		<option value="Ms."<?php if($dentist->title=="Ms."){echo 'selected';}?>>Ms.</option>
								  	</select>
								  </div>
								    <div class="two wide field">
								      <label>First name</label>
								      <input type="text" placeholder="First Name" name="firstname" value="<?php echo $dentist->firstname;?>" id="firstName" onkeyup="Inputvalidation('Customer');">
								    </div>
								    <div class="two wide field">
								      <label>Middle name</label>
								      <input type="text" placeholder="Middle Name" name="middlename" value="<?php echo $dentist->middlename;?>" id="middleName" onkeyup="Inputvalidation('Customer');">
								    </div>
								    <div class="two wide field">
								      <label>Last name</label>
								      <input type="text" placeholder="Last Name" name="lastname" value="<?php echo $dentist->lastname;?>" id="lastName" onkeyup="Inputvalidation('Customer');">
								    </div>
								    <div class="eight wide field">
								      <label>Email</label>
								      <input type="text" placeholder="i.e. hjmdentallaboratory@gmail.com" name="email" value="<?php echo $dentist->email;?>" id="email" onchange="Inputvalidation('Customer');">
								    </div>
								  </div>
								  <div class="fields">
									  <div class="eight wide field">
									  	<label>Company Name</label>
									  	<input type="text" placeholder="i.e. HJM Dental Laboratory" name="company" value="<?php echo $dentist->company;?>">
									  </div>
									  <div class="four wide field">
								    		<label>Telephone</label>
								    		<input type="text" name="telephone" value="<?php echo $dentist->telephone;?>" id="telephone" onkeyup="Inputvalidation('Customer');">
								    	</div>
								    	<div class="four wide field">
								    		<label>Mobile</label>
								    		<input type="text" name="mobile" value="<?php echo $dentist->mobile;?>" id="mobile" onkeyup="Inputvalidation('Customer');">
								    	</div>
								  </div>
									<div class="fields">
									  	<div class="eight wide field">
											<label>Website</label>
										  	<div class="ui labeled input">
												<div class="ui label">
													http://
												</div>
										  		<input type="text" placeholder="i.e. www.hjmdentallaboratory.com" name="website" id="website" value="<?php echo substr($dentist->website,7);?>"  onchange="Inputvalidation('Customer');">
											</div>
										</div>
										<div class="eight wide field">
											<label>Fax</label>
											<input type="text" name="fax" id="fax" onkeyup="Inputvalidation('Customer');">
										</div>
								    </div>
								  <!--Tabs-->
						<br>
						<div class="row">
							<div class="one wide column hidden"></div>
							<div class="fourteen wide column">
									<div class="ui top attached inverted blue tabular menu">
								  <a class="item active" data-tab="address">Address</a>
								  <a class="item" data-tab="notes">Notes</a>
								</div>
								<div class="ui bottom attached tab segment active" data-tab="address">
								 	<div class="row">
									 	<div class="ui two column stackable grid">
									 		<!--Billing Address -->
									 		<div class="column">
												  <div class="field">
												    <label>Billing Address</label>
												    <textarea rows="2" placeholder="Street" name="bstreet" id="street"><?php echo $dentist->bstreet;?></textarea>
												  </div>
												  <div class="two fields">
												  	<div class="field">
												  		<input type="text" placeholder="City" name="bcity" value="<?php echo $dentist->bcity;?>" id="city">
												  	</div>
												  	<div class="field">
												  		<input type="text" placeholder="Baranggay" name="bbrgy" value="<?php echo $dentist->bbrgy;?>" id="brgy">
												  	</div>
												  </div>
									 		</div>
									 		<!--Shipping Address -->
									 		<div class="column">
												  <div class="field">
												    <label>Shipping Address</label>
												    <textarea rows="2" placeholder="Street" id="ship-street" name="shipstreet"><?php echo $dentist->shipstreet;?></textarea>
												  </div>
												  <div class="two fields">
												  	<div class="field">
												  		<input type="text" placeholder="City" id="ship-city" name="shipcity" value="<?php echo $dentist->shipcity;?>">
												  	</div>
												  	<div class="field">
												  		<input type="text" placeholder="Baranggay" id="ship-baranggay" name="shipbrgy" value="<?php echo $dentist->shipbrgy;?>">
												  	</div>
												  </div>
												  <div class="ui checkbox">
													  <input id="same-as"type="checkbox" name="same">
													  <label>Same as Billing Address</label>
												  </div>
									 		</div>
									 	</div>
									 </div>
								</div>
								<div class="ui bottom attached tab segment" data-tab="notes">
									<div class="ui form">
										<div class="field">
										<label>Notes</label>
										<textarea rows="3" placeholder="Additional Notes" name="notes" ><?php echo $dentist->notes;?></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="one wide column"></div>
						</div>
						</div>
				<div class="one wide column hidden"></div>
				</div>
				<div class="two column row">
					<div class="nine wide column hidden"></div>
					<div class="right aligned six wide column">
						  <div class="actions" id="footer-modal">
						    <div class="ui grey deny button">
						      Cancel
						    </div>
						    <button class="ui animated blue right button" tabindex="0" type="submit" value="submit" id="submit">
							  <div class="visible content">Submit</div>
							  <div class="hidden content">
							    <i class="right arrow icon"></i>
							  </div>
							</button>
						  </div>
					</div>
					<div class="one wide column hidden"></div>
				</div>
				<br>
			</div>  
			</form>
			<br>
			
		  			

	</div>
<!--New Case-->
	<div class="ui modal large case">
	  <?php echo form_open('Order/AddOrder','class="ui form"');?>
	  <?php echo form_hidden('DentistID',$this->uri->segment(3));?>
	  	<?php echo form_hidden('module',1);?>

	  		<div class="ui inverted teal segment">
	  			  <div class="ui header">
				  <i class="large file text outline icon"></i>
					    New Case Entry
				  </div>
	  		</div>
		  <div class="ui horizontal teal segments">
			  <div class="ui teal segment">
			  	<label>Case Number:</label>
			  	<div class="ui header">
			  		<h3 id="CaseID"></h3>
			  	</div>
			  </div>
		  		<div class="ui teal segment">
		  				<div class="fields">
		  			<div class="four wide field">
		  				<label>Doctor</label>
		  				<input type="text"  placeholder="" value="<?php echo $dentist->title.' '.$dentist->firstname.' '.$dentist->lastname;?>" readonly>
		  			</div>
		  			<div class="four wide field">
		  				<label>Patient First Name</label>
		  				<input type="text" name="patientfirstname" placeholder="First Name" id="pfirstname" onkeyup="Casevalidation();">
		  			</div>
		  			<div class="four wide field">
		  				<label>Patient Last Name</label>
		  				<input type="text" name="patientlastname" placeholder="Last Name" id="plastname" onkeyup="Casevalidation();">
		  			</div>	  	
				  <div class="three wide field">
					  <label>Gender</label>
					    <select name="gender">
					      <option value="">Gender</option>
					      <option value="1">Male</option>
					      <option value="0">Female</option>
					    </select>
				  </div>
				   <div class="one wide field">
				    <label>Age</label>
				    <input type="text" name="age">
				  </div>
		  		</div>
		  		</div>
		  </div>
		  <div class="ui grid">
		  <div class="row">
		  	<div class="eight wide column">
		  		<div class="ui teal segment">
		  			<div class="ui centered header blue ">
		  				<h1>Crown</h1>

		  			</div>
		  			<img class="ui centered large image"src="<?php echo base_url();?>app/img/teeth-structure.png" alt="">
		  			<div class="field">
 				  	<label>Teeth</label>
 				  	<select multiple name="teeth[]" class="ui fluid dropdown" id="teeth">
 					<?php
 					$x=1; 
 					while ($x <= 32) 
 					{
 						
 						echo '<option value="'.$x.'">'.$x.'</option>';
 						$x++;
 					}	
 					?>
 					</select>
 		  		</div>
		  		</div>
		  	</div>
		  	<div class="eight wide column">
		  		<div class="ui vertical teal segment">
		  			<div class="eight wide field">
		  				<div class="eight wide field">
					  <label>Type</label>
					    <select name="Type" class="ui fluid dropdown">
					      <option value=""></option>
					      <option value="FIXED">Fixed</option>
					      <option value="RPD">RPD</option>
					      <option value="Others">Others</option>
					    </select>
				  </div>
		  			</div>
		  		</div>
		  		<div class="ui vertical teal segment">
		  		  	<div class="eight wide field">
					  	<label>Product</label>
					    <select name="CaseTypeID" class="ui fluid dropdown" onchange="getID(this.value);">
					    <?php 
					      echo '<option value=""></option>';
					      foreach ($casetype as $ct) {
					      	echo '<option value="'.$ct->CaseTypeID.'">'.$ct->CaseTypeDesc.'</option>';
					      } 
					    ?>
					    </select>
				  	</div>
		  		  <div class="eight wide field">
					  	<label>Item</label>
					    <select  multiple name="items[]"  class="ui fluid dropdown" id="items">
					      
					      <?php 
					      echo '<option value=""></option>';
					      foreach ($items as $item) {
					      	echo '<option value="'.$item->ItemID.'">'.$item->ItemDesc.'</option>';
					      }
					      
					     ?>
					    </select>
				  </div>
		  		</div>
		  		<div class="ui vertical segment">
		  		  <div class="eight wide field">
		  		  	<div class="ui header">Shade Guide:</div>
					     <div class="inline fields">
						    <div class="field">
						      <div class="ui radio checkbox">
						        <input type="radio" name="shade1"  tabindex="0" class="hidden" value=1>
						        <label>1 Shade</label>
						      </div>
						    </div>
						    <div class="field">
						      <div class="ui radio checkbox">
						        <input type="radio" name="shade1" tabindex="0" class="hidden" value=2>
						        <label>2 shades</label>
						      </div>
						    </div>
						    <div class="field">
						      <div class="ui radio checkbox">
						        <input type="radio" name="shade1" tabindex="0" class="hidden" value=3>
						        <label>3 shades</label>
						      </div>
						    </div>
						  </div>
						  <div class="inline fields">
						  	  <div class="field">
						      <div class="ui radio checkbox">
						        <input type="radio" name="shade1" tabindex="0" class="hidden" value=0>
						        <label>No shade</label>
						      </div>
						    </div>
						    <div class="field">
						      <div class="ui radio checkbox">
						        <input type="radio" name="shade1" checked tabindex="0" class="hidden" value=4>
						        <label>Provide Shade Later</label>
						      </div>
						    </div>
						  </div>
						  <div class="five wide field">
						  	<select name="shade2">
						  		<option value=""></option>
						  		<option value="A1">A1</option>
						  		<option value="A2">A2.5</option>
						  		<option value="A3">A3</option>
						  		<option value="A3">A3.5</option>
						  	</select>
						  </div>
				  </div>
		  		</div>
		  		<div class="ui horizontal segments" style="height: 420px;">
		  			<div class="ui disabled segment">
		  			<br>
		  				<div class="ui centered grid">
		  					<div class="row">
		  						<div class="fifteen wide column">
		  							<div class="ui header">
		  								Design
		  							</div>
		  						</div>
		  					</div>
		  				</div>
		  			<hr><br>
		  			</div>
		  			<div class="ui disabled segment">
		  			<br>
		  				<div class="ui centered grid">
		  					<div class="row">
		  						<div class="fifteen wide column">
		  							<div class="ui header">
		  								Additional Features
		  							</div>
		  						</div>
		  					</div>
		  				</div>
		  			<hr><br>
		  			</div>
		  		</div>
		  	</div>
		  </div>
		  		<div class="row">
		  		<div class="column">
		  			<div class="ui inverted teal segment">
		  				<div class="ui header">
		  					Optional
		  				</div>
		  			</div>
		  		</div>			
		  		</div>
				<div class="row">
				  	<div class="ten wide column">
				  		<div class="ui teal segment">
				  			<div class="ui grid">
				  			<div class="two column row">
				  				<div class="column">
				  					 <h3 class="ui header">Return:</h3>
				  					 <hr>
								  <div class="field">
								  	<div class="ui checkbox">
								      <input type="checkbox" tabindex="0" class="hidden" id="Tray1">
								      <input type="hidden" id="Tray" name="Tray" value="0">
								      <label>Tray</label>
								    </div>
								  </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden" id="SG1">
									      <input type="hidden" id="SG" name="SG" value="0">
									      <label>Shade Guide</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden" id="BW1">
									      <input type="hidden" id="BW" name="BW" value="0">
									      <label>Bite Wax</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden" id="MC1" >
									      <input type="hidden" id="MC" name="MC" value="0">
									      <label>Model Cast</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden" id="OC1" >
									      <input type="hidden" id="OC" name="OC" value="0">
									      <label>Opposing Cast</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden" id="Photos1" >
									      <input type="hidden" id="Photos" name="Photos" value="0">
									      <label>Photos</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden" id="Articulator1" >
									      <input type="hidden" id="Articulator" name="Articulator" value="0">
									      <label>Articulator</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden" id="OD1" >
									      <input type="hidden" id="OD" name="OD" value="0">
									      <label>Old Denture</label>
									    </div>
								    </div>
				  				</div>
				  				<div class="column">
				  					<h3 class="ui header">Doctor's Special Instruction</h3>
				  					 <hr>
				  					   <div class="field">
										    <textarea name="notes"></textarea>
									   </div>
				  				</div>
				  			</div>
				  			</div>
				  		</div>
				  	</div>
				  	<div class="six wide column">
				  		<div class="ui teal segment" style="height: 310px;">
					  		<div class="field">
					  			<div class="ui header">
					  				Attachment
					  			</div>
								    <input type="file" id="file" onchange="test();">
								<div id="test"></div>
							
							</div>
							<div class="ui header">
					  				Due
					  		</div>
							<div class="fields">
								<div class="field">
							    <label>Due Date</label>
							    <input type="date" name="duedate" placeholder="Last Name">
							  </div>
							  <div class="field">
							    <label>Due Time</label>
							    <input type="time" name="duetime" placeholder="Last Name">
							  </div>
							</div>
							  <div class="field">
							  	<div class="ui checkbox">
								  <input type="checkbox" name="invoice" value=1>
								  <label>Direct to make Invoice</label>
								</div>
							  </div>
				  		</div>
				  	</div>
				</div>
	  			<div class="two column row">
					<div class="nine wide column hidden">
						<div class="five wide column hidden">
							<div id="caseerror"></div>
						</div>
					</div>
					<div class="right aligned six wide column">
						  <div class="actions" id="footer-modal">
						    <div class="ui grey deny button">
						      Cancel
						    </div>
						    <button class="ui animated teal right button" tabindex="0" type="submit" value="submit" id="casesubmit">
							  <div class="visible content">Submit</div>
							  <div class="hidden content">
							    <i class="right arrow icon"></i>
							  </div>
							</button>
						  </div>
					</div>
					<div class="one wide column hidden"></div>
				</div>
	 		 <br>
		  </div>
	</form>
	</div>
	