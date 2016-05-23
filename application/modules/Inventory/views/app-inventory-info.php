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
	  		 <div class="ui orange header">
		   <i class="large cube icon"></i>
		    Item Information
		  </div>
		  <div class="ui header">
		  	<a href="#">Purchase</a>
		  </div>
		  <div class="ui right floated red statistic">
			<div class="value">
			   <?php echo $item[0]->TotalQTY.'/'.$item[0]->QTY;?>
			  </div>
			  <div class="label">
			    Current Stock
			  </div>
		  </div>
		  <br><br>
		  <?php echo form_open('Inventory/EditInventory','class="ui form"');?>
			<div class="ui centered grid" >
				<div class="fifteen column centered row">
					<div class="seven wide column">
							<div class="field">
								<label>Item Code</label>
								<input type="text" name="ItemID" value="<?php echo $item[0]->ItemID;?>">
							</div>
							<div class="sixteen wide field">
								<label for="">Item Description</label>
								<textarea row="1" name="ItemDesc" ><?php echo $item[0]->ItemDesc;?></textarea>
							</div>
							<div class="field">
								<label>Cost</label>
								<input type="text" name="Cost" value="<?php echo $item[0]->Cost;?>">
							</div>
							<div class="field">
								<label>Price</label>
								<input type="text" name="Price" value="<?php echo $item[0]->Price;?>">
							</div>
					</div>
					<div class="eight wide column">
						<div class="field">
							<label>Supplier</label>
							  <select class="ui dropdown">
							      <option value="1">Supplier A</option>
							      <option value="0">Supplier B</option>
							    </select>
						</div>
						<div class="field">
								<label>Quantity</label>
								<input type="text" name="QTY" value="<?php echo $item[0]->QTY;?>">
							</div>
							<div class="field">
								<label>Alert Qty Falls Below</label>
								<input type="text" name="QTYBelow" value="<?php echo $item[0]->QTYBelow;?>">
							</div>
							<div class="field">
								<label>Reorder Qty</label>
								<input type="text" name="ReorderQTY" value="<?php echo $item[0]->ReorderQTY;?>">
							</div>
					</div>
				</div>
				<div class="two column row">
					<div class="nine wide column hidden"></div>
					<div class="right aligned six wide column">
						  <div class="actions" id="footer-modal">
						    <a href="<?php echo base_url('Inventory');?>" class="ui grey deny button">
						      Cancel
						    </a>
						    <button class="ui animated orange right button" tabindex="0" type="submit" value="submit">
							  <div class="visible content">Update</div>
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
	  			<!--End-->
	  		</div>
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
		  <form class="ui form">
			<div class="ui centered grid" >
				<div class="fifteen column centered row">
					<div class="seven wide column">
							<div class="field">
								<label>Item Code</label>
								<input type="text">
							</div>
							<div class="sixteen wide field">
								<label for="">Item Description</label>
								<textarea row="1"></textarea>
							</div>
							<div class="field">
								<label>Cost</label>
								<input type="text">
							</div>
							<div class="field">
								<label>Price</label>
								<input type="text">
							</div>
					</div>
					<div class="eight wide column">
						<div class="field">
							<label>Supplier</label>
							  <select class="ui dropdown">
							      <option value="1">Supplier A</option>
							      <option value="0">Supplier B</option>
							    </select>
						</div>
						<div class="field">
								<label>Initial Quantity</label>
								<input type="text">
							</div>
							<div class="field">
								<label>Alert Qty Falls Below</label>
								<input type="text">
							</div>
							<div class="field">
								<label>Reorder Qty</label>
								<input type="text">
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
						    <button class="ui animated orange right button" tabindex="0" type="submit" value="submit">
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