
function getNotif(){
    $.getJSON("http://"+window.location.hostname+"/HJM/Order/countOrder", function(data){
        	
			if(data.New>0){
				$( "#new_count_sidebar" ).html('<i class="large file text outline icon" ></i><div class="ui left label" id="number-notif" >'+data.New+'</div> Cases');
			}
			else{
				$( "#new_count_sidebar" ).html('<i class="large file text outline icon" ></i> Cases');
			}
			
			//Order
			$( "#new_count_order" ).html('<i class="file text outline icon hvr-wobble-vertical"></i> '+data.New);
			$( "#ip_count_order" ).html(' <i class="lab icon hvr-buzz-out"></i> '+data.In_Production);
			$( "#completed_count_order" ).html('<i class="circle check icon hvr-float"></i> '+data.Completed);
			$( "#oh_count_order" ).html('<i class="warning circle icon hvr-buzz"></i> '+data.On_Hold);

			//Dashboard
			$( "#new_count_dashboard" ).html('<i class="file text outline icon hvr-wobble-vertical"></i> '+data.New);
			$( "#IP_count_dashboard" ).html('<i class="lab icon hvr-buzz-out"></i> '+data.In_Production);
			$( "#Complete_count_dashboard" ).html('<i class="circle check icon hvr-float"></i> '+data.Completed);
			$( "#OH_count_dashboard" ).html('<i class="warning circle icon hvr-buzz"></i> '+data.On_Hold);
    });
    $.get("http://"+window.location.hostname+"/HJM/Dashboard/recentactivities", function(data){
        	
			$( "#recent_activities" ).html(data);
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
    $.get("http://"+window.location.hostname+"/HJM/Dashboard/recentactivities", function(data){
        	
			$( "#recent_activities" ).html(data);
    });
    $.getJSON("http://"+window.location.hostname+"/HJM/Invoice/getInvoiceCount", function(data){
    		$( "#OI" ).text(data.OI);
        	$( "#OD" ).text(data.OD);
        	$( "#PCount" ).text(data.PCount);
        	$( "#sum" ).text(data.sum+' PHP');
        	$( "#overdue" ).text(data.overdue+' PHP');
        	$( "#Partial" ).text(data.Partial+' PHP');
			
    });
}


setInterval(function(){getNotif();},300);