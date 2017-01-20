var x = 1;
var y = 0;
var rows = document.getElementById("Add").getElementsByTagName("tr").length;

$(document).ready(function() {
     datatables();
    $('.item.datatables').on('click',function(event) {
        datatables();
    });

    $(".mode").click(function() {
        $('.ui.modal.itemmodal').modal('show');
    });
    $(".product").click(function() {
        $('.ui.modal.productmodal').modal('show');
    });
    $(".rqform").click(function() {
        $('.ui.modal.rqformmodal').modal({ autofocus: false }).modal('show');
    });
    $('.menu .item')
        .tab();
    $('#same-as').change(function() {
        if (this.checked) {
            document.getElementById("ship-street").disabled = true;
            document.getElementById("ship-city").disabled = true;
            document.getElementById("ship-baranggay").disabled = true;
        } else {
            document.getElementById("ship-street").disabled = false;
            document.getElementById("ship-city").disabled = false;
            document.getElementById("ship-baranggay").disabled = false;
        }


    });
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

    $('.ui.dropdown').dropdown({
        useLabels: false,
    });

    $(".sidebar-button").click(function() {
        $('.sidebar')
            .sidebar('toggle');
    });


    function datatables(){
        var itemtable = $('#inventory-itemtable').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                extend: 'print',
                text: '<i class="blue right floated right aligned eight wide column print big icon"></i>',


            }, ],
            "scrollY": '40vh',
            "scrollCollapse": true,
            "paging": false,
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [-1, -2, -3] /* 1st one, start by the right */
            }]
        });
        itemtable.buttons().container().appendTo('#printitem');



        var producttable = $('#inventory-producttable').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                extend: 'print',
                text: '<i class="blue right floated right aligned eight wide column print big icon"></i>',


            }, ],
            "scrollY": '40vh',
            "scrollCollapse": true,
            "paging": false,
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [-1, -2] /* 1st one, start by the right */
            }]
        });
        producttable.buttons().container().appendTo('#printproduct');

        var reqtable = $('#inventory-requisitiontable').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                extend: 'print',
                text: '<i class="blue right floated right aligned eight wide column print big icon"></i>',


            }, ],
            "scrollY": '40vh',
            "scrollCollapse": true,
            "paging": false,
           'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [-1, -2] /* 1st one, start by the right */
            }]

        });
        reqtable.buttons().container().appendTo('#printreq');

        var dataTable = $('#inventory-producttable').dataTable();
        $("#search-product").keyup(function() {
            dataTable.fnFilter(this.value);
        });

        var dataTables = $('#inventory-itemtable').dataTable();
        $("#search-item").keyup(function() {
            dataTables.fnFilter(this.value);
        });

         var dataTables2 = $('#inventory-requisitiontable').dataTable();
        $("#search-request").keyup(function() {
            dataTables2.fnFilter(this.value);
        });
    }






    $('.popup')
        .popup();


    $('#AddRow').addClass('disabled');
    $('#Bin1').hide();
    $('#AddRow').click(function() {

        if ($('#Item' + x).val() != '') {

            x++;
            $('#Add').append("<tr id='Row" + x + "'><td>" + x + "</td><td><select class='ui search dropdown' id='Item" + x + "' name='rf[" + x + "][ItemID]' onchange='getItemDesc(this.value," + x + ");'></select></td><td id='ItemDesc" + x + "'></td><td><div class='ui input'><input type='number' id='QTY" + x + "' name='rf[" + x + "][QTY]'></div></td><td><a href='#' id='Bin" + x + "' onclick='deleteRow(" + x + ")'><i class='trash icon'></i></a></td></tr>");
            $('#AddRow').addClass('disabled');
            $('#Bin' + (x - 1)).hide();
            getItems();
            document.getElementById('QTY' + x).disabled = true;

        }
        if (x === 1) {
            $('#Bin1').hide();

        }
        // rows = document.getElementById("Add").getElementsByTagName("tr").length;

    });

    



    //end
});

function getItems() {

    $.ajax({
        type: "POST",
        url: "http://" + window.location.hostname + "/HJM/Inventory/getItems",
        data: "x=1",
        success: function(data) {
            $('#Item' + x).html(data);
            $('.ui.dropdown').dropdown();
        },
        error: function(xhr, status, error, ajaxOptions, thrownErro) {
            console.log(error);
            console.log(xhr.status);

            console.log(xhr.responseText);
        },

    });
}

function deleteRow(val) {

    console.log(x);
    x--;
    if ($('#Item' + x).val() != '')
        $('#AddRow').removeClass('disabled');

    document.getElementById("Row" + val).remove();
    if (x !== 1)
        $('#Bin' + x).show();
}

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
        dataType: "JSON",
        cache: false,
        success: function(data) {
            if (value) {

                $("#ItemDesc" + y).html(data.ItemDesc);
                if (y == x) {
                    $('#AddRow').removeClass('disabled');
                    document.getElementById('QTY'+x).disabled = false;
                }
                value = false;

            } else {
                $("#ItemDesc" + y).html('');
                $('#Item' + y).dropdown('restore defaults');
                $('#AddRow').addClass('disabled');

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
