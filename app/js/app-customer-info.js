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
  $(".payment-modal").click(function(){
                        $('.payment.modal')
 .modal('setting', 'transition', 'fade down')
 .modal('show')
 ;
  });

  $('.menu .item')
  .tab()
;
var shipstreet=$('#ship-street').val(),
    shipcity=$('#ship-city').val(),
    shipbaranggay=$('#ship-baranggay').val();
$('#same-as').change(function(){
    

    if (this.checked) {
      var customerStreet= $('#customerStreet').val(),
          customerCity=$('#customerCity').val(),
          customerBaranggay=$('#customerBaranggay').val();
      document.getElementById("ship-street").disabled = true;
      $('#ship-street').text(customerStreet);
      document.getElementById("ship-city").disabled = true;
      $('#ship-city').val(customerCity);
      document.getElementById("ship-baranggay").disabled = true;
      $('#ship-baranggay').val(customerBaranggay);
    }
    else{
      document.getElementById("ship-street").disabled = false;
      $('#ship-street').text(shipstreet);
      document.getElementById("ship-city").disabled = false;
      $('#ship-city').val(shipcity);
      document.getElementById("ship-baranggay").disabled = false;
      $('#ship-baranggay').val(shipbaranggay);
    } 
});
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
 $('#case-history').DataTable( {
        'aoColumnDefs': [{
        'bSortable': false,
        'aTargets': [-1, -2] /* 1st one, start by the right */
    }]
    } );
  $('#transaction-history').DataTable( {
        'aoColumnDefs': [{
        'bSortable': false,
        'aTargets': [-1] /* 1st one, start by the right */
    }]
    } );

  var dataTable = $('#case-history').dataTable();
    $("#search-case").keyup(function() {
        dataTable.fnFilter(this.value);
    });    
  var dataTable = $('#transaction-history').dataTable();
    $("#search-transaction").keyup(function() {
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
    document.getElementById("SG1").checked=false

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
    document.getElementById("BW1").checked=false

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
    document.getElementById("MC1").checked=false

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
    document.getElementById("OC1").checked=false

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
    document.getElementById("Photos1").checked=false

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
    document.getElementById("Articulator1").checked=false

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
    document.getElementById("OD1").checked=false

  $('#OD1').change(function(){
    if (this.checked) {
     $('#OD').val(1);
     
    }
    else{
      $('#OD').val(0);
    }
  });
});


$(document).ready(function(){
  $('.ui.form').form({
    fields: {
      DentistID: {
        identifier: 'DentistID',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your First name'
          }
        ]
      },
      teeth: {
        identifier: 'teeth',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your Last name'
          }
        ]
      },
      items: {
        identifier: 'items',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your Email Address'
          }
        ]
      },
      duedate: {
        identifier: 'duedate',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      duetime: {
        identifier: 'duetime',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      
    }
  });
});




