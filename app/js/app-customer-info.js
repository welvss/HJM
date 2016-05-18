$( document ).ready(function() {
 $(".mode").click(function(){
  	$('.edit-customer.modal')
  	.modal('setting', 'transition', 'vertical flip')
  	.modal('show');
  });

  $(".case-modal").click(function(){
  	
  });
   		 $('.case.modal')
 .modal('setting', 'transition', 'fade down')
 .modal('show')
 ;
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