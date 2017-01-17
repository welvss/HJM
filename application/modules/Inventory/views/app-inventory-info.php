<!--App-content--> 
	  <<div class="ui grid home-grid">
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
			<div class="one wide column hidden"></div>
				<div class="fourteen wide column">
					<div id="error"></div>
				</div>
			<div class="one wide column hidden"></div>
			<br>
		  <div class="ui right floated red statistic">
			<div class="value">
			   <?php echo $item->CurrentQTY;?>
			  </div>
			  <div class="label">
			    Current Stock
			  </div>
		  </div>
		  <br><br>
		  <?php echo form_open('Inventory/EditInventory','class="ui form"').form_hidden('ItemID',$this->uri->segment(3));?>
			<div class="ui centered grid" >
				<div class="fifteen column centered row">
					<div class="seven wide column">
							<div class="field">
								<label>Item Code</label>
								<input type="text" name="IID" id="ItemID" value="<?php echo $item->ItemID;?>" onkeyup="checkItemCode(this.value);">
							</div>
							<div class="sixteen wide field">
								<label for="">Item Description</label>
								<textarea row="1" name="ItemDesc" ><?php echo $item->ItemDesc;?></textarea>
							</div>
							
							<div class="field">
								<label>Price</label>
								<input type="text" name="Price" value="<?php echo $item->Price;?>">
							</div>
					</div>
					<div class="eight wide column">
						<!-- <div class="field">
							<label>Supplier</label>
							  <select class="ui dropdown" name="SupplierID">
							      <?php 
							  		foreach($suppliers as $supplier)
							  		{
							  			if($supplier->SupplierID==$item->SupplierID)
							  				echo '<option value="'.$supplier->SupplierID.'" selected>'.$supplier->company.'</option>';
							  			else
							  				echo '<option value="'.$supplier->SupplierID.'">'.$supplier->company.'</option>';
							  		}
							    ?> 
							    </select>
						</div> -->
						<div class="field">
								<label>Max. Quantity</label>
								<input type="text" name="QTY" value="<?php echo $item->QTY;?>">
							</div>
							<div class="field">
								<label>Alert Qty Falls Below</label>
								<input type="text" name="QTYBelow" value="<?php echo $item->QTYBelow;?>">
							</div>
							<div class="field">
								<label>Reorder Qty</label>
								<input type="text" name="ReorderQTY" value="<?php echo $item->ReorderQTY;?>">
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
	  			<!--End-->
	  		</div>
	  		</div>
	  		</div>
	  	</div>
	  </div>
</div>
