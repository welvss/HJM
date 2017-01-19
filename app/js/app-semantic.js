
$( document ).ready(function() {
  
  $(".mode").click(function(){
    $('.ui.modal').modal({autofocus: false}).modal('show');
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

 var data = $('#customer-table').DataTable( {
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
   data.buttons().container().appendTo('#print');
  
    $("#search-customer").keyup(function() {
       $('#customer-table').dataTable().fnFilter(this.value);
    });    

    $('.popup')
  .popup()
;


var dataTable = $('#dashboardcase').DataTable({

  
});
  $("#dashboardOImodal").DataTable({});
  $("#dashboardODmodal").DataTable({});
  $("#dashboardPartialmodal").DataTable({});
  $('#dashboardinventory').DataTable({});

  $(".dashboardcasemodal").click(function(){
    $('.ui.case.modal').modal('show'); 
  });
  $(".dashboardinventorymodal").click(function(){
    $('.ui.inventory.modal').modal('show');
  });
  
  $(".dashboardODmodal").click(function(){
    $('.ui.OD.modal').modal('show');
  });

  $(".dashboardOImodal").click(function(){
    $('.ui.OI.modal').modal('show');
  });

  $(".dashboardPartialmodal").click(function(){
    $('.ui.Partial.modal').modal('show');
  });

});


function filterStatus(data){


 $('#dashboardcase').dataTable().fnFilter(data);
}
