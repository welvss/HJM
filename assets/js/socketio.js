$(document).foundation();
        
    
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
         
        $.ajax({

        
            type: "POST",
            url: "Order/AddOrder",
            data: dataString,
            dataType: "json",
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
                    patient : data.patient,
                    DentistID : data.DentistID,
                    duedate : data.duedate ,
                    duetime : data.duetime ,
                    age : data.age,
                    gender : data.gender,
                    notes : data.notes 
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
          
            } ,error: function(xhr, status, error) {
              alert(error);
            },

        });

    });
