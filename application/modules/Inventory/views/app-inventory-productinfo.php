
	  <div class="ui grid home-grid">
	  <div class="row app-content page-header header">
	  		<div class="two wide column hidden"></div>
	   		<div class="seven wide column"><h1 class=""><i class="cubes orange icon"></i>Inventory</h1></div>
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
	  		<div class="ten wide column centered grid">
	  		<div class="ui stacked teal segment">
	  		<div class="row">
	  		 <div class="ui blue header">
		   <i class="large cube icon"></i>
		    Product Information
		  </div>
		  <br><br>
		  <?php echo form_open('Inventory/EditProduct','class="ui form"').form_hidden('CTID',$this->uri->segment(3));?>
			<div class="ui centered grid" >
				<div class="ui blue statistic">
					<div class="value">
						<?=$casetype->TotalOrder;?>

					</div>
					  <div class="label">
					    Count of Order
					  </div>
				</div>
				<div class="fifteen column centered row">
					<div class="seven wide column">
							<div class="field">
								<label>Product Code</label>
								<input type="text" name="CaseTypeID" value="<?=$casetype->CaseTypeID;?>">
								<input type="hidden" name="TotalOrder" value="<?=$casetype->TotalOrder;?>">
							</div>
							<div class="sixteen wide field">
								<label for="">Product Description</label>
								<textarea row="1" name="CaseTypeDesc"><?=$casetype->CaseTypeDesc;?></textarea>
							</div>
							<div class="field">
							  	<label>Type</label>
							    <select name="Type" class="ui fluid dropdown">
							      <option value=""></option>
							      <option value="FIXED" <?php if($casetype->Type=="FIXED") echo 'selected';?>>Fixed</option>
							      <option value="RPD" <?php if($casetype->Type=="RPD") echo 'selected';?>>RPD</option>
							      <option value="Others" <?php if($casetype->Type=="Others") echo 'selected';?>>Others</option>
							    </select>
						  	</div>
							<div class="field">
								<label>Price</label>
								<input type="text" name="Price" value="<?=$casetype->Price;?>">
							</div>
					</div>
				</div>
				<div class="two column row">
					<div class="nine wide column hidden"></div>
					<div class="right aligned six wide column">
						  <div class="actions" id="footer-modal">
						
						     <a href="http://localhost/HJM/Inventory" class="ui grey deny button">
						      Cancel
						    </a>
						   
						    <button class="ui animated blue right button" tabindex="0" type="submit" value="submit">
							  <div class="visible content">Save</div>
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

	
