
var x =1;
var y=0;
var sum=$('#sum').val();
var rows = document.getElementById("Add").getElementsByTagName("tr").length;

$( document ).ready(function(){
  if($('#Item'+x).val()=='')
    document.getElementById('AddRow').disabled = true;
  if($('#QTY'+x).val()==null)   
    document.getElementById('QTY'+x).disabled = true;
  if($('#Amount'+x).val()==null)
    document.getElementById('Amount'+x).disabled = true;
  if($('#SubTotal'+x).val()==null)
    document.getElementById('SubTotal'+x).disabled = true;

  if(rows>x)
    x=rows;
  for(var y=x-1;y>=1;y--){
     $('#Bin'+y).hide();
  }
  $('#Bin1').hide();
 $('.select')
  .dropdown();


});



function Addrow(){
    
    if($('#Item'+x).val()!=''){
      x++;
      var id= $('#DentistID').val();
      $('#Add').append('<tr id="Row'+x+'"><td>'+x+'</td><td ></td><td id="ItemDesc'+x+'"></td><td><input type="number" style="width: 100px" id="QTY'+x+'" name="invoice['+x+'][QTY]" onkeyup="multiply('+x+');addSubtotal('+x+');"></td><td><input type="text" id="Amount'+x+'" name="invoice['+x+'][Amount]"  onkeyup="multiply('+x+');addSubtotal('+x+');numberCheck('+x+');"></td><td ><input type="text" id="SubTotal'+x+'" name="invoice['+x+'][SubTotal]" ></td><td><a href="#" onClick="deleteRow('+x+')"><i class="trash icon" id="Bin'+x+'"></i></a></td></tr>');
      document.getElementById('AddRow').disabled = true;
      $('#Bin'+(x-1)).hide();
      getItems(id);
      document.getElementById('QTY'+x).disabled = true;
      document.getElementById('Amount'+x).disabled = true;
      document.getElementById('SubTotal'+x).disabled = true;
    }
    if(x===1){
      $('#Bin1').hide();
    }



};


function numberCheck(y) {

  if(y!==0){
    var sanitized = $('#Amount'+y).val().replace(/[^0-9.]/g, '');
    $('#Amount'+y).val(sanitized);
    /*if($('#Amount'+y).val()=='')
      $('#Amount'+y).val(0);
    if($('#Amount'+y).val()!='' && $('#Amount'+y).val()==0)
    {
      console.log(sanitized);
      $('#Amount'+y).val(sanitized);
    }*/
  }
  else
  if(y===0){
    var sanitized = $('#age').val().replace(/[^0-9.]/g, '');
    $('#age').val(sanitized);
  }
}

function letterCheck(y) {


    var sanitized = $('#'+y).val().replace(/[^a-zA-Z.]/g, '');
    $('#'+y).val(sanitized);
    /*if($('#Amount'+y).val()=='')
      $('#Amount'+y).val(0);
    if($('#Amount'+y).val()!='' && $('#Amount'+y).val()==0)
    {
      console.log(sanitized);
      $('#Amount'+y).val(sanitized);
    }*/

}




               

function addSubtotal(val){
 
    for (var i = val; i>0; i--){

      if(i===val){
        sum= parseFloat($('#SubTotal'+i).val());
        y=sum;
      }
      else{
        sum= parseFloat($('#SubTotal'+i).val()) + y;
        y=sum; 
      }

      $('#TotalSave').html('<input type hidden name="Total" value="'+y+'"/>PHP '+sum.toLocaleString());
      $('#Total').html('PHP '+sum.toLocaleString());
  }
}


function deleteRow(val){  
  if(sum!==0){
    sum= sum - parseFloat($('#SubTotal'+val).val()) ;
    $('#TotalSave').html('<input type hidden name="Total" id="sum" value="'+sum+'"/>PHP '+sum.toLocaleString());
    $('#Total').html('PHP '+sum.toLocaleString());
  }
  console.log(x);
  x--;
  if($('#Item'+x).val()!='')
    document.getElementById('AddRow').disabled = false;

  document.getElementById("Row"+val).remove();  
  if(x!==1)
    $('#Bin'+x).show();
}



function multiply(x){ 
  // run anytime the value changes
  var firstValue = parseFloat($('#QTY'+(x)).val()); // get value of field
  var secondValue = parseFloat($('#Amount'+(x)).val()); // convert it to a float
  y=firstValue * secondValue;
  if(isNaN(y))
    $('#SubTotal'+(x)).val(0);
  else
    $('#SubTotal'+(x)).val(y); 
  $('#Total'+(x)).val(y); 

 //add them and output it
};




function getID(val){
    $.get("http://"+window.location.hostname+"/HJM/Order/getCount", function(data){
        $("#CaseID").text(val+'-'+data);
    });
}


function getItems(val){

  $.ajax({
  type: "POST",
  url: "http://"+window.location.hostname+"/HJM/Inventory/getItems",
  data:'SupplierID='+val,
  success: function(data){
      $('#items'+x).html(data);
      $('.ui.dropdown').dropdown();
  },error: function(xhr, status, error,ajaxOptions, thrownErro) {
              console.log(error);
               console.log(xhr.status);
                
                  console.log(xhr.responseText);
            },

  });
}

function getItems(val){

  $.ajax({
  type: "POST",
  url: "http://"+window.location.hostname+"/HJM/Inventory/getItems",
  data:'SupplierID='+val,
  success: function(data){
      $('#items'+x).html(data);
      $('.ui.dropdown').dropdown();
  },error: function(xhr, status, error,ajaxOptions, thrownErro) {
              console.log(error);
               console.log(xhr.status);
                
                  console.log(xhr.responseText);
            },

  });
}

function getItemDesc(val,y){
  
var i;
  
for( i=rows; i >=1; i--) {
    if(i==rows && i!=0){
      value=true;
      
    }
    if($('#Item'+y).val()==$('#Item'+(i-1)).val()){
        value=false;
        i=0;
        break;
    }
}
 
 
  

    $.ajax({
    type: "POST",
    url: "http://"+window.location.hostname+"/HJM/Inventory/getDetails",
    data:'ItemID='+val,
    success: function(data){
      if(value){
    
        $("#ItemDesc"+y).html(data);
       
        document.getElementById('AddRow').disabled = false;
        document.getElementById('QTY'+x).disabled = false;
        document.getElementById('Amount'+x).disabled = false;
        document.getElementById('SubTotal'+x).disabled = false;
        value=false;
         
      }
      else{
        $("#ItemDesc"+y).html('');
        $('#dropdown'+y).dropdown('restore defaults');
        document.getElementById('AddRow').disabled = true;
        document.getElementById('QTY'+x).disabled = true;
        document.getElementById('Amount'+x).disabled = true;
        document.getElementById('SubTotal'+x).disabled = true;
        value=false;
        
        
      }
    },error: function(xhr, status, error,ajaxOptions, thrownErro) {
                console.log(error);
                 console.log(xhr.status);
                  
                    console.log(xhr.responseText);
              },

    });
  }





