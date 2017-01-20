	  <!--App-content--> 
	  	<div class="ui grid home-grid">
            <div class="row app-content page-header header">
                <div class="two wide column hidden"></div>
                <div class="seven wide column">
                    <h1 class=""><i class="cubes orange icon"></i>Inventory</h1></div>
                <div class="five wide right aligned column">
                    <div class="ui buttons">
                        <button class="ui orange button icon mode"><i class="plus icon"></i>New Item</button>
                        <button class="ui green button icon product"><i class="plus icon"></i>New Product</button>
                        <button class="ui red button rqform">Requisition Form</button>
                    </div>
                </div>
                <div class="one wide column hidden"></div>
            </div>
      	</div>
	

	  <div class="ui grid">
	  	<div class="row">
	  		<div class="thirteen wide column centered grid">
	  		<div class="ui stacked inverted orange segment">
	  			<div class="ui top attached inverted orange tabular menu">
				  <a class="item active" data-tab="first">Items</a>
				  <a class="item" data-tab="second">Products</a>
				  <a class="item" data-tab="third">Requistions</a>
				</div>
				<div class="ui bottom attached tab segment active" data-tab="first">
					
						
						  	<div class="row">
						  		<div class="thirteen wide column centered grid">
						  		<div class="ui stacked teal segment">
						  		<div class="row">
						  			<div class="ui orange header">
									   <i class="large cube icon"></i>
									    Item Information
									</div>
						  			<div class="ui grid">
						  				<div class="two column row">
									    <div class="left floated column eight wide column">
									    	<div class="ui search">
											  <div class="ui icon input">
											    <input class="prompt" type="text" placeholder="Find Items..." id="search-item">
											    <i class="search icon"></i>
											  </div>
											  <div class="results"></div>
											</div>
									    </div>
									    <div id="printitem" style="position: relative;left: -12px;">
									    	
									    	
									    </div>
									    </div>
						  			</div>
						  		</div>
						  		<br>
						  			<table id="inventory-itemtable" class="display ui blue table" cellspacing="0" width="100%">
						  				<thead>
						  					<tr>
						  					

						  						<th>Item Code</th>
						  						<th>Item Description</th>
						  						<th><center>Cost</center></th>
						  						<th><center>Current Qty</center></th>
						  						<th><center>Total Capacity</center></th>
						  						
						  						
						  					</tr>
						  				</thead>
						  				<tbody>
						  					<?php
						  					foreach ($items as $item) 
						  					{
						  						
						  					echo
						  					'<tr>
						  						<td><a href="'.base_url('Inventory/Info/'.$item->ItemID).'">'.$item->ItemID.'</a></td>
						  						<td>'.$item->ItemDesc.'</td>
						  						<td><center>'.$item->Price.'</center></td>
						  						<td><center>'.$item->CurrentQTY.'</center></td>
						  						<td><center>'.$item->QTY.'</center></td>
						  					</tr>';
						  					}
						  					?>
						  				</tbody>
						  			</table>

						  		</div>
						  		</div>
						  	</div>
					
				</div>
				<div class="ui bottom attached tab segment" data-tab="second">
				  
	  	<div class="row">
	  		<div class="thirteen wide column centered grid">
	  		<div class="ui stacked teal segment">
	  		<div class="row">
	  			<div class="ui green header">
				   <i class="large cube icon"></i>
				    Product Information
				</div>
	  			<div class="ui grid">
	  				<div class="two column row">
				    <div class="left floated column eight wide column">
				    	<div class="ui search">
						  <div class="ui icon input">
						    <input class="prompt" type="text" placeholder="Find Products..." id="search-product">
						    <i class="search icon"></i>
						  </div>
						  <div class="results"></div>
						</div>
				    </div>
				    <div id="printproduct" style="position: relative;left: -12px;">
				    	
				    	
				    </div>
				    </div>
	  			</div>
	  		</div>
	  		<br>
	  			<table id="inventory-producttable" class="display ui blue table" cellspacing="0" width="100%">
	  				<thead>
	  					<tr>
	  						<th>Product Code</th>
	  						<th>Product Description</th>
	  						<th>Product Type</th>
	  						<th><center>Price</center></th>
	  						<th><center>Count of Order</center></th>
	  						
	  					</tr>
	  				</thead>
	  				<tbody>
	  					<?php
	  					foreach ($casetype as $ct) 
	  					{
	  						
	  					echo
	  					'<tr>
	  						<td><a href="'.base_url('Inventory/ProductInfo/'.$ct->CaseTypeID).'">'.$ct->CaseTypeID.'</a></td>
	  						<td>'.$ct->CaseTypeDesc.'</td>
	  						<td>'.$ct->Type.'</td>
	  						<td><center>'.$ct->Price.'</center></td>
	  						<td><center>'.$ct->TotalOrder.'</center></td>
	  					</tr>';
	  					}
	  					?>
	  				</tbody>
	  			</table>

	  		</div>
	  		</div>
	  	</div>
				</div>
				<div class="ui bottom attached tab segment" data-tab="third">
				  <div class="row">
				  		<div class="thirteen wide column centered grid">
				  		<div class="ui stacked teal segment">
				  		<div class="row">
				  			<div class="ui red header">
							   <i class="large cube icon"></i>
							    Requisition Information
							</div>
				  			<div class="ui grid">
				  				<div class="two column row">
							    <div class="left floated column eight wide column">
							    	<div class="ui search">
									  <div class="ui icon input">
									    <input class="prompt" type="text" placeholder="Find Requests..." id="search-request">
									    <i class="search icon"></i>
									  </div>
									  <div class="results"></div>
									</div>

							    </div>
							    <div id="printreq" style="position: relative;left: -12px;">
							    </div>
				  			</div>
				  		</div>
				  		<br>
				  			<table id="inventory-requisitiontable" class="display ui blue table" cellspacing="0" width="100%">
				  				<thead>
				  					<tr>
				  						<th>Requisition Code</th>
				  						<th>Case Number</th>
				  						<th><center>Item - Quantity</center></th>
				  						<th><center>Date Requested</center></th>
				  					</tr>
				  				</thead>
				  				<tbody>
				  				<?php
					  				foreach($requests as $request){
					  					echo
					  					'<tr>
					  						<td><a href="inventory-edit.html">Request-'.$request->ReqID.'</a></td>
					  						<td>'.$request->ReqID.'</td>
					  						<td>
					  							<center>';

						  						foreach ($reqitems as $reqitem) {
						  							foreach ($items as $item) {
						  								if($reqitem->ItemID==$item->ItemID){
						  									$itemdesc = $item->ItemDesc;
						  								}
						  							}
						  							echo
						  							'<div>'
						  								.$itemdesc.' - '.$reqitem->ItemID.
						  							'</div>';
						  						}
					  							
					  					echo
					  							'</center>
					  						</td>
					  						<td>4</td>
					  						<td>'.date('l F d, Y h:i A', strtotime($request->DateCreated)).'</td>
					  						
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
	  	</div>
	  </div>
	   <br><br><br><br>

</div>
