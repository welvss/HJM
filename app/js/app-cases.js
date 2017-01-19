$( document ).ready(function() {
 
 $(".mode").click(function(){
  	$('.edit-customer.modal')
  	.modal('setting', 'transition', 'vertical flip').modal({autofocus: false})
  	.modal('show');
  });

  $(".case-modal").click(function(){
  	   		 $('.case.modal')
 .modal('setting', 'transition', 'fade down').modal({autofocus: false})
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
                titleAttr: 'Print Case List',
                title:'<center>Case List</center>',

               

          },
           
        ],
        
        
        "scrollY":        '40vh',
        "scrollCollapse": true,
        "paging":         false,
        "ordering": false,
        /*'aoColumnDefs': [{
        'bSortable': true,
        'aTargets': [-1, -2] /* 1st one, start by the right */
        //}]
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

});



$( document ).ready(function() {

  $('.ui.dropdown').dropdown();

    if($('#Tray').val()==1)
      document.getElementById("Tray1").checked=true;
    else
      document.getElementById("Tray1").checked=false;

    $('#Tray1').change(function(){
      if (this.checked) {
       $('#Tray').val(1);
       
      }
      else{
        $('#Tray').val(0);
      }
    });


    if($('#SG').val()==1)
      document.getElementById("SG1").checked=true;
    else
      document.getElementById("SG1").checked=false;

    $('#SG1').change(function(){
      if (this.checked) {
       $('#SG').val(1);
       
      }
      else{
        $('#SG').val(0);
      }
    });




    if($('#BW').val()==1)
      document.getElementById("BW1").checked=true;
    else
      document.getElementById("BW1").checked=false;

    $('#BW1').change(function(){
      if (this.checked) {
       $('#BW').val(1);
       
      }
      else{
        $('#BW').val(0);
      }
    });




    if($('#MC').val()==1)
      document.getElementById("MC1").checked=true;
    else
      document.getElementById("MC1").checked=false;

    $('#MC1').change(function(){
      if (this.checked) {
       $('#MC').val(1);
       
      }
      else{
        $('#MC').val(0);
      }
    });


    if($('#OC').val()==1)
      document.getElementById("OC1").checked=true;
    else
      document.getElementById("OC1").checked=false;

    $('#OC1').change(function(){
      if (this.checked) {
       $('#OC').val(1);
       
      }
      else{
        $('#OC').val(0);
      }
    });



    if($('#Photos').val()==1)
      document.getElementById("Photos1").checked=true;
    else
      document.getElementById("Photos1").checked=false;

    $('#Photos1').change(function(){
      if (this.checked) {
       $('#Photos').val(1);
       
      }
      else{
        $('#Photos').val(0);
      }
    });


    if($('#Articulator').val()==1)
      document.getElementById("Articulator1").checked=true;
    else
      document.getElementById("Articulator1").checked=false;

    $('#Articulator1').change(function(){
      if (this.checked) {
       $('#Articulator').val(1);
       
      }
      else{
        $('#Articulator').val(0);
      }
    });



    if($('#OD').val()==1)
      document.getElementById("OD1").checked=true;
    else
      document.getElementById("OD1").checked=false;

    $('#OD1').change(function(){
      if (this.checked) {
       $('#OD').val(1);
       
      }
      else{
        $('#OD').val(0);
      }
  });


    var x =$('#status_id').val();
    changeStatus(x);
});



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


    var sanitized = $('#'+y).val().replace(/[^a-z A-Z.]/g, '');
    $('#'+y).val(sanitized);
    /*if($('#Amount'+y).val()=='')
      $('#Amount'+y).val(0);
    if($('#Amount'+y).val()!='' && $('#Amount'+y).val()==0)
    {
      console.log(sanitized);
      $('#Amount'+y).val(sanitized);
    }*/

}

function changeStatus(val){
        
        if(val==1){
            $('#statuscolor').removeClass();
            $('#statuscolor').addClass('ui inverted green segment');
            $('#Completed').hide();
        }
        if(val==2){
            $('#statuscolor').removeClass();
            $('#statuscolor').addClass('ui inverted violet segment');
            $('#New').hide();
            $('#Completed').show();
        }
        if(val==3){
            $('#statuscolor').removeClass();
            $('#statuscolor').addClass('ui inverted blue segment');
            $('#DI').hide();
            $('#New').hide();
            $('#IP').hide();
            $('#OH').hide();
            $('#Completed').hide();
        }

        if(val==4){
            $('#statuscolor').removeClass();
            $('#statuscolor').addClass('ui inverted red segment');
            $('#New').hide();
            $('#IP').show();
        }
}

function updateStatus(val){

  var dataString={
    CaseID: $('#CID').val(),
    InvoiceID:$('#InvoiceID').val(),
    status_id:val,
  };
  $.ajax({

  type: "POST",
  url: "http://"+window.location.hostname+"/HJM/Order/UpdateOrderStatus",
  data:dataString,
  dataType: 'JSON',
  success: function(data){
  if(data.createdon!='')
    $('#createdon').html('<label>Created On: </label>&nbsp; '+data.createdon);
  if(data.completedon!='')
    $('#completedon').html('<label>Completed On: </label>&nbsp; '+data.completedon);
  },error: function(xhr, status, error,ajaxOptions, thrownErro) {
              console.log(error);
               console.log(xhr.status);
                
                  console.log(xhr.responseText);
            },

  });
}






function filterStatus($data){


 $('#main-case').dataTable().fnFilter($data);
}


