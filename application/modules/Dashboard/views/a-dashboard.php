<div class="ui grid home-grid">
	  	  <div class="row app-content">
	   		<div class="twelve wide column">
	   		<br>
	   		<div class="ui sizer vertical segment">
			  <div class="ui huge header">Welcome, Administrator!</div>
			  <p><?php echo date('l F d, Y ');?></p>
			</div>
			<br><br>
				<div class="ui four doubling cards">
				  <div class="card hvr-grow">
				   <div class="card-content">
				      <div class="box" id="customer-card">
				      	<h1 class="case-number"><i class="doctor icon"></i></h1>
				      </div>
				    </div>
				    <div class="content">
				      <div class="header">Customer</div>
				      <a href="<?php echo base_url('Customer');?>" class="hvr-icon-forward">View or Add New Customer
				     </a>
				    </div>
				  </div>
				  <div class="card hvr-grow">
				    <div class="card-content">
				      <div class="box" id="cases-card">
				      	<h1 class="case-number"><i class="file text outline icon"></i></h1>
				      </div>
				    </div>
				    <div class="content">
				      <div class="header">Cases</div>
				        <a href="#" class="hvr-icon-forward">View or Add New Case
				     </a>
				    </div>
				  </div>
				  <div class="card hvr-grow">
				    <div class="card-content">
				      <div class="box" id="supplier-card">
				      	<h1 class="case-number"><i class="truck icon"></i></h1>
				      </div>
				    </div>
				    <div class="content">
				      <div class="header">Supplier</div>
				        <a href="#" class="hvr-icon-forward">View or Add New Supplier
				     </a>
				    </div>
				  </div>
				    <div class="card hvr-grow">
				    <div class="card-content">
				      <div class="box" id="inventory-card">
				      	<h1 class="case-number"><i class="cubes icon"></i></h1>
				      </div>
				    </div>
				    <div class="content">
				      <div class="header">Inventory</div>
				        <a href="#" class="hvr-icon-forward">View or Add New Stocks
				     </a>
				    </div>
				  </div>
				</div>
				<div class="ui horizontal segments">
					<div class="ui segment">
						<div class="ui large header">Case Statistics</div>
						<div class="ui statistics">
						  <div class="green statistic">
						    <div class="value">
						      <i class="file text outline icon hvr-wobble-vertical"></i> 23
						    </div>
						    <div class="label">
						      <a href="#">New Cases</a>
						    </div>
						  </div>
						  <div class="purple statistic">
						    <div class="value">
						      <i class="lab icon hvr-buzz-out"></i> 11
						    </div>
						    <div class="label">
						      <a href="#">In Production</a>
						    </div>
						  </div>
						  <div class="blue statistic">
						    <div class="value">
						      <i class="circle check icon hvr-float"></i> 5
						    </div>
						    <div class="label">
						      <a href="#">Completed Cases</a>
						    </div>
						  </div>
						  <div class="red statistic">
						    <div class="value">
						      <i class="warning circle icon hvr-buzz"></i> 5
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
								<div class="value"><i class="cubes icon hvr-hang"></i>09</div>
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
					    <h3>7,000 PHP</h3>
					  </div>
					  <div class="ui segment partial">
					    <h3>5, 000 PHP</h3>
					  </div>
					  <div class="ui segment overdue">
					    <h3>13, 000 PHP</h3>
					  </div>
					  <div class="ui segment paid">
					    <h3>43,000 PHP</h3>
					  </div>
				 </div>
					<div class="ui four column grid">
					  <div class="column"><h1>04</h1><a href="#">OPEN INVOICES</a></div>
					  <div class="column"><h1>02</h1><a href="#">PARTIAL</a></div>
					  <div class="column"><h1>02</h1><a href="#">OVERDUE</a></div>
					  <div class="column"><h1>17</h1><a href="#">PAID LAST 30 DAYS </a></div>
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