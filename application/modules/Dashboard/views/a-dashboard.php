

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
						  <div class="green statistic testing">
						    <div class="value" id="new_count_dashboard">
						      <i class="file text outline icon hvr-wobble-vertical ">1</i> <?php echo $New;?>
						    </div>
						    <div class="label">
						      <a href="#" >New Cases</a>
						    </div>
						  </div>
						  <div class="purple statistic">
						    <div class="value">
						      <i class="lab icon hvr-buzz-out"></i>  <?php echo $IP;?>
						    </div>
						    <div class="label">
						      <a href="#">In Production</a>
						    </div>
						  </div>
						  <div class="blue statistic">
						    <div class="value">
						      <i class="circle check icon hvr-float"></i>  <?php echo $Completed;?>
						    </div>
						    <div class="label">
						      <a href="#">Completed Cases</a>
						    </div>
						  </div>
						  <div class="red statistic">
						    <div class="value">
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
							<div class="statistic">
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
					    <h3><?php echo number_format($sum->Total,2);?> PHP</h3>
					  </div>
					  <div class="ui segment partial">
					    <h3>0.00 PHP</h3>
					  </div>
					  <div class="ui segment overdue">
					    <h3><?php echo number_format($overdue->Total,2);?> PHP</h3>
					  </div>
					  <div class="ui segment paid">
					    <h3>0.00 PHP</h3>
					  </div>
				 </div>
					<div class="ui four column grid">
					  <div class="column"><h1><?php echo $OI;?></h1><a href="#">OPEN INVOICES</a></div>
					  <div class="column"><h1>0</h1><a href="#">PARTIAL</a></div>
					  <div class="column"><h1><?php echo $OD;?></h1><a href="#">OVERDUE</a></div>
					  <div class="column"><h1>0</h1><a href="#">PAID LAST 30 DAYS </a></div>
					</div>
				</div>
	   		</div>
	   		<div class="four wide column">
	   			<div class="ui horizontal segment">
					<div class="transaction-feed">
						<div class="ui feed">
							<div class="ui sizer vertical segment">
							  <div class="ui large header">Recent Activities</div>
							</div>
							<div class="ui sizer vertical segment">
							  <div class="ui header">May 15, 2016</div>
							  <div class="sub header">Today</div>
							</div>
						  <div class="event">
						    <div class="label">
						      <i class="check circle icon invoice-icon"></i>
						    </div>
						    <div class="content">
						      <div class="summary">
						       <a href="#">Paid Invoice 420:</a> <p>Paid PHP 2,000 in full by Dr. Hugo Strange.</p>
						        <div class="date">Today</div>
						      </div>
						    </div>
						  </div>
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
						  <hr>
						  <div class="ui sizer vertical segment">
							  <div class="ui header">May 15, 2016</div>
							  <div class="sub header">Today</div>
							</div>
						  <div class="event">
						    <div class="label">
						      <i class="check circle icon invoice-icon"></i>
						    </div>
						    <div class="content">
						      <div class="summary">
						       <a href="#">Paid Invoice 420:</a> <p>Paid PHP 2,000 in full by Dr. Hugo Strange.</p>
						        <div class="date">Today</div>
						      </div>
						    </div>
						  </div>
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
						  <hr>
						  <div class="ui sizer vertical segment">
							  <div class="ui header">May 15, 2016</div>
							  <div class="sub header">Today</div>
							</div>
						  <div class="event">
						    <div class="label">
						      <i class="check circle icon invoice-icon"></i>
						    </div>
						    <div class="content">
						      <div class="summary">
						       <a href="#">Paid Invoice 420:</a> <p>Paid PHP 2,000 in full by Dr. Hugo Strange.</p>
						        <div class="date">Today</div>
						      </div>
						    </div>
						  </div>
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
						  <hr>
						  <div class="ui sizer vertical segment">
							  <div class="ui header">May 15, 2016</div>
							  <div class="sub header">Today</div>
							</div>
						  <div class="event">
						    <div class="label">
						      <i class="check circle icon invoice-icon"></i>
						    </div>
						    <div class="content">
						      <div class="summary">
						       <a href="#">Paid Invoice 420:</a> <p>Paid PHP 2,000 in full by Dr. Hugo Strange.</p>
						        <div class="date">Today</div>
						      </div>
						    </div>
						  </div>
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
						  <hr>
						</div>
					</div>
				</div>
	   		</div>
	  </div>
	  </div>
</div>

<div class="ui basic modal">
  <i class="close icon"></i>
  <div class="header">
    Archive Old Messages
  </div>
  <div class="image content">
    <div class="image">
      <i class="archive icon"></i>
    </div>
    <div class="description">
      <p>Your inbox is getting full, would you like us to enable automatic archiving of old messages?</p>
    </div>
  </div>
  <div class="actions">
    <div class="two fluid ui inverted buttons">
      <div class="ui cancel red basic inverted button">
        <i class="remove icon"></i>
        No
      </div>
      <div class="ui ok green basic inverted button">
        <i class="checkmark icon"></i>
        Yes
      </div>
    </div>
  </div>
</div>

