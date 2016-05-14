
		<div class="callout fixed title-callout" style="background: #f7f9fb;">
			<div class="row expanded">
				<div class="large-8 small-12 columns">
					<div class="row">
							<div class="medium-12 columns">
									<h4><i class="fa fa-pencil-square-o fa-lg"></i><strong>Orders</strong></h4>
							</div>
					</div>
				</div>
				<div class="large-4 small-12 columns">
					<div class="row">
							<a class="button hvr-icon-hang float-right" data-open="order-modal">Add New Order</a>
							<div class="small reveal" id="order-modal" data-reveal>
								<h3><i class="fa fa-pencil-square-o"></i><strong>New Case</strong></h3>
								<hr>
								<?php echo form_open_multipart('Order/AddOrder');?>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Dentist:</strong></label>
										</div>
										<div class="medium-4 small-12 columns end">
										    <select name="DentistID">
										    	<?php 
										    	foreach ($dentists as $dentist) 
										    	{
										    		echo '<option value="'.$dentist->DentistID.'">'.$dentist->title.' '.$dentist->firstname.' '.$dentist->lastname.'</option>';
										    	}
												?>
											</select>
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Patient:</strong></label>
										</div>
										<div class="medium-4 small-12 columns end">
										    <input type="text" name="patient">
										</div>
									
									</div>
									<div class="row">
										 <div class="medium-2 small-3 columns">
										  <label for="right-label" class="text-right middle"><strong>Due Date:</strong></label>
										</div>
										<div class="medium-4 small-12 columns end">
										    <input type="date" name="due-date" required>
										</div>
									</div>
									<div class="row">
										 <div class="medium-2 small-3 columns">
										  <label for="right-label" class="text-right middle"><strong>Due Time:</strong></label>
										</div>
										<div class="medium-4 small-12 columns end">
										    <input type="time" name="due-time" required>
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Gender:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
										    <select id="select" name='gender'>
										    	<option value=""></option>
									  			<option value="Male">Male</option>
									  			<option value="Female">Female</option>
									  		</select>
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Age:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
										    <input type="text" name="age">
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Shade:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
										    <input type="text" name="shade">
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Crown:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
										    <a href="#">[+] Add a crown or bridge</a>
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Notes:</strong></label>
										</div>
										<div class="medium-9 small-12 columns end">
										  <textarea name="notes" id="" cols="30" rows="5"required></textarea>
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Attachment:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
									    <label for="exampleFileUpload" class="button">Upload File</label>
										    <input type="file" id="exampleFileUpload" class="show-for-sr" name="filename" required>
										</div>
									</div>
									<hr>
									<div class="row">
										<fieldset class="float-left">
										  <button class="button alert hvr-icon-back" data-close aria-label="Close modal" type="button"> Cancel</button>
										</fieldset>
										<fieldset class="float-right">
										  
										  <?php echo form_submit('submit', 'Submit','class="button success hvr-icon-forward"');?>
										</fieldset>
									</div>
								<?php form_close();?>
									<button class="close-button" data-close aria-label="Close modal" type="button">
									<span aria-hidden="true">&times;</span>
								  </button>
							</div>
					</div>
				</div>
			</div>
		<!--Body Content-->
		<div class="app-body-content">
		<ul class="order-nav dropdown menu" data-dropdown-menu>
					<li><a href="#"><i class="fa fa-print"></i>Print Items</a></li>
					<li class=".is-dropdown-submenu-parent">
					<a href="#"><i class="fa fa-bullseye"></i>Mark As</a>
					  <ul class="menu">
						  <li><a href="#" id="new-order">New</a></li>
						  <li><a href="#" id="inProd-order">In Production</a></li>
						  <li><a href="#" id="complete-order">Complete</a></li>
						  <li><a href="#" id="hold-order">Hold</a></li>
					 </ul>
					</li>
				</ul>
			<div class="row expanded">
				<div class="column medium-12 medium-order-2 large-10 large-order-1">
		<table id="j-table"  class="display responsive" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th></th>
							<th>Invoice</th>
							<th>Company</th>
							<th>Patient</th>
							<th><center>Ordered Date</cente></th>
							<th><center>Due Date</center></th>
							<th>Status</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody id="new_ordertbody">
						<?php
					$ctr=1;
					foreach($cases as $case)
					{
						foreach($dentists as $dentist)
						{
							
							if($case->DentistID==$dentist->DentistID)
							{
								echo
								'<tr>
									<td></td>
									<td>'.$ctr.'</td>
									<td>'.$dentist->company.'</td>
									<td>'.$case->patient.'</td>
									<td>'.date('l F d, Y h:i A', strtotime($case->orderdatetime)).' </td>
									<td>'.date('l F d, Y ', strtotime($case->duedate)).date('h:i A', strtotime($case->duetime)).'</td>
									<td>
									'.form_open('Order/UpdateOrderStatus').form_hidden('CaseID',$case->CaseID).'
									<select name="status" class="status-box">
										<option selected="'.$case->status.'">'.$case->status.'</option>
										<option value="New">New</option>
										<option value="In Production">In Production</option>
										<option value="Complete">Complete</option>
										<option value="On Hold">On Hold</option>
									</select>
									<br>
									'.form_submit('submit','Submit','class="button success "').'
									</form>
									</td>
									<td><a href="#">Lab Slip</a></td>
									<td><a href="'.base_url().'Customer/CustomerInfo/'.$case->DentistID.'/'.$case->CaseID.'">Edit</a></td>
								</tr>';
								$ctr++;
							}
						}
					}
					
					?>
					</tbody>
				</table>
				</div>
				<div class="column medium-12 medium-order-2 large-2 large-order-1">
					<div class="row">
						<div class="callout order-callout">
							<label for="">Search
								<input type="text" id="custom-searchbox">
							</label>
							<a href="#">Advanced Search</a>
						</div>
					</div>
					<div class="row">
						<div class="callout order-callout">
							<h6><strong>Orders</strong></h6>
							<ul class="menu">
								<li><a href="#">Active Orders</a></li>
								<hr>
								<li><a href="#">New Orders</a></li>
								<hr>
								<li><a href="#">Order History</a></li>
								<hr>
								<li><a href="#">Hold Orders</a></li>
								<hr>
								<a id="notes">Filter</a>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!--End Of Body Content -->
	</div>
</div>
</div>

