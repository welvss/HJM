var email = $('#email').val();
function checkemail(val,loc) {
  $.ajax({
  type: "POST",
  url: "http://"+window.location.hostname+"/HJM/"+loc+"/checkemail",
  data:'email='+val,
  dataType: 'json',
  cache: true,
  success: function(data){
    if(data.success==true && email==val)
    {
      $('#error').html(" ");
      document.getElementById('submit').disabled = false;
    }
    else
    if(data.success==true && email!=val)
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

var ItemID= $('#ItemID').val();
function checkItemCode(val) {
  $.ajax({
  type: "POST",
  url: "http://"+window.location.hostname+"/HJM/Inventory/checkItemCode",
  data:'ItemID='+val,
  dataType: 'json',
  cache: true,
  success: function(data){
    if(data.success==true && ItemID==val)
    {
      $('#error').html(" ");
      document.getElementById('submit').disabled = false;
    }
    else
    if(data.success==true && ItemID!=val)
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

function getInfo(val){
  $.ajax({
  type: "POST",
  url: "http://"+window.location.hostname+"/HJM/Supplier/getDetails",
  data:'SupplierID='+val,
  dataType: 'json',
  cache: true,
  success: function(data){
    
      $('#email').val(data.email);
      $('#address').val(data.address);
     
      
      
      getItems(val);
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
    
      $('#items').html(data);
      
  
  },error: function(xhr, status, error,ajaxOptions, thrownErro) {
              alert(error);
               alert(xhr.status);
                
                  alert(xhr.responseText);
            },

  });
}

function getItemDesc(val) {

  $.ajax({
  type: "POST",
  url: "http://"+window.location.hostname+"/HJM/Inventory/getDetails",
  data:'ItemID='+val,
  success: function(data){
    $("#ItemDesc"+x).html(data);
    $("#ItemDesc").text(data);

  
  },error: function(xhr, status, error,ajaxOptions, thrownErro) {
              alert(error);
               alert(xhr.status);
                
                  alert(xhr.responseText);
            },

  });
 }


$(document).ready(function(){
  $('#SupplierID')
      .on('change', function() {
         $('#Idropdown')
      .dropdown('restore defaults');
  });


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
            type   : 'email',
            prompt : 'Please enter your Email Address'
          }
        ]
      },
      street: {
        identifier: 'street',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      city: {
        identifier: 'city',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      brgy: {
        identifier: 'brgy',
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
      },
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
      ItemID: {
        identifier: 'ItemID',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      IID: {
        identifier: 'IID',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      ItemDesc: {
        identifier: 'ItemDesc',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      Price: {
        identifier: 'Price',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          },
          {
            type   : 'number',
            prompt : 'Please enter your name'
          }
        ]
      },
      SupplierID: {
        identifier: 'SupplierID',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      QTY: {
        identifier: 'QTY',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          },
          {
            type   : 'integer',
            prompt : 'Please enter your name'
          }
        ]
      },
      QTYBelow: {
        identifier: 'QTYBelow',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          },
          {
            type   : 'integer',
            prompt : 'Please enter your name'
          }
        ]
      },
      ReorderQTY: {
        identifier: 'ReorderQTY',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          },
          {
            type   : 'integer',
            prompt : 'Please enter your name'
          }
        ]
      },
      
    }
  });
});






    var shipstreet=$('#ship-street').val(),
        shipcity=$('#ship-city').val(),
        shipbaranggay=$('#ship-baranggay').val();
    $('#same-as').change(function(){

        if (this.checked) {
          var street= $('#street').val(),
              city=$('#city').val(),
              brgy=$('#brgy').val();
          document.getElementById("ship-street").disabled = true;
          $('#ship-street').text(street);
          document.getElementById("ship-city").disabled = true;
          $('#ship-city').val(city);
          document.getElementById("ship-baranggay").disabled = true;
          $('#ship-baranggay').val(brgy);
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

  

    $('#same').change(function(){

        if (this.checked) {
          var street= $('#street').val(),
              city=$('#city').val(),
              brgy=$('#brgy').val();
          document.getElementById("ship-street").disabled = true;
          $('#ship-street').val(street);
          document.getElementById("ship-city").disabled = true;
          $('#ship-city').val(city);
          document.getElementById("ship-baranggay").disabled = true;
          $('#ship-baranggay').val(brgy);
        }
        else{
          document.getElementById("ship-street").disabled = false;
          $('#ship-street').val("");
          document.getElementById("ship-city").disabled = false;
          $('#ship-city').val("");
          document.getElementById("ship-baranggay").disabled = false;
          $('#ship-baranggay').val("");
        } 
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