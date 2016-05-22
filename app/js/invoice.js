var x =1;
var y;
var sum=0;


$("#AddRow").click(function(){
    x++;

   $('#Add').append('<tr><td>'+x+'</td><td><div class="ui selection dropdown"><input type="hidden" name="invoice['+x+'][item]"><i class="dropdown icon"></i><div class="default text">Default item dito</div><div class="menu"><div class="item" data-value="1">Emax</div></td><td></td><td><input type="number" style="width: 100px" id="QTY'+x+'" name="invoice['+x+'][QTY]"></td><td><input type="text" id="Amount'+x+'" name="invoice['+x+'][Amount]" onchange="addSubtotal();"></td><td ><input type="text" id="SubTotal'+x+'" name="invoice['+x+'][SubTotal]" ></td><td><a href="#" onClick="deleteRow(this)"><i class="trash icon"></i></a></td></tr>');
   
   
   
   
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
    $('#Total').html('PHP '+sum);


}

function deleteRow(btn) {  
	
     sum= sum - parseFloat($('#SubTotal'+x).val())  ;
     $('#TotalSave').html('<input type hidden name="Total" value="'+sum+'"/>PHP '+sum);
	  var row = btn.parentNode.parentNode;
	  row.parentNode.removeChild(row);
	  x--;
  
	

    	
};

$('input').keyup(function(){ // run anytime the value changes

    var firstValue = parseFloat($('#QTY'+(x)).val()); // get value of field
    var secondValue = parseFloat($('#Amount'+(x)).val()); // convert it to a float
     y=firstValue * secondValue;
    $('#SubTotal'+(x)).val(y); 
   sum=y;
   
    $('#TotalSave').html('<input type hidden name="Total" value="'+sum+'"/>PHP '+sum);
    $('#Total').html('PHP '+sum);
 //add them and output it
  });

