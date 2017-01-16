var e = $('#email').val();

function Inputvalidation(loc) {
  
  var dataString={
    firstname: $('#firstName').val(),
    middlename: $('#middleName').val(),
    lastname: $('#lastName').val(),
    email: $('#email').val(),
    emails: e,
    telephone: $('#telephone').val(),
    website: $('#website').val(),
    fax: $('#fax').val(),
    mobile: $('#mobile').val(),
    tblname : loc
  };
  $.ajax({
  type: "POST",
  url: "http://"+window.location.hostname+"/HJM/Dashboard/Inputvalidation",
  data:dataString,
  dataType: 'json',
  cache: false,
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

function Casevalidation() {
  
  var dataString={
    patientfirstname: $('#pfirstname').val(),
    patientlastname: $('#plastname').val()
  };
  $.ajax({

  type: "POST",
  url: "http://"+window.location.hostname+"/HJM/Order/Casevalidation",
  data:dataString,
  dataType: 'json',
  success: function(data){
    if(data.success==true)
    {
      $('#caseerror').html(data.error);
      document.getElementById('casesubmit').disabled = true;
    }
    else
    {
      $('#caseerror').html(data.error);
      document.getElementById('casesubmit').disabled = false;
    }
  
  },error: function(xhr, status, error,ajaxOptions, thrownErro) {
              alert(error);
               alert(xhr.status);
                
                  alert(xhr.responseText);
            },

  });
}





/*function checkemail(val,loc) {
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
}*/

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

function getCaseType(val) {
  $.ajax({
  type: "POST",
  url: "http://"+window.location.hostname+"/HJM/Order/getCaseType",
  data:'Type='+val,
  success: function(data){
    $('#CaseTypeID').dropdown('clear');
    $('#CaseTypeID').dropdown();
    $('#items').dropdown('clear');
    $('#CaseID').html('');
    $('#Case').html('');
    $('#CaseTypeID').val();
    $('#CaseTypeID').html(data);
    $('#items').hide();
  },error: function(xhr, status, error,ajaxOptions, thrownErro) {
              alert(error);
               alert(xhr.status);
                
                  alert(xhr.responseText);
            },

  });
}



function getID(val){
    $.get("http://"+window.location.hostname+"/HJM/Order/getCount", function(data){
        if(val!='')
        $("#CaseID").html('<label>'+val+'-'+data+'</label>');
    });
}

function getIDs(val){
        var x =$('#CaseIDhidden').val();
        $("#Case").html('<label>'+val+'-'+x+'</label>');
   
}


function changeID(val){
    $("#CaseID").text(val);
  
}




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
         /*
      email: {
        identifier: 'email',
        rules: [
          {
            type   : 'email',
            prompt : 'Please enter your Email Address'
          }
        ]
      },
   
      website: {
        identifier: 'website',
        rules: [
          {
            type   : 'url',
            prompt : 'Please enter your Email Address'
          }
        ]
      },*/
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
      /*
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
      */
      CaseTypeID: {
        identifier: 'CaseTypeID',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your Email Address'
          }
        ]
      },
      Type: {
        identifier: 'Type',
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







//Customer

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



