
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
							      <i class="file text outline icon hvr-wobble-vertical"></i> 23
							    </div>
							    <div class="label">
							      <a href="#">Draft</a>
							    </div>
							  </div>
							  <div class="purple statistic">
							    <div class="value">
							      <i class="lab icon hvr-buzz-out"></i> 11
							    </div>
							    <div class="label">
							      <a href="#">Approved</a>
							    </div>
							  </div>
							  <div class="blue statistic">
							    <div class="value">
							      <i class="circle check icon hvr-float"></i> 5
							    </div>
							    <div class="label">
							      <a href="#">Partially Received</a>
							    </div>
							  </div>
							  <div class="red statistic">
							    <div class="value">
							      <i class="warning circle icon hvr-buzz"></i> 5
							    </div>
							    <div class="label">
							    <a href="#">Received</a>
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
					<th>PO#</th>
					<th>Supplier Company</th>
					<th>Date Created</th>
					<th>Requested Ship Date</th>
					<th>Status</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			foreach($pos as $po){
				echo
				'<tr>
					<td><a href="#">#SERDS-'.$po->POID.'</a></td>
					<td>
						<h4 class="ui image header">
							          <img src="'.base_url().'img/hjm-logo.png" class="ui mini rounded image">
							          <div class="content">';
							          foreach($suppliers as $supplier){
								          if($po->SupplierID == $supplier->SupplierID)
								          	echo
								            '<a href="app-customer-info.html">'.$supplier->title.' '.$supplier->firstname.' '.$supplier->lastname.'</a>
								            <div class="sub header">HJM Dental Laboratory';
							          }
							echo    '</div>
							        </div>
							    </h4>
					</td>
					<td>'.date('l F d, Y h:i A', strtotime($po->orderdatetime)).'</td>
					<td>'.date('l F d, Y ', strtotime($po->shipdate)).'</td>
					<td>
 						<div class="ui form">
							<div class="ten wide field">
							 <select name="POStatusID">';
							 foreach ($status as $stat) {
							 	if($stat->POStatusID==$po->POStatusID)
							 		echo '<option value="'.$stat->POStatusID.'">'.$stat->status.'</option>';
							 	else
							 		echo '<option value="'.$stat->POStatusID.'">'.$stat->status.'</option>';
							 }
							  
						echo '</select>
							</div>
					    </div>						
					</td>
					<td>
						<a href="#">
			  			<i class="file icon"></i>
			  			View
			  			</a>				
					</td>
					<td>
						<a href="#" class="green">
			  			<i class="green check icon"></i>
			  			Update
			  			</a>
			  			&nbsp;
			  			<a href="#">
			  			<i class="orange write icon"></i>
			  			Edit
			  			</a>
					</td>
				</tr>';
			}
			?>
			</tbody>
		</table>
	  </div>
	  </div>
</div>
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
								<div class="ui selection dropdown" id="SupplierID">
								  <input type="hidden" name="SupplierID" onchange="getInfo(this.value);" >
								  <i class="dropdown icon"></i>
								  <div class="default text">Select Supplier</div>
								  <div class="menu">
								  	<?php foreach ($suppliers as $supplier) {
								  		echo '<div class="item" data-value="'.$supplier->SupplierID.'">'.$supplier->company.'</div>';
								  	}
								    ?>
								  </div>
								</div>
							</div>
							<div class="eight wide field">
								<label>Email</label>
								<input type="text" value="" readonly id="email">
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
	  							 <textarea rows="2" readonly id="address"></textarea>
	  						</div>
	  						<div class="field">
	  							<label>Requested Ship Date</label>
	  							<input type="date">
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
		  			<tbody>
		  				<tr>
		  					<td>1</td>
		  					<td >
								<div class="ui selection dropdown" id="Idropdown">
								  <input type="hidden" name="ItemID" onchange="getItemDesc(this.value);">
								  <i class="dropdown icon"></i>
								  <div class="default text">Select Item</div>
								  <div class="menu" id="items">
								 
								  </div>
								</div>
								  
		  					</td>
		  					<td id="ItemDesc">
		  					
		  					</td>
		  					<td>
		  						<input type="number" style="width: 100px">
		  					</td>
		  					<td>
		  						<input type="text">
		  					</td>
		  					<td>500</td>
		  					<td><a href="#"><i class="trash icon"></i></a></td>
		  				</tr>
		  			</tbody>
		  		</table>
		  	</form>
		  	</div>
		  </div>
		  <div class="row">
		  	<div class="fifteen wide column">
		  		<button class="ui button green">
		  			Add Row
		  		</button>
		  	</div>
		  </div>
				<div class="row">
					<div class="fifteen wide column">
						<hr>
						<div class="ui grid">
							<div class="ten wide column">
								<div class="eight wide field">
									<label>Message displayed on PO</label>
									<textarea row="2"></textarea>
								</div>
							</div>
							<div class="three wide column">
								<div class="item">
									<h4>Subtotal</h4>
								</div>
								<br>
								<div class="inline fields">
									<div class="field">
										<select class="ui dropdown">
										  <option value="1">Discount Value</option>
										  <option value="0">Discount Percent</option>
										</select>
									</div>
									<div class="field">
										<input type="text">
									</div>
									<div class="field">
									<h4>PHP -200</h4>
								</div>
								</div>
								<br>
								<div class="item">
									<h3>TOTAL</h3>
								</div>
							</div>
							<div class="three wide column">
								<div class="item">
									<h4>PHP 500</h4>
								</div>
								<br><br>
								<br><br><br>
								<div class="item">
									<h3>PHP 200</h3>
								</div>
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
						    <button class="ui animated green right button" tabindex="0" type="submit" value="submit">
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
