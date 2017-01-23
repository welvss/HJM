$(document).ready(function() {

    $(".mode").click(function() {
        $('.edit-customer.modal')
            .modal('setting', 'transition', 'vertical flip').modal({ autofocus: false })
            .modal('show');
    });

    $(".case-modal").click(function() {
        $('.case.modal')
            .modal('setting', 'transition', 'fade down')
            .modal('show');
    });
    $(".invoice-modal").click(function() {
        $('.invoice.modal')
            .modal('setting', 'transition', 'fade down').modal({ autofocus: false })
            .modal('show');
    });
    $(".quotation-modal").click(function() {
        $('.quotation.modal')
            .modal('setting', 'transition', 'fade down')
            .modal({ autofocus: false })
            .modal('show');
    });

    $('.menu .item')
        .tab();

    // Initialize sidebar
    $('.sidebar')
        .sidebar({
            dimPage: true,
            closable: true
        });
    $('.right.menu.open').on("click", function(e) {
        e.preventDefault();
        $('.ui.vertical.menu').toggle();
    });

    $('.ui.dropdown').dropdown();

    $(".sidebar-button").click(function() {
        $('.sidebar')
            .sidebar('toggle');
    });
    var table = $('#main-case').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'print',
            text: '<i class="blue right floated right aligned eight wide column print big icon"></i>',


        }, ],
        "scrollY": '40vh',
        "scrollCollapse": true,
        "paging": false,
        'aoColumnDefs': [{
            'bSortable': true,
            'aTargets': [-1, -2],
            /* 1st one, start by the right */
        }]
    });

    table.buttons().container().appendTo('#print');
    var dataTable = $('#main-case').dataTable();
    $("#search-case").keyup(function() {
        dataTable.fnFilter(this.value);
    });


    var tablequote = $('#quote').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'print',
            text: '<i class="blue right floated right aligned eight wide column print big icon"></i>',


        }, ],
        "scrollY": '40vh',
        "scrollCollapse": true,
        "paging": false,
        'aoColumnDefs': [{
            'bSortable': true,
            'aTargets': [-1, -2],
            /* 1st one, start by the right */
        }]
    });


    tablequote.buttons().container().appendTo('#printquote');
    var dataTablequote = $('#quote').dataTable();
    $("#search-quote").keyup(function() {
        dataTablequote.fnFilter(this.value);
    });

    $('.popup')
        .popup();
    $('.ui.checkbox')
        .checkbox();

    $('.select')
        .dropdown();
});







var x = 1;
var xquote =1;
var y = 0;
var sum = $('#sum').val();
var rows = document.getElementById("Add").getElementsByTagName("tr").length;

$(document).ready(function() {
    if ($('#Item' + x).val() == '')
        document.getElementById('AddRow').disabled = true;
    if ($('#QTY' + x).val() == null)
        document.getElementById('QTY' + x).disabled = true;
    if ($('#Amount' + x).val() == null)
        document.getElementById('Amount' + x).disabled = true;
    if ($('#SubTotal' + x).val() == null)
        document.getElementById('SubTotal' + x).disabled = true;

    if (rows > x)
        x = rows;
    for (var y = x - 1; y >= 1; y--) {
        $('#Bin' + y).hide();
    }
    $('#Bin1').hide();


});


function Addrow(val) {

    if ($('#Item' + x).val() != '') {
        x++;
        var id = $('#SupplierID').val();
        $('#Add').append('<tr id="Row' + x + '"><td>' + x + '</td><td ><select class="ui search dropdown itemselect" id="Item' + x + '"  name="po[' + x + '][ItemID]"></select></td><td id="ItemDesc' + x + '"></td><td><input type="number" style="width: 100px" id="QTY' + x + '" name="po[' + x + '][QTY]" onkeyup="multiply(' + x + ');addSubtotal(' + x + ');" value="0"></td><td><input type="text" id="Amount' + x + '" name="po[' + x + '][Amount]"  onkeyup="multiply(' + x + ');addSubtotal(' + x + ');numberCheck(' + x + ');" value="0"></td><td ><input type="text" id="SubTotal' + x + '" name="po[' + x + '][SubTotal]" value="0"></td><td><a href="#" onClick="deleteRow(' + x + ')"><i class="trash icon" id="Bin' + x + '"></i></a></td></tr>');
        document.getElementById('AddRow').disabled = true;
        $('#Bin' + (x - 1)).hide();
        getItems(x,val);
        document.getElementById('QTY' + x).disabled = true;
        document.getElementById('Amount' + x).disabled = true;
        document.getElementById('SubTotal' + x).disabled = true;
    }
    if (x === 1) {
        $('#Bin1').hide();
    }

    // rows = document.getElementById("Add").getElementsByTagName("tr").length;

};


function numberCheck(y) {
    var sanitized = $('#Amount' + y).val().replace(/[^0-9.]/g, '');
    $('#Amount' + y).val(sanitized);
    /*if($('#Amount'+y).val()=='')
      $('#Amount'+y).val(0);
    if($('#Amount'+y).val()!='' && $('#Amount'+y).val()==0)
    {
      console.log(sanitized);
      $('#Amount'+y).val(sanitized);
    }*/
}








function addSubtotal(val) {

    for (var i = rows; i > 0; i--) {

        if (i === rows) {
            sum = parseFloat($('#SubTotal' + i).val());
            y = sum;
        } else {
            sum = parseFloat($('#SubTotal' + i).val()) + y;
            y = sum;
        }

        $('#TotalSave').html('<input type hidden name="Total" value="' + y + '"/>PHP ' + sum.toLocaleString());
        $('#Total').html('PHP ' + sum.toLocaleString());
    }
}


function deleteRow(val) {
    if (sum !== 0) {
        sum = sum - parseFloat($('#SubTotal' + val).val());
        $('#TotalSave').html('<input type hidden name="Total" id="sum" value="' + sum + '"/>PHP ' + sum.toLocaleString());
        $('#Total').html('PHP ' + sum.toLocaleString());
    }

    x--;
    if ($('#Item' + x).val() != '')
        document.getElementById('AddRow').disabled = false;

    document.getElementById("Row" + val).remove();
    if (x !== 1)
        $('#Bin' + x).show();
}

function QuotedeleteRow(val) {
   

    xquote--;
    if ($('#QuoteItem' + x).val() != '')
        document.getElementById('QuoteAddRow').disabled = false;

    document.getElementById("QuoteRow" + val).remove();
    if (xquote !== 1)
        $('#QuoteBin' + xquote).show();
}



function multiply(x) {
    // run anytime the value changes
    var firstValue = parseFloat($('#QTY' + (x)).val()); // get value of field
    var secondValue = parseFloat($('#Amount' + (x)).val()); // convert it to a float
    y = firstValue * secondValue;
    if (isNaN(y))
        $('#SubTotal' + (x)).val(0);
    else
        $('#SubTotal' + (x)).val(y);
    $('#Total' + (x)).val(y);

    //add them and output it
}



// function getInfo(val) {
//     if (val != '') {
//         $.ajax({
//             type: "POST",
//             url: "http://" + window.location.hostname + "/HJM/Supplier/getDetails",
//             data: 'SupplierID=' + $('#SupplierID').val(),
//             dataType: 'json',
//             cache: true,
//             success: function(data) {
//                 $('#email').val(data.email);
//                 $('#address').val(data.address);
//                 //getItems($('#SupplierID').val());
//             },
//             error: function(xhr, status, error, ajaxOptions, thrownErro) {
//                 console.log(error);
//                 console.log(xhr.status);
//                 console.log(xhr.responseText);
//             },

//         });
//     }
// }



function getItems(counts,val) {

    $.ajax({
        type: "POST",
        url: "http://" + window.location.hostname + "/HJM/Inventory/getItems",
        data: {Count:counts,path:val} ,
        success: function(data) {
            if(val=="po")
                $('#Item' + x).html(data);
            else
            if(val=="quote")
                $('#QuoteItem' + xquote).html(data);
            $('.ui.dropdown').dropdown();
        },
        error: function(xhr, status, error, ajaxOptions, thrownErro) {
            console.log(error);
            console.log(xhr.status);

            console.log(xhr.responseText);
        },

    });
}
$(document).ready(function() {
    $(".supplierselect").on('change',  function(event) {
        $("#email"+$('option:selected', this).data('path')).val($('option:selected', this).data('email'));
        $("#address"+$('option:selected', this).data('path')).val($('option:selected', this).data('fulladdress'));
        console.log($(this).attr("data-path"));
    });



    $(document).delegate(".itemselect","change",function(e){
        if($('option:selected', this).data('id')!=""){
            if($('option:selected', this).data('path')=="po"){
                $("#ItemDesc"+$('option:selected', this).data('id')).text($('option:selected', this).data('description'));
                $("#QTY"+x).val($('option:selected', this).data('qty'));
                document.getElementById('AddRow').disabled = false;
                document.getElementById('QTY' + x).disabled = false;
                document.getElementById('Amount' + x).disabled = false;
                document.getElementById('Amount' + x).value = 0;
                document.getElementById('SubTotal' + x).disabled = false;
                document.getElementById('SubTotal' + x).va
                document.getElementById('AddRow').disabled = false;
                console.log($('option:selected', this).data('qty'));
            }
            else
            if($('option:selected', this).data('path')=="quote"){
                $("#QuoteItemDesc"+$('option:selected', this).data('id')).text($('option:selected', this).data('description'));
                $("#QuoteAddRow").removeAttr('disabled');
                document.getElementById('QuoteQTY' + xquote).disabled = false;

            }
        }
    });
    document.getElementById('QuoteQTY' + xquote).disabled = true;
    $("#QuoteAddRow").attr('disabled', 'disabled');
    $("#QuoteAddRow").on("click",function(){
        if ($('#QuoteItem' + xquote).val() != '') {
            xquote++;
            
            $('#QuoteAdd').append('<tr id="QuoteRow' + xquote + '"><td>' + xquote + '</td><td ><select class="ui search dropdown itemselect" id="QuoteItem' + xquote + '"  name="quote[' + xquote + '][ItemID]"></select></td><td id="QuoteItemDesc' + xquote + '"></td><td><input type="number" style="width: 100px" id="QuoteQTY' + xquote + '" name="quote[' + xquote + '][QTY]" value="0"></td><td><a href="javascript:void(0);" onClick="QuotedeleteRow(' + xquote + ')"><i class="trash icon" id="QuoteBin' + xquote + '"></i></a></td></tr>');
            $("#QuoteAddRow").attr('disabled', 'disabled');
            $('#QuoteBin' + (xquote - 1)).hide();
            getItems(xquote,$(this).data("path"));
            document.getElementById('QuoteQTY' + xquote).disabled = true;
        }
    
        
    });

});



function getItemDesc(val, y) {

    var i;

    for (i = rows; i >= 1; i--) {
        if (i == rows && i != 0) {
            value = true;

        }
        if ($('#Item' + y).val() == $('#Item' + (i - 1)).val()) {
            value = false;
            i = 0;
            break;
        }
    }




    $.ajax({
        type: "POST",
        url: "http://" + window.location.hostname + "/HJM/Inventory/getDetails",
        data: 'ItemID=' + val,
        dataType: 'json',
        cache: true,
        success: function(data) {
            if (value) {

                $("#ItemDesc" + y).html(data.ItemDesc);
                $("#QTY" + y).val(data.ReorderQTY);
                document.getElementById('AddRow').disabled = false;
                document.getElementById('QTY' + x).disabled = false;
                document.getElementById('Amount' + x).disabled = false;
                document.getElementById('Amount' + x).value = 0;
                document.getElementById('SubTotal' + x).disabled = false;
                document.getElementById('SubTotal' + x).value = 0;
                value = false;

            } else {
                $("#ItemDesc" + y).html(data.ItemDesc);
                $('#Item' + y).dropdown('restore defaults');
                document.getElementById('AddRow').disabled = true;
                document.getElementById('QTY' + x).disabled = true;
                document.getElementById('Amount' + x).disabled = true;
                document.getElementById('SubTotal' + x).disabled = true;
                value = false;
            }
        },
        error: function(xhr, status, error, ajaxOptions, thrownErro) {
            console.log(error);
            console.log(xhr.status);

            console.log(xhr.responseText);
        },

    });
}








function filterStatus($data) {


    $('#main-case').dataTable().fnFilter($data);
}
