<!--App-content--> 
	  <div class="ui grid home-grid">
	  <div class="row app-content page-header header">
	  		<div class="two wide column hidden"></div>
	   		<div class="six wide column">
		   		<h1><i class="file text outline icon"></i>Case Details</h1>
	   		</div>
	   		<div class="six wide right aligned column">
	   		<button class="ui blue button mode"  onClick="printRX(this.value);" value="<?php echo base_url('index.php/Order/RX/'.$case->CaseID) ;?>">
					  Print RX
			</button>
	   		<button class="ui blue button mode case-modal">
					  Edit
			</button>
			
			</div>
			<div class="one wide column hidden"></div>
	  </div>
	  </div>
	  <br><br><br><br>
	  <!--Tab-->
	  <div class="ui centered grid">
		  <div class="row">
			  <div class="fifteen wide column">
				  	<div class="ui grid">
				  	<div class="eight wide column">
		  	  				<div class="ui teal segment" style="height: 250px;">
		  	  					<div class="ui header teal">
		  	  						<h3 class="ui blue  header">
		  	  							Case Information
		  	  						</h3>
		  	  						<hr>
		  	  					</div>
		  	  					<div class="ui horizontal segments">
		  	  						<div class="ui segment">
		  	  							<div class="ui horizontal list">
		  	  								<div class="item">
		  	  									<label><strong>Doctor: </strong></label>
		  	  									<?php echo $dentist->title.' '.$dentist->firstname.' '.$dentist->lastname;?>
		  	  								</div>
		  	  								<div class="item">
		  	  									<label><strong>Company: </strong></label>
		  	  									<?php echo $dentist->company;?>
		  	  								</div>
		  	  							</div>
		  	  							<div class="ui middle aligned divided list">
		  	  								<div class="item">
		  	  									<label>Created On: </label>
		  	  									
		  	  								</div>
		  	  								<div class="item">
		  	  									<label>Completed On: </label>
		  	  									
		  	  								</div>
		  	  							</div>
		  	  						</div>
		  	  						<div class="ui segment">
		  	  							<div class="item">
		  	  								<div class="ui blue centered header">
		  	  								<br>
		  	  									<div class="content">
		  	  										Case Number
		  	  										<div class="sub header">
		  	  											<h2><strong>#SERDS-<?php echo $case->CaseID;?></strong></h2>
		  	  										</div>
		  	  									</div>
		  	  								</div>
		  	  							</div>
		  	  						</div>
		  	  					</div>
		  	  				</div>
				  		</div>	
				  		<div class="eight wide column">
				  			<div class="ui teal segment">
				  				<h3 class="ui header">
				  					<?php echo $case->patientlastname.', '.$case->patientfirstname;?>
				  				</h3>
				  				<hr>
				  			<?php if($case->status_id == 2)
				  				{
					  				echo
					  				'<div class="ui inverted violet segment">
					  					<label for="">Status:</label>
					  				<i class="lab icon"></i>In Production
					  				</div>';
					  			}
					  			if($case->status_id == 1)
					  			{
					  				echo
					  				'<div class="ui inverted green segment">
					  					<label for="">Status:</label>
					  				<i class="file text outline icon"></i>New
					  				</div>';
					  			}
					  			if($case->status_id == 4)
					  			{
					  				echo
					  				'<div class="ui inverted red segment">
					  					<label for="">Status:</label>
					  				<i class="warning circle icon"></i>On Hold
					  				</div>';
					  			}
					  			if($case->status_id == 3)
					  			{
					  				echo
					  				'<div class="ui inverted blue segment">
					  					<label for="">Status:</label>
					  				<i class="check icon"></i>Completed
					  				</div>';
				  				}
				  			?>
					  			<div class="ui horizontal segments">
					  				<div class="ui segment">
					  					<div class="ui small statistic">
										  <div class="value">
										   <?php echo date('m/d/Y', strtotime($case->orderdatetime));?>
										  </div>
										  <div class="label">
										    Date Received
										  </div>
										</div>
					  				</div>
					  				<div class="ui segment">
					  					<div class="ui red small statistic">
										  <div class="value">
										   <?php echo date('m/d/Y', strtotime($case->duedate));?>
										  </div>
										  <div class="label">
										    Due Date
										  </div>
										</div>
					  				</div>
					  			</div>
				  			</div>
				  		</div>
		      		</div>
	  	  	  </div>
	  	 </div>
	  	 <div class="row">
	  	  	<div class="fifteen wide column">
	  	  		<div class="ui grid">	
	  	  			<div class="six wide column">
	  	  				<div class="ui teal segment">
				  				<h3 class="ui centered header">
				  					Tooth Selection
				  				</h3>
				  				<hr>
				  			<img class="ui centered large image"src="<?php echo base_url();?>app/img/teeth-structure.png" alt="">
		  				</div>
	  	  			</div>
	  	  			<div class="ten wide column">
	  	  				<div class="ui teal segment" style="height: 720px">
				  				<h3 class="ui centered header">
				  					Selected Tooth
				  				</h3>
				  				<hr>
				  			<table class="ui inverted teal table">
				  					<thead>
				  						<tr>
				  							<th>Type</th>
				  							<th>Tooth #</th>
				  							<th>ITEM</th>
				  							<th>SHADE</th>
				  							<th>DESIGN</th>
				  							<th>ADDITIONAL FEATURES</th>
				  						</tr>
				  					</thead>
				  					<tbody>
				  						<tr>
				  							<td>Crown</td>
				  							<td>
				  								<?php 
				  								$ctr= count($teeth);
				  								$i=0;
				  								foreach ($teeth as $tooth) {
				  								if(++$i != $ctr)
				  								echo $tooth->teeth.', ';
				  								else
				  								echo $tooth->teeth;
				  								}
				  								?>
				  							</td>
				  							<td>Emax</td>
				  							<td><?php echo $case->shade2;?></td>
				  							<td></td>
				  							<td></td>
				  						</tr>
				  					</tbody>
				  				</table>
	  	  				</div>
	  	  			</div>
	  	  		</div>
	  	  	</div>
	  	  </div>
	  	  <div class="row">
	  	  	<div class="fifteen wide column">
	  	  		<div class="ui grid">
	  	  			<div class="eight wide column">
	  	  				<div class="ui teal segment" style="height: 200px;">
	  	  					<h3 class="ui header">
	  	  						Special Instrucions
	  	  						<hr>
	  	  							<div class="field">
										<p><?php echo $case->notes;?></p>
									</div>
	  	  					</h3>
	  	  				</div>
	  	  			</div>
	  	  			<div class="eight wide column">
	  	  				<div class="ui teal segment" style="height: 200px;">
	  	  					<h3 class="ui header">
	  	  						Attachments
	  	  						<hr>
	  	  					</h3>
	  	  				</div>
	  	  			</div>
	  	  		</div>
	  	  	</div>
	  	  </div>
	  	  <div class="row">
	  	  	<div class="fifteen wide column">
	  	  		<div class="ui teal segment">
	  	  			<h3 class="ui header">
	  	  				Invoice
	  	  				<hr>
	  	  			</h3>
					<?php 
					if($invoice[0]->status!=0)
					{
						echo
		  	  			'<div class="ui grid">
		  	  				<div class="row">
		  	  					<div class="ten wide column">
		  	  						<h2 class="ui green header">
		  	  							Approved!
		  	  						</h2>
		  	  					</div>
		  	  					<div class="six wide column">
		  	  						
									</button>
									<button onClick="printInvoice(this.value);" value="'.base_url('Invoice/InvoiceSlip/'.$invoice[0]->InvoiceID).'" class="ui blue button mode">
											  Print Invoice
									</button>
		  	  					</div>
		  	  				</div>
		  	  			</div>';
		  	  		}
		  	  		if($invoice[0]->status==0)
	  	  			{
		  	  			echo
		  	  			'<div class="ui grid">
		  	  				<div class="row">
		  	  					<div class="ten wide column">
		  	  						<h2 class="ui red header">
		  	  							Not yet Invoice!
		  	  						</h2>
		  	  					</div>
		  	  					<div class="six wide column">
		  	  						<button type="submit" class="ui button mode invoice-modal">
											  Edit Invoice
									</button>
		  	  					'.form_open('Invoice/UpdateInvoiceStatus').form_hidden('InvoiceID',$invoice[0]->InvoiceID).form_hidden('status',1).form_hidden('CaseID',$case->CaseID).'

									
									<button class="ui green button mode">
											  Approve Invoice
									</button>
									</form>
		  	  					</div>
		  	  				</div>
		  	  			</div>';
	  	  			}
	  	  			?>
	  	  			<table class="ui inverted blue table">
						<thead>
							<tr>
								<th>Billing Item</th>
								<th>Teeth Number</th>
								<th>Qty</th>
								<th>Amount</th>
								<th>Case Total</th>
							</tr>
						</thead>
						<tbody>
							<?php

								foreach ($invoiceitems as $ii) 
								{
									echo
									'<tr>';
									foreach ($items as $item) 
									{
										if($ii->ItemID==$item->ItemID)

										echo '<td>'.$item->ItemDesc.'</td>';
									}
										
			
								
									echo '<td>';
									 
					  					$ctr= count($teeth);
					  					$i=0;
					  					foreach ($teeth as $tooth) 
					  					{
						  					if(++$i != $ctr)
						  						echo $tooth->teeth.', ';
						  					else
						  						echo $tooth->teeth;
					  					}
					  				
					  				echo 
					  					'</td>
										<td>'.$ii->QTY.'</td>
										<td>PHP '.$ii->Amount.'</td>
										<td>PHP '.$ii->SubTotal.'</td>
									</tr>';
							
								}
							?>
							
						</tbody>
					</table>
					<div class="ui grid">
						<div class="row">
							<div class="ten wide column">
								
							</div>
							<div class="three wide column">
								<div class="item">
									Subtotal
								</div>
								<div class="item">
									<h2>Total</h2>
								</div>
							</div>
							<div class="three wide column">
								<div class="item">
									PHP <?php echo $invoice[0]->Total;?>
								</div>
								<div class="item">
									<h2>PHP <?php echo $invoice[0]->Total;?></h2>
								</div>
							</div>
						</div>
					</div>
	  	  		</div>
	  	  	</div>
	  	  </div>
	  
	  	  <div class="row"></div>
	  </div>
	<!--New Case-->
	<div class="ui modal large case">
	<?php echo form_open('Order/EditOrder','class="ui form"');?>
	 
	  	<?php echo form_hidden('CaseID',$this->uri->segment(3));?>

	  		<div class="ui inverted teal segment">
	  			  <div class="ui header">
				  <i class="large file text outline icon"></i>
					    Edit Case Entry
				  </div>
	  		</div>
		  <div class="ui horizontal teal segments">
			  <div class="ui teal segment">
			  	<label>Case Number:</label>
			  	<div class="ui header">
			  		<h3>#SERDS-<?php echo $case->CaseID;?></h3>
			  	</div>
			  </div>
		  		<div class="ui teal segment">
		  				<div class="fields">
		  			<div class="four wide field">
		  				<label>Doctor</label>
		  				<input type="text"  placeholder="" value="<?php echo $dentist->title.' '.$dentist->firstname.' '.$dentist->lastname;?>" readonly>
		  			</div>
		  			<div class="four wide field">
		  				<label>Patient first name</label>
		  				<input type="text" name="patientfirstname" placeholder="First Name" value="<?php echo $case->patientfirstname;?>">
		  			</div>
		  			<div class="four wide field">
		  				<label>Patient last name</label>
		  				<input type="text" name="patientlastname" placeholder="Last Name" value="<?php echo $case->patientlastname;?>">
		  			</div>	  		
				  <div class="three wide field">
					  <label>Gender</label>
				
					    <select name="gender">
					      <option value="">Gender</option>
					      <option value="1" <?php if($case->gender==1) echo 'selected';?>>Male</option>
					      <option value="0" <?php if($case->gender==0) echo 'selected';?>>Female</option>
					    </select>
				  </div>
				   <div class="one wide field">
				    <label>Age</label>
				    <input type="text" name="age" value="<?php echo $case->age;?>">
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
 				  	<select multiple name="teeth[]" class="ui fluid dropdown">
 				  	<?php 
 				  	$i =1;
 				  	$ctr= count($teeth);
 				  	$j=1;
 				  	$bool=false;
 	 
 				  	while($i<=32)
 				  	{	

	 				  	foreach ($teeth as $tooth) 
	 				  	{
	 				  		
			 				if($tooth->teeth == $i)
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
 		  		</div>
		  		</div>
		  	</div>
		  	<div class="eight wide column">
		  		<div class="ui vertical teal segment">
		  		  <div class="eight wide field">
					  <label>Item</label>
					    <select  multiple name="items[]"  class="ui fluid dropdown">
					      
					    <?php 
					     $bool=false;
					     $positive=false;
					     
					     
					    foreach ($items as $item) 
					    {
			
							    foreach ($caseitems as $ci) 
							    {
							    	if($ci->ItemID==$item->ItemID)
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
		  		</div>
		  		<div class="ui vertical segment">
		  		  <div class="eight wide field">
		  		  	<div class="ui header">Shade Guide:</div>
					     <div class="inline fields">
						    <div class="field">
						      <div class="ui radio checkbox">
						        <input type="radio" name="shade1"  tabindex="0" class="hidden" value="1"<?php if($case->shade1==1) echo ' checked=""';?>>
						        <label>1 Shade</label>
						      </div>
						    </div>
						    <div class="field">
						      <div class="ui radio checkbox">
						        <input type="radio" name="shade1" tabindex="0" class="hidden" value="2"<?php if($case->shade1==2) echo ' checked=""';?>>
						        <label>2 shades</label>
						      </div>
						    </div>
						    <div class="field">
						      <div class="ui radio checkbox">
						        <input type="radio" name="shade1" tabindex="0" class="hidden" value="3"<?php if($case->shade1==3) echo ' checked=""';?>>
						        <label>3 shades</label>
						      </div>
						    </div>
						  </div>
						  <div class="inline fields">
						  	  <div class="field">
						      <div class="ui radio checkbox">
						        <input type="radio" name="shade1" tabindex="0" class="hidden" value="0"<?php if($case->shade1==0) echo ' checked=""';?>>
						        <label>No shade</label>
						      </div>
						    </div>
						    <div class="field">
						      <div class="ui radio checkbox">
						        <input type="radio" name="shade1"  tabindex="0" class="hidden" value="4"<?php if($case->shade1==4) echo ' checked=""';?>>
						        <label>Provide Shade Later</label>
						      </div>
						    </div>
						  </div>
						  <div class="five wide field">
						  	<select name="shade2">
						  		<option value=""></option>
						  		<option value="A1"<?php if($case->shade2=="A1") echo ' selected';?>>A1</option>
						  		<option value="A2.5"<?php if($case->shade2=="A2.5") echo ' selected';?>>A2.5</option>
						  		<option value="A3"<?php if($case->shade2=="A3") echo ' selected';?>>A3</option>
						  		<option value="A3.5"<?php if($case->shade2=="A3.5") echo ' selected';?>>A3.5</option>
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
								  	 <div class="ui checkbox<?php if($case->Tray==1)echo ' selected=""';?>">
								      <input type="checkbox" tabindex="0"  name="Tray" value="1">
								      <label>Tray</label>
								    </div>
								  </div>
								    <div class="field">
								    	<div class="ui checkbox<?php if($case->SG==1)echo ' checked';?>">
								      <input type="checkbox" tabindex="0" class="hidden" name="SG" value="1">
								      <label>Shade Guide</label>
								    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox<?php if($case->BW==1)echo ' checked';?>">
									      <input type="checkbox" tabindex="0" class="hidden" name="BW" value="1"> 
									      <label>Bite Wax</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox<?php if($case->MC==1)echo ' checked';?>">
									      <input type="checkbox" tabindex="0" class="hidden" name="MC" value="1">
									      <label>Model Cast</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox<?php if($case->OC==1)echo ' checked';?>">
									      <input type="checkbox" tabindex="0" class="hidden" name="OC" value="1">
									      <label>Opposing Cast</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox<?php if($case->Photos==1)echo ' checked';?>">
									      <input type="checkbox" tabindex="0" class="hidden" name="Photos" value="1">
									      <label>Photos</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox<?php if($case->Articulator==1)echo ' checked';?>">
									      <input type="checkbox" tabindex="0" class="hidden" name="Articulator" value="1">
									      <label>Articulator</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox<?php if($case->OD==1)echo ' checked';?>">
									      <input type="checkbox" tabindex="0" class="hidden" name="OD" value="1">
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
								    <input type="file" id="file" >
							</div>
							<div class="ui header">
					  				Due
					  		</div>
							<div class="fields">
								<div class="field">
							    <label>Due Date</label>
							    <input type="date" name="duedate" value="<?php echo date($case->duedate);?>">
							  </div>
							  <div class="field">
							    <label>Due Time</label>
							    <input type="time" name="duetime" value="<?php echo date($case->duetime);?>">
							  </div>
							</div>
							  
				  		</div>
				  	</div>
				  </div>
	  			<div class="two column row">
					<div class="nine wide column hidden"></div>
					<div class="right aligned six wide column">
						  <div class="actions" id="footer-modal">
						    <div class="ui grey deny button">
						      Cancel
						    </div>
						    <button class="ui animated teal right button" tabindex="0" type="submit" value="submit">
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
	<!--Invoice-->
	<div class="ui modal fullscreen invoice">
	
	  	<?php echo form_open('Invoice/addInvoice','class="ui form"');?>
	  	<?php echo form_hidden('DentistID',$case->DentistID);?>
	  	<?php echo form_hidden('CaseID',$case->CaseID,'id="CaseID"');?>
	  	<?php echo form_hidden('InvoiceID',$invoice[0]->InvoiceID);?>

	  		<div class="ui inverted blue segment">
	  			  <div class="ui header">
				  <i class="large dollar icon"></i>
					  Invoice
				  </div>
	  		</div>
	  		<div class="ui grid">
		  		<div class="two column row">
					<div class="column">
						<div class="ui segment">
							<div class="inline fields">
							<div class="eight wide field">
								<label>Customer</label>
								<input type="text" value="<?php echo $dentist->title.' '.$dentist->firstname.' '.$dentist->lastname;?>" readonly>
							</div>
							<div class="eight wide field">
								<label>Email</label>
								<input type="text" value="<?php echo $dentist->email;?>" readonly>
							</div>
							</div>
						</div>
					</div>
					<div class="right aligned column">
						<div class="ui segment">
							<div class="ui header">
								Balance Due
								<h1>PHP 500.00</h1>
							</div>							
						</div>
					</div>
				</div>
	  		</div>

	  		<div class="ui centered grid">
	  			<div class="row">
	  				<div class="fifteen wide column">
	  					<div class="fields">
	  						<div class="four wide field">
	  							<label>Billing Address</label>
	  							 <textarea rows="2"><?php echo $dentist->bstreet.', '.$dentist->bbrgy.', '.$dentist->bcity;?></textarea>
	  						</div>
	  						<div class="field">
	  							<label>Due Date</label>
	  							<input type="date" name="duedate">
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
		  					<th>#</th>
		  					<th>ITEM</th>
		  					<th>DESCRIPTION</th>
		  					<th>QTY</th>
		  					<th>Amount</th>
		  					<th>Total</th>
		  					<th></th>
		  				</tr>
		  			</thead>
		  			
		  			<tbody id="Add">
		  			<?php 
		  			$ctr=1;
		  			$x=count($caseitems);
		  			foreach ($items as $item) 
		  			{
		  				
		  				foreach ($caseitems as $ci) 
		  				{
		  					if($ci->ItemID==$item->ItemID)
		  					{
				  				echo
				  				'<tr id="Row'.$ctr.'">
				  					<td>'.$ctr.'</td>
				  					<td><input type="text" style="width: 100px"  name="invoice['.$ctr.'][ItemID]" value="'.$item->ItemID.'"></td>
				  					<td id="ItemDesc">'.$item->ItemDesc.'</td>
				  					<td><input type="number" style="width: 100px" id="QTY'.$ctr.'" name="invoice['.$ctr.'][QTY]" onchange="multiply('.$ctr.');addSubtotal('.$x.');"  value="0" ><br></td>
				  					<td><input type="text" id="Amount'.$ctr.'" name="invoice['.$ctr.'][Amount]"  onchange="multiply('.$ctr.');addSubtotal('.$x.');" value="'.$item->Price.'" ></td>
				  					<td><input type="text" id="SubTotal'.$ctr.'" name="invoice['.$ctr.'][SubTotal]" value="0" /></td>
				  					<td><a href="#"  onClick="deleteRow('.$ctr.')" ><i class="trash icon"></i></a></td>
				  				
				  				</tr>';
				  				$ctr++;
			  				}
			  			}
		  			}
		  			?>
					
		  			</tbody>
		  		
		  		</table>
		  	</div>
		  </div>
		  <div class="row">
		  	<div class="fifteen wide column">
		  		<!--<a class="ui button green" id="AddRow" >
		  			Add Row
		  		</a>-->
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
								<h4>Subtotal</h4>
								<h2>Total</h2>
							</div>
							<div class="three wide column">
								<h4 id="TotalSave"></h4>
								<h2 id="Total"></h2>

							</div>
						</div>
					</div>
				</div>
	  			<div class="two column row">
	  				<div class="six wide column"></div>
					<div class="three wide column">
						<!--<a href="#" data-content="Print invoice" class="popup"><i class="print big icon"></i>Print Invoice</a>-->
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