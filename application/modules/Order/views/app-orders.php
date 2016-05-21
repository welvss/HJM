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
							  <div class="green statistic">
							    <div class="value" id="new_count_order">
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
	  	<table id="main-case" class="display ui blue table" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Case#</th>
					<th>INVOICE</th>
					<th>CUSTOMER/COMPANY</th>
					<th>PATIENT</th>
					<th>ORDERED DATE</th>
					<th>DUE</th>
					<th>STATUS</th>
					<th>LAB SLIP</th>
					
				</tr>
			</thead>
			<tbody id="order_notif">
			<?php 
			foreach ($cases as $case ) 
			{
				
						echo
					'<tr>
						<td><a href="'.base_url().'Order/Info/'.$case->CaseID.'">#SERDS-'.$case->CaseID.'</a></td>
						<td><a href="#">420</a></td>
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
						<td>'.date('l F d, Y ', strtotime($case->duedate)).date('h:i A', strtotime($case->duetime)).'</td>';
						echo
						
						'<td>
							'.form_open('Order/UpdateOrderStatus').form_hidden('CaseID',$case->CaseID).'
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
						    <button type="submit" class="ui blue button mode" value="submit">
				  			<i class="green check icon"></i>
				  			Update
				  			</button>
				  			</form>				
						</td>
						<td>
							<button class="ui blue button" onClick="printRX(this.value);" value="'.$case->CaseID.'">
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
	<!--New Case-->
	<div class="ui modal large case">
	  <?php echo form_open('Order/AddOrder','class="ui form"');?>
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
			  		<h3>#SERDS-<?php echo $Count+1;?></h3>
			  	</div>
			  </div>
		  		<div class="ui teal segment">
		  				<div class="fields">
		  			<div class="four wide field">
		  				<label>Doctor</label>
		  				<select name="DentistID" class="ui fluid dropdown" required>
		  					
		  				<?php foreach ($dentists as $dentist) 
		  				{
		  					echo '<option value="'.$dentist->DentistID.'">'.$dentist->title.' '.$dentist->firstname.' '.$dentist->lastname.'</option>';
		  				}?>
		  				</select>
		  			</div>
		  			<div class="four wide field">
		  				<label>Patient First Name</label>
		  				<input type="text" name="patientfirstname" placeholder="First Name">
		  			</div>
		  			<div class="four wide field">
		  				<label>Patient Last Name</label>
		  				<input type="text" name="patientlastname" placeholder="Last Name">
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
 				  	<select multiple name="teeth[]" class="ui fluid dropdown">
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
					  <label>Item</label>
					    <select name="item" multiple="" class="ui fluid dropdown">
					      <option value=""></option>
					      <option value="ep">Emax Porcelain (epjc)</option>
					      <option value="pfm">Porcelain Fused to Metal-pfm2</option>
					      <option value="fw">One Piece (framework only)</option>
					      <option value="dr">Denture Repair</option>
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
								      <input type="checkbox" tabindex="0" class="hidden" name="Tray" value=1>
								      <label>Tray</label>
								    </div>
								  </div>
								    <div class="field">
								    	<div class="ui checkbox">
								      <input type="checkbox" tabindex="0" class="hidden" name="SG" value=1>
								      <label>Shade Guide</label>
								    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden" name="BW" value=1>
									      <label>Bite Wax</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden" name="MC" value=1>
									      <label>Model Cast</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden" name="OC" value=1>
									      <label>Opposing Cast</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden" name="Photos" value=1>
									      <label>Photos</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden" name="Articulator" value=1>
									      <label>Articulator</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden" name="OD" value=1>
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
	