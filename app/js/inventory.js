$( document ).ready(function() {
  
  $(".mode").click(function(){
    $('.ui.modal.itemmodal').modal('show');
  });
  $(".product").click(function(){
    $('.ui.modal.productmodal').modal('show');
  });
  $(".rqform").click(function(){
    $('.ui.modal.rqformmodal').modal('show');
  });
  $('.menu .item')
  .tab()
;
$('#same-as').change(function(){
    if (this.checked) {
        document.getElementById("ship-street").disabled = true;
    document.getElementById("ship-city").disabled = true;
    document.getElementById("ship-baranggay").disabled = true;
    }
  else{
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
 $('.right.menu.open').on("click",function(e){
    e.preventDefault();
    $('.ui.vertical.menu').toggle();
  });
    
  $('.ui.dropdown').dropdown({
     useLabels: false,
  });

$(".sidebar-button").click(function(){
    $('.sidebar')
  .sidebar('toggle')
;
  });
  var itemtable = $('#inventory-itemtable').DataTable( {
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
        'bSortable': false,
        'aTargets': [-1, -2, -3] /* 1st one, start by the right */
    }]
    } );
    itemtable.buttons().container().appendTo('#printitem');

    var producttable = $('#inventory-producttable').DataTable( {
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
        'bSortable': false,
        'aTargets': [-1, -2] /* 1st one, start by the right */
    }]
    } );
    producttable.buttons().container().appendTo('#printproduct');

  var dataTable = $('#inventory-producttable').dataTable();
    $("#search-product").keyup(function() {
        dataTable.fnFilter(this.value);
    });    

    var dataTables = $('#inventory-itemtable').dataTable();
    $("#search-item").keyup(function() {
        dataTables.fnFilter(this.value);
    });    

    $('.popup')
  .popup()
;
 //end
});