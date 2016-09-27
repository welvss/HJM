<!--App-content--> 
	  <div class="ui grid home-grid">
	  <div class="row app-content page-header header">
	  		<div class="two wide column hidden"></div>
	   		<div class="seven wide column">
		   		<h1><i class="file text outline icon"></i>Cases</h1>
	   		</div>
	   		<div class="five wide right aligned column">
	   		
			<div class="ui icon top teal right labeled pointing dropdown button">
			  <i class="add icon"></i>
			  New Transaction
			  <div class="menu">
			    <div class="item case-modal">
			    <i class="large file text outline icon blue"></i>
			    Case</div>
			    <!--<div class="item">
			    <i class="icons">
				  <i class="large file outline dont icon"></i>
				  <i class="green small dollar icon"></i>
				</i>
			    Invoice</div>-->
			  </div>
			</div>
			</div>
			<div class="one wide column hidden"></div>
	  </div>
	  </div>
	  <br><br><br><br>
	  <div class="ui centered grid">
		  <div class="ui teal segment">
		  	 <div class="row">
		  	<div class="eight wide column">
		  	<br>
		  		<div class="ui tiny statistics">
		  					<input type="hidden" id="stat">
							  <div class="green statistic">
							    <div class="value" id="new_count_order">
							      <i class="file text outline icon hvr-wobble-vertical"></i> <?php echo $New;?>
							    </div>
							    <div class="label">
							      <a href="#" onclick="filterStatus('New');">New Cases</a>
							    </div>
							  </div>
							  <div class="purple statistic">
							    <div class="value">
							      <i class="lab icon hvr-buzz-out"></i> <?php echo $IP;?>
							    </div>
							    <div class="label">
							      <a href="#" onclick="filterStatus('In Production');">In Production</a>
							    </div>
							  </div>
							  <div class="blue statistic">
							    <div class="value">
							      <i class="circle check icon hvr-float"></i> <?php echo $Completed;?>
							    </div>
							    <div class="label">
							      <a href="#"  onclick="filterStatus('Completed');">Completed Cases</a>
							    </div>
							  </div>
							  <div class="red statistic">
							    <div class="value">
							      <i class="warning circle icon hvr-buzz"></i> <?php echo $Hold;?>
							    </div>
							    <div class="label">
							    <a href="#" onclick="filterStatus('On Hold');">On Hold</a>
							    </div>
							  </div>
				</div>
		  	</div>
	  	  </div> 
		  </div>
	  </div>
	  <!--Tab-->
	  <div class="ui centered grid">
	  <div class="fifteen wide column">
	  <div class="row">
	  			<div class="ui grid">
	  				<div class="two column row">
				    <div class="left floated column eight wide column">
				    	<div class="ui search">
						  <div class="ui icon input">
						    <input class="prompt" type="text" placeholder="Find Case..." id="search-case">
						    <i class="search icon"></i>
						  </div>
						  <div class="results"></div>
						</div>
				    </div>
				    <div id="print"></div>
				    </div>
	  			</div>
	  </div>
	  <br>
	  	<table id="main-case" class="display ui blue table" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Case#</th>
					<th>INVOICE</th>
					<th>CUSTOMER/COMPANY</th>
					<th>PATIENT</th>
					<th>ORDERED DATE</th>
					<th>DUE DATE</th>
					<th>STATUS</th>
					<th><center>ACTIONS</center></th>
					
				</tr>
			</thead>
			<tbody id="order_notif">
			<?php 
			foreach ($cases as $case) 
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
									echo '<a href="'.base_url('Invoice/InvoiceSlip/'.$i->InvoiceID).'" >Invoice # '.$i->InvoiceID.'</a>';
								else
									echo '<p >Invoice # '.$i->InvoiceID.'</p>';
							}
						}


						echo
						'</td>
						<td>
							<h4 class="ui image header">
								        <img src="'.base_url().'app/img/hjm-logo.png" class="ui mini rounded image">
								        <div class="content">';
						foreach ($dentists as $dentist) 
						{
							if($case->DentistID==$dentist->DentistID)
							{     
								echo
								            '<a href="Customer/Info/'.$case->DentistID.'">'.$dentist->title.' '.$dentist->firstname.' '.$dentist->lastname.'</a>
								            <div class="sub header">'.$dentist->company.'</div>';
							}
						}
							echo	          
										'</div>
							</h4>
						</td>
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
	<!--New Case-->
	<div class="ui modal large case">
	  <?php echo form_open_multipart('Order/AddOrder','class="ui form"');?>
	  	<?php echo form_hidden('module',2);?>

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
		  				<select name="DentistID" class="ui fluid dropdown">
		  					<option value="">Select Doctor</option>
		  				<?php foreach ($dentists as $dentist) 
		  				{
		  					echo '<option value="'.$dentist->DentistID.'">'.$dentist->title.' '.$dentist->firstname.' '.$dentist->lastname.'</option>';
		  				}?>
		  				</select>
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
					    <select name="gender">
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
					    <select name="CaseTypeID" id="CaseTypeID" class="ui fluid dropdown" onchange="getID(this.value);">
					    
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
						  		<option value="">Select Shade</option>
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
								    <input type="file" id="file" name="file" size="20"/>
							</div>
							<div class="ui header">
					  				Due
					  		</div>
							<div class="fields">
								<div class="field">
							    <label>Due Date</label>
							    <input type="date" name="duedate" placeholder="Last Name" id="duedate">
							  </div>
							  <div class="field">
							    <label>Due Time</label>
							    <input type="time" name="duetime" placeholder="Last Name" id="duetime" class="datepicker">
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
	