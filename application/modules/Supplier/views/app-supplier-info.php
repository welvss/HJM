<div class="ui grid home-grid">
	  <div class="row app-content page-header header">
	  		<div class="one wide column hidden"></div>
	   		<div class="eleven wide column">
		   		<h1 class="ui header">
		   		<i class="truck icon"></i>
		   		<div class="content">
		   			<?php echo $supplier->title.' '.$supplier->firstname.' '.$supplier->lastname;?>
		   			<div class="sub header">
		   			<span><?php echo $supplier->company;?></span>
		   			&nbsp;&nbsp; | &nbsp;&nbsp;
		   			<span><?php echo $supplier->bstreet.', '.$supplier->bbrgy.', '.$supplier->bcity;?></span>
		   			</div>
		   		</div>
		   		</h1>
	   		</div>
	   		<div class="four wide column">
	   		<button class="ui blue button mode">
					  Edit
			</button>
			<div class="ui icon top green right labeled pointing dropdown button">
			  <i class="add icon"></i>
			  New Transaction
			  <div class="menu">
			    <div class="item invoice-modal">
				  <i class="large add to cart icon"></i>
			    New Purchase Order</div>
			  </div>
			</div>
			</div>
			<div class="one wide column hidden"></div>
	  </div>
	  <div class="row">
	  	<div class="one wide column hidden"></div>
	  	<div class="eight wide column">
	  	<br>
	  	</div>
	  	<div class="six wide right aligned column">
	  	<br><br>
		  	<div class="ui horizontal list">
		  		<div class="item">
		  			<h2 class="ui header">
				<a class="ui orange circular label"></a>
				<div class="content">
						  PHP 0.00
				  <div class="sub header">Open Bill</div>
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
	  		<div class="ui stacked inverted green segment">
	  			<div class="ui top attached inverted green tabular menu">
					  <a class="item active" data-tab="second">Supplier Details</a>
					  <a class="item" data-tab="third">Purchase History</a>
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
					  						<h4>Supplier Name</h4>
					  					</div>
					  					<div class="ten wide column">
					  						<p><?php echo $supplier->company;?></p>
					  					</div>
					  				</div>
					  				<div class="row">
					  				<div class="two wide column hidden"></div>
					  					<div class="four wide column">
					  						<h4>Supplier Contact Name</h4>
					  					</div>
					  					<div class="ten wide column">
					  		<p><?php echo $supplier->title.' '.$supplier->firstname.' '.$supplier->lastname;?></p>
					  					</div>
					  				</div>
					  				<div class="row">
					  				<div class="two wide column hidden"></div>
					  					<div class="four wide column">
					  						<h4>Email</h4>
					  					</div>
					  					<div class="ten wide column">
					  						<a href="#"><?php echo $supplier->email;?></a>
					  					</div>
					  				</div>
					  				<div class="row">
					  				<div class="two wide column hidden"></div>
					  					<div class="four wide column">
					  						<h4>Phone</h4>
					  					</div>
					  					<div class="ten wide column">
					  						<p><?php echo $supplier->telephone;?></p>
					  					</div>
					  				</div>
					  				<div class="row">
					  				<div class="two wide column hidden"></div>
					  					<div class="four wide column">
					  						<h4>Mobile</h4>
					  					</div>
					  					<div class="ten wide column">
					  						<p><?php echo $supplier->mobile;?></p>
					  					</div>
					  				</div>
					  				<div class="row">
					  				<div class="two wide column hidden"></div>
					  					<div class="four wide column">
					  						<h4>Website</h4>
					  					</div>
					  					<div class="ten wide column">
					  						<a href="#"><?php echo $supplier->website;?></a>
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
											    <textarea rows="2"><?php echo $supplier->notes;?></textarea>
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
					  						<p><?php echo $supplier->fax;?></p>
					  					</div>
					  				</div>
					  				<div class="row">
					  				<div class="two wide column hidden"></div>
					  					<div class="four wide column">
					  						<h4>Address</h4>
					  					</div>
					  					<div class="ten wide column">
					  						<p><?php echo $supplier->bstreet.', '.$supplier->bbrgy.', '.$supplier->bcity;?></p>
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
			  						<th>PO#</th>
			  						<th>CREATED DATE</th>
			  						<th>AMOUNT</th>
			  						<th>STATUS</th>
			  						<th>ACTION</th>
			  					</tr>
			  				</thead>
			  				<tbody>
			<?php 
			foreach($pos as $po){
				echo
				'<tr>
					<td><a href="'.base_url().'PO/Info/'.$po->POID.'">PO-'.$po->POID.'</a></td>
					
					<td>'.date('l F d, Y h:i A', strtotime($po->orderdatetime)).'</td>
					<td>'.date('l F d, Y ', strtotime($po->shipdate)).'</td>
					<td><center>';
							 foreach ($status as $stat) {
							 	if($stat->POStatusID==$po->POStatusID){
							 		if($po->POStatusID==1)
							 			echo '<div style="color:green;"><b>'.strtoupper($stat->status).'</b></div>';
							 		else
							 		if($po->POStatusID==2)
							 			echo '<div style="color:purple;"><b>'.strtoupper($stat->status).'</b></div>';
							 		else
							 		if($po->POStatusID=3)
							 			echo '<div style="color:blue;"><b>'.strtoupper($stat->status).'</b></div>';
							 	}
							 	
							 }
							  
						echo 
						'
						</center>			
					</td>
					<td>
					<center>';
						if($po->POStatusID<3){
							echo
							'<a class="ui button blue" href="'.base_url().'PO/Info/'.$po->POID.'" class="green">
				  			<i class="green check icon"></i>
				  			Update
				  			</a>
				  			&nbsp;';
				  		}
				  		else{
				  			echo
							'<button class="ui button blue" class="green" disabled>
				  			<i class="green check icon"></i>
				  			Update
				  			</button>
				  			&nbsp;';

				  		}
			  			if($po->POStatusID>1){
				  			echo
							'<a class="ui button blue" href="'.base_url().'PO/POSlip/'.$po->POID.'">
				  			<i class="file icon"></i>
				  			View
				  			</a>';
			  			}
			  			else{
			  				echo
							'<button class="ui button blue" disabled>
				  			<i class="file icon"></i>
				  			View
				  			</button>';
			  			}
			  							
					echo
			  		'</center>	
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
<!--New Supplier Modal-->
	<div class="ui modal fullscreen edit-customer">
		  <div class="header" id="header-modal-supplier">
		   <i class="large green truck icon"></i>
		    Supplier Information
		  </div>
		
		  	<?php echo form_open('Supplier/EditSupplier','class="ui form"').form_hidden('SupplierID',$this->uri->segment(3));?>
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
									  	<option value="Dr."<?php if($supplier->title=="Dr."){echo 'selected';}?>>Dr.</option>
									  	<option value="Dra."<?php if($supplier->title=="Dra."){echo 'selected';}?>>Dra.</option>
								  		<option value="Mr."<?php if($supplier->title=="Mr."){echo 'selected';}?>>Mr.</option>
								  		<option value="Mrs."<?php if($supplier->title=="Mrs."){echo 'selected';}?>>Mrs.</option>
								  		<option value="Ms."<?php if($supplier->title=="Ms."){echo 'selected';}?>>Ms.</option>
								  	</select>
								  </div>
								    <div class="two wide field">
								      <label>First Name</label>
								      <input type="text" placeholder="First Name" name="firstname"  value="<?php echo $supplier->firstname;?>" id="firstName" onkeyup="Inputvalidation('Supplier');">
								    </div>
								    <div class="two wide field">
								      <label>Middle Name</label>
								      <input type="text" placeholder="Middle Name" name="middlename" value="<?php echo $supplier->middlename;?>" id="middleName" onkeyup="Inputvalidation('Supplier');">
								    </div>
								    <div class="two wide field">
								      <label>Last Name</label>
								      <input type="text" placeholder="Last Name" name="lastname" value="<?php echo $supplier->lastname;?>" id="lastName" onkeyup="Inputvalidation('Supplier');">
								    </div>
								    <div class="eight wide field">
								      <label>Email</label>
								      <input type="text" placeholder="i.e. hjmdentallaboratory@gmail.com" name="email" value="<?php echo $supplier->email;?>" id="emails" onchange="Inputvalidation('Supplier');">
								    </div>
								  </div>
								  <div class="fields">
									  <div class="eight wide field">
									  	<label>Company Name</label>
									  	<input type="text" placeholder="i.e. HJM Dental Laboratory" name="company" value="<?php echo $supplier->company;?>">
									  </div>
									  <div class="four wide field">
								    		<label>Telephone</label>
								    		<input type="text" name="telephone" value="<?php echo $supplier->telephone;?>" id="telephone" onkeyup="Inputvalidation('Supplier');">
								    	</div>
								    	<div class="four wide field">
								    		<label>Mobile</label>
								    		<input type="text" name="mobile" name="mobile" value="<?php echo $supplier->mobile;?>" id="mobile" onkeyup="Inputvalidation('Supplier');">
								    	</div>
								  </div>
								  <div class="fields">
									  	<div class="eight wide field">
											<label>Website</label>
										  	<div class="ui labeled input">
												<div class="ui label">
													http://
												</div>
										  	<input type="text" placeholder="i.e. www.hjmdentallaboratory.com" name="website" id="website" value="<?php echo substr($supplier->website,7);?>"  onchange="Inputvalidation('Supplier');">
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
												    <label>Address</label>
												    <textarea rows="2" placeholder="Street" name="bstreet" id="street"><?php echo $supplier->bstreet;?></textarea>
												  </div>
												  <div class="two fields">
												  	<div class="field">
												  		<input type="text" placeholder="City" name="bcity" value="<?php echo $supplier->bcity;?>" id="city">
												  	</div>
												  	<div class="field">
												  		<input type="text" placeholder="Baranggay" name="bbrgy" value="<?php echo $supplier->bbrgy;?>"id="brgy">
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
										<textarea rows="3" placeholder="Additional Notes" name="notes"><?php echo $supplier->notes;?></textarea>
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
	
	<!--Invoice-->
	<div class="ui modal fullscreen invoice">
	 
	  <?php echo form_open('PO/AddPO','class="ui form"');?>
	  		<div class="ui inverted green segment">
	  			  <div class="ui header">
				  <i class="large add to cart icon"></i>
					  New Purchase
				  </div>
	  		</div>
	  		<div class="ui grid">
		  		<div class="two column row">
					<div class="column">
						<div class="ui segment">
							<div class="inline fields">
							<div class="eight wide field">
								<label>Supplier</label>
								
								  <input type="hidden" name="SupplierID"   id="SupplierID" value="<?php echo $supplier->SupplierID;?>">
								  <textarea type="text" rows="2"  readonly><?php echo $supplier->company;?></textarea>
								
								 
								  
							
							</div>
							<div class="eight wide field">
								<label>Email</label>
								<input type="text" value="<?php echo $supplier->email;?>" readonly>
							</div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="ui horizontal segments">
						<div class="ui segment">
							<div class="ui header">
								<h3>PO#:</h3>
								<h1>PO-<?php echo $Count+1;?></h1>
							</div>	
						</div>
						<div class="ui segment">
							<div class="ui header">
								Total
								<h1></h1>
							</div>	
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
	  							 <textarea rows="2" readonly id="address"></textarea>
	  						</div>
	  						<div class="field">
	  							<label>Requested Ship Date</label>
	  							<input type="date" id="duedate" name="shipdate">
	  						</div>
	  					</div>
	  				</div>
	  			</div>
	  		</div>

		  <div class="ui centered grid">
		  <div class="row">
		  	<div class="fifteen wide column">
		  	<form class="ui form">
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
		  				<tr id="Row1">
		  					<td>1</td>
		  					<td >
								<div class="ui selection dropdown" id="Idropdown">
									<input type="hidden" id="Item1" name="po[1][ItemID]" onchange="getItemDesc(this.value,1);">
									<i class="dropdown icon"></i>
									<div class="default text">Select Item</div>
									<div class="menu" id="items1">
										<?php 
											foreach ($items as $item) {
												echo '<div class="item" data-value="'.$item->ItemID.'">'.$item->ItemID.'</div>';
											}
										?>
									</div>
								</div>
								  
		  					</td>
		  					<td id="ItemDesc1">
		  					
		  					</td>
		  					<td>
		  						<input type="number" style="width: 100px" name="po[1][QTY]" id="QTY1" onkeyup="multiply(1);addSubtotal(1);">
		  					</td>
		  					<td>
		  						<input type="text" name="po[1][Amount]"  id="Amount1" onkeyup="multiply(1);addSubtotal(1);numberCheck(1);" >
		  					</td>
		  					<td>
		  						<input type="text" name="po[1][SubTotal]" id="SubTotal1" >
		  					</td>
		  					<td></td>
		  				</tr>
		  			</tbody>
		  		</table>
		  	</form>
		  	</div>
		  </div>
		  <div class="row">
		  	<div class="fifteen wide column">
		  		<button class="ui button blue" id="AddRow" onclick="Addrow();">
		  			Add Row
		  		</button>
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
						<a href="purchase-order-print.html" data-content="Print PO" class="popup"><i class="print big icon"></i>Print Purchase Order</a>
					</div>
					<div class="right aligned six wide column">
						  <div class="actions" id="footer-modal">
						    <div class="ui grey deny button">
						      Cancel
						    </div>
						    <button class="ui animated green right button" tabindex="0" type="submit" value="submit" >
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
	<br><br>
	</div>
