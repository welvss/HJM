$( document ).ready(function() {
 
 $(".mode").click(function(){
  	$('.edit-customer.modal')
  	.modal('setting', 'transition', 'vertical flip')
  	.modal('show');
  });

  $(".case-modal").click(function(){
  	   		 $('.case.modal')
 .modal('setting', 'transition', 'fade down')
 .modal('show')
 ;
  });
  $(".invoice-modal").click(function(){
    $('.invoice.modal')
    .modal('setting', 'transition', 'fade down')
 .modal('show')
 ;
  });

  $('.menu .item')
  .tab()
;

// Initialize sidebar
$('.sidebar')
    .sidebar({
      dimPage: true,
      closable: true
    });
 $('.right.menu.open').on("click",function(e){
    e.preventDefault();
    $('.ui.vertical.menu').toggle();
  });
    
  $('.ui.dropdown').dropdown();

$(".sidebar-button").click(function(){
    $('.sidebar')
  .sidebar('toggle')
;
  });
var table = $('#main-case').DataTable( {
        dom: 'Bfrtip',
        buttons: [
          {
                extend:    'print',
                text:      '<i class="blue right floated right aligned eight wide column print big icon"></i>',
               
               
          },
        ],
        "scrollY":        '40vh',
        "scrollCollapse": true,
        "paging":         false,
        'aoColumnDefs': [{
        'bSortable': true,
        'aTargets': [-1, -2], /* 1st one, start by the right */
    }]
    } );
    table.buttons().container().appendTo('#print');
  var dataTable = $('#main-case').dataTable();
    $("#search-case").keyup(function() {
        dataTable.fnFilter(this.value);
    });    
 
    $('.popup')
  .popup()
;
$('.ui.checkbox')
  .checkbox()
;

  $('.select')
  .dropdown();
});







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


});


function Addrow(){
   
    if($('#Item'+x).val()!=''){
      x++;
      var id= $('#SupplierID').val();
      $('#Add').append('<tr id="Row'+x+'"><td>'+x+'</td><td ><div class="ui selection dropdown" id="dropdown'+x+'"><input type="hidden" id="Item'+x+'"  name="po['+x+'][ItemID]" onchange="getItemDesc(this.value,'+x+');"><i class="dropdown icon"></i><div class="default text">Select Item</div><div class="menu" id="items'+x+'"></div></div></td><td id="ItemDesc'+x+'"></td><td><input type="number" style="width: 100px" id="QTY'+x+'" name="po['+x+'][QTY]" onkeyup="multiply('+x+');addSubtotal('+x+');" value="0"></td><td><input type="text" id="Amount'+x+'" name="po['+x+'][Amount]"  onkeyup="multiply('+x+');addSubtotal('+x+');numberCheck('+x+');" value="0"></td><td ><input type="text" id="SubTotal'+x+'" name="po['+x+'][SubTotal]" value="0"></td><td><a href="#" onClick="deleteRow('+x+')"><i class="trash icon" id="Bin'+x+'"></i></a></td></tr>');
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

     rows = document.getElementById("Add").getElementsByTagName("tr").length;

};


 function numberCheck(y) {
  var sanitized = $('#Amount'+y).val().replace(/[^0-9.]/g, '');
  $('#Amount'+y).val(sanitized);
  /*if($('#Amount'+y).val()=='')
    $('#Amount'+y).val(0);
  if($('#Amount'+y).val()!='' && $('#Amount'+y).val()==0)
  {
    alert(sanitized);
    $('#Amount'+y).val(sanitized);
  }*/
}





            
                  

function addSubtotal(val){
 
    for (var i = rows; i>0; i--){

      if(i===rows){
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



function getInfo(val){
  $.ajax({
  type: "POST",
  url: "http://"+window.location.hostname+"/HJM/Supplier/getDetails",
  data:'SupplierID='+$('#SupplierID').val(),
  dataType: 'json',
  cache: true,
  success: function(data){
      $('#email').val(data.email);
      $('#address').val(data.address);
      getItems($('#SupplierID').val());
  },error: function(xhr, status, error,ajaxOptions, thrownErro) {
              alert(error);
              alert(xhr.status);
              alert(xhr.responseText);
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
              alert(error);
               alert(xhr.status);
                
                  alert(xhr.responseText);
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
    dataType: 'json',
    cache: true,
    success: function(data){
      if(value){
    
        $("#ItemDesc"+y).html(data.ItemDesc);
        $("#QTY"+y).val(data.ReorderQTY);
        document.getElementById('AddRow').disabled = false;
        document.getElementById('QTY'+x).disabled = false;
         document.getElementById('Amount'+x).disabled = false;
        document.getElementById('Amount'+x).value = 0;
        document.getElementById('SubTotal'+x).disabled = false;
         document.getElementById('SubTotal'+x).value = 0;
        value=false;
         
      }
      else{
        $("#ItemDesc"+y).html(data.ItemDesc);
        $('#dropdown'+y).dropdown('restore defaults');
        document.getElementById('AddRow').disabled = true;
        document.getElementById('QTY'+x).disabled = true;
        document.getElementById('Amount'+x).disabled = true;
        document.getElementById('SubTotal'+x).disabled = true;
        value=false;        
      }
    },error: function(xhr, status, error,ajaxOptions, thrownErro) {
                alert(error);
                 alert(xhr.status);
                  
                    alert(xhr.responseText);
              },

    });
  }
  
 


$(document).ready(function(){
  $('#SupplierID').on('change', function(){  
   
   
    for (var y =  x; y >0; y--) {
        deleteRow(y);   
      }; 
      Addrow();

  
   
      
  });
 });



function filterStatus($data){


 $('#main-case').dataTable().fnFilter($data);
}



