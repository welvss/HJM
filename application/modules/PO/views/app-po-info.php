
	  <!--App-content--> 
	  <div class="ui grid home-grid">
	  <div class="row app-content page-header header">
	  		<div class="two wide column hidden"></div>
	   		<div class="six wide column">
		   		<h1><i class="green add to cart icon"></i>Purchase Order Details</h1>
	   		</div>
	   		<div class="six wide right aligned column">
	   		
			
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
				  	<div class="ten wide column">
		  	  				<div class="ui teal segment" style="height: 200px;">
		  	  					<div class="ui header teal">
		  	  						<h3 class="ui blue  header">
		  	  							Purchase Order Information
		  	  						</h3>
		  	  						<hr>
		  	  					</div>
		  	  					<div class="ui horizontal segments">
		  	  						<div class="ui segment">
		  	  							<div class="ui horizontal list">
		  	  								<div class="item">
		  	  									<label><strong>Supplier Contact: </strong></label>
		  	  									<?php echo $supplier->title.' '.$supplier->firstname.' '.$supplier->lastname;?>
		  	  								</div>
		  	  								<div class="item">
		  	  									<label><strong>Company: </strong></label>
		  	  									<?php echo $supplier->company;?>
		  	  								</div>
		  	  							</div>
		  	  							<div class="ui middle aligned divided list">
		  	  								<div class="item">
		  	  									<label>Created On: </label>
		  	  									<?php echo date('m/d/Y', strtotime($po->orderdatetime));?>
		  	  								</div>
		  	  								<div class="item">
		  	  									<label>Received on: <?php if($po->receivedate!=null)echo date('m/d/Y', strtotime($po->receivedate)); else echo 'N/A';?> </label>

		  	  								</div>
		  	  							</div>
		  	  						</div>
		  	  						<div class="ui segment">
		  	  							<div class="item">
		  	  								<div class="ui blue centered header">
		  	  								<br>
		  	  									<div class="content">
		  	  										PO Number
		  	  										<div class="sub header">
		  	  											<h2><strong>PO-<?php echo $po->POID;?></strong></h2>
		  	  										</div>
		  	  									</div>
		  	  								</div>
		  	  							</div>
		  	  						</div>
		  	  					</div>
		  	  				</div>
				  	</div>	
				  	<div class="six wide column">
					<?php
					if($po->POStatusID==1)
						echo
				  		'<div class="ui inverted green segment">
				  			<div class="ui centered header">
				  				<h1>Draft</h1>
				  			</div>
				  		</div>';
				  	if($po->POStatusID==2)
				  		echo
				  		'<div class="ui inverted purple segment">
				  			<div class="ui centered header">
				  				<h1>Approved</h1>
				  			</div>
				  		</div>';
				  	if($po->POStatusID==3)
				  		echo
				  		'<div class="ui inverted blue segment">
				  			<div class="ui centered header">
				  				<h1>Received</h1>
				  			</div>
				  		</div>';

				  	?>
				  	</div>

		      		</div>
	  	  	  </div>
	  	 </div>
	  	  <div class="row">
	  	  	<div class="fifteen wide column">
	  	  		<div class="ui teal segment">
	  	  			<h3 class="ui header">
	  	  				Order Details
	  	  				<hr>
	  	  			</h3>
	  	  			<div class="ui grid">
	  	  				<div class="row">
	  	  					<div class="ten wide column">
	  	  						
	  	  							
	  	  						<?php
								if($po->POStatusID==1)
									echo
									'<h2 class="ui red header">
										Not yet Approve!
									</h2>';
								if($po->POStatusID==2)
									echo	
									'<h2 class="ui green header">
										Approved!
									</h2>';
								

								?>
	  	  						
	  	  					</div>
	  	  					<div class="six wide column">
	  	  						<?php
	  	  						if($po->POStatusID==1)
									echo
		  	  						'<button class="ui gray button mode invoice-modal">
											  Edit Purchase Order
									</button>';
								
								if($po->POStatusID==1)
									echo
									form_open('PO/UpdatePOStatus').form_hidden('POID',$this->uri->segment(3)).form_hidden('POStatusID',2).form_hidden('loc','PO/Info/'.$this->uri->segment(3)).
									'<button type="submit" class="ui purple button mode">
												  Approve Purchase Order
										</button>
									</form>';
								if($po->POStatusID>1)
									echo	
									'<a href="'.base_url().'PO/POSlip/'.$po->POID.'"class="ui gray button mode">
											  Print Purchase Order
									</a>';

								if($po->POStatusID==2)
									echo
									form_open('PO/UpdatePOStatus').form_hidden('POID',$this->uri->segment(3)).form_hidden('POStatusID',3).form_hidden('loc','PO/Info/'.$this->uri->segment(3)).
									'<button type="submit" class="ui blue button mode">
												  Receive Purchase Order
										</button>
									</form>';

								?>
	  	  					</div>
	  	  				</div>
	  	  			</div>
	  	  			<table class="ui inverted blue table">
						<thead>
							<tr>
								<th>Item Code</th>
								<th>Item Description</th>
								<th>Qty</th>
								<th>Amount</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($poitems as $pi){
							echo '<tr>
								<td>'.$pi->ItemID.'</td>';
								foreach ($items as $item) {
									if($item->ItemID==$pi->ItemID)
									echo '<td>'.$item->ItemDesc.'</td>';
								}
								echo
								'<td>'.$pi->QTY.'</td>
								<td>PHP '.number_format($pi->Amount,2).'</td>
								<td>PHP '.number_format($pi->SubTotal,2).'</td>
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
									PHP <?php echo number_format($po->Total,2);?>
								</div>
								<div class="item">
									<h2>PHP <?php echo number_format($po->Total,2);?> </h2>
								</div>
							</div>
						</div>
					</div>
	  	  		</div>
	  	  	</div>
	  	  </div>
	  	  
	  	  <div class="row"></div>
	  </div>
	<!--Purchase Order-->
	<div class="ui modal fullscreen invoice">
	 
	  <?php echo form_open('PO/EditPO','class="ui form"').form_hidden('POID',$this->uri->segment(3));?>
	  		<div class="ui inverted green segment">
	  			  <div class="ui header">
				  <i class="large add to cart icon"></i>
					  Edit Purchase
				  </div>
	  		</div>
	  		<div class="ui grid">
		  		<div class="two column row">
					<div class="column">
						<div class="ui segment">
							<div class="inline fields">
							<div class="eight wide field">
								<label>Supplier</label>
								  <input type="text" value="<?php echo $supplier->company;?>" readonly id="SupplierName">
								  <input type="hidden" name="SupplierID" id="SupplierID" value="<?php echo $po->SupplierID;?>">
							</div>
							<div class="eight wide field">
								<label>Email</label>
								<input type="text" value="<?php echo $supplier->email;?>" readonly id="email">
							</div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="ui horizontal segments">
						<div class="ui segment">
							<div class="ui header">
								<h3>PO#:</h3>
								<h1>PO-<?php echo $po->POID;?></h1>
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
	  							 <textarea rows="2" readonly id="address"><?php echo $supplier->bstreet.', '.$supplier->bbrgy.', '.$supplier->bcity;?></textarea>
	  						</div>
	  						<div class="field">
	  							<label>Requested Ship Date</label>
	  							<input type="date" id="duedate" name="shipdate" value="<?php echo date($po->shipdate);?>">
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
		  			<?php
		  			$x=1;
		  			foreach ($poitems as $pi){
		  			echo
		  				'<tr id="Row'.$x.'">
		  					<td>'.$x.'</td>
		  					<td >
								<select class="select"  id="Item1" name="po['.$x.'][ItemID]" onchange="getItemDesc(this.value,'.$x.');">';
									
							
									foreach ($items as $item) {
										if($pi->ItemID==$item->ItemID)
						    				echo  '<option class="item" data-value="'.$item->ItemID.'" selected>'.$item->ItemID.'</option>';
						    			else
						    				echo  '<option class="item" data-value="'.$item->ItemID.'">'.$item->ItemID.'</option>';
						    	  	}
								echo 
								'</select>
								  
		  					</td>
		  					<td id="ItemDesc'.$x.'">';
							foreach ($items as $item) {
								if($pi->ItemID==$item->ItemID)
		  							echo $item->ItemDesc;
		  					}
		  					
		  					echo
		  					'</td>
		  					<td>
		  						<input type="number" style="width: 100px" name="po['.$x.'][QTY]" id="QTY'.$x.'" onkeyup="multiply('.$x.');addSubtotal('.$x.');" value="'.$pi->QTY.'">
		  					</td>
		  					<td>
		  						<input type="text" name="po['.$x.'][Amount]"  id="Amount'.$x.'" onkeyup="multiply('.$x.');addSubtotal('.$x.');numberCheck('.$x.');" value="'.$pi->Amount.'">
		  					</td>
		  					<td>
		  						<input type="text" name="po['.$x.'][SubTotal]" id="SubTotal'.$x.'" value="'.$pi->SubTotal.'">
		  					</td>
		  					<td><a href="#" onClick="deleteRow('.$x.')"><i class="trash icon" id="Bin'.$x.'"></i></a></td>
		  				</tr>';
		  				$x++;
		  			}
		  			?>
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
								<h4 id="TotalSave"><input type hidden name="Total" id="sum" value="<?php echo $po->Total;?>"/>PHP <?php echo number_format($po->Total,2);?></h4>
								<h2 id="Total">PHP <?php echo number_format($po->Total,2);?> </h2>

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
