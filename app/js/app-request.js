
function getNotif(){
    $.get("http://"+window.location.hostname+"/HJM/Order/countNewOrder", function(data){
        	$( "#new_count_order" ).html('<i class="file text outline icon hvr-wobble-vertical"></i> '+data);
			if(data>0){
				$( "#new_count_sidebar" ).html('<i class="large file text outline icon" ></i><div class="ui left label" id="number-notif" >'+data+'</div> Cases');
			}
			else{
				$( "#new_count_sidebar" ).html('<i class="large file text outline icon" ></i> Cases');
			}
			$( "#new_count_dashboard" ).html('<i class="file text outline icon hvr-wobble-vertical"></i> '+data);
    });
     $.get("http://"+window.location.hostname+"/HJM/Inventory/countInventory", function(data){
        	if(data>0){
				$( "#inventory_count_sidebar" ).html('<i class="large cubes icon"></i><div class="ui left red label" id="number-notif" >'+data+'</div> Inventory');
			}
			else{
				$( "#inventory_count_sidebar" ).html('<i class="large cubes icon"></i> Inventory');
			}
			$( "#inventory_count_dashboard" ).html('<i class="cubes icon hvr-hang"></i>'+data);
    });
}


setInterval(function(){getNotif();},1000);