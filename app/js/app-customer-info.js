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

    $('.popup').popup();
    $('.ui.checkbox').checkbox();

});







function getCaseItems(val) {
 var dataString = { 
             CaseID : $("#CaseID").val(),
              ItemID : val
              
            };
            
  $.ajax({
  type: "POST",
  url:"http://"+window.location.hostname+"/HJM/Order/getCaseItems",
  data: dataString,
  success: function(data){
    alert(data);
    $("#dropdown").append(data.test);

    
  
  },error: function(xhr, status, error,ajaxOptions, thrownErro) {
              alert(error);
               alert(xhr.status);
                
                  alert(xhr.responseText);
            },

  });
}










