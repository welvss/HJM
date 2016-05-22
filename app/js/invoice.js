var x =1;
var y;
var sum=0;

$("#AddRow").click(function(){
    x++;

   $('#Add').append('<tr><td>'+x+'</td><td><input class="sixteen wide field" type="text" name="invoice['+x+'][Item]"/></td><td><input class="fifteen wide field" type="text" name="invoice['+x+'][Description]"/></td>​<td><input type="text" id="QTY'+x+'" name="invoice['+x+'][QTY]" value="" ></td><td><input type="text"  id="Amount'+x+'" name="invoice['+x+'][Amount]" value="" onchange="addSubtotal();"></td><td><input type="text"  id="SubTotal'+x+'" name="invoice['+x+'][SubTotal]" value="" "></td><td><a href="#"  onClick="deleteRow(this)"><i class="trash icon"></i></a></td></tr>');
   
   
   $('input').keyup(function(){ // run anytime the value changes

    var firstValue = parseFloat($('#QTY'+x).val()); // get value of field
    var secondValue = parseFloat($('#Amount'+x).val()); // convert it to a float
    y=firstValue * secondValue;
    $('#SubTotal'+x).val(y); 
   
  });
});


function addSubtotal()
{
  
      sum= parseFloat($('#SubTotal'+x).val()) + sum;
  
  
    $('#TotalSave').html('<input type hidden name="Total" value="'+sum+'"/>PHP '+sum);

}

function deleteRow(btn) {  
	

	  var row = btn.parentNode.parentNode;
	  row.parentNode.removeChild(row);
	  x--;
  
	

    	
};

$('input').keyup(function(){ // run anytime the value changes

    var firstValue = parseFloat($('#QTY'+(x)).val()); // get value of field
    var secondValue = parseFloat($('#Amount'+(x)).val()); // convert it to a float
     y=firstValue * secondValue;
    $('#SubTotal'+(x)).val(y); 
   
   
    $('#Total').val(y); //add them and output it
  });

