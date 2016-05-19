<!--App-content--> 
	  <div class="ui grid home-grid">
	  <div class="row app-content page-header header">
	  		<div class="two wide column hidden"></div>
	   		<div class="seven wide column">
		   		<h1><i class="file text outline icon"></i>Cases</h1>
	   		</div>
	   		<div class="five wide right aligned column">
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
			    <div class="item">
			    <i class="icons">
				  <i class="large file outline dont icon"></i>
				  <i class="green small dollar icon"></i>
				</i>
			    Invoice</div>
			  </div>
			</div>
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
		  	  									<?php echo $dentist->company?>
		  	  								</div>
		  	  							</div>
		  	  							<div class="ui middle aligned divided list">
		  	  								<div class="item">
		  	  									<label>Received On: </label>
		  	  									<?php echo date('m/d/Y',strtotime($case->orderdatetime));?>
		  	  								</div>
		  	  								<div class="item">
		  	  									<label>Created On: </label>
		  	  									05/27/2016
		  	  								</div>
		  	  								<div class="item">
		  	  									<label>Completed On: </label>
		  	  									05/27/2016
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
				  				<div class="ui inverted violet segment">
				  					<label for="">Status:</label>
				  				<i class="lab icon"></i>In Production
				  				</div>
				  				<!--Status Selection
				  				<div class="ui inverted green segment">
				  					<label for="">Status:</label>
				  				<i class="file text outline icon"></i>New
				  				</div>
				  				<div class="ui inverted red segment">
				  					<label for="">Status:</label>
				  				<i class="warning circle icon"></i>On Hold
				  				</div>
				  				<div class="ui inverted blue segment">
				  					<label for="">Status:</label>
				  				<i class="check icon"></i>Completed
				  				</div> -->
					  			<div class="ui horizontal segments">
					  				<div class="ui segment">
					  					<div class="ui small statistic">
										  <div class="value">
										    <?php echo date('m/d/Y',strtotime($case->orderdatetime));?>
										  </div>
										  <div class="label">
										    Date Received
										  </div>
										</div>
					  				</div>
					  				<div class="ui segment">
					  					<div class="ui red small statistic">
										  <div class="value">
										   <?php echo date('m/d/Y',strtotime($case->duedate));?>
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
				  							<?php foreach ($teeth as $tooth) {
				  								echo $tooth->teeth.',';
				  								
				  							}?>
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
	  	  				<div class="ui teal segment">
	  	  					<h3 class="ui header">
	  	  						Special Instrucions
	  	  					</h3>
	  	  				</div>
	  	  			</div>
	  	  			<div class="eight wide column">
	  	  				<div class="ui teal segment">
	  	  					<h3 class="ui header">
	  	  						Attachments
	  	  					</h3>
	  	  				</div>
	  	  			</div>
	  	  		</div>
	  	  	</div>
	  	  </div>
	  	  <div class="row">
	  	  	<div class="fifteen wide column">
	  	  		<div class="ui segment">
	  	  			<h3 class="ui header">
	  	  				Invoice
	  	  			</h3>
	  	  		</div>
	  	  	</div>
	  	  </div>
	  	  <div class="row">
	  	  	
	  	  </div>
	  </div>
	<!--New Case-->
	<div class="ui modal large case">
	  <form class="ui form">
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
			  		<h3>#SERDS-M0KW1D</h3>
			  	</div>
			  </div>
		  		<div class="ui teal segment">
		  				<div class="fields">
		  			<div class="four wide field">
		  				<label>Doctor</label>
		  				<input type="text" name="doctor" placeholder="" value="Dr. Mark Serojihos">
		  			</div>
		  			<div class="four wide field">
		  				<label>Patient first name</label>
		  				<input type="text" name="last-name" placeholder="First Name">
		  			</div>
		  			<div class="four wide field">
		  				<label>Patient last name</label>
		  				<input type="text" name="last-name" placeholder="Last Name">
		  			</div>	  		
				  <div class="three wide field">
					  <label>Gender</label>
					    <select>
					      <option value="">Gender</option>
					      <option value="1">Male</option>
					      <option value="0">Female</option>
					    </select>
				  </div>
				   <div class="one wide field">
				    <label>Age</label>
				    <input type="text" name="last-name">
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
		  			<img class="ui centered large image"src="img/teeth-structure.png" alt="">
		  			<div class="field">
 				  	<label>Teeth</label>
 				  	<select name="skills" multiple="" class="ui fluid dropdown">
 					<option value="1">1</option>
 					<option value="2">2</option>
 					<option value="3">3</option>
 					<option value="4">4</option>
 					<option value="5">5</option>
 					<option value="6">6</option>
 					<option value="7">7</option>
 					<option value="8">8</option>
 					<option value="9">9</option>
 					<option value="10">10</option>
 					<option value="11">11</option>
 					<option value="12">12</option>
 					<option value="13">13</option>
 					<option value="14">14</option>
 					<option value="15">15</option>
 					<option value="16">16</option>
 					<option value="17">17</option>
 					<option value="18">18</option>
 					<option value="19">19</option>
 					<option value="20">20</option>
 					<option value="21">21</option>
 					<option value="22">22</option>
 					<option value="23">23</option>
 					<option value="24">24</option>
 					<option value="25">25</option>
 					<option value="26">26</option>
 					<option value="27">27</option>
 					<option value="28">28</option>
 					<option value="29">29</option>
 					<option value="30">30</option>
 					<option value="31">31</option>
 					<option value="32">32</option>
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
						        <input type="radio" name="fruit" checked="" tabindex="0" class="hidden">
						        <label>1 Shade</label>
						      </div>
						    </div>
						    <div class="field">
						      <div class="ui radio checkbox">
						        <input type="radio" name="fruit" tabindex="0" class="hidden">
						        <label>2 shades</label>
						      </div>
						    </div>
						    <div class="field">
						      <div class="ui radio checkbox">
						        <input type="radio" name="fruit" tabindex="0" class="hidden">
						        <label>3 shades</label>
						      </div>
						    </div>
						  </div>
						  <div class="inline fields">
						  	  <div class="field">
						      <div class="ui radio checkbox">
						        <input type="radio" name="fruit" tabindex="0" class="hidden">
						        <label>No shade</label>
						      </div>
						    </div>
						    <div class="field">
						      <div class="ui radio checkbox">
						        <input type="radio" name="fruit" tabindex="0" class="hidden">
						        <label>Provide Shade Later</label>
						      </div>
						    </div>
						  </div>
						  <div class="five wide field">
						  	<select>
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
								      <input type="checkbox" tabindex="0" class="hidden">
								      <label>Tray</label>
								    </div>
								  </div>
								    <div class="field">
								    	<div class="ui checkbox">
								      <input type="checkbox" tabindex="0" class="hidden">
								      <label>Shade Guide</label>
								    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden">
									      <label>Bite Wax</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden">
									      <label>Model Cast</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden">
									      <label>Opposing Cast</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden">
									      <label>Photos</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden">
									      <label>Articulator</label>
									    </div>
								    </div>
								    <div class="field">
									    <div class="ui checkbox">
									      <input type="checkbox" tabindex="0" class="hidden">
									      <label>Old Denture</label>
									    </div>
								    </div>
				  				</div>
				  				<div class="column">
				  					<h3 class="ui header">Doctor's Special Instruction</h3>
				  					 <hr>
				  					   <div class="field">
										    <textarea></textarea>
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
							    <input type="date" name="last-name" placeholder="Last Name">
							  </div>
							  <div class="field">
							    <label>Due Time</label>
							    <input type="time" name="last-name" placeholder="Last Name">
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
	