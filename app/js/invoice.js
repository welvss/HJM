
var x =1;
var y=0;
var sum=0;


$("#AddRow").click(function(){
    x++;

   $('#Add').append('<tr id="Row'+x+'"><td>'+x+'</td><td><select class="ui selection dropdown" name="invoice['+x+'][Item]" id="dropdown" onchange="getCaseItems(this.value);"><option value="">Select Item</option></select></td><td></td><td><input type="number" style="width: 100px" id="QTY'+x+'" name="invoice['+x+'][QTY] onchange="multiply('+x+');" "></td><td><input type="text" id="Amount'+x+'" name="invoice['+x+'][Amount]"  onchange="multiply('+x+');addSubtotal('+x+');""></td><td ><input type="text" id="SubTotal'+x+'" name="invoice['+x+'][SubTotal]" ></td><td><a href="#" onClick="deleteRow('+x+')"><i class="trash icon"></i></a></td></tr>');


});


function addSubtotal(val)
{
 

  for (var i = val; i>0; i--) 
  {
    
      
      
        if(i===val)
        {
          sum= parseFloat($('#SubTotal'+i).val());
          y=sum;
        }
        else
        {
          sum= parseFloat($('#SubTotal'+i).val()) + y;
          y=sum; 
        }
     
     
      
  }

   
    
    
    $('#TotalSave').html('<input type hidden name="Total" value="'+y+'"/>PHP '+sum );
    $('#Total').html('PHP '+sum);
   


}


function deleteRow(val) {  
  if(sum!==0)
  {
     sum= sum - parseFloat($('#SubTotal'+val).val())  ;
     $('#TotalSave').html('<input type hidden name="Total" value="'+sum+'"/>PHP '+sum);
     $('#Total').html('PHP '+sum);
     document.getElementById("Row"+val).remove();
  }
    	
};



function multiply(x){ // run anytime the value changes

    var firstValue = parseFloat($('#QTY'+(x)).val()); // get value of field
    var secondValue = parseFloat($('#Amount'+(x)).val()); // convert it to a float
     y=firstValue * secondValue;
    $('#SubTotal'+(x)).val(y); 
 //add them and output it
  };



