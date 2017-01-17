<div class="ui modal itemmodal small">
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
						<!-- <div class="field">
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
						</div> -->
						<div class="field">
								<label>Max. Quantity</label>
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

	 <div class="ui modal productmodal small">
        <div class="ui green header">
            <i class="large cube icon"></i> Product Information
        </div>
        <br>
        <br>
        <?php echo form_open('Inventory/AddProduct','class="ui form"')?>
            <div class="ui centered grid">
                <div class="row">
                    <div class="one wide column hidden"></div>
                    <div class="fourteen wide column">
                        <div id="errorproduct"></div>
                    </div>
                    <div class="one wide column hidden"></div>
                </div>
                <div class="fifteen column centered row">
                    <div class="ten wide column">
                        <div class="field">
                            <label>Product Code</label>
                            <input type="text" name="CaseTypeID" id="CaseTypeID" onkeyup="checkProductCode(this.value);">
                        </div>
                        <div class="sixteen wide field">
                            <label for="">Product Description</label>
                            <textarea row="1" name="CaseTypeDesc"></textarea>
                        </div>
                        <div class="field">
                                <label>Type</label>
                                <select name="Type" class="ui fluid dropdown">
                                  <option value=""></option>
                                  <option value="FIXED">Fixed</option>
                                  <option value="RPD" >RPD</option>
                                  <option value="Others">Others</option>
                                </select>
                        </div>
                        <div class="field">
                            <label>Price</label>
                            <input type="number" name="Price">
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
                            <button class="ui animated green right button" tabindex="0" type="submit" value="submit" id="submitproduct">
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
    <div class="ui modal rqformmodal small">
        <div class="ui red header">
            <i class="large cube icon"></i> Requisition Form
        </div>
        <br>
        <br>
        <form class="ui form">
            <div class="ui centered grid">
                <div class="fifteen column centered row">
                    <div class="seven wide column">
                        <div class="field">
                            <label>Item</label>
                            <select name="item" class="ui fluid search dropdown">
                                <option value=""></option>
                                <option value="ep">Emax Porcelain (epjc)</option>
                                <option value="pfm">Porcelain Fused to Metal-pfm2</option>
                                <option value="fw">One Piece (framework only)</option>
                                <option value="dr">Denture Repair</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>Quantity</label>
                            <input type="number">
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
                            <button class="ui animated red right button" tabindex="0" type="submit" value="submit">
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