<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HJM | Dental Laboratory</title>
</head>
<link rel="stylesheet" href="<?php echo base_url();?>app/bower_components/semantic/dist/semantic.min.css">
<body>
<br>
<div class="wrapper">
	<div class="brand">
		 <img src="<?php echo base_url();?>app/img/hjm-logo-inverted.png" alt="">
		 <p style="display: inline-block;">DENTAL LABORATORY</p>
	</div>
	<div class="brand-info">
	<p>521 Int. Inocencio St. Pasay City <br>
	   844-45-09 <br>
	   hjmdentallaboratory@gmail.com</p>
	</div>
	<div class="invoice-body">
		<h1>INVOICE</h1>
		<div class="row">
			<div class="left">
				<p><strong>BILL TO:</strong></p>
				<p>
				<?php 
			
				

			
				echo $dentist->title.' '.$dentist->firstname.' '.$dentist->lastname.'<br>'.
					$dentist->company.'<br>'
					.$dentist->bstreet.', '.$dentist->bbrgy.', '.$dentist->bcity;
			
				
				?>
				</p>
			</div>
			<div class="right">
				<p><strong>Invoice No:</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $invoice->InvoiceID;?></p>
				<p><strong>Invoice Date:</strong> <?php echo date('m/d/Y',strtotime($invoice->datecreated)) ;?></p>	
				<p><strong>Due Date:</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('m/d/Y',strtotime($invoice->duedate)) ;?></p>			
			</div>
		</div>
		<div class="row invoice-table">
			<table class="ui table">
				<thead>
					<tr>
						<th>Item Description</th>
						<th>Teeth Number</th>
						<th>Qty</th>
						<th>Amount</th>
						<th>Case Total</th>
					</tr>
				</thead>
				<tbody>
					<?php

								foreach ($invoiceitems as $ii) 
								{
									echo
									'<tr>';
									foreach ($items as $item) 
									{
										if($ii->ItemID==$item->ItemID)

										echo '<td>'.$item->ItemDesc.'</td>';
									}
										
			
								
									echo '<td>';
									 
					  					$teeth = explode(',',$case->teeth);
				  						$ctr= count($teeth);
				  						$i=0;
				  						foreach ($teeth as $tooth) {
				  							if(++$i != $ctr)
				  								echo $tooth.', ';
				  							else
				  								echo $tooth;
				  						}
					  				
					  				echo 
					  					'</td>
										<td>'.$ii->QTY.'</td>
										<td>PHP '.$ii->Amount.'</td>
										<td>PHP '.number_format($ii->SubTotal,2).'</td>
									</tr>';
							
								}
							?>
				</tbody>
			</table>
		</div>
		<br><br><br><hr>
		<div class="row">
			<div class="left">
				<h3 class="ui header">
					Notes
				</h3>
				<p></p>
			</div>
			<div class="right">
				<div class="subtotal">
					<p>Sub total:</p>
					<p><?php echo 'PHP '.number_format($invoice->Total,2);?></p>
				</div>
				<hr>
				<div class="total">
					<h3>TOTAL:</h3>
					<h3><?php echo 'PHP '.number_format($invoice->Total,2);?></h3>
				</div>
			</div>
		</div>
	</div>
</div>
	<style>
	.invoice-table{
		position: relative;
		top: 25px;
	}
	.total>h3{
		display: inline;
	}
	.subtotal>p{
		display: inline;
	}
	.invoice-table{
		margin-top: 15px !important;
	}
	.right{
		float: right;
		margin-right: 15px;
	}
	.left{
		float: left;
	}
	.invoice-body{
		margin-top: 50px;
		margin-left: 15px;
	}
		.wrapper{
			width: 980px;
			position: relative;
			margin: 0 auto;
		}
.brand-info{
	margin-left: 15px;
}
.brand>img{
	height: 70px; width: 143;
	margin-top: 5px;
}
.brand>p{
	color: black;
	font-family: 'Roboto', sans-serif;
	font-weight: bold;
	letter-spacing: 15px;
	position: relative;
	bottom: 20px;

}
	</style>
	<script type="text/javascript">
	window.print();
	</script>
</body>
</html>