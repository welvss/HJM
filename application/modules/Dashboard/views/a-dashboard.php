

<div class="ui grid home-grid">
	  	  <div class="row app-content">
	   		<div class="twelve wide column">
	   		<br>
	   		<div class="ui sizer vertical segment">
			  <div class="ui huge header">Welcome, Administrator!</div>
			  <p><?php echo date('l F d, Y ');?></p>
			</div>
			<br><br>
				<div class="ui five doubling cards">
				  <div class="card hvr-grow">
				   <div class="card-content">
				   		<a href="<?php echo base_url();?>Customer">
				      		<div class="box" id="customer-card">
				      			<h1 class="case-number"><i class="doctor icon"></i></h1>
				      		</div>
				      	</a>
				    </div>
				    <div class="content">
				      <div class="header">Customer</div>
				      <a href="<?php echo base_url();?>Customer" class="hvr-icon-forward">View or Add New Customer
				     </a>
				    </div>
				  </div>
				  <div class="card hvr-grow">
				    <div class="card-content">
				    	<a href="<?php echo base_url();?>Order">
					    	<div class="box" id="cases-card">
					    		<h1 class="case-number"><i class="file text outline icon"></i></h1>
					    	</div>
					    </a>
				    </div>
				    <div class="content">
				      <div class="header">Cases</div>
				        <a href="<?php echo base_url();?>Order" class="hvr-icon-forward">View or Add New Case
				     </a>
				    </div>
				  </div>
				    <div class="card hvr-grow">
				    <div class="card-content">
				    	<a href="<?php echo base_url();?>Inventory">
					    	<div class="box" id="inventory-card">
					    		<h1 class="case-number"><i class="cubes icon"></i></h1>
					    	</div>
					    </a>
				    </div>
				    <div class="content">
				      <div class="header">Inventory</div>
				        <a href="<?php echo base_url();?>Inventory" class="hvr-icon-forward">View or Add New Stocks
				     </a>
				    </div>
				  </div>
				  <div class="card hvr-grow">
				    <div class="card-content">
				    <a href="<?php echo base_url();?>PO">
				      <div class="box" id="po-card">
				      	<h1 class="case-number"><i class="cart icon"></i></h1>
				      </div>
				  	</a>
				    </div>
				    <div class="content">
				      <div class="header">Purchase Order</div>
				        <a href="<?php echo base_url();?>PO" class="hvr-icon-forward">View or Add New Stocks
				     </a>
				    </div>
				  </div>
				  <div class="card hvr-grow">
				    <div class="card-content">
				    	<a href="<?php echo base_url();?>Supplier">
					      <div class="box" id="supplier-card">
					      	<h1 class="case-number"><i class="truck icon"></i></h1>
					      </div>
					    </a>
				    </div>
				    <div class="content">
				      <div class="header">Supplier</div>
				        <a href="<?php echo base_url();?>Supplier" class="hvr-icon-forward">View or Add New Supplier
				     </a>
				    </div>
				  </div>

				</div>
				<div class="ui horizontal segments">
					<div class="ui segment">
						<div class="ui large header">Case Statistics</div>
						<div class="ui statistics">
						  <div class="green statistic dashboardcasemodal" onclick="filterStatus('NEW')">
						    <div class="value" id="new_count_dashboard">
						      <i class="file text outline icon hvr-wobble-vertical "></i> <?php echo $New;?>
						    </div>
						    <div class="label">
						      <a href="#" >New Cases</a>
						    </div>
						  </div>
						  <div class="purple statistic dashboardcasemodal" onclick="filterStatus('IN PRODUCTION')">
						    <div class="value" id="IP_count_dashboard">
						      <i class="lab icon hvr-buzz-out"></i>  <?php echo $IP;?>
						    </div>
						    <div class="label">
						      <a href="#">In Production</a>
						    </div>
						  </div>
						  <div class="blue statistic dashboardcasemodal" onclick="filterStatus('COMPLETED')">
						    <div class="value" id="Complete_count_dashboard">
						      <i class="circle check icon hvr-float"></i>  <?php echo $Completed;?>
						    </div>
						    <div class="label">
						      <a href="#">Completed Cases</a>
						    </div>
						  </div>
						  <div class="red statistic dashboardcasemodal" onclick="filterStatus('ON HOLD')">
						    <div class="value" id="OH_count_dashboard">
						      <i class="warning circle icon hvr-buzz"></i>  <?php echo $Hold;?>
						    </div>
						    <div class="label">
						    <a href="#">On Hold</a>
						    </div>
						  </div>
						</div>
					</div>
					<div class="ui segment">
						<div class="ui large header">Inventory</div>
						<div class="ui statistics">
							<div class="statistic dashboardinventorymodal">
								<div class="value" id="inventory_count_dashboard"><i class="cubes icon hvr-hang"></i><?php echo $i;?></div>
								<div class="label">
									<a href="#">Running Low</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui segment">
				  <h4 class="ui large header">Income</h4>
				 <div class="ui horizontal segments income">
					  <div class="ui segment openInvoices ">
					    <h3 id="sum"><?php echo $sum;?> PHP</h3>
					  </div>
					  <div class="ui segment partial">
					    <h3 id="Partial"><?php echo $Partial;?> PHP</h3>
					  </div>
					  <div class="ui segment overdue">
					    <h3 id="overdue"><?php echo $overdue;?> PHP</h3>
					  </div>
					  <!--
					  <div class="ui segment paid">
					    <h3>0.00 PHP</h3>
					  </div>
					  -->
				 </div>
					<div class="ui three column grid">
					  <div class="column dashboardOImodal"><h1 id="OI"><?php echo $OI;?></h1><a href="#">OPEN INVOICES</a></div>
					  <div class="column dashboardPartialmodal"><h1 id="PCount"><?php echo $PCount;?></h1><a href="#">PARTIAL</a></div>
					  <div class="column dashboardODmodal"><h1 id="OD"><?php echo $OD;?></h1><a href="#">OVERDUE</a></div>
					   <!--
					  <div class="column"><h1>0</h1><a href="#">PAID LAST 30 DAYS </a></div>
					  -->
					</div>
				</div>
	   		</div>
	   		<div class="four wide column">
	   			<div class="ui horizontal segment" style="position: fixed;overflow-y: scroll;height: 100%;width: 23%;">
					<div class="transaction-feed" style="top: -2%;width: 100%;position: relative;padding-bottom: 60px;">
						<div class="ui feed" id="recent_activities">
						<?php
					
							echo
							'<div class="ui sizer vertical segment">
							  <div class="ui large header">Recent Activities</div>
							</div>';
							if(count($invoicepayment)>0)
							{
							foreach ($invoicepayment as $ip){
								echo 
									'<div class="ui sizer vertical segment">
										  <div class="ui header">'.date('F d, Y',strtotime($ip->datecreated)).'</div>
										  <div class="sub header">'.( date('F d, Y',strtotime($ip->datecreated))==date('F d, Y',strtotime('now'))  ? 'Today' : ( date('F d, Y',strtotime($ip->datecreated))==date('F d, Y',strtotime('yesterday')) ? 'Yesterday' : ceil(((time()-strtotime($ip->datecreated))/60/60/24)-1)." days ago")).'</div>
									</div>';
								
								
								foreach ($invpay as $ips) {
									//echo date('F d, Y',strtotime($date." days ago")).' '.date('F d, Y',strtotime($ips->datecreated));
									if(date('F d, Y',strtotime($ip->datecreated))==date('F d, Y',strtotime($ips->datecreated))){
										foreach ($dentists as $dentist) {
											if($ips->DentistID == $dentist->DentistID)
												$name=$dentist->title.' '.$dentist->firstname.' '.$dentist->lastname;
										}
										if($ips->PaymentMethod=="New"){
						                	echo 
						                    '<div class="event">
						                          <div class="label">
						                            <i class="circle thin icon"></i>
						                          </div>
						                          <div class="content">
						                            <div class="summary">
						                              <a href="'.base_url('Invoice/InvoiceSlip/'.$ips->InvoiceID).'">Invoice '.$ips->InvoiceID.':</a><p>added for '.$name.'</p>
						                              <div class="date">'.date('h:i a',strtotime($ips->timecreated)).'</div>
						                            </div>
						                          </div>
						                        </div>';
						                }
						                else{
						                  echo
						                  '<div class="event">
						                    <div class="label">
						                      <i class="check circle icon invoice-icon"></i>
						                    </div>
						                    <div class="content">
						                      <div class="summary">
						                       <a href="'.base_url('Invoice/InvoiceSlip/'.$ips->InvoiceID).'">Paid Invoice '.$ips->InvoiceID.':</a> <p>Paid PHP '.number_format($ips->Amount,2).' in '.$ips->PaymentMethod.' by '.$name.'.</p>
						                        <div class="date">'.date('h:i a',strtotime($ips->timecreated)).'</div>
						                      </div>
						                    </div>
						                  </div>';
						                }

									}
									
									

									 
								}
								echo '<hr>';

							}

						}
						else{
								echo
									'<div class="event">
										<div class="content">
										    <div class="summary">
										    <br>
										    <center>No Activity Found!</center>
										    <br>
										     </div>
										</div>
									</div>
									<hr>';
										//break;
									}
						
						?>

						   <!---
						   <div class="event">
						    <div class="label">
						      <i class="circle thin icon"></i>
						    </div>
						    <div class="content">
						      <div class="summary">
						        <a href="#">Invoice 420:</a><p>added for Dr. Hugo Strange</p>
						        <div class="date">Today</div>
						      </div>
						    </div>
						  </div>
						 -->
						</div>
					</div>
				</div>
	   		</div>
	  </div>
	</div>
</div>


<div class="ui case modal">
  <div class="image content">
     <table id="dashboardcase" class="display ui blue table" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th width="25%">Case#</th>
					<th>INVOICE</th>
					<th>CUSTOMER/COMPANY</th>
					<th>PATIENT</th>
					<th>ORDERED DATE</th>
					<th>DUE DATE</th>
					<th>STATUS</th>			
				</tr>
			</thead>
			<tbody id="order_notif">
			<?php 
			foreach ($cases as $case) 
			{
				
				echo
					'<tr>
						<td><a href="'.base_url().'Order/Info/'.$case->CaseID.'">'.$case->CaseTypeID.'-'.$case->CaseID.'</a></td>
						<td>'; 
						foreach ($invoice as $i) 
						{
							if ($i->CaseID==$case->CaseID) 
							{
								if($i->datecreated!=null)
									echo '<a href="'.base_url('Invoice/InvoiceSlip/'.$i->InvoiceID).'" >Invoice # '.$i->InvoiceID.'</a>';
								else
									echo '<p >Invoice # '.$i->InvoiceID.'</p>';
							}
						}


				echo
						'</td>
						<td>
							<h4 class="ui image header">
								        <img src="'.base_url().'app/img/hjm-logo.png" class="ui mini rounded image">
								        <div class="content">';
						foreach ($dentists as $dentist) 
						{
							if($case->DentistID==$dentist->DentistID)
							{     
								echo
								            '<a href="Customer/Info/'.$case->DentistID.'">'.$dentist->title.' '.$dentist->firstname.' '.$dentist->lastname.'</a>
								            <div class="sub header">'.$dentist->company.'</div>';
							}
						}
				echo	          
										'</div>
							</h4>
						</td>
						<td>'.$case->patientfirstname.' '.$case->patientlastname.'</td>
						<td>'.date('l F d, Y h:i A', strtotime($case->orderdatetime)).'</td>
						<td>'.date('l F d, Y ', strtotime($case->duedate)).date('h:i A', strtotime($case->duetime)).'</td>
						<td><center>';
						foreach ($status as $stat){
							if($stat->status_id==$case->status_id){
							 	if($stat->status_id==1)
							 		echo '<div style="color:green;"><b>'.strtoupper($stat->status).'</b></div>';
							 	else
							 	if($stat->status_id==2)
							 		echo '<div style="color:purple;"><b>'.strtoupper($stat->status).'</b></div>';
							 	else
							 	if($stat->status_id==3)
							 		echo '<div style="color:blue;"><b>'.strtoupper($stat->status).'</b></div>';
							 	else
							 	if($stat->status_id==4)
							 		echo '<div style="color:red;"><b>'.strtoupper($stat->status).'</b></div>';
							}
							 	
						}		
							
							
						    
				  			
				  		echo			
						'</center></td>
						
						

					</tr>';
			}
			?>
			</tbody>
		</table>
  	</div>
</div>

<div class="ui inventory modal">
  	<div class="image content">
     		<table id="dashboardinventory" class="display ui blue table" cellspacing="0" width="100%">
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

<div class="ui OD modal">
  	<div class="image content">
     		<table id="dashboardODmodal" class="display ui blue table" cellspacing="0" width="100%">
	  				<thead>
	  					<tr>
	  						<th>Invoice #</th>
			  				<th>CUSTOMER/COMPANY</th>
			  				<th>DUE DATE</th>
			  				<th>BALANCE</th>
			  				<th>TOTAL</th>
	  					</tr>
	  				</thead>
	  				<tbody>
	  					<?php
	  				
						$sumPaymentOD=0;
	  					foreach ($ODinvoices as $invoice) {
						   	$sumPaymentOD=0;

	  						foreach ($InvoicePayments as $ip) {

						    	if($ip->InvoiceID==$invoice->InvoiceID) {   
						            $sumPaymentOD=$sumPaymentOD+$ip->Amount;
						        }
						    }
						   

		  					echo
		  					'<tr>
		  						<td><a href="'.base_url('Invoice/InvoiceSlip/'.$invoice->InvoiceID).'">Invoice #'.$invoice->InvoiceID.'</a></td>
		  						<td>
									<h4 class="ui image header">
										        <img src="'.base_url().'app/img/hjm-logo.png" class="ui mini rounded image">
										        <div class="content">';
								foreach ($dentists as $dentist) 
								{
									if($invoice->DentistID==$dentist->DentistID)
									{     
										echo
										'<a href="Customer/Info/'.$invoice->DentistID.'">'.$dentist->title.' '.$dentist->firstname.' '.$dentist->lastname.'</a>
										<div class="sub header">'.$dentist->company.'</div>';
									}
								}
								echo	          
											'</div>
									</h4>
								</td>
		  						<td><center>'.date('l F d, Y h:i A', strtotime($invoice->duedate)).'</center></td>
		  						<td><center>PHP '.number_format(($invoice->Total-$sumPaymentOD),2).'</center></td>
		  						<td><center>PHP '.number_format($invoice->Total,2).'</center></td>
		  					</tr>';
	  					}
	  					?>
	  				</tbody>
	  		</table>
  	</div>
  
</div>

<div class="ui OI modal">
  	<div class="image content">
     		<table id="dashboardOImodal" class="display ui blue table" cellspacing="0" width="100%">
	  				<thead>
	  					<tr>
	  						<th>Invoice #</th>
			  				<th>CUSTOMER/COMPANY</th>
			  				<th>DUE DATE</th>
			  				<th>BALANCE</th>
			  				<th>TOTAL</th>
	  					</tr>
	  				</thead>
	  				<tbody>
	  					<?php
	  				
						$sumPaymentOD=0;
	  					foreach ($OIinvoices as $invoice) {
						   	$sumPaymentOD=0;

	  						foreach ($InvoicePayments as $ip) {

						    	if($ip->InvoiceID==$invoice->InvoiceID) {   
						            $sumPaymentOD=$sumPaymentOD+$ip->Amount;
						        }
						    }
						   

		  					echo
		  					'<tr>
		  						<td><a href="'.base_url('Invoice/InvoiceSlip/'.$invoice->InvoiceID).'">Invoice #'.$invoice->InvoiceID.'</a></td>
		  						<td>
									<h4 class="ui image header">
										        <img src="'.base_url().'app/img/hjm-logo.png" class="ui mini rounded image">
										        <div class="content">';
								foreach ($dentists as $dentist) 
								{
									if($invoice->DentistID==$dentist->DentistID)
									{     
										echo
										'<a href="Customer/Info/'.$invoice->DentistID.'">'.$dentist->title.' '.$dentist->firstname.' '.$dentist->lastname.'</a>
										<div class="sub header">'.$dentist->company.'</div>';
									}
								}
								echo	          
											'</div>
									</h4>
								</td>
		  						<td><center>'.date('l F d, Y h:i A', strtotime($invoice->duedate)).'</center></td>
		  						<td><center>PHP '.number_format(($invoice->Total-$sumPaymentOD),2).'</center></td>
		  						<td><center>PHP '.number_format($invoice->Total,2).'</center></td>
		  					</tr>';
	  					}
	  					?>
	  				</tbody>
	  		</table>
  	</div>
  
</div>

<div class="ui Partial modal">
  	<div class="image content">
     		<table id="dashboardPartialmodal" class="display ui blue table" cellspacing="0" width="100%">
	  				<thead>
	  					<tr>
	  						<th>Invoice #</th>
			  				<th>CUSTOMER/COMPANY</th>
			  				<th>DUE DATE</th>
			  				<th>BALANCE</th>
			  				<th>TOTAL</th>
	  					</tr>
	  				</thead>
	  				<tbody>
	  					<?php
						
	  					foreach ($Partialinvoices as $invoice) {
						   	$sumPaymentOD=0;

	  						foreach ($InvoicePayments as $ip) {

						    	if($ip->InvoiceID==$invoice->InvoiceID) {   
						            $sumPaymentOD=$sumPaymentOD+$ip->Amount;
						        }
						    }
						   

		  					echo
		  					'<tr>
		  						<td><a href="'.base_url('Invoice/InvoiceSlip/'.$invoice->InvoiceID).'">Invoice #'.$invoice->InvoiceID.'</a></td>
		  						<td>
									<h4 class="ui image header">
										        <img src="'.base_url().'app/img/hjm-logo.png" class="ui mini rounded image">
										        <div class="content">';
								foreach ($dentists as $dentist) 
								{
									if($invoice->DentistID==$dentist->DentistID)
									{     
										echo
										'<a href="Customer/Info/'.$invoice->DentistID.'">'.$dentist->title.' '.$dentist->firstname.' '.$dentist->lastname.'</a>
										<div class="sub header">'.$dentist->company.'</div>';
									}
								}
								echo	          
											'</div>
									</h4>
								</td>
		  						<td><center>'.date('l F d, Y h:i A', strtotime($invoice->duedate)).'</center></td>
		  						<td><center>PHP '.number_format(($invoice->Total-$sumPaymentOD),2).'</center></td>
		  						<td><center>PHP '.number_format($invoice->Total,2).'</center></td>
		  					</tr>';
	  					}
	  					?>
	  				</tbody>
	  		</table>
  	</div>
  
</div>



