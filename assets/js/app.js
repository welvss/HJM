$(document).foundation();
$(window)
        .load(function() {
            SetOffCanvasHeight();
        })
        .resize(function() {
            SetOffCanvasHeight();
        });

        function SetOffCanvasHeight() {
            var height = $(window).height();
            var contentHeight = $(".off-canvas-content").height();
            if (contentHeight > height) { height = contentHeight; }

            $(".off-canvas-wrapper").height(height);
            $(".off-canvas-wrapper-inner").height(height);
            $(".off-canvas").height(height);
        } 

$('#same-as').change(function(){
    if (this.checked) {
        document.getElementById("ship-street").disabled = true;
		document.getElementById("ship-city").disabled = true;
		document.getElementById("ship-baranggay").disabled = true;
    }
	else{
		 document.getElementById("ship-street").disabled = false;
		document.getElementById("ship-city").disabled = false;
		document.getElementById("ship-baranggay").disabled = false;
	}


});
$('#j-table').DataTable( {
	responsive: true,
	scrollY: '50vh',
	scrollCollapse: true,
	paging: false,
	select: true,
	  dom: 'Bfrtip',
        buttons: [
            'print'
        ],
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]]
	
});
 
$("#s").click(function(){
      
       var dataString = { 
              patient : $("#patient").val(),
              DentistID : $("#DentistID").val(),
              duedate : $("#duedate").val(),
              duetime : $("#duetime").val(),
              age : $("#age").val(),
              gender : $("#gender").val(),
              notes : $("#notes").val()
            };
         
        $.ajax(
        {

            type: "POST",
            url: "Order/AddOrder",
            data: dataString,
            dataType: "JSON",
            cache : false,
            success: function(data){
                
           
            $("#patient").val('');
            $("#DentistID").val('');
            $("#duedate").val('');
            $("#duetime").val('');
            $("#age").val('');
            $("#gender").val('');
            $("#notes").val('');

              if(data.success == true){

               
                var socket = io.connect( 'http://'+window.location.hostname+':3000' );

                socket.emit('new_count_order', { 
                  new_count_order: data.new_count_order
                });

                socket.emit('new_order', { 
                    CaseID :data.CaseID,
                    patient : data.patient,
                    fullname: data.fullname,
                    company: data.company,
                    orderdatetime: data.orderdatetime,
                    DentistID : data.DentistID,
                    duedate : data.duedate ,
                    duetime : data.duetime ,
                    age : data.age,
                    gender : data.gender,
                    notes : data.notes,
                    status: data.status
                });

              } else if(data.success == false){

                    $("#patient").val(data.patient);
                    $("#DentistID").val(data.DentistID);
                    $("#duedate").val(data.duedate);
                    $("#duetime").val(data.duedate);
                    $("#age").val(data.age);
                    $("#gender").val(data.gender);
                    $("#notes").val(data.notes);
                   
                    

              }
          
            } ,error: function(xhr, status, error,ajaxOptions, thrownErro) {
              alert(error);
               alert(xhr.status);
                
                  alert(xhr.responseText);
            },

    });
});
//
  var dataTable = $('#j-table').dataTable();
    $("#custom-searchbox").keyup(function() {
        dataTable.fnFilter(this.value);
    });    





