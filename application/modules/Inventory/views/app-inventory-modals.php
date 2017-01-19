<div class="ui modal itemmodal small">
		  <div class="ui orange header">
		   <i class="large cube icon"></i>
		    Item Information
		  </div>
		  <br><br>
		  
		  	<?php echo form_open('Inventory/AddInventory','class="ui form" onSubmit="return false"');?>
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
        <?php echo form_open('Inventory/AddProduct','class="ui form" onSubmit="return false"')?>
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
    
    <div class="ui modal rqformmodal fullscreen">
          <div class="ui red header">
           <i class="large cube icon"></i>
            Requisition Form
          </div>
          <br><br>
        <?php echo form_open('Inventory/requestItem','class="ui form" onSubmit="return false"');?> 
         <!-- <form class="ui form"> -->
            <div class="ui centered grid" >
                <div class="row">
                    <div class="one wide column hidden"></div>
                    <div class="fourteen wide column">
                        <div id="errorrequest"></div>
                    </div>
                    <div class="one wide column hidden"></div>
                </div>
                <div class="five wide column">
                    <div class="field">
                    <label><strong>Case</strong></label>
                    <select name="CaseID" id="CaseID" class="ui fluid search dropdown">
                        <option value=""></option>
                        <?php
                        foreach ($cases as $case) {
                            echo '<option value="'.$case->CaseID.'">'.$case->CaseTypeID.'-'.$case->CaseID.'</option>';
                        }
                        ?>
                    </select>
                    </div>
                </div>
                <div class="fifteen column centered row">
                    <div class="fourteen wide column">
                            <table class="ui table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Item</th>
                                        <th>Item Description</th>
                                        <th>Quantity</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="Add">
                                    <tr id="Row1">
                                        <td>1</td>
                                        <td>

                                            <select class="ui search fluid dropdown" id="Item1" name="rf[1][ItemID]" onchange="getItemDesc(this.value,1);">
                                              <option value="">Select Item</option>
                                              <?php
                                                foreach ($items as $item) 
                                                {
                                                    echo '<option value="'.$item->ItemID.'">'.$item->ItemID.'</option>';
                                                }
                                              ?>
                                            </select>
                                            </div>
                                        </td>
                                        <td id="ItemDesc1">
                                        
                                        </td>
                                        <td>
                                            <div class="ui input">
                                              <input type="number" id="QTY1" name="rf[1][QTY]">
                                            </div>
                                        </td>
                                        <td><a href="#" id="Bin1" onclick="deleteRow(1)"><i class="trash icon"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="row">
                    <a href="javascript:void(0);" class="ui red button floated left" id="AddRow">Add New Row</a>
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
