function notifCase(){
	var req = new XMLHttpRequest();


	req.onreadystatechange= function(){

		if(req.readyState==4 && req.status==200){
			
			$( "#new_count_order" ).html('<i class="file text outline icon hvr-wobble-vertical"></i> '+req.responseText);
			if(req.responseText>0){
				$( "#new_count_sidebar" ).html('<i class="large file text outline icon" ></i><div class="ui left label" id="number-notif" >'+req.responseText+'</div> Cases');
			}
			else{
				$( "#new_count_sidebar" ).html('<i class="large file text outline icon" ></i> Cases');
			}
			$( "#new_count_dashboard" ).html('<i class="file text outline icon hvr-wobble-vertical"></i> '+req.responseText);
		}

	}
	req.open('GET',"http://"+window.location.hostname+"/HJM/Order/countNewOrder",true);
	req.send();

}


function notifInventory(){
	var req = new XMLHttpRequest();


	req.onreadystatechange= function(){

		if(req.readyState==4 && req.status==200){
			
			if(req.responseText>0){
				$( "#inventory_count_sidebar" ).html('<i class="large cubes icon"></i><div class="ui left red label" id="number-notif" >'+req.responseText+'</div> Inventory');
			}
			else{
				$( "#inventory_count_sidebar" ).html('<i class="large cubes icon"></i> Inventory');
			}
			$( "#inventory_count_dashboard" ).html('<i class="cubes icon hvr-hang"></i>'+req.responseText);
		}

	}
	req.open('GET',"http://"+window.location.hostname+"/HJM/Inventory/countInventory",true);
	req.send();

}
setInterval(function(){notifCase();notifInventory();},1000);