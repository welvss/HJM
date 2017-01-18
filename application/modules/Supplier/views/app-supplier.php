<div class="ui grid home-grid">
	  <div class="row app-content page-header header">
	  		<div class="two wide column hidden"></div>
	   		<div class="seven wide column"><h1><i class="green truck icon"></i>Supplier</h1></div>
	   		<div class="five wide right aligned column">
	   		<button class="ui green circular icon button mode">
			  		<i class="plus icon"></i>
			</button>
			Add New Supplier
			</div>
			<div class="one wide column hidden"></div>
	  </div>
	  <div class="row header">
	  	<div class="thirteen wide column centered grid">
	  			<!---
				 <div class="ui horizontal segments income">
					  <button class="ui segment openInvoices hvr-sweep-to-bottom">
					    <h3>PHP 13, 000</h3>
					    <p class="sub-header"><span><strong>0</strong></span> OPEN BILL</p>
					  </button>
					  <button class="ui segment overdue hvr-sweep-to-bottom">
					    <h3>PHP 14, 000</h3>
					     <p class="sub-header"><span><strong>0</strong></span> OVERDUE</p>
					  </button>
					  <button class="ui segment paid hvr-sweep-to-bottom">
					    <h3>43,000 PHP</h3>
					     <p class="sub-header"><span><strong>23</strong></span> PAID LAST 30 DAYS</p>
					  </button>
				 </div>
				-->
	  	</div>
	  </div>      
	  </div>
	  <div class="ui grid">
	  	<div class="row">
	  		<div class="thirteen wide column centered grid">
	  		<div class="ui stacked green segment">
	  		<div class="row">
	  			<div class="ui grid">
	  				<div class="two column row">
				    <div class="left floated column eight wide column">
				    	<div class="ui search">
						  <div class="ui icon input">
						    <input class="prompt" type="text" placeholder="Find Supplier..." id="search-customer">
						    <i class="search icon"></i>
						  </div>
						  <div class="results"></div>
						</div>
				    </div>
				    <div id="print">
				    	
				    </div>
				    </div>
	  			</div>
	  		</div>
	  		<br>
	  			<table id="customer-table" class="display ui green table" cellspacing="0" width="100%">
	  				<thead>
	  					<tr>
	  						<th>SUPPLIER/ COMPANY</th>
	  						<th>PHONE</th>
	  						<th>EMAIL ADDRESS</th>
	  						
	  					</tr>
	  				</thead>
	  				<tbody>
	  					<?php 
	  					foreach ($suppliers as $supplier) 
	  					{
	  					echo
		  					'<tr>
		  						<td>
		  							<h4 class="ui image header">
								          <i class="truck icon"></i>
								          <div class="content">
								            <a href="'.base_url('Supplier/Info/'.$supplier->SupplierID).'">'.$supplier->title.' '.$supplier->firstname.' '.$supplier->lastname.'</a>
								            <div class="sub header">'.$supplier->company.'
								          </div>
								        </div>
								    </h4>
		  						</td>
		  						<td>'.$supplier->telephone.'</td>
		  						<td>'.$supplier->email.'</td>
		  						
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
<!--New Supplier Modal-->
	<div class="ui modal fullscreen">
		  <div class="header" id="header-modal-supplier">
		   <i class="large green truck icon"></i>
		    Supplier Information
		  </div>
		  <?php echo form_open('Supplier/AddSupplier','class="ui form"');?>
			<div class="ui grid" id="add-dentist-modal">
				<div class="row">
					<div class="one wide column hidden"></div>
					<div class="fourteen wide column">
						<div id="error"><label style='color: #9F3A38;font-size: .92857143em;font-weight: 700'>*Required</label></div>
					</div>
					<div class="one wide column hidden"></div>
				</div>
				<div class="row">
					<div class="one wide column hidden"></div>
						<div class="fourteen wide column">
								  <div class="fields">
								  <div class="two wide field">
								  	<label>Title <span style="color: #9F3A38;">*</span></label>
								  	<select name="title" class="ui fluid dropdown">
									  	<option value="">Select Title</option>
									  	<option value="Mr.">Dr.</option>
									  	<option value="Mr.">Dra.</option>
								  		<option value="Mr.">Mr.</option>
								  		<option value="Mr.">Mrs.</option>
								  		<option value="Mr.">Ms.</option>
								  	</select>
								  </div>
								    <div class="two wide field">
								      <label>First Name <span style="color: #9F3A38;">*</span></label>
								      <input type="text" placeholder="First Name" name="firstname" id="firstName" onkeyup="Inputvalidation('Supplier');">
								    </div>
								    <div class="two wide field">
								      <label>Middle Name</label>
								      <input type="text" placeholder="Middle Name" name="middlename" id="middleName" onkeyup="Inputvalidation('Supplier');">
								    </div>
								    <div class="two wide field">
								      <label>Last Name <span style="color: #9F3A38;">*</span></label>
								      <input type="text" placeholder="Last Name" name="lastname" id="lastName" onkeyup="Inputvalidation('Supplier');">
								    </div>
								    <div class="eight wide field">
								    	<label>Email</label>
								    	<input type="text" placeholder="i.e. hjmdentallaboratory@gmail.com" name="email" id="email" onchange="Inputvalidation('Supplier');">
								    </div>
								  </div>
								  <div class="fields">
									  <div class="eight wide field">
									  	<label>Company Name <span style="color: #9F3A38;">*</span></label>
									  	<input type="text" placeholder="i.e. HJM Dental Laboratory" name="company">
									  </div>
									  <div class="four wide field">
								    		<label>Telephone</label>
								    		<input type="text" name="telephone" id="telephone" onkeyup="Inputvalidation('Supplier');">
								    	</div>
								    	<div class="four wide field">
								    		<label>Mobile</label>
								    		<input type="text" name="mobile" name="mobile" id="mobile" onkeyup="Inputvalidation('Supplier');">
								    	</div>
								  </div>
								  <div class="fields">
									  	<div class="eight wide field">
											<label>Website</label>
										  	<div class="ui labeled input">
												<div class="ui label">
													http://
												</div>
										  		<input type="text" placeholder="i.e. www.hjmdentallaboratory.com" name="website" id="website" value="www."  onchange="Inputvalidation('Supplier');">
											</div>
										</div>
										<div class="eight wide field">
											<label>Fax</label>
											<input type="text" name="fax" id="fax" onkeyup="Inputvalidation('Supplier');">
										</div>
								    </div>
								  <!--Tabs-->
						<br>
						<div class="row">
							<div class="one wide column hidden"></div>
							<div class="fourteen wide column">
									<div class="ui top attached inverted green tabular menu">
								  <a class="item active" data-tab="address">Address</a>
								  <a class="item" data-tab="notes">Notes</a>
								</div>
								<div class="ui bottom attached tab segment active" data-tab="address">
								 	<div class="row">
									 	<div class="ui two column stackable grid">
									 		<!--Billing Address -->
									 		<div class="centered column">
												  <div class="field">
												    <label>Address <span style="color: #9F3A38;">*</span></label>
												    <textarea rows="2" placeholder="Street" name="bstreet" id="street"></textarea>
												  </div>
												  <div class="two fields">
												  	<div class="field">
												  		<input type="text" placeholder="City" name="bcity" id="city">
												  	</div>
												  	<div class="field">
												  		<input type="text" placeholder="Baranggay" name="bbrgy" id="brgy">
												  	</div>
												  </div>
									 		</div>
									 	</div>
									 </div>
								</div>
								<div class="ui bottom attached tab segment" data-tab="notes">
									<div class="ui form">
										<div class="field">
										<label>Notes</label>
										<textarea rows="3" placeholder="Additional Notes" name="notes"></textarea>
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
						    <button class="ui animated green right button" tabindex="0" type="submit" value="submit" id="submit">
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