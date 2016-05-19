
var socket = io.connect( 'http://'+window.location.hostname+':3000' );

socket.on( 'new_count_order', function( data ) {
		  
		$( "#new_count_order" ).html('<i class="file text outline icon hvr-wobble-vertical"></i> '+data.new_count_order);
		$( "#new_count_sidebar" ).html('<i class="large file text outline icon" ></i><div class="ui left label" id="number-notif" >'+data.new_count_order+'</div> Cases');
		$( "#new_count_dashboard" ).html('<i class="file text outline icon hvr-wobble-vertical"></i> '+data.new_count_order);
		    		  

});

		 

socket.on( 'new_order', function( data ) {
		  
		$( "#order_notif" ).prepend('<tr><td><a href="#">#SERDS-'+data.CaseID+'</a></td><td><a href="#">420</a></td><td><h4 class="ui image header"><img src="app/img/hjm-logo.png" class="ui mini rounded image"> <div class="content"><a href="">'+data.fullname+'</a><div class="sub header">'+data.company+'</div></div></h4></td><td>'+data.patient+'</td><td>'+data.orderdatetime+'</td><td>'+data.duedate+' '+data.duetime+'</td><input type="hidden" name="CaseID" value="'+data.CaseID+'"><td><form action="http://localhost/HJM/index.php/Order/UpdateOrderStatus" method="post" accept-charset="utf-8"><input type="hidden" name="CaseID" value="'+data.CaseID+'"><div class="ui form"><div class="ten wide field"><select name="status"><option value="New">New</option><option value="In Production">In Production<i class="green check icon"></i></option><option value="Completed">Completed</option><option value="On Hold">On Hold</option></select></div></div><button type="submit" class="ui black button mode" value="submit"><i class="green check icon"></i>Update</button></form></td></tr>');
		
});


