
var socket = io.connect( 'http://'+window.location.hostname+':3000' );

socket.on( 'new_count_order', function( data ) {
		  
		$( "#new_count_order" ).append( '<div class="ui left label" id="number-notif" id="number-notif ">'+data.new_count_order+'</div>' );
		    		  

});

		 

socket.on( 'new_order', function( data ) {
		  
		$( "#order_notif" ).prepend('<tr><td>'+data.name+'</td><td>'+data.email+'</td><td>'+data.subject+'</td><td>'+data.created_at+'</td><td><a style="cursor:pointer" data-toggle="modal" data-target=".bs-example-modal-sm" class="detail-message" id="'+data.id+'"><span class="glyphicon glyphicon-search"></span></a></td></tr>');
		$( "#no-message-notif" ).html('');
		$( "#new-message-notif" ).html('<div class="alert alert-success" role="alert"> <i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>New message ...</div>');
});
