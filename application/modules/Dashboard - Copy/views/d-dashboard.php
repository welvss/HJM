<section class="d-dash-board">
		<div class="row">
		<ul class="doctor-tabs" data-tabs id="doc-tabs">
	  		<a href="Dashboard/logout" class="button secondary float-right">Sign Out</a>
		  <li class="tabs-title<?php if($this->uri->segment(3) == null){ echo " is-active";}?>"><a href="#panel1">Dashboard</a></li>
		  <li class="tabs-title"><a href="#panel2">New Case</a></li>
		  <li class="tabs-title"><a href="#panel3">Case History</a></li>
		  <li class="tabs-title"><a href="#panel4">Statements</a></li>
		  <li class="tabs-title"><a href="#panel5">Account Details</a></li>
		  
		  <?php
			if($this->uri->segment(3) != null)
			{
			  echo
			  '<li class="tabs-title is-active"><a href="#panel6">Edit Case</a></li>';
			}
			?>
		</ul>
		<div class="tabs-content" data-tabs-content="doc-tabs">
			
			<?php 
			 if($this->uri->segment(3) == null)
			 {
			 	echo ' <div class="tabs-panel is-active" id="panel1">';
			 }
			 else
				echo ' <div class="tabs-panel" id="panel1">';
			 ?>
				<!-- -->
		  
		  	<div class="row expanded">
		  		<!--Display Picture-->
				<div class="large-6 columns">
					<div id="doctor-dp-greeting">
						<div class="dp">
						<h1 id="initial-dp"><strong><?php echo substr($dentists->firstname, 0,1).substr($dentists->lastname, 0,1);?></strong></h1>
						</div>
						<h1 id="greetings"><strong>Welcome</strong>, <?php echo $dentists->title.' '.$dentists->firstname.' '.$dentists->lastname;?></h1>
					</div>
				</div>
				<!--Clndr jquery Plugin-->
				<div class="large-6 columns">
					<div class="container">
						<div class="cal1"></div>
						<script type="text/template" id="template-calendar">
							<div class="clndr-controls">
								<div class="clndr-previous-button">&lsaquo;</div>
								<div class="month"><%= intervalStart.format('M/DD') + ' &mdash; ' + intervalEnd.format('M/DD') %></div>
								<div class="clndr-next-button">&rsaquo;</div>
							</div>
							<div class="clndr-grid">
								<div class="days-of-the-week">
								<% _.each(daysOfTheWeek, function(day) { %>
									<div class="header-day"><%= day %></div>
								<% }); %>
									<div class="days">
									<% _.each(days, function(day) { %>
										<div class="<%= day.classes %>"><%= day.day %></div>
									<% }); %>
									</div>
								</div>
							</div>
							<div class="clndr-today-button">Today</div>
						</script>     
					</div>
				</div>
		   </div>
	 	  </div>
		  <div class="tabs-panel" id="panel2">
			<h3><i class="fa fa-pencil-square-o"></i><strong>New Case</strong></h3>
								<hr>
								<form>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Patient:</strong></label>
										</div>
										<div class="medium-4 small-12 columns end">
										    <input type="text" name="patient" id="patient">
										</div>
									</div>
									<input type="hidden" id="DentistID" value="<?php echo $this->session->userdata('DentistID')?>">
									<div class="row">
										 <div class="medium-2 small-3 columns">
										  <label for="right-label" class="text-right middle"><strong>Due Date:</strong></label>
										</div>
										<div class="medium-4 small-12 columns end">
										    <input type="date" name="due-date" id="duedate">
										</div>
									</div>
									<div class="row">
										 <div class="medium-2 small-3 columns">
										  <label for="right-label" class="text-right middle"><strong>Due Time:</strong></label>
										</div>
										<div class="medium-4 small-12 columns end">
										    <input type="time" name="due-time" id="duetime">
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Gender:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
										    <select id="gender" name='gender'>
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
										    <input type="text" name="age" id="age">
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
										  <textarea name="notes" id="notes" cols="30" rows="5"></textarea>
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Attachment:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
									    <label for="exampleFileUpload" class="button">Upload File</label>
										    <input type="file" id="exampleFileUpload" class="show-for-sr">
										</div>
									</div>
									<hr>
									<div class="row columns">
										<fieldset class="float-right">
										  <button type="button" id="submit" value="submit" class="button success hvr-icon-forward">Submit Order</button>
										</fieldset>
									</div>
								</form>
		  </div>
		  <div class="tabs-panel" id="panel3">
		  
		  	<div class="row expanded">
				<div class="column medium-12 medium-order-2 large-12 large-order-1">
				<table id="j-table" class="display responsive" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th></th>
							<th>Invoice</th>
							<th><center>Patient</center></th>
							<th><center>Ordered Date</center></th>
							<th><center>Due Date</center></th>
							<th><center>Status</center></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					<?php
					$ctr=1;
					foreach($cases as $case)
					{
						echo
						'<tr>
							<td></td>
							<td>'.$ctr.'</td>
							<td>'.$case->patient.'</td>
							<td>'.date('l F d, Y h:i A', strtotime($case->orderdatetime)).'</td>
							<td>'.date('l F d, Y ', strtotime($case->duedate)).date('h:i A', strtotime($case->duetime)).'</td>
							<td><center>'.$case->status.'</center></td>
							<td><a href="#">Lab Slip</a></td>
							<td><a href="'.base_url().'Dashboard/EditCase/'.$case->CaseID.'">Edit</a></td>
						</tr>';
						$ctr++;
					}
					?>
					</tbody>
				</table>
				</div>
			</div>
		  </div>
		  <div class="tabs-panel" id="panel5">
	  	  		<div class="large-12 columns">
					<div id="doctor-dp-greeting">
						<div class="dp">
						<h1 id="initial-dp"><strong><?php echo substr($dentists->firstname, 0,1).substr($dentists->lastname, 0,1);?></strong></h1>
						</div>
						<h1 id="greetings"><?php echo $dentists->title.' '.$dentists->firstname.' '.$dentists->lastname;?></h1>
					</div>
				</div>
		  	  	<div class="row expanded">
					<div class="large-6 large-offset-3 columns end">
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Full Name :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->firstname.' '.$dentists->middlename.' '.$dentists->lastname;?></p>
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Email Address :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->email;?></p>
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Telephone :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->telephone;?></p>
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Mobile :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->mobile;?></p>
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Website :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->website;?></p>
							</div>
							<hr>
						</div>
					</div>
					<div class="large-6 large-offset-3 columns end">
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Billing Address :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->bstreet.', '.$dentists->bbrgy.', '.$dentists->bcity;?></p>
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Shipping Address :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->shipstreet.', '.$dentists->shipbrgy.', '.$dentists->shipcity;?></p>
							</div>
							<hr>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="large-12 columns">
						<h3>Change your password: </h3>
						<form>
							<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Old Password:</strong></label>
										</div>
										<div class="medium-4 small-12 columns end">
										    <input type="password" name="old-pass">
										</div>
							</div>
							<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>New Password:</strong></label>
										</div>
										<div class="medium-4 small-12 columns end">
										    <input type="password" name="new-pass" >
										</div>
							</div>
							<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Repeat New Password:</strong></label>
										</div>
										<div class="medium-4 small-12 columns end">
										    <input type="password" name="repeat-new-pass">
										</div>
							</div>
							<fieldset class="float-right">
										  <button class="button warning hvr-icon-forward" type="Submit" value="Submit">Update</button>
										</fieldset>
						</form>
					</div>
				</div>
		  </div>
			<?php
			 if($this->uri->segment(3) != null)
			 {
			 	echo '<<div class="tabs-panel is-active" id="panel6">';
			 }
			 else
				echo ' <div class="tabs-panel" id="panel6">';
			 ?>
		
			<h3><i class="fa fa-pencil-square-o"></i><strong>Edit Case</strong></h3>
								<hr>
								<?php echo form_open_multipart('Order/EditOrder');
								foreach ($cases as $case) 
								{
								if($case->CaseID == $this->uri->segment(3))
								{
									echo
								'<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Ordered Date:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
										    
										    <input type="text" value="'.date('l F d, Y h:i A', strtotime($case->orderdatetime)).'" readonly>
										</div>
									</div>
									  '.form_hidden('DentistID',$this->session->userdata('DentistID')).
									  									  form_hidden('CaseID',$this->uri->segment(3)).'
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Patient:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
										    <input type="text" name="patient" value="'.$case->patient.'">
										</div>
									</div>
									<div class="row">
										 <div class="medium-2 small-3 columns">
										  <label for="right-label" class="text-right middle"><strong>Due Date:</strong></label>
										</div>
										<div class="medium-2 small-12 columns end">
										    <input type="date" name="due-date" value="'.$case->duedate.'">
										</div>
									</div>
									<div class="row">
										 <div class="medium-2 small-3 columns">
										  <label for="right-label" class="text-right middle"><strong>Due Time:</strong></label>
										</div>
										<div class="medium-2 small-12 columns end">
										    <input type="time" name="due-time" value="'.$case->duetime.'">
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Gender:</strong></label>
										</div>
										<div class="medium-2 small-12 columns end">
										    <select id="select" name="gender">
										    	<option value="' .$case->gender.'">'.$case->gender.'</option>
									  			<option value="Male">Male</option>
									  			<option value="Female">Female</option>
									  		</select>
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Age:</strong></label>
										</div>
										<div class="medium-1 small-12 columns end">
										    <input type="text" name="age" value="'.$case->age.'">
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Shade:</strong></label>
										</div>
										<div class="medium-2 small-12 columns end">
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
										<div class="medium-5 small-12 columns end">
										  <textarea name="notes" id="" cols="30" rows="5">'.$case->notes.'</textarea>
										</div>
									</div>
									<div class="row">
										 <div class="small-2 columns">
										  <label for="right-label" class="text-right middle"><strong>Attachment:</strong></label>
										</div>
										<div class="medium-3 small-12 columns end">
									    <label for="exampleFileUpload" class="button">Upload File</label>
										    <input name="file" type="file" id="exampleFileUpload" class="show-for-sr" >
										</div>
									</div>
									<hr>
									<div class="row">
										<fieldset class="float-left">
										  <a  href="'.base_url('Dashboard').'"class="button alert hvr-icon-back" data-close aria-label="Close modal" type="button">Cancel</a>
										</fieldset>
										<fieldset class="float-right">
											'.form_submit('submit', 'Update Order', 'class="button success hvr-icon-forward"').'
										
										</fieldset>
									</div>';
								
								}
								}?>
							<?php form_close();?>
								
		</div>
		</div>
	   <div class="row">

	   </div>
    </section>