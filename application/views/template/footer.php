  
    <script src="<?php echo base_url();?>app/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>app/bower_components/semantic/dist/semantic.min.js"></script>
    <script src="<?php echo base_url();?>app/bower_components/datatables.net/js/jquery.dataTables.js"></script>
    <?php echo $script;?>
    <script src="<?php echo base_url();?>node_modules/socket.io/node_modules/socket.io-client/socket.io.js"></script>
  	<script src="<?php echo base_url();?>app/js/socketio.js"></script>
  	<script src="<?php echo base_url();?>app/js/print.js"></script>
  	<script src="<?php echo base_url();?>app/js/invoice.js"></script>
	<script type="text/javascript">
	function getItemDesc(val) {

  $.ajax({
  type: "POST",
  url: "<?php echo base_url();?>Inventory/getDetails",
  data:'ItemID='+val,
  success: function(data){
    $("#ItemDesc").html(data);
    $('#item').val('')
  
  },error: function(xhr, status, error,ajaxOptions, thrownErro) {
              alert(error);
               alert(xhr.status);
                
                  alert(xhr.responseText);
            },

  });
}


function getCaseItems(val) {
 var dataString = { 
             CaseID : $("#CaseID").val(),
              ItemID : val
              
            };
            
  $.ajax({
  type: "POST",
  url: "<?php echo base_url();?>Order/getCaseItems",
  data: dataString,
  success: function(data){
    alert(data);
    $("#dropdown").append(data.test);

    
  
  },error: function(xhr, status, error,ajaxOptions, thrownErro) {
              alert(error);
               alert(xhr.status);
                
                  alert(xhr.responseText);
            },

  });
}

function multiply(x){ // run anytime the value changes

    var firstValue = parseFloat($('#QTY'+(x)).val()); // get value of field
    var secondValue = parseFloat($('#Amount'+(x)).val()); // convert it to a float
     y=firstValue * secondValue;
    $('#SubTotal'+(x)).val(y); 
    $('#Total'+(x)).val(y); 
 //add them and output it
  };

	</script>



    
</body>
</html>