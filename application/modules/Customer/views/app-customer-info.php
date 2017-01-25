
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
	  	<br><br><br><br>
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
	  	<br><br><br><br><br>
		  	<div class="ui horizontal list">
		  		<div class="item">
		  			<h2 class="ui header">
				<a class="ui orange circular label"></a>
				<div class="content">
						  PHP <?php echo number_format($sum,2);?>
				  <div class="sub header">Open Balance</div>
				</div>
				</h2>
		  		</div>
		  		<div class="item">
		  			<h2 class="ui header">
				<a class="ui blue circular label"></a>
				<div class="content">
						  PHP <?php echo number_format($Partial,2);?>
				  <div class="sub header">Partial</div>
				</div>
				</h2>
		  		</div>
		  		<div class="item">
		  			<h2 class="ui header">
				<a class="ui red circular label"></a>
				<div class="content">
						  PHP <?php echo number_format($overdue,2);?>
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
							    <div  id="printtransaction">
				    	
				    	
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
			  				<?php

			  				foreach($inv as $invo){
			  					$sum=0;
			  					$count=0;
			  					foreach ($invoicepayment as $ip){
			  						if($ip->InvoiceID==$invo->InvoiceID){
			  							$sum=$sum+$ip->Amount;
			  							$count++;
			  						}
			  					}
			  
				  				echo
				  					'<tr>
				  						<td>'.date('l F d, Y', strtotime($invo->datecreated)).'</td>
				  						<td>Invoice</td>
				  						<td>'.$invo->InvoiceID.'</td>
				  						<td>'.date('l F d, Y', strtotime($invo->duedate)).'</td>
				  						
				  						<td>PHP '.number_format(($invo->Total-$sum),2).'</td>
				  						<td>PHP '.number_format($invo->Total,2).'</td>
				  						<td>';
				  						if($count>0 && ($invo->Total-$sum)==0){
				  							echo 'Closed';
				  						}
				  						else{
				  							echo 'Open';
				  						}


				  						
				  						echo
				  						'</td>
				  						<td>';
				  						if($count>0 && ($invo->Total-$sum)==0){
					  						echo 
						  						'<button class="ui button payment-modal" disabled>Receive Payment</button>
						  						<a href="#"><i class="print icon"></i></a>';
				  						}
				  						else{
					  						echo 
						  						'<button class="ui button payment-modal" onClick="getInvoiceDetails('.$invo->InvoiceID.')">Receive Payment</button>
						  						<a href="#"><i class="print icon"></i></a>';
				  						}
				  						echo
				  						'</td>
				  					</tr>';
				  			}
			  				?>	
			  					
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
							     <div  id="printcase">
				    	
				    	
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
			  						<th>ORDERED DATE</th>
			  						<th>DUE DATE</th>
			  						<th>STATUS</th>
			  						<th>ACTIONS</th>
			  					
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
													if($i->status==1)
														echo '<a href="'.base_url().'/Invoice/InvoiceSlip/'.$i->InvoiceID.'">Invoice # '.$i->InvoiceID.'</a>';
													else
														echo '<p>Invoice # '.$i->InvoiceID.'</p>';
												}
											}
											echo
											'</td>
											<td>'.$case->patientfirstname.' '.$case->patientlastname.'</td>
											<td>'.date('l F d, Y h:i A', strtotime($case->orderdatetime)).'</td>
											<td>'.date('l F d, Y ', strtotime($case->duedate)).date('h:i A', strtotime($case->duetime)).'</td>
											<td><center>';
											foreach ($status as $stat){
												if($stat->status_id==$case->status_id){
												 	if($stat->status_id==1)
												 		echo '<div style="color:green;"><b>'.strtoupper($stat->status).'</b></div>';
												 	else
												 	if($stat->status_id==2)
												 		echo '<div style="color:purple;"><b>'.strtoupper($stat->status).'</b></div>';
												 	else
												 	if($stat->status_id==3)
												 		echo '<div style="color:blue;"><b>'.strtoupper($stat->status).'</b></div>';
												 	else
												 	if($stat->status_id==4)
												 		echo '<div style="color:red;"><b>'.strtoupper($stat->status).'</b></div>';
												}
												 	
											}		
	
				  			
									  		echo			
											'</center></td>
											<td>
											<center>';
											if($case->status_id!=3){
												echo
												'<a href="'.base_url('Order/Info/'.$case->CaseID).'" class="ui blue button">
												<i class="green check icon"></i>
									  			Update
									  			</a>
									  			<br><br>';
									  		}else{
									  			echo
												'<button class="ui blue button" disabled>
												<i class="green check icon"></i>
									  			Update
									  			</button>
									  			<br><br>';
									  		}

											echo
												'<button class="ui blue button" onClick="printRX(this.value);" value="'.base_url('Order/RX/'.$case->CaseID).'">
													<i class="file icon"></i>
													View&nbsp;RX
												</button>
												&nbsp;	
											</center>		
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
	  <?php echo form_open_multipart('Order/AddOrder','class="ui form"');?>
	  	<?php echo form_hidden('module',2);?>
	  	<?php echo form_hidden('DentistID',$dentist->DentistID);?>

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
		  				<input type="text" name="patientfirstname" placeholder="First Name" id="pfirstname" onkeyup="letterCheck('pfirstname');">
		  			</div>
		  			<div class="four wide field">
		  				<label>Patient Last Name</label>
		  				<input type="text" name="patientlastname" placeholder="Last Name" id="plastname" onkeyup="letterCheck('plastname');">
		  			</div>	  		
				  <div class="three wide field">
					  <label>Gender</label>
					    <select name="gender" class="ui fluid dropdown">
					      <option value="">Gender</option>
					      <option value="1">Male</option>
					      <option value="0">Female</option>
					    </select>
				  </div>
				   <div class="one wide field">
				    <label>Age</label>
				    <input type="text" name="age" onkeyup="numberCheck(0);" id="age">
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
 				  	<select multiple name="teeth[]" class="ui fluid search dropdown" id="teeth">
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
					    <select name="Type" class="ui fluid dropdown" onchange="getCaseType(this.value);">
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
					    <select name="CaseTypeID" id="CaseTypeID" class="ui fluid search dropdown" onchange="getID(this.value);">
					    
					    </select>
				  </div>
		  		 <div class="eight wide field">
					  <label>Item</label>
					    <select  name="items"  class="ui fluid search dropdown" id="items">
					      
					      <?php 
					      echo '<option value="">Select Item</option>';
					      foreach ($teeth as $tooth) {
					      	echo '<option value="'.$tooth->BrandID.'">'.$tooth->BrandDesc.'</option>';
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
						  	<select name="shade2" class="ui fluid search dropdown"> 
						  		<option value="">Select Shade</option>
						  		<option value="A1">A1</option>
						  		<option value="A2">A2.5</option>
						  		<option value="A3">A3</option>
						  		<option value="A3">A3.5</option>
						  	</select>
						  </div>
				  </div>
		  		</div>

		  			<div class="ui vertical teal segment">
		  				<div class="eight wide field">
			  				<div class="eight wide field">
			  					<div class="field">
						  			<label>Description</label>
						  		
						    		<textarea name="description" style="width: 440px;height:220px; resize: none;"></textarea>
						    	</div>
					  		</div>
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
										    <textarea name="notes" style="resize: none;"></textarea>
									   </div>
				  				</div>
				  			</div>
				  			</div>
				  		</div>
				  	</div>
				  	<div class="six wide column">
				  		<div class="six wide column">
					  		<div class="ui teal segment" style="height: 310px;">
						  		<div class="field">
						  			<div class="ui header">
						  				Attachment
						  			</div>
						  			<div id="webcam">
						  				
						  			</div>
						  			<div id="webcam2">
						  				
						  			</div>
						  			<div class="fields">
							  			<div class="field">
							  				<textarea name="base64" id="base64image" style="display: none;"></textarea>
							  				<span class="fa fa-times"  style="padding: 15px;display: none;cursor:pointer;font-size: 36px;position: relative;top: -273px;right: -286px;color: #DB2828;" id="hidewebcam"></span>
							  				
											<input type="button" class="ui capture button" value="Capture" id="capture" style="display: none;">
											<input type="button" class="ui capture recapture button" value="Recapture" id="recapture" style="display:none;left: -59px;">
											<input type="button" class="ui capture recapture button" value="Save" id="save" style="display: none; left: 72px;">
							  				<input class="ui button" type="button" style="padding: 15px;" id="usewebcam" value="Use Webcam"/>
							  			</div>
							  			<div class="field dues">
							  				
							  				<strong style="position: relative;left: -8px;top: 15px;">OR</strong>
							  				
										    <input type="file" id="file" name="file" accept="image/*"/ style="width:89%;">
										</div>
									</div>
								</div>
								<style type="text/css">
							  					.capture {
							  						position: relative;
												    top: -61px;
	    											left: 55px;
												    opacity: 0.6;
							  					}
							  					.capture:hover {
							  						opacity: 1!important;
							  					}

							  					.recapture {

							  					}
							  				</style>
								<div class="ui header dues">
						  				Due
						  		</div>
								<div class="fields dues">
									<div class="field">
								    <label>Due Date</label>
								    <input type="date" name="duedate" placeholder="Last Name" id="duedate">
								  </div>
								  <div class="field">
								    <label>Due Time</label>
								    <input type="time" name="duetime" placeholder="Last Name" id="duetime" class="datepicker">
								  </div>
								</div>
								  <div class="field dues">
								  	<div class="ui checkbox">
									  <input type="checkbox" name="invoice" value=1>
									  <label>Direct to make Invoice</label>
									</div>
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
						    <button class="ui animated teal right button" tabindex="0" type="submit" value="submit" name="submit" id="casesubmit">
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



	<div class="ui modal fullscreen payment">
	
		<?php echo form_open('Invoice/AddInvoicePayment','class="ui form" onSubmit="return false"');?>
	  		<div class="ui inverted blue segment">
	  			  <div class="ui header">
				  <i class="large dollar icon"></i>
					  Receive Payment
				  </div>
	  		</div>
	  		<div class="ui grid">
		  		<div class="two column row">
					<div class="column">
						<div class="ui segment">
							<div class="inline fields">
							<div class="eight wide field">
								<label>Customer</label>
								<div id="InvoiceIDHidden"></div>
	  							<input type="hidden" name="DentistID" value="<?php echo $this->uri->segment(3);?>">
								<input type="text" value="<?php echo $dentist->title.' '.$dentist->firstname.' '.$dentist->lastname;?> ">
							</div>
							<div class="eight wide field">
								<label>Email</label>
								<input type="text" value="<?php echo $dentist->email;?> ">
							</div>
							</div>
						</div>
					</div>
					<div class="right aligned column">
						<div class="ui segment">
							<div class="ui header">
								Amount Received
								<h1 id="sumreceived"></h1>
							</div>							
						</div>
					</div>
				</div>
	  		</div>

	  		<div class="ui centered grid">
	  			<div class="row">
					<div class="one wide column hidden"></div>
					<div class="fourteen wide column">
						
						<div id="errorpayment"></div>
					</div>
					<div class="one wide column hidden"></div>
				</div>
	  			<div class="row">
	  				<div class="fifteen wide column">
	  					<div class="fields">
	  						<!--
	  						<div class="field">
	  							<label>Payment Method</label>
	  							<select name="PaymentMethod" class="ui fluid dropdown">
	  								<option value=""></option>
	  								<option value="Partial">Partial</option>
	  								<option value="Full">Full</option>

	  							</select>
	  						</div>
	  						-->
	  						<div class="field">
	  							
	  						</div>
	  					</div>
	  				</div>
	  			</div>
	  		</div>

		  <div class="ui centered grid">
		  <div class="row">
		  	<div class="fifteen wide column">
		  		<table class="ui table">
		  			<thead>
		  				<tr>
		  					<th>DESCRIPTION</th>
		  					<th>DUE DATE</th>
		  					<th>ORIGINAL AMMOUNT</th>
		  					<th>OPEN BALANCE</th>
		  					<th>PAYMENT</th>
		  					<th></th>
		  				</tr>
		  			</thead>
		  			<tbody>
		  				<tr>
		  					<td id="InvoiceIDOut">
		  					
		  					</td>
		  					<td id="duedateout">
		  						
		  					</td>
		  					<td id="totalout"></td>
		  					<td id="balance"></td>
		  					<td>
		  						<div class="ui form">
		  							<input type="text" value="" name="Amount" onkeyup="totalUpdate(this.value)">
		  							<div id="balancehidden"></div>
		  						</div>
		  					</td>
		  					<td><a href="#"><i class="trash icon"></i></a></td>
		  				</tr>
		  			</tbody>
		  		</table>
		  	</div>
		  </div>
				<div class="row">
					<div class="fifteen wide column">
						<hr>
						<div class="ui grid">
							<div class="eight wide column">
								<div class="field">
									<label>Message displayed on Invoice</label>
									<textarea></textarea>
								</div>
							</div>
							<div class="two wide column hidden">
							</div>
							<div class="three wide right aligned column">
								<h4>Amount to apply</h4>
							</div>
							<div class="three wide column">
								<h2 id="Amounttoapply">PHP 0.00</h2>
							</div>
						</div>
					</div>
				</div>
	  			<div class="two column row">
	  				<div class="six wide column"></div>
					<div class="three wide column">
						<a href="receipt.html" data-content="Print invoice" class="popup"><i class="print big icon"></i>Print</a>
					</div>
					<div class="right aligned six wide column">
						  <div class="actions" id="footer-modal">
						    <div class="ui grey deny button">
						      Cancel
						    </div>
						    <button class="ui animated blue right button" tabindex="0" type="submit" value="submit">
							  <div class="visible content">Submit</div>
							  <div class="hidden content">
							    <i class="right arrow icon"></i>
							  </div>
							</button>
						  </div>
					</div>
					<div class="one wide column hidden"></div>
				</div>
	 		 <br><br>
		  </div>
	</form>
	</div>
	