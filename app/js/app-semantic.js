
$( document ).ready(function() {
  
  $(".mode").click(function(){
    $('.ui.modal').modal('show');
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
 $('#customer-table').DataTable( {
        "scrollY":        '40vh',
        "scrollCollapse": true,
        "paging":         false,
        'aoColumnDefs': [{
        'bSortable': false,
        'aTargets': [-1, -2, -3] /* 1st one, start by the right */
    }]
    } );

  var dataTable = $('#customer-table').dataTable();
    $("#search-customer").keyup(function() {
        dataTable.fnFilter(this.value);
    });    

    $('.popup')
  .popup()
;

});
