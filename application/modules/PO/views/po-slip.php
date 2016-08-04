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
		<h1>Purchase Order</h1>
		<div class="row">
			<div class="left">
				<p><strong>Supplier:</strong></p>
				<p><?php echo $supplier->title.' '.$supplier->firstname.' '.$supplier->lastname;?><br>
				   <?php echo $supplier->company;?><br>
				   <?php echo $supplier->bstreet.', '.$supplier->bbrgy.', '.$supplier->bcity;?>
				</p>
			</div>
			<div class="right">
				<p><strong>Purchase Order No:</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $po->POID;?></p>
				<p><strong>Order Date:</strong>&nbsp;<?php echo date('F d, Y ', strtotime($po->orderdatetime));?></p>	
				<p><strong>Requested Ship Date:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('F d, Y ', strtotime($po->shipdate));?></p>			
			</div>
		</div>
		<div class="row invoice-table">
			<table class="ui table">
				<thead>
					<tr>
						<th>Item Code</th>
						<th>Item Description</th>
						<th>Qty</th>
						<th>Amount</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
				<?php
				foreach ($poitems as $poi){
					echo
						'<tr>
							<td>'.$poi->ItemID.'</td>';
							foreach ($items as $item) {
								if($item->ItemID==$poi->ItemID){
									echo
									'<td>'.$item->ItemDesc.'</td>';
								}
							}
							
							echo
							'<td>'.$poi->QTY.'</td>
							<td>PHP '.number_format($poi->Amount,2).'</td>
							<td>PHP '.number_format($poi->SubTotal,2).'</td>
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
					<p>PHP <?php echo number_format($po->Total,2);?></p>
				</div>
				<hr>
				<div class="total">
					<h3>TOTAL:</h3>
					<h3>PHP <?php echo number_format($po->Total,2);?></h3>
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