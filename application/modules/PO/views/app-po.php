
	  <!--App-content--> 
	  <div class="ui grid home-grid">
	  <div class="row app-content page-header header">
	  		<div class="two wide column hidden"></div>
	   		<div class="seven wide column">
		   		<h1><i class="cart icon"></i>Purchase Orders</h1>
	   		</div>
	   		<div class="five wide right aligned column">
				<div class="ui icon top green right labeled pointing dropdown button">
				  <i class="add icon"></i>
				  New Transaction
				  <div class="menu">
				    <div class="item invoice-modal">
				    <i class="large file text outline icon blue"></i>
				    New Purchase Order</div>
				    <div class="item quotation-modal">
                    <i class="large file text outline icon blue"></i> 
                    New Quotation</div>
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
							    <div class="value">
							      <i class="file text outline icon hvr-wobble-vertical"></i> <?php echo $Draft;?>
							    </div>
							    <div class="label">
							      <a href="#" onclick="filterStatus('Draft');">Draft</a>
							    </div>
							  </div>
							  <div class="purple statistic">
							    <div class="value">
							      <i class="lab icon hvr-buzz-out"></i> <?php echo $Approved;?>
							    </div>
							    <div class="label">
							      <a href="#" onclick="filterStatus('Approved');">Approved</a>
							    </div>
							  </div>
							  <div class="blue statistic">
							    <div class="value">
							      <i class="circle check icon hvr-float"></i> <?php echo $PR;?>
							    </div>
							    <div class="label">
							      <a href="#" onclick="filterStatus('Received');">Received</a>
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
                <div class="ui inverted green segment">
                    <div class="ui top attached tabular inverted green menu">
                        <a class="active item" data-tab="first">Purchase Orders</a>
                        <a class="item" data-tab="second">Quotations</a>
                    </div>	  	
					<div class="ui bottom attached active tab segment" data-tab="first">
						<div class="ui grid">
				  				<div class="two column row">
								    <div class="left floated column eight wide column">
								    	<div class="ui search">
										  <div class="ui icon input">
										    <input class="prompt" type="text" placeholder="Find Purchase Order..." id="search-case">
										    <i class="search icon"></i>
										  </div>
										  <div class="results"></div>
										</div>
								    </div>
							    	<div id="print" style="position: relative;left: -12px;"></div>
							    </div>
						</div>
					  	<br>
					  	<table id="main-case" class="display ui blue table" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>PO#</th>
									<th>Supplier Company</th>
									<th>Date Created</th>
									<th>Requested Ship Date</th>
									<th><center>Status</center></th>
									<th><center>ACTION</center></th>
								</tr>
							</thead>
							<tbody>
							<?php 
							foreach($pos as $po){
								echo
								'<tr>
									<td><a href="'.base_url().'PO/Info/'.$po->POID.'">PO-'.$po->POID.'</a></td>
									<td>
										<h4 class="ui image header">
											          <img src="'.base_url().'app/img/hjm-logo.png" class="ui mini rounded image">
											          <div class="content">';
											          foreach($suppliers as $supplier){
												          if($po->SupplierID == $supplier->SupplierID)
												          	echo
												            '<a href="'.base_url().'Supplier/Info/'.$supplier->SupplierID.'">'.$supplier->title.' '.$supplier->firstname.' '.$supplier->lastname.'</a>
												            <div class="sub header">'.$supplier->company;
											          }
											echo    '</div>
											        </div>
											    </h4>
									</td>
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
					<div class="ui bottom attached  tab segment" data-tab="second">
							<div class="ui grid">
							  				<div class="two column row">
											    <div class="left floated column eight wide column">
											    	<div class="ui search">
													  <div class="ui icon input">
													    <input class="prompt" type="text" placeholder="Find Quotation..." id="search-quote">
													    <i class="search icon"></i>
													  </div>
													  <div class="results"></div>
													</div>
											    </div>
										    	<div id="printquote" style="position: relative;left: -12px;"></div>
										    </div>
							</div>
						  	<br>
						  	<table id="quote" class="display ui blue table" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>RFQ#</th>
										<th>Supplier Company</th>
										<th><center>Date Created</center></th>
										<th><center>Quotation Date Required</center></th>
										<th><center>ACTION</center></th>
									</tr>
								</thead>
								<tbody>
								<?php 
								foreach($quotes as $quote){
									echo
									'<tr>
										<td><a href="#">RFQ-'.$quote->QuoteID.'</a></td>
										<td width="20%">
											<h4 class="ui image header">
												          <img src="'.base_url().'app/img/hjm-logo.png" class="ui mini rounded image">
												          <div class="content">';
												          foreach($suppliers as $supplier){
													          if($quote->SupplierID == $supplier->SupplierID)
													          	echo
													            '<a href="'.base_url().'Supplier/Info/'.$supplier->SupplierID.'">'.$supplier->title.' '.$supplier->firstname.' '.$supplier->lastname.'</a>
													            <div class="sub header">'.$supplier->company;
												          }
												echo    '</div>
												        </div>
												    </h4>
										</td>
										<td style="text-align:center;">'.date('l F d, Y h:i A', strtotime($quote->DateCreated)).'</td>
										<td style="text-align:center;">'.date('l F d, Y ', strtotime($quote->DateRequired)).'</td>
										
										<td>
									
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

<script>
	
</script>
<!-- PO MODAL -->
<script type="text/javascript">

</script>
<div class="ui modal fullscreen invoice">
	 
	  <?php echo form_open('PO/AddPO','class="ui form" onSubmit="return false"');?>
	  		<div class="ui inverted green segment">
	  			  <div class="ui header">
				  <i class="large add to cart icon"></i>
					  New Purchase
				  </div>
	  		</div>
	  		<div class="ui grid">
	  			<div class="row">
					<div class="one wide column hidden"></div>
					<div class="fourteen wide column">
						<label style="color: #9F3A38;font-size: .92857143em;font-weight: 700" id="requiredasterisk">*Required</label>
						<div id="error"></div>
					</div>
					<div class="one wide column hidden"></div>
				</div>
		  		<div class="two column row">
					<div class="column">
						<div class="ui segment">
							<div class="inline fields">
							<div class="eight wide field">
								<label>Supplier <span style="color: #9F3A38;font-weight: 700" >*</span></label>
								<select class="ui selection search dropdown supplierselect" name="SupplierID" id="SupplierID">
									<option value="">Select Supplier</option>
								  
								  	<?php foreach ($suppliers as $supplier) {
								  		echo '<option value="'.$supplier->SupplierID.'" data-path="po" data-email="'.$supplier->email.'" data-fulladdress="'.$supplier->bstreet.', '.$supplier->bbrgy.', '.$supplier->bcity.'">'.$supplier->company.'</option>';
								  	}
								    ?>
								</select>

								
							</div>

							<div class="eight wide field">
								<label>Email</label>
								<input type="text" value="" readonly id="emailpo">
							</div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="ui horizontal segments">
						<div class="ui segment">
							<div class="ui header">
								<h3>PO#:</h3>
								<h1>PO-<?php echo $count+1;?></h1>
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
	  							 <textarea rows="2" readonly id="addresspo"></textarea>
	  						</div>
	  						<div class="field">
	  							<label>Requested Ship Date <span style="color: #9F3A38;font-weight: 700" >*</span></label>
	  							<input type="date" id="duedate" name="shipdate" class="datepicker">
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
								<select class="ui search dropdown Item itemselect" id="Item1"  name="po[1][ItemID]" onchange="getItemDesc(this.value,1);">
									<option value="">Select Item</option>
								  <
								 	<?php
                                        foreach ($items as $item) 
                                        {
                                            echo '<option value="'.$item->ItemID.'" data-path="po" data-id="1" data-description="'.$item->ItemDesc.'" data-qty="'.$item->ReorderQTY.'">'.$item->ItemID.'</option>';
                                        }
                                    ?>
								  </select>
								  
		  					</td>
		  					<td id="ItemDesc1">
		  					
		  					</td>
		  					<td>
		  						<input type="number" style="width: 100px" name="po[1][QTY]" id="QTY1" onkeyup="multiply(1);addSubtotal(1);">
		  					</td>
		  					<td>
		  						<input type="text" name="po[1][Amount]"  id="Amount1" onkeyup="multiply(1);addSubtotal(1);numberCheck(1);" value="0">
		  					</td>
		  					<td>
		  						<input type="text" name="po[1][SubTotal]" id="SubTotal1" value="0">
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
		  		<button class="ui button blue" id="AddRow" onclick="Addrow('po');">
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
						<!-- <a href="purchase-order-print.html" data-content="Print PO" class="popup"><i class="print big icon"></i>Print Purchase Order</a> -->
					</div>
					<div class="right aligned six wide column">
						  <div class="actions" id="footer-modal">
						    <div class="ui grey deny button">
						      Cancel
						    </div>
						    <button class="ui animated green right button" tabindex="0" name="submit" type="submit" value="submit" >
						    <input name="submit" type="hidden" value="submit" >
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

<!-- END PO MODAL -->


<!-- QUOTATION MODAL -->

<div class="ui modal fullscreen quotation">
	 
	  <?php echo form_open('PO/AddQuote','class="ui form" onSubmit="return false"');?>
	  		<div class="ui inverted purple segment">
	  			  <div class="ui header">
				  <i class="large add to cart icon"></i>
					  Request for Quotation
				  </div>
	  		</div>
	  		<div class="ui grid">
	  			<div class="row">
					<div class="one wide column hidden"></div>
					<div class="fourteen wide column">
						<label style="color: #9F3A38;font-size: .92857143em;font-weight: 700" id="requiredasteriskquote">*Required</label>
						<div id="errorquote"></div>
					</div>
					<div class="one wide column hidden"></div>
				</div>
		  		<div class="two column row">
					<div class="column">
						<div class="ui segment">
							<div class="inline fields">
							<div class="eight wide field">
								<label>Supplier <label style="color: #9F3A38;font-weight: 700">*</label></label>
								<select class="ui selection search dropdown supplierselect" name="SupplierID" id="SupplierID">
									<option value="">Select Supplier</option>
								  
								  	<?php foreach ($suppliers as $supplier) {
								  		echo '<option value="'.$supplier->SupplierID.'" data-path="quote" data-email="'.$supplier->email.'" data-fulladdress="'.$supplier->bstreet.', '.$supplier->bbrgy.', '.$supplier->bcity.'">'.$supplier->company.'</option>';
								  	}
								    ?>
								</select>
							</div>
							<div class="eight wide field">
								<label>Email</label>
								<input type="text" value="" readonly id="emailquote">
							</div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="ui horizontal segments">
						<div class="ui segment">
							<div class="ui header">
								<h3>RFQ#:</h3>
								<h1>RFQ-<?php echo $countquote+1;?></h1>
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
	  							 <textarea rows="2" readonly id="addressquote"></textarea>
	  						</div>
	  						<div class="field">
	  							<label>Requested Quotation Date Required <span style="color: #9F3A38;font-weight: 700" >*</span></label>
	  							<input type="date" id="duedate" name="DateRequired" class="datepicker">
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
		  					<th></th>
		  				</tr>
		  			</thead>
		  			<tbody id="QuoteAdd">
		  				<tr id="QuoteRow1">
		  					<td>1</td>
		  					<td >
								<select class="ui search dropdown itemselect" id="QuoteItem1" name="quote[1][ItemID]" onchange="getItemDesc(this.value,1);">
									<option value="">Select Item</option>
								  <
								 	<?php
                                        foreach ($items as $item) 
                                        {
                                            echo '<option value="'.$item->ItemID.'" data-id="1" data-path="quote" data-description="'.$item->ItemDesc.'">'.$item->ItemID.'</option>';
                                        }
                                    ?>
								  </select>
								  
		  					</td>
		  					<td id="QuoteItemDesc1">
		  					
		  					</td>
		  					<td>
		  						<input type="number" style="width: 100px" name="quote[1][QTY]" id="QuoteQTY1" onkeyup="multiply(1);addSubtotal(1);">
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
		  		<button class="ui button purple" id="QuoteAddRow" data-path="quote" onclick="return false;">
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
							
						</div>
					</div>
				</div>
	  			<div class="two column row">
	  				<div class="six wide column"></div>
					<div class="three wide column">
						<!--  <a href="purchase-order-print.html" data-content="Print PO" class="popup"><i class="print big icon"></i>Print Purchase Order</a> -->
					</div>
					<div class="right aligned six wide column">
						  <div class="actions" id="footer-modal">
						    <div class="ui grey deny button">
						      Cancel
						    </div>
						    <input type="hidden" name="submit" value="submit">
						    <button class="ui animated purple right button" tabindex="0" name="submit" type="submit" value="submit" >
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
