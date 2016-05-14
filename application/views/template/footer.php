    <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/what-input/what-input.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/datatables.net-zf/js/dataTables.foundation.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/datatables.net-responsive/js/dataTables.responsive.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/datatables.net-responsive-zf/js/responsive.foundation.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="<?php echo base_url();?>node_modules/socket.io/node_modules/socket.io-client/socket.io.js"></script>
    <script src="<?php echo base_url();?>assets/js/app.js"></script>
    <script>

        var socket = io.connect( 'http://'+window.location.hostname+':3000' );

    

        socket.on( 'new_order', function( data ) {
        
            $( "#new_ordertbody" ).prepend(
            '<tr>
                <td></td>
                <td>'+data.company+'</td>
                <td>date("l F d, Y h:i A", strtotime('+data.orderdatetime+'))</td>
                <td>date("l F d, Y" , strtotime('+data.duedate+')).date("h:i A", strtotime('+data.duetime+'))</td>
                <td>
                ".form_open("Order/UpdateOrderStatus").form_hidden("CaseID",'+data.CaseID+')."
                <select name="status" class="status-box">
                    <option selected="'+data.status+'">'+data.status+'</option>
                    <option value="New">New</option>
                    <option value="In Production">In Production</option>
                    <option value="Complete">Complete</option>
                    <option value="On Hold">On Hold</option>
                </select>
                <br>
                ".form_submit("submit","Submit","class="button success"")."
                </form>
                </td>
                <td><a href="#">Lab Slip</a></td>
                <td><a href="">Edit</a></td>
            </tr>');
            
        });

    </script>   
  </body>
</html>
    
   