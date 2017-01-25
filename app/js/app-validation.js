var e = $('#email').val();

function Inputvalidation(loc) {

    var dataString = {
        firstname: $('#firstName').val(),
        middlename: $('#middleName').val(),
        lastname: $('#lastName').val(),
        email: $('#email').val(),
        emails: e,
        telephone: $('#telephone').val(),
        website: $('#website').val(),
        fax: $('#fax').val(),
        mobile: $('#mobile').val(),
        tblname: loc
    };
    $.ajax({
        type: "POST",
        url: "http://" + window.location.hostname + "/HJM/Dashboard/Inputvalidation",
        data: dataString,
        dataType: 'json',
        cache: false,
        success: function(data) {
            if (data.success == true) {
                $('#error').html(data.error);
                $('#requiredasterisk').hide();
                document.getElementById('submit').disabled = true;
            } else {
                $('#error').html(data.error);
                $('#requiredasterisk').hide();
                document.getElementById('submit').disabled = false;
            }

        },
        error: function(xhr, status, error, ajaxOptions, thrownErro) {
            console.log(error);
            console.log(xhr.status);

            console.log(xhr.responseText);
        },

    });
}

function Casevalidation() {

    var dataString = {
        patientfirstname: $('#pfirstname').val(),
        patientlastname: $('#plastname').val()
    };
    $.ajax({

        type: "POST",
        url: "http://" + window.location.hostname + "/HJM/Order/Casevalidation",
        data: dataString,
        dataType: 'json',
        success: function(data) {
            if (data.success == true) {
                $('#caseerror').html(data.error);
                document.getElementById('casesubmit').disabled = true;
            } else {
                $('#caseerror').html(data.error);
                document.getElementById('casesubmit').disabled = false;
            }

        },
        error: function(xhr, status, error, ajaxOptions, thrownErro) {
            console.log(error);
            console.log(xhr.status);

            console.log(xhr.responseText);
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
              console.log(error);
               console.log(xhr.status);
                
                  console.log(xhr.responseText);
            },

  });
}*/

var ItemID = $('#ItemID').val();

function checkItemCode(val) {
    $.ajax({
        type: "POST",
        url: "http://" + window.location.hostname + "/HJM/Inventory/checkItemCode",
        data: 'ItemID=' + val,
        dataType: 'json',
        cache: true,
        success: function(data) {
            if (data.success == true && ItemID == val) {
                $('#error').html(" ");
                document.getElementById('submit').disabled = false;
            } else
            if (data.success == true && ItemID != val) {
                $('#error').html(data.error);
                document.getElementById('submit').disabled = true;
            } else {
                $('#error').html(data.error);
                document.getElementById('submit').disabled = false;
            }

        },
        error: function(xhr, status, error, ajaxOptions, thrownErro) {
            console.log(error);
            console.log(xhr.status);

            console.log(xhr.responseText);
        },

    });
}

var ItemID = $('#CaseTypeID').val();

function checkProductCode(val) {
    $.ajax({
        type: "POST",
        url: "http://" + window.location.hostname + "/HJM/Inventory/checkProductCode",
        data: 'CaseTypeID=' + val,
        dataType: 'json',
        cache: true,
        success: function(data) {
            if (data.success == true && ItemID == val) {
                $('#errorproduct').html(" ");
                document.getElementById('submitproduct').disabled = false;
            } else
            if (data.success == true && ItemID != val) {
                $('#errorproduct').html(data.error);
                document.getElementById('submitproduct').disabled = true;
            } else {
                $('#errorproduct').html(data.error);
                document.getElementById('submitproduct').disabled = false;
            }

        },
        error: function(xhr, status, error, ajaxOptions, thrownErro) {
            console.log(error);
            console.log(xhr.status);

            console.log(xhr.responseText);
        },

    });
}

function getCaseType(val) {
    $.ajax({
        type: "POST",
        url: "http://" + window.location.hostname + "/HJM/Order/getCaseType",
        data: 'Type=' + val,
        success: function(data) {
            $('#CaseTypeID').dropdown('clear');
            $('#CaseTypeID').dropdown();
            $('#items').dropdown('clear');
            $('#CaseID').html('');
            $('#Case').html('');
            $('#CaseTypeID').val();
            $('#CaseTypeID').html(data);
            $('#items').hide();
        },
        error: function(xhr, status, error, ajaxOptions, thrownErro) {
            console.log(error);
            console.log(xhr.status);

            console.log(xhr.responseText);
        },

    });
}



function getID(val) {
    $.get("http://" + window.location.hostname + "/HJM/Order/getCount", function(data) {
        if (val != '')
            $("#CaseID").html('<label>' + val + '-' + data + '</label>');
    });
}

function getIDs(val) {
    var x = $('#CaseIDhidden').val();
    $("#Case").html('<label>' + val + '-' + x + '</label>');

}


function changeID(val) {
    $("#CaseID").text(val);

}




$(document).ready(function() {

    $(".deny.button").on('click', function(event) {
        $('.ui.form').form('reset');
    });

    $('.ui.form')
        .form({
            fields: {
                firstName: {
                    identifier: 'firstName',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }]
                },
                lastName: {
                    identifier: 'lastName',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }]
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
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }]
                },
                city: {
                    identifier: 'city',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }]
                },
                brgy: {
                    identifier: 'brgy',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }]
                },
                company: {
                    identifier: 'company',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }]
                },
                title: {
                    identifier: 'title',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }]
                },
                DentistID: {
                    identifier: 'DentistID',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }]
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
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }]
                },
                Type: {
                    identifier: 'Type',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }]
                },
                duedate: {
                    identifier: 'duedate',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }]
                },
                duetime: {
                    identifier: 'duetime',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }]
                },
                ItemID: {
                    identifier: 'ItemID',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }]
                },
                IID: {
                    identifier: 'IID',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }]
                },
                ItemDesc: {
                    identifier: 'ItemDesc',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }]
                },
                CaseTypeDesc: {
                    identifier: 'CaseTypeDesc',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }]
                },
                Price: {
                    identifier: 'Price',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }, {
                        type: 'number',
                        prompt: 'Field Required.'
                    }]
                },
                SupplierID: {
                    identifier: 'SupplierID',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }]
                },
                QTY: {
                    identifier: 'QTY',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }, {
                        type: 'integer',
                        prompt: 'Field Required.'
                    }]
                },
                CaseID: {
                    identifier: 'CaseID',
                    rules: [{
                            type: 'empty',
                            prompt: 'Field Required.'
                        }

                    ]
                },
                Item: {
                    identifier: 'Item',
                    rules: [{
                            type: 'empty',
                            prompt: 'Field Required.'
                        }

                    ]
                },
                QTYBelow: {
                    identifier: 'QTYBelow',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }, {
                        type: 'integer',
                        prompt: 'Field Required.'
                    }]
                },
                ReorderQTY: {
                    identifier: 'ReorderQTY',
                    rules: [{
                        type: 'empty',
                        prompt: 'Field Required.'
                    }, {
                        type: 'integer',
                        prompt: 'Field Required.'
                    }]
                },


            },
            inline: true,
            on: 'submit'

        });
});







//Customer

var shipstreet = $('#ship-street').val(),
    shipcity = $('#ship-city').val(),
    shipbaranggay = $('#ship-baranggay').val();
$('#same-as').change(function() {

    if (this.checked) {
        var street = $('#street').val(),
            city = $('#city').val(),
            brgy = $('#brgy').val();
        document.getElementById("ship-street").disabled = true;

        $('#ship-street').text(street);

        document.getElementById("ship-city").disabled = true;

        $('#ship-city').val(city);

        document.getElementById("ship-baranggay").disabled = true;

        $('#ship-baranggay').val(brgy);

    } else {
        document.getElementById("ship-street").disabled = false;

        $('#ship-street').text(shipstreet);

        document.getElementById("ship-city").disabled = false;

        $('#ship-city').val(shipcity);
        document.getElementById("ship-baranggay").disabled = false;

        $('#ship-baranggay').val(shipbaranggay);
    }
});



$('#same').change(function() {

    if (this.checked) {
        var street = $('#street').val(),
            city = $('#city').val(),
            brgy = $('#brgy').val();
        document.getElementById("ship-street").disabled = true;
        $('#ship-street').val(street);
        document.getElementById("ship-city").disabled = true;
        $('#ship-city').val(city);
        document.getElementById("ship-baranggay").disabled = true;
        $('#ship-baranggay').val(brgy);
    } else {
        document.getElementById("ship-street").disabled = false;
        $('#ship-street').val("");
        document.getElementById("ship-city").disabled = false;
        $('#ship-city').val("");
        document.getElementById("ship-baranggay").disabled = false;
        $('#ship-baranggay').val("");
    }
});

$('form.ui.form').on('submit', function() {
    var thiss = $(this);
    var url = $(this).attr('action');
    var type = $(this).attr('method');
    var data = $(this).serialize();
    console.log(data);
    console.log(type);
    console.log(thiss);
    setTimeout(function() {

        var field = $('form.ui.form');
        if (!field.hasClass('error')) {
            thiss.ajaxSubmit({
                url: url,
                type: type,
                data: data,
                cache: false,
                beforeSubmit: function(data) {
                    $("form.ui.form").addClass('loading');

                },
                complete: function(data) {
                    // alert(data);
                },
                success: function(data) {
                    $("#requiredasterisk").hide();
                    $("#requiredasteriskquote").hide();
                    $("form.ui.form").removeClass('loading');
                    $("#error").html("<div class='ui success message'><div class='header'>Submission Complete</div><p>" + data + "</p></div>");
                    $("#errorproduct").html("<div class='ui success message'><div class='header'>Submission Complete</div><p>" + data + "</p></div>");
                    $("#errorpayment").html("<div class='ui success message'><div class='header'>Submission Complete</div><p>" + data + "</p></div>");
                    $("#errorrequest").html("<div class='ui success message'><div class='header'>Submission Complete</div><p>" + data + "</p></div>");
                    $("#errorquote").html("<div class='ui success message'><div class='header'>Submission Complete</div><p>" + data + "</p></div>");
                    $("form.ui.form").form('clear');
                    setTimeout(function() {
                        location.reload();
                    }, 800);

                },
                error: function(xhr, status, error, ajaxOptions, thrownErro) {
                    $("#requiredasterisk").hide();
                    $("form.ui.form").removeClass('loading');
                    console.log(xhr.responseText);
                    $("#error").html("<div class='ui negative message'><div class='header'>Submission Fail</div><p>Something went wrong to the server.</p></div>");
                    $("#errorpayment").html("<div class='ui negative message'><div class='header'>Submission Fail</div><p>Something went wrong to the server.</p></div>");
                    $("#errorproduct").html("<div class='ui negative message'><div class='header'>Submission Fail</div><p>Something went wrong to the server.</p></div>");
                    $("#errorrequest").html("<div class='ui negative message'><div class='header'>Submission Fail</div><p>Something went wrong to the server.</p></div>");
                    $("#errorquote").html("<div class='ui negative message'><div class='header'>Submission Fail</div><p>Something went wrong to the server.</p></div>");
                }


            }); // end ajax

            return false;
        }
    }, 100);
});
