	  <!--App-content--> 
	  <div class="ui grid home-grid">
	  <div class="row app-content page-header header">
	  		<div class="two wide column hidden"></div>
	   		<div class="seven wide column"><h1 class=""><i class="cubes orange icon"></i>Inventory</h1></div>
	   		<div class="five wide right aligned column">
	   		<button class="ui orange circular icon button mode">
			  		<i class="plus icon"></i>
			</button>
			Add New Item
			</div>
			<div class="one wide column hidden"></div>
	  </div>  
	  </div>
	  <br><br><br><br>
	  <div class="ui grid">
	  	<div class="row">
	  		<div class="thirteen wide column centered grid">
	  		<div class="ui stacked teal segment">
	  		<div class="row">
	  			<div class="ui grid">
	  				<div class="two column row">
				    <div class="left floated column eight wide column">
				    	<div class="ui search">
						  <div class="ui icon input">
						    <input class="prompt" type="text" placeholder="Find Items..." id="search-customer">
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
	  			<table id="inventory-table" class="display ui blue table" cellspacing="0" width="100%">
	  				<thead>
	  					<tr>
	  						<th>Item Code</th>
	  						<th>Item Description</th>
	  						<th><center>Price</center></th>
	  						<th><center>Current Qty</center></th>
	  						<th><center>Total Capacity</center></th>
	  						<th><center>Action</center></th>
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
	  						<td>
	  							<center>
	  								<a href="'.base_url('Inventory/DeleteItem/'.$item->ItemID).'"><i class="trash icon"></i></a>
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
	  </div>
</div>
<!--New Item Modal-->
	<div class="ui modal small">
		  <div class="ui orange header">
		   <i class="large cube icon"></i>
		    Item Information
		  </div>
		  <br><br>
		  
		  	<?php echo form_open('Inventory/AddInventory','class="ui form"');?>
			<div class="ui centered grid" >
				<div class="row">
					<div class="one wide column hidden"></div>
					<div class="fourteen wide column">
						<div id="error"></div>
					</div>
					<div class="one wide column hidden"></div>
				</div>
				<div class="fifteen column centered row">
					<div class="seven wide column">
							<div class="field">
								<label>Item Code</label>
								<input type="text" name="ItemID" onkeyup="checkItemCode(this.value);">
							</div>
							<div class="sixteen wide field">
								<label for="">Item Description</label>
								<textarea row="1" name="ItemDesc"></textarea>
							</div>
							
							<div class="field">
								<label>Price</label>
								<input type="text" name="Price">
							</div>
					</div>
					<div class="eight wide column">
						<div class="field">
							<label>Supplier</label>
							  <select class="ui dropdown" name="SupplierID">
							  		<option value="">Select Supplier</option>
							  	<?php 
							  		foreach($suppliers as $supplier)
							  		{
							  			echo '<option value="'.$supplier->SupplierID.'">'.$supplier->company.'</option>';
							  		}
							    ?> 
							    </select>
						</div>
						<div class="field">
								<label>Initial Quantity</label>
								<input type="text" name="QTY">
							</div>
							<div class="field">
								<label>Alert Qty Falls Below</label>
								<input type="text" name="QTYBelow">
							</div>
							<div class="field">
								<label>Reorder Qty</label>
								<input type="text" name="ReorderQTY">
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
						    <button class="ui animated orange right button" tabindex="0" type="submit" value="submit" id="submit">
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