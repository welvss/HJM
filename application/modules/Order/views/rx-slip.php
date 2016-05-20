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
	<div class="ui grid">
		<div class="row">
			<div class="two wide column">
				<h4 class="ui header">
					Doctor: 
				</h4>
			</div>
			<div class="five wide column">
				<h4 class="ui header">
					<?php echo $dentist->title.' '.$dentist->firstname.' '.$dentist->lastname;?>
				</h4>
			</div>
		</div>
		<div class="row">
			<div class="two wide column">
				<h4 class="ui header">
					Patient: 
				</h4>
			</div>
			<div class="five wide column">
				<h4 class="ui header">
					<?php echo $case->patientfirstname.' '.$case->patientlastname;?>
				</h4>
			</div>
		</div>
		<div class="row">
			<div class="two wide column">
				<h4 class="ui header">
					Due:
				</h4>
			</div>
			<div class="five wide column">
				<h4 class="ui header">
					<?php echo date('l F d, Y ', strtotime($case->duedate)).date('h:i A', strtotime($case->duetime));?>
				</h4>
			</div>
		</div>
		<div class="row">
			<div class="sixteen wide column">
				<div class="ui blue header">
					<h3>Crown</h3>
				</div>
				<hr>
			</div>
		</div>
		<div class="row">
				<div class="two wide column">
				<h4 class="ui header">
					Crown: 
				</h4>
			</div>
			<div class="five wide column">
				<h4 class="ui header">
					Emax
				</h4>
			</div>
		</div>
		<div class="row">
				<div class="two wide column">
				<h4 class="ui header">
					Teeth:
				</h4>
			</div>
			<div class="five wide column">
				<h4 class="ui header">
					<?php 
				  		$ctr= count($teeth);
				  		$i=0;
				  		foreach ($teeth as $tooth) 
				  		{
				  			if(++$i != $ctr)
				  				echo '#'.$tooth->teeth.', ';
				  			else
				  				echo '#'.$tooth->teeth;
				  		}
				  	?>
				</h4>
			</div>
		</div>
		<div class="row">
			<div class="sixteen wide column">
				<div class="ui blue header">
					<h3>Shade</h3>
				</div>
				<hr>
			</div>
		</div>
		<div class="row">
				<div class="two wide column">
				<h4 class="ui header">
					Shade #1:
				</h4>
			</div>
			<div class="five wide column">
				<h4 class="ui header">
					<?php echo $case->shade2;?>
				</h4>
			</div>
		</div>
		<div class="row">
				<div class="two wide column">
				<h4 class="ui header">
					Shade #2:
				</h4>
			</div>
			<div class="five wide column">
				<h4 class="ui header">
					n/a
				</h4>
			</div>
		</div>
		<div class="row">
				<div class="two wide column">
				<h4 class="ui header">
					Shade #3:
				</h4>
			</div>
			<div class="five wide column">
				<h4 class="ui header">
					n/a
				</h4>
			</div>
		</div>
		<div class="row">
			<div class="sixteen wide column">
				<div class="ui blue header">
					<h3>Prescription</h3>
				</div>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="sixteen wide column">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus aliquam, nulla numquam recusandae repellendus tenetur ex quos soluta dignissimos architecto deserunt, molestiae sit animi voluptate totam ullam fuga culpa assumenda.</p>
			</div>
		</div>
		<div class="row">
			<div class="sixteen wide column">
				<div class="ui blue header">
					<h3>Additional Services</h3>
				</div>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="sixteen wide column">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus aliquam, nulla numquam recusandae repellendus tenetur ex quos soluta dignissimos architecto deserunt, molestiae sit animi voluptate totam ullam fuga culpa assumenda.</p>
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
</body>
</html>