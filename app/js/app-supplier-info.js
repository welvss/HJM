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











$(document).ready(function(){
  $('.ui.form')
  .form({
    fields: {
      firstName: {
        identifier: 'firstName',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your First name'
          }
        ]
      },
      lastName: {
        identifier: 'lastName',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your Last name'
          }
        ]
      },
      email: {
        identifier: 'email',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your Email Address'
          }
        ]
      },
      supplierStreet: {
        identifier: 'supplierStreet',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      supplierCity: {
        identifier: 'supplierCity',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      supplierBaranggay: {
        identifier: 'supplierBaranggay',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      company: {
        identifier: 'company',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      title: {
        identifier: 'title',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      }
    }
  });
});



function getItemDesc(val,x) {

  $.ajax({
  type: "POST",
  url: "http://"+window.location.hostname+"/HJM/Inventory/getDetails",
  data:'ItemID='+val,
  success: function(data){
    $("#ItemDesc"+x).html(data);
    $('#item').val('')
  
  },error: function(xhr, status, error,ajaxOptions, thrownErro) {
              alert(error);
               alert(xhr.status);
                
                  alert(xhr.responseText);
            },

  });
 }


function checkemail(val) {

  $.ajax({
  type: "POST",
  url: "http://"+window.location.hostname+"/HJM/Supplier/checkemail",
  data:'email='+val,
  dataType: 'json',
  cache: true,
  success: function(data){
    if(data.success==true)
    {
      $('#error').html(data.error);
      document.getElementById('submit').disabled = true;
    }
    else
    {
      $('#error').html(data.error);
      document.getElementById('submit').disabled = false;
    }
  
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
}








